@extends('layout.master')
@section('content')
    <br>
    @if (session('success'))
        <div class="alert alert-success text-center h3 col-8 offset-2">
            {{ session('success') }}
        </div>
    @endif
    @if (session('echec'))
        <div class="alert alert-danger">
            {{ session('echec') }}
        </div>
    @endif
    <marquee behavior="" direction="">
        <h1>Les reservations faites</h1>
    </marquee>
    <div class="main-container col-10 bg-white offset-1">
        <table class="table table-striped table-hover">
            <thead>
                <tr>

                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Film </th>
                    <th>Montant</th>
                    <th>Numéro Place</th>

                </tr>
            </thead>
            <tbody>
                @if ($reservations->count() > 0)
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->nom }} </td>
                            <td>{{ $reservation->prenom }} </td>
                            <td>{{ $reservation->film }} </td>
                            <td>{{ $reservation->montant }} </td>
                            <td>{{ $reservation->numero_place }} </td>
                        </tr>
                    @endforeach
                @else
                    <h1> <strong>
                            AUCUNE RESERVATION FAITE
                        </strong>
                    </h1>
                @endif
            </tbody>

        </table>
        <br>

    </div>
    <br><br><br><br>

@endsection
