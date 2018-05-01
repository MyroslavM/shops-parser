<?php

namespace App\Services\pages;

use App\Services\PagesRequest;
use DOMDocument;
use DOMXPath;

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

    public function getCountries()
    {
        $countriesList = [];

        $html = $this->get();
        $dom = new DOMDocument();
        $dom->loadHTML($html);
        $finder = new DOMXPath($dom);

        $nodes = $finder->query("//*[contains(@class, 'country-name')]");

        foreach ($nodes as $node) {
            if ($node->nodeValue)
                $countriesList[] = [
                    'title' => $node->nodeValue
                ];
        }
        return $countriesList;
    }
}