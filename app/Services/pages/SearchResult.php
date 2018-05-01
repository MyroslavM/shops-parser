<?php


namespace App\Services\pages;


use App\Services\PagesRequest;

class SearchResult extends PagesRequest
{
    protected $uriPrefix= '/search/?q=';
    protected $url;
    protected $searchQuery;

    public function get(): string
    {
        dd($this->url.$this->uriPrefix.$this->searchQuery);
    }


    public function setUrl($url)
    {
        $this->url=$url;
    }

    public function setSearchQuery($searchQuery)
    {
        $this->searchQuery=$searchQuery;
    }
}