@extends('master')

@section('seccion')

       @if(session('mensaje'))
    <div class="alert alert-success">
      {{ session('mensaje') }}
    </div>
    @endif

    <div class="container">
    		       <form action="{{ route('desarrolladores.actualizar', $desarrollador->id) }}" class="w-25" method="POST">
          @method('PUT')
      @csrf
      
 
<div class="container" style="width: 300px;">
      <label class="">Nombre</label>
      <input type="text" name="nombre" class="form-control mb-2  w-100" placeholder="Nombre" value="{{ $desarrollador->nombre }}">
      <label class="">Apellido</label>
      <input type="text" name="apellido" class="form-control mb-2 w-100" placeholder="Apellido" value="{{ $desarrollador->apellido }}">
      <label class="">Edad</label>
      <input type="text" name="edad" class="form-control mb-2 w-100" placeholder="Edad" value="{{ $desarrollador->edad }}">
      <label class="">Habilidades</label>
      <input type="text" name="habilidades" class="form-control mb-2 w-100" placeholder="Habilidades" value="{{ $desarrollador->habilidades }}">    
      </div>
</div>

      <button  class="btn btn-warning float-right" type="submit"> Actualizar</button>

    </form>

    </div>


@endsection