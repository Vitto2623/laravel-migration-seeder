<?php

namespace App\Http\Controllers;
use App\Train;


use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){
        $trains = Train::
        orderBy("orario_di_partenza", "asc")->get();
        return view('trains.index', [ "trains" => $trains]);
    }
}
