<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandController extends Controller
{
    public function rand(){
        $buy="1.".(string)rand(1,9).(string)rand(1,9).(string)rand(1,9);
        $sell="2.1".(string)rand(1,9).(string)rand(1,9);
        $three=substr($buy, -3);
        $two=substr($buy, -1).substr($sell,-1);

        $data["buy"]=$buy;
        $data["sell"]=$sell;
        $data["three"]=$three;
        $data["two"]=$two;

        return json_encode($data);
    }
}
