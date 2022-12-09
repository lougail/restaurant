@extends('base')

@section('page_title', 'Mentions Légales')

@section('vite')
    @parent
    @vite(['resources/css/mentions_legales.css'])
@endsection

@section('content')
    <h1>Mentions Légales</h1>
    <img class="medium-size" src="{{ asset('img/random_img.jpg') }}" alt="random _img">    
@endsection