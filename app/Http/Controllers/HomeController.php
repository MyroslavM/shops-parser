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
       //dd( $request->all());

        foreach ($request->url as $country)
        {
            app('searchResult')->setSearchQuery($request->search);
            app('searchResult')->setUrl($country);
            app('searchResult')->get();
            dd($country);

        }
    }


}
