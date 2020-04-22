@extends('layouts.index')

@section('content')
    <form action="/projets" method="post">
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
            <p>Chef de projet :</p>
            <select name="user_id" class="form-control" id="user_id">
                @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success" type="submit">Créer</button>

    </form>
@endsection