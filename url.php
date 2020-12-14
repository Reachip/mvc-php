<?php

class LocalURI
{
    public static function get_uri()
    {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        return parse_url($actual_link, PHP_URL_PATH);
    }
}
