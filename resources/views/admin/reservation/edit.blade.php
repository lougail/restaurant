@extends('base')

@section('page_title', 'Admin - Réservation - Modiification')

@section('content')

    <h1>Admin - Réservation - Modification</h1>

    @if (Session::has('confirmation'))
        <div>
            {{ Session::get('confirmation') }}
        </div>
    @endif

    @if ($errors->any())
        <div>
            Attention, les données n'ont pas été enregistrées il y a des erreurs dans le formulaire.
        </div>
    @endif

    <form action="{{ route('admin.reservation.update', ['id' => $reservation->id]) }}" method="post">
        
        @csrf

        <div>
            <label for="nom">Nom</label><br>
            <input class="@error('nom') form--input--error @enderror" type="text" name="nom" id="" value="{{ old('nom', $reservation->nom) }}"><br>
            @error('nom')
                <div class="form--error-">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="prenom">Prenom</label><br>
            <input class="@error('prenom') form--input--error @enderror" type="text" name="prenom" id="" value="{{ old('prenom', $reservation->prenom) }}"><br>
            @error('prenom')
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="jour">Jour</label><br>
            <input class="@error('jour') form--input--error @enderror" type="date" name="jour" id="" value="{{ old('jour', $reservation->jour) }}"><br>
            @error('jour')
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="heure">Heure</label><br>
            <input class="@error('heure') form--input--error @enderror" type="time" name="heure" id="" value="{{ old('heure', $reservation->heure) }}" step="900000"><br>
            @error('heure')
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="nombre_personnes">Nombre de personnes</label><br>
            <input class="@error('nombre_personnes') form--input--error @enderror" type="number" name="nombre_personnes" id="" value="{{ old('nombre_personnes', $reservation->nombre_personnes) }}"><br>
            @error('nombre_personnes')
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="tel">Télephone</label><br>
            <input class="@error('tel') form--input--error @enderror" type="tel" name="tel" id="" value="{{ old('tel', $reservation->tel) }}" placeholder="06 12 34 56 78"><br>
            @error('tel')
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="email">Email</label><br>
            <input class="@error('email') form--input--error @enderror" type="email" name="email" id="" value="{{ old('email', $reservation->email) }}"><br>
            @error('email')
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <input type="submit" value="Valider"><br><br>
        </div>

    </form>

@endsection