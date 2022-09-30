<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function sortString() {
        $string = "eA2a1E";
        // copying the numbers inside $string to another string using regex (found searching on google)
        $outputString = preg_replace('/[^0-9]/', '', $string);
        // copying the letters inside $string to another string using regex (found searching on google)
        $string = preg_replace("/[^a-zA-Z]+/", "", $string);
        return $string;
    }
}
