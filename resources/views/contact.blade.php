@extends('base')

@section('page_title', 'Contact')

@section('vite')
    @parent
    @vite(['resources/css/contact.css'])
@endsection

@section('content')
    <h1>Contact</h1>
    <img class="medium-size" src="{{ asset('img/random_img.jpg') }}" alt="random _img">    
@endsection