<?php
/**
 * Created by PhpStorm.
 * User: Миросько
 * Date: 27.05.2018
 * Time: 18:16
 */

namespace App\Services;


class CurrencyService
{
    public function convertCurrency($amount, $from, $to)
    {
        // set API Endpoint, access key, required parameters
        $endpoint = 'convert';
        $access_key = 'de8249e168beaea7d4d92c2056fa58c0';

        $from = 'USD';
        $to = 'EUR';
        $amount = 10;

// initialize CURL:
        $ch = curl_init('http://apilayer.net/api/' . $endpoint . '?access_key=' . $access_key . '&from=' . $from . '&to=' . $to . '&amount=' . $amount . '');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// get the (still encoded) JSON data:
        $json = curl_exec($ch);
        curl_close($ch);

// Decode JSON response:
        $conversionResult = json_decode($json, true);

// access the conversion result

        dd($conversionResult);
        echo $conversionResult['result'];
    }

}