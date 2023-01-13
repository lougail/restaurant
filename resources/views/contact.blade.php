@extends('base')

@section('page_title', 'Contact')

@section('vite')

    @parent
    @vite(['resources/css/contact.css'])
    
@endsection

@section('content')

    <h1>Contact</h1>

    {{ $adresse->cle }} = {{ $adresse->valeur }} <br>
    {{ $adresse->cle }} = {{ $adresse->valeur }} <br>
    {{ $adresse->cle }} = {{ $adresse->valeur }} <br>
    {{ $adresse->cle }} = {{ $adresse->valeur }} <br>

@endsection