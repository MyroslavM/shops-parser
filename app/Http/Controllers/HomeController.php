<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('search', [
//            'countries' => collect(app('countriesList')->getCountries())
            'countries' => Country::all()
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
            if($i > 10) break;
            $i++;
        }


        return view ("prodacts",['countries'=> $countries]);


    }
    public function getStatistic(Request $request)
    {
        return response()->json(Country::all()) ;
    }
    public function viewStatistic(Request $request)
    {
        return view("statistic");
    }


}
