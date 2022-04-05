@extends('layouts.app')

@section('template_title')
    Página de Inicio
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    Tiendas y Productos
                </div>
            </div>
        </div>
    </section>
@endsection