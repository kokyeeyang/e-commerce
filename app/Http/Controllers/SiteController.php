<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SiteController extends Controller {
	public function signup(Request $request){
		$hello = "hello";
		return View::make("addNewProduct", compact('hello'));
	}

	public function saveProduct(Request $request){
		$wee = "weeeeeee";
		return $wee;
	}
}