<?php

class Twig_Extensions_Extension_BB extends Twig_Extension
{
    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return array An array of filters
     */
    public function getFilters()
    {
        return array(
            'alink'     => new Twig_Filter_Function('twig_bb_admin_link_filter'),
            'link'      => new Twig_Filter_Function('twig_bb_client_link_filter'),
            'gravatar'  => new Twig_Filter_Function('twig_gravatar_filter'),
            'markdown'  => new Twig_Filter_Function('twig_markdown_filter', array('needs_environment' => true, 'is_safe' => array('html'))),
            'truncate'  => new Twig_Filter_Function('twig_truncate_filter', array('needs_environment' => true)),
            'timeago'   => new Twig_Filter_Function('twig_timeago_filter'),
            'daysleft'  => new Twig_Filter_Function('twig_daysleft_filter'),
            'size'      => new Twig_Filter_Function('twig_size_filter'),
            'ipcountryname' => new Twig_Filter_Function('twig_ipcountryname_filter'),
            'number' => new Twig_Filter_Function('twig_number_filter'),
            'period_title' => new Twig_Filter_Function('twig_period_title', array('needs_environment' => true, 'is_safe' => array('html'))),
            'autolink' => new Twig_Filter_Function('twig_autolink_filter'),
            'kses' => new Twig_Filter_Function('twig_kses_filter', array('needs_environment' => true, 'is_safe' => array('html'))),
            'bbmd' => new Twig_Filter_Function('twig_bbmd_filter', array('needs_environment' => true, 'is_safe' => array('html'))),
            'bb_date' => new Twig_Filter_Function('twig_bb_date'),
            'bb_datetime' => new Twig_Filter_Function('twig_bb_datetime'),

            'img_tag' => new Twig_Filter_Function('twig_img_tag', array('needs_environment' => false, 'is_safe' => array('html'))),
            'script_tag' => new Twig_Filter_Function('twig_script_tag', array('needs_environment' => false, 'is_safe' => array('html'))),
            'stylesheet_tag' => new Twig_Filter_Function('twig_stylesheet_tag', array('needs_environment' => false, 'is_safe' => array('html'))),

            'mod_asset_url' => new Twig_Filter_Function('twig_mod_asset_url'),
            'asset_url' => new Twig_Filter_Function('twig_asset_url', array('needs_environment' => true, 'is_safe' => array('html'))),

            'money' => new Twig_Filter_Function('twig_money', array('needs_environment' => true, 'is_safe' => array('html'))),
            'money_without_currency' => new Twig_Filter_Function('twig_money_without_currency', array('needs_environment' => true, 'is_safe' => array('html'))),
            'money_convert' => new Twig_Filter_Function('twig_money_convert', array('needs_environment' => true, 'is_safe' => array('html'))),
            'money_convert_without_currency' => new Twig_Filter_Function('money_convert_without_currency', array('needs_environment' => true, 'is_safe' => array('html'))),
        );
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'bb';
    }
}

function twig_period_title(Twig_Environment $env, $period)
{
    $globals = $env->getGlobals();
    $api_guest = $globals['guest'];
    return $api_guest->system_period_title(array('code'=>$period));
}

function twig_money_convert(Twig_Environment $env, $price, $currency = null)
{
    $globals = $env->getGlobals();
    $api_guest = $globals['guest'];
    if(is_null($currency)) {
        $c = $api_guest->cart_get_currency();
        $currency = $c['code'];
    }
    return $api_guest->currency_format(array("price" => $price, 'code'=>$currency, 'convert'=>true));
}

function money_convert_without_currency(Twig_Environment $env, $price, $currency = null, $without_currency = false)
{
    $globals = $env->getGlobals();
    $api_guest = $globals['guest'];
    if(is_null($currency)) {
        $c = $api_guest->cart_get_currency();
        $currency = $c['code'];
    }
    return $api_guest->currency_format(array("price" => $price, 'code'=>$currency, 'convert'=>true, 'without_currency'=>true));
}

function twig_money(Twig_Environment $env, $price, $currency = null)
{
    $globals = $env->getGlobals();
    $api_guest = $globals['guest'];
    return $api_guest->currency_format(array("price" => $price, 'code'=>$currency, 'convert'=>false));
}

function twig_money_without_currency(Twig_Environment $env, $price, $currency = null)
{
    $globals = $env->getGlobals();
    $api_guest = $globals['guest'];
    return $api_guest->currency_format(array("price" => $price, 'code'=>$currency, 'convert'=>false, 'without_currency'=>true));
}

function twig_mod_asset_url($asset, $mod)
{
    return BB_URL . 'bb-modules/mod_'.$mod.'/assets/'.$asset;
}

function twig_asset_url(Twig_Environment $env, $asset)
{
    $globals = $env->getGlobals();
    return BB_URL . 'bb-themes/'.$globals['current_theme'].'/assets/'.$asset;
}

function twig_img_tag($path, $alt = null)
{
    $alt = is_null($alt) ? pathinfo($path, PATHINFO_BASENAME) : $alt;
    return sprintf('<img src="%s" alt="%s" title="%s"/>', $path, $alt, $alt);
}

function twig_script_tag($path)
{
    return sprintf('<script type="text/javascript" src="%s?%s"></script>', $path, Box_Version::VERSION);
}

function twig_stylesheet_tag($path, $media = 'screen')
{
    return sprintf('<link rel="stylesheet" type="text/css" href="%s?v=%s" media="%s" />', $path, Box_Version::VERSION, $media);
}



function twig_bb_date($time, $format = null)
{
    $format = is_null($format) ? BB_LOCALE_DATE_FORMAT : $format;
    return strftime($format, strtotime($time));
}

function twig_bb_datetime($time, $format = null)
{
    $format = is_null($format) ? BB_LOCALE_DATE_FORMAT . BB_LOCALE_TIME_FORMAT : $format;
    return strftime($format, strtotime($time));
}

function twig_gravatar_filter($email)
{
    $protocol = BB_SSL ? 'https': 'http';
    return $protocol.'://gravatar.com/avatar/'.md5($email);
}

function twig_autolink_filter($text)
{
   $pattern  = '#\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))#';
   $callback = create_function('$matches', '
       $url       = array_shift($matches);
       $url_parts = parse_url($url);
       if(!isset($url_parts["scheme"])) {
          $url = "http://".$url;
       }
       return sprintf(\'<a target="_blank" href="%s">%s</a>\', $url, $url);
   ');
   return preg_replace_callback($pattern, $callback, $text);
}

function twig_bb_client_link_filter($link)
{
    return Box_Tools::url($link);
}

function twig_bb_admin_link_filter($link)
{
    return BB_URL . 'bb-admin.php/'. trim($link, '/');
}

function twig_number_filter($number, $decimals = 2, $dec_point = '.', $thousands_sep = '')
{
    return number_format($number, $decimals, $dec_point, $thousands_sep);
}

function twig_daysleft_filter($iso8601)
{
    $timediff = strtotime($iso8601) - time();
    return intval($timediff/86400);
}

function twig_timeago_filter($iso8601)
{
    $cur_tm = time(); $dif = $cur_tm-strtotime($iso8601);
    $pds = array(__('second'),__('minute'),__('hour'),__('day'),__('week'),__('month'),__('year'),__('decade'));
    $lngh = array(1,60,3600,86400,604800,2630880,31570560,315705600);
    for($v = sizeof($lngh)-1; ($v >= 0)&&(($no = $dif/$lngh[$v])<=1); $v--); if($v < 0) $v = 0; $_tm = $cur_tm-($dif%$lngh[$v]);

    $no = floor($no); if($no <> 1) $pds[$v] .='s'; $x=sprintf("%d %s ",$no,$pds[$v]);
    return $x;
}

function twig_ipcountryname_filter($value)
{
    require_once 'MaxMind/Geo.php';
    $gi = geoip_open(BB_PATH_LIBRARY . '/MaxMind/GeoIP.dat', GEOIP_STANDARD);
    return geoip_country_name_by_addr($gi, $value);
}

function twig_size_filter($value)
{
    $precision = 2;
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($value, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    $bytes /= pow(1024, $pow);

    return round($bytes, $precision) . ' ' . $units[$pow];
}

function twig_markdown_filter(Twig_Environment $env, $value)
{
    require_once 'Markdown.php';
    return Markdown($value);
}

function twig_truncate_filter(Twig_Environment $env, $value, $length = 30, $preserve = false, $separator = '...')
{
    if (strlen($value) > $length) {
        if ($preserve) {
            if (false !== ($breakpoint = strpos($value, ' ', $length))) {
                $length = $breakpoint;
            }
        }

        return substr($value, 0, $length) . $separator;
    }

    return $value;
}

function twig_kses_filter(Twig_Environment $env, $value)
{
    $allowedtags = array(
		'address' => array(),
		'a' => array(
			'class' => array (),
			'href' => array (),
			'id' => array (),
			'title' => array (),
			'rel' => array (),
			'rev' => array (),
			'name' => array (),
			'target' => array()),
		'abbr' => array(
			'class' => array (),
			'title' => array ()),
		'acronym' => array(
			'title' => array ()),
		'article' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array(),
		),
		'aside' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array(),
		),
		'b' => array(),
		'big' => array(),
		'blockquote' => array(
			'id' => array (),
			'cite' => array (),
			'class' => array(),
			'lang' => array(),
			'xml:lang' => array()),
		'br' => array (
			'class' => array ()),
		'button' => array(
			'disabled' => array (),
			'name' => array (),
			'type' => array (),
			'value' => array ()),
		'caption' => array(
			'align' => array (),
			'class' => array ()),
		'cite' => array (
			'class' => array(),
			'dir' => array(),
			'lang' => array(),
			'title' => array ()),
		'code' => array (
			'style' => array()),
		'col' => array(
			'align' => array (),
			'char' => array (),
			'charoff' => array (),
			'span' => array (),
			'dir' => array(),
			'style' => array (),
			'valign' => array (),
			'width' => array ()),
		'del' => array(
			'datetime' => array ()),
		'dd' => array(),
		'details' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'open' => array (),
			'style' => array (),
			'xml:lang' => array(),
		),
		'div' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array()),
		'dl' => array(),
		'dt' => array(),
		'em' => array(),
		'fieldset' => array(),
		'figure' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array(),
		),
		'figcaption' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array(),
		),
		'font' => array(
			'color' => array (),
			'face' => array (),
			'size' => array ()),
		'footer' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array(),
		),
		'h1' => array(
			'align' => array (),
			'class' => array (),
			'id'    => array (),
			'style' => array ()),
		'h2' => array (
			'align' => array (),
			'class' => array (),
			'id'    => array (),
			'style' => array ()),
		'h3' => array (
			'align' => array (),
			'class' => array (),
			'id'    => array (),
			'style' => array ()),
		'h4' => array (
			'align' => array (),
			'class' => array (),
			'id'    => array (),
			'style' => array ()),
		'h5' => array (
			'align' => array (),
			'class' => array (),
			'id'    => array (),
			'style' => array ()),
		'h6' => array (
			'align' => array (),
			'class' => array (),
			'id'    => array (),
			'style' => array ()),
		'header' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array(),
		),
		'hgroup' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array(),
		),
		'hr' => array (
			'align' => array (),
			'class' => array (),
			'noshade' => array (),
			'size' => array (),
			'width' => array ()),
		'i' => array(),
		'img' => array(
			'alt' => array (),
			'align' => array (),
			'border' => array (),
			'class' => array (),
			'height' => array (),
			'hspace' => array (),
			'longdesc' => array (),
			'vspace' => array (),
			'src' => array (),
			'style' => array (),
			'width' => array ()),
		'ins' => array(
			'datetime' => array (),
			'cite' => array ()),
		'kbd' => array(),
		'label' => array(
			'for' => array ()),
		'legend' => array(
			'align' => array ()),
		'li' => array (
			'align' => array (),
			'class' => array ()),
		'menu' => array (
			'class' => array (),
			'style' => array (),
			'type' => array ()),
		'nav' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array(),
		),
		'p' => array(
			'class' => array (),
			'align' => array (),
			'dir' => array(),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array()),
		'pre' => array(
			'style' => array(),
			'width' => array ()),
		'q' => array(
			'cite' => array ()),
		's' => array(),
		'span' => array (
			'class' => array (),
			'dir' => array (),
			'align' => array (),
			'lang' => array (),
			'style' => array (),
			'title' => array (),
			'xml:lang' => array()),
		'section' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array(),
		),
		'strike' => array(),
		'strong' => array(),
		'sub' => array(),
		'summary' => array(
			'align' => array (),
			'class' => array (),
			'dir' => array (),
			'lang' => array(),
			'style' => array (),
			'xml:lang' => array(),
		),
		'sup' => array(),
		'table' => array(
			'align' => array (),
			'bgcolor' => array (),
			'border' => array (),
			'cellpadding' => array (),
			'cellspacing' => array (),
			'class' => array (),
			'dir' => array(),
			'id' => array(),
			'rules' => array (),
			'style' => array (),
			'summary' => array (),
			'width' => array ()),
		'tbody' => array(
			'align' => array (),
			'char' => array (),
			'charoff' => array (),
			'valign' => array ()),
		'td' => array(
			'abbr' => array (),
			'align' => array (),
			'axis' => array (),
			'bgcolor' => array (),
			'char' => array (),
			'charoff' => array (),
			'class' => array (),
			'colspan' => array (),
			'dir' => array(),
			'headers' => array (),
			'height' => array (),
			'nowrap' => array (),
			'rowspan' => array (),
			'scope' => array (),
			'style' => array (),
			'valign' => array (),
			'width' => array ()),
		'textarea' => array(
			'cols' => array (),
			'rows' => array (),
			'disabled' => array (),
			'name' => array (),
			'readonly' => array ()),
		'tfoot' => array(
			'align' => array (),
			'char' => array (),
			'class' => array (),
			'charoff' => array (),
			'valign' => array ()),
		'th' => array(
			'abbr' => array (),
			'align' => array (),
			'axis' => array (),
			'bgcolor' => array (),
			'char' => array (),
			'charoff' => array (),
			'class' => array (),
			'colspan' => array (),
			'headers' => array (),
			'height' => array (),
			'nowrap' => array (),
			'rowspan' => array (),
			'scope' => array (),
			'valign' => array (),
			'width' => array ()),
		'thead' => array(
			'align' => array (),
			'char' => array (),
			'charoff' => array (),
			'class' => array (),
			'valign' => array ()),
		'title' => array(),
		'tr' => array(
			'align' => array (),
			'bgcolor' => array (),
			'char' => array (),
			'charoff' => array (),
			'class' => array (),
			'style' => array (),
			'valign' => array ()),
		'tt' => array(),
		'u' => array(),
		'ul' => array (
			'class' => array (),
			'style' => array (),
			'type' => array ()),
		'ol' => array (
			'class' => array (),
			'start' => array (),
			'style' => array (),
			'type' => array ()),
		'var' => array ());

    require_once 'kses.php';
    $kses = new kses5();
    foreach($allowedtags as $tag=>$attribs) {
        $kses->AddHTML($tag, $attribs);
    }
    return $kses->Parse($value);
}

/**
 * BoxBilling markdown
 */
function twig_bbmd_filter(Twig_Environment $env, $value)
{
    $value = twig_markdown_filter($env, $value);
    $value = twig_kses_filter($env, $value);
    return $value;
}