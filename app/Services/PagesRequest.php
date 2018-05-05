<?php

namespace App\Services;


abstract class PagesRequest
{
    protected $url;

    public function __construct()
    {
        libxml_use_internal_errors(true);
    }

    /**
     * @param $url
     * @return string
     */
    public function request($url)
    {
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        $query = curl_exec($curl_handle);
        curl_close($curl_handle);

        return $query;
    }

    abstract function get();
}