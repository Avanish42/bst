<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class Test_c extends Controller
{
    public function index()
    {
    	$test = Test::all();
    	
    	print_r($test);
    }

    public function store(Request $req)
    {
    	return $req;

    }
}
