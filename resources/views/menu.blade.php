@extends('base')

@section('page_title', 'Menu')

@section('vite')
    @parent
    @vite(['resources/css/menu.css'])
@endsection

@section('content')
    <h1>Menu</h1>
    <img class="medium-size" src="{{ asset('img/random_img.jpg') }}" alt="random _img">    
@endsection