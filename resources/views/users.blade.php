@extends('master')
{{-- @extends('layouts.app') --}}
@section('seccion')


<div class="container my-4">
    <h1 class="display-4">Usuarios</h1>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Ingreso</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
   <tbody>
        @foreach($usuarios as $item)
        <tr>
          <th>{{$item->id}}</th>
          <th>{{$item->name}}</th>
          <th>{{$item->email}}</th>
          <th>{{$item->created_at}}</th>
          {{-- <th>{{$item->habilidades}}</th> --}}
          <th>
            <a href="{{route('usuarios.detalleUsuario', $item)}}" class="btn btn-success btn-sm">Detalles</a>
             <form action="{{ route('usuarios.eliminar', $item) }}" method="POST" class="d-inline">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
            </form>
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection