<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;

class AuthController extends Controller
{
    public function register(Request $request){
    	$request->validate([
    		'email'=>'required',
    		'name'=>'required',
    		'password'=>'required'
    	]);

    	$user=User::firstOrNew(['email'=>$request->email]);
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password=bcrypt($request->password);
    	$user->save();

    	$http = new Client;

    	// return response(['data'=> json_decode((string) $response->getBody(), true)]);
    }

    public function login(Request $request){
    	$request->validate([
    		'email'=>'required',
    		'password'=>'required'
    	]);

    	$user
    }
}
