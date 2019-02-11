<?php

namespace App;

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
}
