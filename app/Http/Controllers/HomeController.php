<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $questionnaires = auth()->user()->questionnaires;

        return view('home', compact('questionnaire'));
    }
}
