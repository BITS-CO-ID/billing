<?php

/* mod_system_settings.phtml */
class __TwigTemplate_f6af5983a1a31ee3dd549f9bc3fbcc79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("System settings");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("/"), "html", null, true);
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_bb_admin_link_filter("system"), "html", null, true);
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo gettext("System settings");
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
";
        // line 16
        $context["new_params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_system")), "method");
        // line 17
        $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_get_params");
        // line 18
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 22
        echo gettext("Company details");
        echo "</a></li>
        <li><a href=\"#tab-ftp\">";
        // line 23
        echo gettext("FTP layer");
        echo "</a></li>
        <li><a href=\"#tab-countries\">";
        // line 24
        echo gettext("Countries");
        echo "</a></li>
        <li><a href=\"#tab-cache\">";
        // line 25
        echo gettext("Cache");
        echo "</a></li>
    </ul>
    
    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div id=\"tab-index\" class=\"tab_content nopadding\">

            <form method=\"post\" action=\"admin/system/update_params\" class=\"mainForm api-form\" data-api-msg=\"Company updated\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 35
        echo gettext("Name");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"company_name\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_name"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 43
        echo gettext("Email");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"company_email\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_email"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 51
        echo gettext("Phone");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"company_tel\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_tel"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 59
        echo gettext("Address");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"company_address_1\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_address_1"), "html", null, true);
        echo "\" placeholder=\"Address line 1\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem noborder\">
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"company_address_2\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_address_2"), "html", null, true);
        echo "\" placeholder=\"Address line 2\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem noborder\">
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"company_address_3\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_address_3"), "html", null, true);
        echo "\" placeholder=\"Address line 3\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label class=\"topLabel\">";
        // line 81
        echo gettext("Logo URL");
        echo "</label>
                        <div class=\"formBottom\">
                            <input type=\"text\" name=\"company_logo\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_logo"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                       <label class=\"topLabel\">";
        // line 89
        echo gettext("Company number, chamber of commerce number");
        echo "</label>
                        <div class=\"formBottom\">
                            <input type=\"text\" name=\"company_number\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_number"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label class=\"topLabel\">";
        // line 97
        echo gettext("VAT number");
        echo "</label>
                        <div class=\"formBottom\">
                            <input type=\"text\" name=\"company_vat_number\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_vat_number"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label class=\"topLabel\">";
        // line 105
        echo gettext("Bank Account number");
        echo "</label>
                        <div class=\"formBottom\">
                            <input type=\"text\" name=\"company_account_number\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_account_number"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label class=\"topLabel\">";
        // line 113
        echo gettext("Signature");
        echo "</label>
                        <div class=\"formBottom\">
                            <textarea name=\"company_signature\" rows=\"5\" cols=\"5\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_signature"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                <input type=\"submit\" value=\"";
        // line 120
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>

            <form method=\"post\" action=\"admin/system/update_params\" class=\"mainForm api-form\" data-api-msg=\"Company updated\">
                <fieldset>
                    <legend>";
        // line 126
        echo gettext("Company terms of service, legal regulation");
        echo "</legend>
                    <textarea name=\"company_tos\" rows=\"5\" cols=\"5\" class=\"bb-textarea\">";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_tos"), "html", null, true);
        echo "</textarea>
                </fieldset>

                <fieldset>
                    <legend>";
        // line 131
        echo gettext("Company privacy policy");
        echo "</legend>
                    <textarea name=\"company_privacy_policy\" rows=\"5\" cols=\"5\" class=\"bb-textarea\">";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_privacy_policy"), "html", null, true);
        echo "</textarea>
                </fieldset>

                <fieldset>
                    <legend>";
        // line 136
        echo gettext("Notes");
        echo "</legend>
                    <textarea name=\"company_note\" rows=\"5\" cols=\"5\" class=\"bb-textarea\">";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "company_note"), "html", null, true);
        echo "</textarea>
                </fieldset>

                <fieldset>
                    <input type=\"submit\" value=\"";
        // line 141
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
            
        </div>
        
        <div id=\"tab-countries\" class=\"tab_content nopadding\">
            <form method=\"post\" action=\"admin/extension/config_save\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 148
        echo gettext("Countries updated");
        echo "\">
                <fieldset>
";
        // line 150
        $context["default_countries"] = ('' === $tmp = "US=United States
AF=Afghanistan
AL=Albania
DZ=Algeria
AS=American Samoa
AD=Andorra
AO=Angola
AI=Anguilla
AQ=Antarctica
AG=Antigua And Barbuda
AR=Argentina
AM=Armenia
AW=Aruba
AU=Australia
AT=Austria
AZ=Azerbaijan
BS=Bahamas
BH=Bahrain
BD=Bangladesh
BB=Barbados
BY=Belarus
BE=Belgium
BZ=Belize
BJ=Benin
BM=Bermuda
BT=Bhutan
BO=Bolivia
BA=Bosnia And Herzegowina
BW=Botswana
BR=Brazil
BN=Brunei Darussalam
BG=Bulgaria
BF=Burkina Faso
BI=Burundi
KH=Cambodia
CM=Cameroon
CA=Canada
CV=Cape Verde
KY=Cayman Islands
CF=Central African Republic
TD=Chad
CL=Chile
CN=China
CX=Christmas Island
CC=Cocos (Keeling) Islands
CO=Colombia
KM=Comoros
CG=Congo
CK=Cook Islands
CR=Costa Rica
CI=Cote D'Ivoire
HR=Croatia
CU=Cuba
CY=Cyprus
CZ=Czech Republic
DK=Denmark
DJ=Djibouti
DM=Dominica
DO=Dominican Republic
TP=East Timor
EC=Ecuador
EG=Egypt
SV=El Salvador
GQ=Equatorial Guinea
ER=Eritrea
EE=Estonia
ET=Ethiopia
FO=Faroe Islands
FJ=Fiji
FI=Finland
FR=France
GA=Gabon
GB=Great Britain
GM=Gambia
GE=Georgia
DE=Germany
GH=Ghana
GI=Gibraltar
GR=Greece
GL=Greenland
GD=Grenada
GP=Guadeloupe
GU=Guam
GT=Guatemala
GN=Guinea
GW=Guinea-Bissau
GY=Guyana
HT=Haiti
EL=Hellenic Republic (Greece)
HN=Honduras
HK=Hong Kong
HU=Hungary
IS=Iceland
IN=India
ID=Indonesia
IR=Iran
IQ=Iraq
IE=Ireland
IL=Israel
IT=Italy
JM=Jamaica
JP=Japan
JO=Jordan
KZ=Kazakhstan
KE=Kenya
KI=Kiribati
KR=Korea, Republic Of
KW=Kuwait
KG=Kyrgyzstan
LV=Latvia
LB=Lebanon
LS=Lesotho
LR=Liberia
LY=Libyan Arab Jamahiriya
LI=Liechtenstein
LT=Lithuania
LU=Luxembourg
MO=Macau
MG=Madagascar
MW=Malawi
MY=Malaysia
MV=Maldives
ML=Mali
MT=Malta
MH=Marshall Islands
MQ=Martinique
MR=Mauritania
MU=Mauritius
YT=Mayotte
MX=Mexico
MD=Moldova, Republic Of
MC=Monaco
MN=Mongolia
MS=Montserrat
MA=Morocco
MZ=Mozambique
MM=Myanmar
NA=Namibia
NR=Nauru
NP=Nepal
NL=Netherlands
AN=Netherlands Antilles
NC=New Caledonia
NZ=New Zealand
NI=Nicaragua
NE=Niger
NG=Nigeria
NU=Niue
NF=Norfolk Island
MP=Northern Mariana Islands
NO=Norway
OM=Oman
PK=Pakistan
PW=Palau
PA=Panama
PG=Papua New Guinea
PY=Paraguay
PE=Peru
PH=Philippines
PN=Pitcairn
PL=Poland
PT=Portugal
PR=Puerto Rico
QA=Qatar
RE=Reunion
RO=Romania
RU=Russian Federation
RW=Rwanda
KN=Saint Kitts And Nevis
LC=Saint Lucia
WS=Samoa
SM=San Marino
ST=Sao Tome And Principe
SA=Saudi Arabia
SN=Senegal
SC=Seychelles
SL=Sierra Leone
SG=Singapore
SK=Slovakia
SI=Slovenia
SB=Solomon Islands
SO=Somalia
ZA=South Africa
ES=Spain
LK=Sri Lanka
SH=St. Helena
PM=St. Pierre And Miquelon
SD=Sudan
SR=Suriname
SZ=Swaziland
SE=Sweden
CH=Switzerland
SY=Syrian Arab Republic
TW=Taiwan
TJ=Tajikistan
TZ=Tanzania
TH=Thailand
TG=Togo
TK=Tokelau
TO=Tonga
TT=Trinidad And Tobago
TN=Tunisia
TR=Turkey
TM=Turkmenistan
TV=Tuvalu
UG=Uganda
UA=Ukraine
AE=United Arab Emirates
UY=Uruguay
UZ=Uzbekistan
VU=Vanuatu
VE=Venezuela
VN=Viet Nam
VG=Virgin Islands (British)
VI=Virgin Islands (U.S.)
EH=Western Sahara
YE=Yemen
ZM=Zambia
ZW=Zimbabwe
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 371
        echo "                    <div class=\"rowElem noborder\">
                        <label class=\"topLabel\">";
        // line 372
        echo gettext("List of countries");
        echo "</label>
                        <div class=\"formBottom\">
                            <textarea name=\"countries\" cols=\"5\" rows=\"50\" placeholder=\"US=United States\">";
        // line 374
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["new_params"]) ? $context["new_params"] : null), "countries", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["new_params"]) ? $context["new_params"] : null), "countries"), (isset($context["default_countries"]) ? $context["default_countries"] : null))) : ((isset($context["default_countries"]) ? $context["default_countries"] : null))), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 379
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"ext\" value=\"mod_system\" />
                </fieldset>
            </form>
        </div>

        <div id=\"tab-cache\" class=\"tab_content nopadding\">

            <a href=\"admin/system/clear_cache\" class=\"api-link\" data-api-msg=\"";
        // line 387
        echo gettext("Cache folder cleared");
        echo "\">";
        echo gettext("Invalidate cache");
        echo "</a>

        </div>

        <div id=\"tab-ftp\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 393
        echo gettext("FTP layer for BoxBilling");
        echo "</h3>
                <p>";
        // line 394
        echo gettext("FTP is used to manage BoxBilling modules and updates.");
        echo "</p>
            </div>

            <form method=\"post\" action=\"admin/system/update_params\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 397
        echo gettext("FTP settings updated");
        echo "\">
                <fieldset>
                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 400
        echo gettext("<strong>FTP Hostname</strong> - can be a numerical URL 127.0.0.1 is the default address for a locally hosted server, it might be this, it might be the full URL as my example above with the File Transfer Protocol (FTP) prefix, it might be the http:// protocol it might be SFTP (secure FTP) even secure http (https). Your host will be able to advise you on the correct format.");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"ftp_host\" value=\"";
        // line 402
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ftp_host", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ftp_host"), "localhost")) : ("localhost")), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 408
        echo gettext("<strong>FTP port</strong> - is nearly always 21 unless the host has changed this they will have notified you of this. Secure FTP generally uses port 22.");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"ftp_port\" value=\"";
        // line 410
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ftp_port", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ftp_port"), 21)) : (21)), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 416
        echo gettext("<strong>FTP user</strong> - In most cases, this is the specific user name your host has set up for you to access your Web site via FTP- It is the name you use in your FTP client. This could be an alphanumeric, it could be your name, even your e-mail address, If you don't know this speak to your host. You may have the facility on your Web account to set up additional FTP users if that is the case (and it's more secure) you are recommended to do this");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"ftp_user\" value=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ftp_user"), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 424
        echo gettext("<strong>FTP password</strong> - this is the password you enter in your FTP client.");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"password\" name=\"ftp_password\" value=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ftp_password"), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 432
        echo gettext("<strong>FTP root</strong> - This is generally the directory in which BoxBilling is installed. This setting is very important to be setup correctly as it very specifically depends on the Host server settings. In can be just / BUT it might be htdocs/boxbilling, public_html/, /public_html/boxbilling or other. It is a variable that BoxBilling has absolutely no control over. You will need to clarify this with your host.");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"ftp_root\" value=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "ftp_root"), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <input type=\"submit\" value=\"";
        // line 439
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
</div>

";
    }

    // line 449
    public function block_head($context, array $blocks = array())
    {
        echo $context["mf"]->getbb_editor(".bb-textarea");
    }

    public function getTemplateName()
    {
        return "mod_system_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 449,  649 => 439,  641 => 434,  636 => 432,  627 => 426,  622 => 424,  613 => 418,  608 => 416,  599 => 410,  594 => 408,  585 => 402,  580 => 400,  574 => 397,  568 => 394,  564 => 393,  553 => 387,  542 => 379,  534 => 374,  529 => 372,  526 => 371,  305 => 150,  300 => 148,  290 => 141,  283 => 137,  279 => 136,  272 => 132,  268 => 131,  261 => 127,  257 => 126,  248 => 120,  240 => 115,  235 => 113,  226 => 107,  221 => 105,  212 => 99,  207 => 97,  198 => 91,  193 => 89,  184 => 83,  179 => 81,  170 => 75,  160 => 68,  150 => 61,  145 => 59,  136 => 53,  131 => 51,  122 => 45,  117 => 43,  108 => 37,  103 => 35,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  72 => 18,  70 => 17,  68 => 16,  65 => 15,  62 => 14,  55 => 10,  49 => 9,  43 => 8,  40 => 7,  37 => 6,  31 => 3,  26 => 4,  24 => 2,);
    }
}
