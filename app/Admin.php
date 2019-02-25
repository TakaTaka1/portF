<?php

namespace App;

use Igo;
use Goutte\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    // test comment
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
	}
	public static function callCrawler ($request, $url)
	{
		$client = new Client();
		$crawler = $client->request($request, $url);
		dd($crawler);
	}	
}
