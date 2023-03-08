@extends('base')

@section('page_title', 'Réservation')

@section('vite')
    @parent
    @vite(['resources/css/reservation.css'])
@endsection

@section('content')
    <h1>Réservation</h1>
    <form>
        <div class="formulaire-reservation">

            <div>
                <label>Nom</label>
                <input type="text">
            </div>
            <div>
                <label>Prenom</label>
                <input type="text">
            </div>
        <div>
            <label>Jour</label>
            <input type="date">
        </div>
        <div>
            <label>Heure</label>
            <input type="time">
        </div>
        <div>
            <label>Nombre de Personnes</label>
            <input type="number">
        </div>
        <div>
            <label>Téléphone</label>
            <input type="tel">
        </div>
        <div>
            <label>Mail</label>
            <input type="email">
        </div>
        <div>
            <button type="submit">Réserver  </button>
        </div>
    </div>
    </form>
@endsection
