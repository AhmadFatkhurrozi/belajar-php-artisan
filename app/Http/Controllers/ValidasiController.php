<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    public function input()
    {
    	return view('input');
    }

    public function proses(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required|min:4|max:20',
    		'pekerjaan' => 'required',
    		'usia' => 'required|numeric' 
    	]);

    	return view('proses',['data' => $request]);
    }
}
