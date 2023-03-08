@extends('base')

@section('page_title', 'Admin - Plat - Ajout')

@section('content')
    <h1>Admin - Plat - Création</h1>

    <form action="{{ route('admin.plat.store') }}" method="POST">
        @csrf
        <div>
            <input type="checkbox" name="epingle" id="plat_epingle">
            <label for="plat_epingle">épinglé</label>
        </div>
        <div>
            <input type="text" name="nom" id="" placeholder="nom du plat" value="">
        </div>
        <div>
            <input type="text" name="prix" id="" placeholder="prix du plat" value="">
        </div>
        <div>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description du plat" value=""></textarea>
        </div>
        <div>
            <select name="categorie_id" id="">
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                @endforeach
            </select>
        </div>
        <div  class="form--radio-buttons--scrollabe">
            @foreach($photoPlats as $photoPlat)
                <div>
                    <input type="radio" name="photo_plat_id" id="photo_plat_id_{{ $photoPlat->id }}" value="{{ $photoPlat->id }}">
                    <label for="photo_plat_id_{{ $photoPlat->id }}">
                        <img class="form--radio-buttons--image" src="{{ asset($photoPlat->chemin) }}" alt="photo {{ $photoPlat->id }}">
                        <span>Photo {{ $photoPlat->id }}</span>
                    </label>
                </div>
            @endforeach
            <div class="form--checkboxes--scrollable">
                <div>
                    <input type="checkbox" name="etiquette_id[]" id="etiquette_id_1">
                    <label for="etiquette_id_1"></label>
                </div>
                <div>
                    <input type="checkbox" name="etiquette_id[]" id="etiquette_id_2">
                    <label for="etiquette_id_2"></label>
                </div>
                <div>
                    <input type="checkbox" name="etiquette_id[]" id="etiquette_id_3">
                    <label for="etiquette_id_3"></label>
                </div>
                <div>
                    <input type="checkbox" name="etiquette_id[]" id="etiquette_id_4">
                    <label for="etiquette_id_4"></label>
                </div>
            </div>
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
    </form>
    @endsection
