@extends('layouts.index')

@section('content')
<div class="text-center">
    <h1 >Users</h1>
    <a href="/create" class="btn btn-success mt-5">Create</a> 
</div>
    <table class="table mt-5">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        @foreach ($users as $user)
            <tbody>
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>
                        <form action="{{$user->id}}"" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>

<hr>
<div class="text-center">
    <h1 >Projets</h1>
    <a href="projets/create" class="btn btn-success mt-5">Create</a> 
</div>

<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Chef de projet</th>
            <th scope="col">Supprimer</th>
        </tr>
    </thead>
    @foreach ($projets as $projet)
        <tbody>
            <tr>
                <th scope="row">{{$projet->id}}</th>
                <td>{{$projet->nom}}</td>
                <td>{{$projet->description}}</td>
                <td>{{$projet->user->name}}</td>
                <td>
                    <form action="projets/{{$projet->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>

<hr>
<div class="text-center">
    <h1 >Taches</h1>
    <a href="taches/create" class="btn btn-success mt-5">Create</a> 
</div>

<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Nom du projet</th>
            <th scope="col">Supprimer</th>
        </tr>
    </thead>
    @foreach ($taches as $tache)
        <tbody>
            <tr>
                <th scope="row">{{$tache->id}}</th>
                <td>{{$tache->nom}}</td>
                <td>{{$tache->description}}</td>
                <td>{{$tache->projet->name}}</td>
                <td>
                    <form action="taches/{{$projet->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>
@endsection