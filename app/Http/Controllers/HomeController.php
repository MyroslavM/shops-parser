<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('search', [
            'countries' => collect(app('countriesList')->getCountries())
        ]);
    }
    public function search(Request $request)
    {
        $i = 0;
        $countries=[];
        foreach ($request->url as $country)
        {
            $tmp = explode('|', $country);
            app('searchResult')->setSearchQuery($request->search);
            app('searchResult')->setUrl($tmp[1]);
            $products= app('searchResult')->get();

            if($products)
                $countries[$tmp[0]] = $products;
            if($i > 3) break;
            $i++;
        }

        dd($countries);
    }


}
