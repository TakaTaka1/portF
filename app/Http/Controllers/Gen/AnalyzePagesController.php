<?php

namespace App\Http\Controllers\Gen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnalyzePagesController extends Controller
{
    //
    public function index(Request $request)
    {
    	// dd($request);
    	return view('admin.analyze_result');
    }
}
