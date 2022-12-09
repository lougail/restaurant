@extends('base')

@section('page_title', 'Accueil')

@section('vite')
    @parent
    @vite(['resources/css/accueil.css'])
@endsection

@section('content')
    <h1>Restaurant Foo</h1>
    <img class="medium-size" src="{{ asset('img/random_img.jpg') }}" alt="random _img">    
@endsection