<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
	protected $redirectTo = 'admin/home';
	use AuthenticatesUsers;
    //
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }    
    public function showLoginForm()
    {
    	return view('admin.login');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }   
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
 
        return redirect()->route("login.show");
    }    
}
