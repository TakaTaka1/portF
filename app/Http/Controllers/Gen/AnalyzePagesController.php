<?php

namespace App\Http\Controllers\Gen;

use Illuminate\Http\Request;
use App\Admin;
use App\Http\Controllers\Controller;

class AnalyzePagesController extends Controller
{
    //
    public function index(Request $request)
    {
    	if($request->has('_token')){
    		Admin::callCrawler('GET',$request->url);
    	}
    	return view('admin.analyze_result');
    }
}