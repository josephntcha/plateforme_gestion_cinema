@extends('layout.master')
@section('content')
    <br>
    <marquee behavior="" direction="">
        <h1>Cette session est reservéé à administrateur. Vous ne pouvez effectuer aucune action si vous n'etes pas
            administrateur</h1>
    </marquee>
    <br>
    @if (session('modification'))
        <div class="alert alert-success text-center h3 col-8 offset-2">
            {{ session('modification') }}
        </div>
    @endif
    @if (session('suppression'))
        <div class="alert alert-success text-center h1 col-8 offset-2">
            {{ session('suppression') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success text-center h3 col-8 offset-2">
            {{ session('success') }}
        </div>
    @endif
    @if (session('notification'))
        <div class="alert alert-danger col-8 offset-2 text-center h1">
            {{ session('notification') }}
        </div>
    @endif
    @if (Auth::user()->isAdmin == 0)
        <div class="h3 text-center col-8 offset-2">
            Pour les operations d'ajout, suppression, modification, veuillez-vous connectez en tant qu'administrateur. Un
            compte admin est créée par défaut. <br>
            email: admin@example.com <br>
            mot de passe: password
        </div>
    @else
        <div class="h3 text-center col-8 offset-2">Connecter en tant qu'administrateur</div>
    @endif
<br><br>
    <div class="main-container col-10 offset-1">
        <table class="table table-striped table-hover">
            <thead>
                <tr>

                    <th>Titre Film</th>
                    <th>Description</th>
                    <th>Heure projection </th>
                    <th>Place réservées</th>
                    <th>place_libre</th>
                    <th>Montant</th>
                </tr>
            </thead>
            <tbody>
                @if ($reservations->count() > 0)
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->title }} </td>
                            <td>{{ $reservation->description }} </td>
                            <td>{{ $reservation->heur_projection }} </td>
                            <td>{{ $reservation->place_reserver }} </td>
                            <td>{{ $reservation->place_libre }} </td>
                            <td>{{ $reservation->montant }} </td>
                            <td>

                                <form action="{{ route('gestion.destroy', $reservation) }}" method="POST"
                                    onsubmit=" return confirm('Voulez-vous vraiment supprimer?');">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" title="Supprimer"><i class="bx bx-trash"></i></button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('gestion.edit', $reservation) }}" class="btn btn-primary" title="Editer">
                                    <i class=" bx bxs-edit-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <h1> <strong>
                            Aucun film ajouté
                        </strong>
                    </h1>
                @endif
            </tbody>
        </table>
        <br><br>
        <a href="{{ route('gestion.create') }}" class="btn btn-primary offset-5 ">
            Ajouter un film
        </a>
        <br>

    </div>
    <br><br><br><br>

@endsection
