<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function desarrolladores(){
    	$desarrolladores = App\Desarrolladores::all();
   	  return view('developers', compact('desarrolladores'));
   }
 
   public function desarrolladorDetalles($id){
   	$desarrollador = App\Desarrolladores::findOrFail($id);
   	return view('desarrolladores.detalle', compact('desarrollador'));
   }

   public function crearDesarrollador(Request $request){

	   	 $request->validate([
	      'nombre' => 'required',
	      'apellido' => 'required',
	      'edad' => 'required',
	      'habilidades' => 'required'
	    ]);

   		$desarrolladorNuevo = new App\Desarrolladores;
   		$desarrolladorNuevo->nombre = $request->nombre;
   		$desarrolladorNuevo->apellido = $request->apellido;
   		$desarrolladorNuevo->edad = $request->edad;
   		$desarrolladorNuevo->habilidades = $request->habilidades;

   		$desarrolladorNuevo->save();
   		return back()->with('mensaje', 'Desarrollador agregado');
   }

   public function editarDesarrollador($id){
   	$desarrollador = App\Desarrolladores::findOrFail($id);
    return view('developers', compact('desarrollador'));
   }

    public function updateDesarrollador(Request $request, $id){

    //  $request->validate([
    //   'nombre' => 'required',
    //   'descripcion' => 'required'
    // ]);
     
    $desarrolladorUpdate = App\Desarrolladores::findOrFail($id);
    $desarrolladorUpdate->nombre = $request->nombre;
    $desarrolladorUpdate->apellido = $request->apellido;
    $desarrolladorUpdate->edad = $request->edad;
    $desarrolladorUpdate->habilidades = $request->habilidades;

    $desarrolladorUpdate->save();

    return back()->with('mensaje', 'Desarrollador actualizado');
   }

    public function eliminarDesarrollador($id){
    $notaEliminar = App\Desarrolladores::findOrFail($id);
    $notaEliminar->delete();

    return back()->with('mensaje', 'Desarrollador eliminado');

   }
      public function usuarios(){
      $usuarios = App\User::all();
      return view('users', compact('usuarios'));
   }

      public function usuarioDetalles($id){
    $usuario = App\User::findOrFail($id);
    return view('usuarios.detalleUsuario', compact('usuario'));
   }

       public function updateUsuario(Request $request, $id){

        
     $request->validate([
      'name' => 'required',
      'email' => 'required'
    ]);
    $usuarioUpdate = App\User::findOrFail($id);
    $usuarioUpdate->name = $request->name;
    $usuarioUpdate->email = $request->email;
    // $usuarioUpdate->password = $request->password;

    $usuarioUpdate->save();

    return back()->with('mensaje', 'Usuario actualizado');
   }

     public function eliminarUsuario($id){
    $usuarioEliminar = App\User::findOrFail($id);
    $usuarioEliminar->delete();

    return back()->with('mensaje', 'Usuario eliminado');

   }

}
