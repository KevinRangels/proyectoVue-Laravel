@extends('master')

@section('seccion')

       @if(session('mensaje'))
    <div class="alert alert-success">
      {{ session('mensaje') }}
    </div>
    @endif
      @foreach ($errors->get('name') as $error)
                <div class="alert alert-danger">
                  El nombre es requerido
                </div>
      @endforeach

      @foreach ($errors->get('email') as $error)
                <div class="alert alert-danger">
                  La correo electronico es requerido
                </div>
      @endforeach

    <div class="container">
    		       <form  class="w-25" action="{{ route('usuarios.actualizar', $usuario->id) }}" method="POST">
          @method('PUT')
      @csrf
      
 
<div class="container" style="width: 300px;">
      <label class="">Nombre</label>
      <input type="text" name="name" class="form-control mb-2  w-100" placeholder="Nombre" value="{{ $usuario->name }}">
      <label class="">Correo Electronico</label>
      <input type="text" name="email" class="form-control mb-2 w-100" placeholder="Correo Electronico" value="{{ $usuario->email }}">

{{--       <label class="">Contraseña</label>
      <input type="password" name="password" class="form-control mb-2 w-100" placeholder="Contraseña" value="">    
      </div> --}}
</div>

      <button  class="btn btn-warning float-right" type="submit"> Actualizar</button>

    </form>

    </div>


@endsection