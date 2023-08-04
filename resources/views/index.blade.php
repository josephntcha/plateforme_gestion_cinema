@extends('layout.master')
@section('content')
<div class="main-container">
    <h1 class="text-center">A LIRE</h1>
    <div class="h1 text-center col-10 offset-1 text-white bg-black">Plateforme de gestion de reservation de place pour le cinéma. Veuillez-vous authentifier ou créer un compte avant de faire une opération. Un utilisateur par défaut est créé et vous pouvez utilisez ses identifiants: Email: test@example.com et le mot de passe: password</div>
    <br><br><br><br>
    <a href="{{ route('liste') }}" class="col-2">
        <button class="btn btn-primary offset-5"><i class="bx bxs-left-arrow"></i> Liste de programmation de film de la semaine</button>
    </a>
</div>
@endsection