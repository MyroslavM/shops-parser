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
            dd(app("CurrencyService")->convertCurrency( 30, 'usd', 'euro' ));

            if($products)
                $countries[$tmp[0]] = $products;
            if($i > 10) break;
            $i++;
        }


        return view ("prodacts",['countries'=> $countries]);


    }


}
