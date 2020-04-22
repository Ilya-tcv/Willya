@extends('layouts.index')

@section('content')
    <form action="/" method="post">
        @csrf
        <div class="form-group">
            <label>Nom :</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <p>Email :</p>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="">Password :</label>
            <input type="text" class="form-control" name="password">
        </div>
        <button class="btn btn-success" type="submit">Créer</button>
    </form>
@endsection