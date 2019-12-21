@extends('master')

@section('seccion')


<div class="container my-4">
    <h1 class="display-4">Desarrolladores</h1>

       @if(session('mensaje'))
    <div class="alert alert-success">
      {{ session('mensaje') }}
    </div>
    @endif

        @foreach ($errors->get('nombre') as $error)
                <div class="alert alert-danger">
                  El nombre es requerido
                </div>
      @endforeach

      @foreach ($errors->get('habilidades') as $error)
                <div class="alert alert-danger">
                  La descripcion es requerida
                </div>
      @endforeach

    <button class="btn btn-primary float-right my-3" data-toggle="modal" data-target="#exampleModal">Agregar</button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Edad</th>
          <th scope="col">Habilidades</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($desarrolladores as $item)
        <tr>
          <th>{{$item->id}}</th>
          <th>{{$item->nombre}}</th>
          <th>{{$item->apellido}}</th>
          <th>{{$item->edad}}</th>
          <th>{{$item->habilidades}}</th>
          <th>
            <a href="{{route('desarrolladores.detalle', $item)}}" class="btn btn-success btn-sm">Detalles</a>
             <form action="{{ route('desarrolladores.eliminar', $item) }}" method="POST" class="d-inline">
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar desarrollador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('desarrolladores.crear') }}" class="w-25" method="POST">
      @csrf
      
 

<div class="container" style="width: 300px;">
      <label class="">Nombre</label>
      <input type="text" name="nombre" class="form-control mb-2  w-100" placeholder="Nombre" value="">
      <label class="">Apellido</label>
      <input type="text" name="apellido" class="form-control mb-2 w-100" placeholder="Apellido" value="">
      <label class="">Edad</label>
      <input type="text" name="edad" class="form-control mb-2 w-100" placeholder="Edad" value="">
      <label class="">Habilidades</label>
      <input type="text" name="habilidades" class="form-control mb-2 w-100" placeholder="Habilidades" value="">    
      </div>
</div>

      <button class="btn btn-primary btn-block" type="submit">Agregar</button>

    </form>
      </div>

    </div>
  </div>
</div>

{{-- MODAL ACTUALIZAR --}}

{{-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar desarrollador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('desarrolladores.actualizar', $desarrollador->id) }}" class="w-25" method="POST">
          @method('PUT')
      @csrf
      
 
<div class="container" style="width: 300px;">
      <label class="">Nombre</label>
      <input type="text" name="nombre" class="form-control mb-2  w-100" placeholder="Nombre" value="{{ old('nombre') }}">
      <label class="">Apellido</label>
      <input type="text" name="apellido" class="form-control mb-2 w-100" placeholder="Apellido" value="">
      <label class="">Edad</label>
      <input type="text" name="edad" class="form-control mb-2 w-100" placeholder="Edad" value="">
      <label class="">Habilidades</label>
      <input type="text" name="habilidades" class="form-control mb-2 w-100" placeholder="Habilidades" value="">    
      </div>
</div>

      <button  class="btn btn-warning btn-block" type="submit"> Actualizar</button>

    </form>
      </div>

    </div>
  </div>
</div> --}}