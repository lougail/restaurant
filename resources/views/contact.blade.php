@extends('base')

@section('page_title', 'Contact')

@section('vite')

    @parent
    @vite(['resources/css/contact.css'])
    
@endsection

@section('content')

    <h1>Contact</h1>

    {{-- {{ $restaurants }} <br> --}}
    <p>{{$adresse}}</p> <br>
    <p>{{$tel}}</p> <br>
    <p>Le restaurant est ouvert de : {{$horaire}}.</p> <br>
    <div>{!!$carte!!}</div> <br>


@endsection