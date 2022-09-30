<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function sortString($string) {
        // copying the numbers inside $string to another string using regex (found searching on google)
        $int = preg_replace('/[^0-9]/', '', $string);
        // copying the letters inside $string to another string using regex (found searching on google)
        $string = preg_replace("/[^a-zA-Z]+/", "", $string);

        $int = str_split($int);
        // $string = str_split($string);
        $lower_case_string = strtolower($string);
        $lower_case_string = str_split($lower_case_string);
        sort($lower_case_string);
        for($i = 1; $i < count($lower_case_string); $i++) {
            if ($lower_case_string[$i]==$lower_case_string[$i-1]) {
                $lower_case_string[$i] = strtoupper($lower_case_string[$i]);
            }
        }
        $string = $lower_case_string;
        sort($int);
        $int_array_to_string = implode($int);
        $string = implode($lower_case_string);
        $final_result = $string . $int_array_to_string;
        return $final_result;
    }

    function stringToBinary($stringbinary) {
        $split = explode(".", $stringbinary);
        $integer = preg_replace('/[^0-9]/', '', $split); 
        // for ($i = 0; $i < count($stringbinary); i++) {
        //     if ($stringbinary[$i] == )
        // }
        return $integer;
    }



}
