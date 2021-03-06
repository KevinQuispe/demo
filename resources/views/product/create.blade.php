@extends('layouts.master')
@section('title','Nuevo Producto')
@section('content')
<ol class="breadcrumb">
   <li><a href="{{url('dashboards')}}">Escritorio</a></li>
    <li><a href="{{url('product')}}">Productos</a></li>
     <li>Nuevo Producto</li>
 </ol>
<div class="row">
  <div class="col-md-6 col-md-offset-2">
    <!-- <div class="page-header">
     <h4>Agregar Nuevo producto</h4>
    </div> -->
  <div class="panel panel-warning">
    <div class="panel-heading">Nuevo Producto</div>
  <div class="panel-body">
    <div class="col-md-6 col-md-offset-2">

      {!!Form::open(['route'=>'product.store','method'=>'POST'])!!}
      <div class="form-group">
        {!!form::label('Nombre')!!}
  			{!!form::text('name',null, ['id'=>'name','class'=>'form-control', 'placeholder'=>'Ingrese nombre'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Precio')!!}
        {!!Form::text('price',null,['id'=>'price','class'=>'form-control', 'placeholder'=>'Ingrese precio'])!!}
      </div>
      <div class="form-group">
        {!!form::label('Marca')!!}
        {!!Form::select('marks_id',$marks,null,['id'=>'marks_id','class'=>'form-control'])!!}

      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    {!!Form::close()!!}
    </div>

  </div>
  </div>
     </div>
</div>
@endsection
