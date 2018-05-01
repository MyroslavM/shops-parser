<?php

namespace App\Services\pages;


use App\Services\PagesRequest;

class CountriesList extends PagesRequest
{
    /**
     * @var string
     */
    protected $url = 'https://www.adidas.co.uk/location-selector.html';

    /**
     * @return string
     */
    public function get(): string
    {
       return $this->request($this->url);
    }
}