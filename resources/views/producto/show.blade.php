@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $producto->categoría }}
                        </div>
                        <div class="form-group">
                            <strong>Vegano:</strong>
                            {{ $producto->vegano }}
                        </div>
                        <div class="form-group">
                            <strong>Vegetariano:</strong>
                            {{ $producto->vegetariano }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tienda:</strong>
                            {{ $producto->id_tienda }}
                        </div>
                        <div class="form-group">
                            <strong>Deshabilitado:</strong>
                            {{ $producto->deshabilitado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
