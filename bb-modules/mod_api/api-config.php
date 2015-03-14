<?php

/**
 * This config applies to API:
 * - Restrict access to API by filtering IPs
 * - Limit request per timespan
 */
return array(
    // all requests made to API must have referer request header with the same url as BB_URL
    'require_referer_header'   =>  true,

    // empty array will allow all IPs to access API
    'allowed_ips'       =>  array(),

    // Time span for limit in seconds
    'rate_span'         =>  60 * 60,

    // How many requests allowed per time span
    'rate_limit'        =>  1000,
);