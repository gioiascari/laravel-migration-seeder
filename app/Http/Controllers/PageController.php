<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index(){
        $allTrain=train::all();
        return view('home', ['trains'=>$allTrain]);
    }
}
