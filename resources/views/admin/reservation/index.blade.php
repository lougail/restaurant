@extends('base')

@section('page_title', 'Admin - Reservation')

@section('content')

    <h1>Admin - Reservation</h1>

    <div>
        <a href="{{ route('admin.reservation.create') }}">Ajouter</a>
    </div>

    <table>

        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Jour</th>
            <th>Heure</th>
            <th>Couverts</th>
            <th>Tél</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        @foreach ($reservations as $reservation)

        <tr>

            <td>{{$reservation->nom}}</td>
            <td>{{$reservation->prenom}}</td>
            <td>{{$reservation->jour}}</td>
            <td>{{$reservation->heure}}</td>
            <td>{{$reservation->nombre_personnes}}</td>
            <td>{{$reservation->tel}}</td>
            <td>{{$reservation->email}}</td>
            <td>
                <a href="{{ route('admin.reservation.edit', ['id' => $reservation->id]) }}">Modifier</a>
            <form action="{{ route('admin.reservation.delete', ['id' => $reservation->id]) }} method='POST' onsubmit="return window.confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
                <a href="{{ route('admin.reservation.delete', ['id' => $reservation->id]) }}" onclick="event.preventDefault(); this.closest(form).submit(); }">Supprimer</a>
            </form>
            </td>

        </tr>

        @endforeach

    </table>

@endsection
