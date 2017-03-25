@extends('layouts.master')
@section('title','Lista de Productos')
@section('content')
  <!-- Main component for a primary marketing message or call to action -->
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <div class="page-header">
        <h1>Productos <small>Actualizados hasta hoy</small></h1>
       </div>
        <div class="panel panel-warning">
          <div class="panel-heading">
             Lista de productos
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id="nuevo" name="nuevo" class="btn btn-info navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
             </p>
           </div>
          <div class="panel-body">
             <table class="table table-bordered">
               <thead>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Marca</th>
                  <th>Acción</th>
               </thead>
               <tbody>
                 @foreach ($products as $product)
                  <tr>
                     <td>{{$product->id}}</td>
                     <td>{{$product->product}}</td>
                     <td>{{$product->price}}</td>
                     <td>{{$product->mark}}</td>
                     <td><a href="#">[Editar]<a href="#">[eliminar]</a></a></td>
                  </tr>
                  @endforeach
               </tbody>
             </table>
          </div>
        </div>
     </div>
   </div>
   <script type="text/javascript">
   $(document).ready(function() {
     $("#nuevo").click(function(event)
      {
          document.location.href="{{route('product.create')}}";
     });
   });
   </script>

@endsection
