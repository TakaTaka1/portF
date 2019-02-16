<?php

namespace App;

use Igo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    //
    protected $fillable = ['role_type','name','email','password'];
    
	public function setAttribute($key, $value)
	{

	    if (! $key === $this->getRememberTokenName()) {
	        parent::setAttribute($key, $value);
	    }
	}
	public static function callIgo ()
	{
		$igo = new Igo(app_path('/ipadic'),'UTF-8');
    	//dd($igo->parse("前田"));
	} 
}
