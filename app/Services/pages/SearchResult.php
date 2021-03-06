<?php


namespace App\Services\pages;


use App\Services\PagesRequest;
use DOMDocument;
use DOMXPath;
use Illuminate\Support\Collection;

class SearchResult extends PagesRequest
{
    protected $uriPrefix = '/search?q=';
    protected $url;
    protected $searchQuery;

    public function get()
    {
        $products = new Collection();

        $html = $this->request($this->url . $this->uriPrefix . $this->searchQuery);
        if ($html == "") return false;
        $dom = new DOMDocument();
        $dom->loadHTML($html);
        $finder = new DOMXPath($dom);

        $nodes = $finder->query("//*[contains(@class, 'innercard')]");
        foreach ($nodes as $node) {
           $products->push($this->getProduct($dom, $node));
//            $products[] = $this->getProduct($dom, $node);
        }
        return $products->sortBy('priceValue');
    }

    protected function getProduct($dom, $node)
    {
        $dom->loadHTML($node->C14N());
        $finder = new DOMXPath($dom);

        return [
            'href' => $this->getProductLink($finder),
            'title' => $this->getProductTitle($finder),
            'priceValue' => $this->getProductPriceValue($finder),
            'priceSign' => $this->getProductPriceSign($finder),
            'img' => $this->getProductImg($finder),
        ];
    }

    protected function getProductTitle($finder)
    {
        $nodes = $finder->query("//*[contains(@class, 'product-link')]/*[contains(@class, 'title')]");
        return $nodes[0]->nodeValue;
    }

    protected function getProductPriceValue($finder)
    {


        $nodes = $finder->query("//*[contains(@class, 'product-info-price-rating')]/div/*[contains(@class, 'salesprice')]");
        $price = preg_replace("/\s+/", " ", $nodes[0]->nodeValue);
        $price = preg_replace('/\./', '', $price);
        return  (double)$price;
    }
    protected function getProductPriceSign($finder)
    {
        $nodes = $finder->query("//*[contains(@class, 'product-info-price-rating')]/div/*[contains(@class, 'currency-sign')]");
        $currency = preg_replace("/\s+/", " ", $nodes[0]->nodeValue);



        return $currency ;
    }

    protected function getProductLink($finder)
    {
        $nodes = $finder->query("//*[contains(@class, 'product-link')]");

        return $nodes[0]->getAttribute("href");
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function setSearchQuery($searchQuery)
    {
        $this->searchQuery = $searchQuery;
    }


    public function getProductImg($finder)
    {
        $nodes = $finder->query("//*[contains(@class, 'image')]/a/img");

        if($nodes[0])
            return $nodes[0]->getAttribute('data-original');
        return '#';
    }

}