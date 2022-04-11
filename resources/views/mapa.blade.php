@extends('layouts.app')

@section('template_title')
    Página de Inicio
@endsection

@section('content')
    <h2>Mapa de CUCEI</h2>
    <div id="map" class="map"></div>
    <div id="popup" class="ol-popup">
     <a href="#" id="popup-closer" class="ol-popup-closer"></a>
     <div id="popup-content"></div>
    </div>
     <script src="{{ asset('js/mapa.js') }}"></script>
@endsection