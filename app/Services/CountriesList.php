<?php

namespace App\Services;


class CountriesList
{
    /**
     * @var string
     */
    protected $url = 'https://www.adidas.co.uk/location-selector.html';
//    protected $url = 'https://www.adidas.co.uk';
//    protected $url = 'https://www.google.com';

    /**
     * @return string
     */
    public function get(): string
    {
        //return file_get_contents($this->url, true);
//        $c = curl_init($this->url);
//        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
//
//        $html = curl_exec($c);
//
//        dd($html);
      //dd(file_get_html($this->url);)

        $curl_handle=curl_init();
        curl_setopt($curl_handle, CURLOPT_URL,$this->url);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        $query = curl_exec($curl_handle);
        curl_close($curl_handle);

        return $query;
    }
}