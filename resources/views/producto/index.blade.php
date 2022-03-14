@extends('layout')

@section('content')

    <div class="container col-12 col-sm-6 col-xl-4 border p-4">
        <h2 class="d-flex justify-content-center">Crear Producto</h2>
        <form action="">
            <div class="mb-3 form-check">
                <label for="nombre" class="form-label">Nombre del Producto</label>
                <input id="nombre" class="form-control form-control-lg" type="text">
            </div>
            <div class="mb-3 form-check">
                <label for="precio" class="form-label">Precio</label>
                <input id="precio" class="form-control" type="number" step="0.01" min="0">
            </div>
            <div class="mb-3 form-check">
                <label class="form-check-label" for="exampleCheck1">Tipo</label>
                <select id="tipo" class="form-select" multiple>
                    <option selected>Seleccionar...</option>
                    <option value="1">Bebida</option>
                    <option value="2">Postre</option>
                    <option value="3">Comida Completa</option>
                    <option value="4">Snack</option>
                  </select>
            </div>
            <div class="mb-3 form-check center">
                <label class="form-check-label" for="vegetariano">Vegetariano</label>
                <input class="form-check-input" type="checkbox" value="" id="vegetariano" checked>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection