<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller {
	public function signup(Request $request){
		$hello = "hello";
		return View::make("signup", compact('hello'));
	}

	public function addProduct(Request $request){
		$wee = "weeeeeee";
		var_dump($wee);
		exit;
		return View::make("addNewProduct", compact('wee'));
	}
}