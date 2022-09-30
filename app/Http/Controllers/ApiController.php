<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function sortString() {
        $string = "eA2a1E";
        // copying the numbers inside $string to another string
        $outputString = preg_replace('/[^0-9]/', '', $string);
        return $outputString;
    }
}
