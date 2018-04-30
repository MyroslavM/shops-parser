<?php

namespace App\Services;


class CountriesList
{
    /**
     * @var string
     */
    protected $url = 'https://www.adidas.com/us/country-selector.html';

    /**
     * @return string
     */
    public function get(): string
    {
        return file_get_contents($this->url);
    }
}