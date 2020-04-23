@extends('layouts.index')

@section('content')
    <form action="/taches" method="post">
        @csrf
        <div class="form-group">
            <label>Nom :</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="form-group">
            <p>Description :</p>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <p>Nom de projet :</p>
            <select name="projet_id" class="form-control" id="projet_id">
                @foreach ($projets as $projet)
                <option value="{{$projet->id}}">{{$projet->id}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success" type="submit">Créer</button>

    </form>
@endsection