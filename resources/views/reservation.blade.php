@extends('base')

@section('page_title', 'Réservation')

@section('vite')
    @parent
    @vite(['resources/css/reservation.css'])
@endsection

@section('content')
    <h1>Réservation</h1>
    <img class="medium-size" src="{{ asset('img/random_img.jpg') }}" alt="random _img">    
@endsection