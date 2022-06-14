<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    public function index(){
        $travels = Travel::all();
        return view('travelslist', compact('travels'));
    }
    public function show($id){
        $travel = Travel::findOrFail($id);
        return view('detail', compact('travel'));
    }
}
