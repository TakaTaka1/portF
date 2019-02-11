<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Admin;

class AdminPagesController extends Controller
{
    //
    public function index()
    {
    	return view('admin.home');
    }
}
