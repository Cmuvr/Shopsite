<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  //подключение класса

class BaseController extends Controller
{
    public function getIndex ($id = null){
		return view('index')->with('id',$id);			
	}
}
