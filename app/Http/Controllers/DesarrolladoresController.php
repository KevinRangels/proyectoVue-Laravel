<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class DesarrolladoresController extends Controller
{
    public function getAll(){
    	$desarrolladores = App\Desarrolladores::all();
    	return $desarrolladores;
    }

    public function add(Request $request){
    	$desarrollador = App\Desarrolladores::create($request->all());
    	return $desarrollador;
    }

    public function get($id){
    	$desarrollador = App\Desarrolladores::find($id);
    	return $desarrollador;
    }

    public function edit($id, Request $request){
    	$desarrollador = $this->get($id);
    	$desarrollador->fill($request->all())->save();
    	return $desarrollador;
    }

    public function delete($id){
    	$desarrollador = $this->get($id);
    	$desarrollador->delete();
    	return $desarrollador;

    }
}
