@extends('layout.master')
@section('content')
<br>
<marquee behavior="" direction=""><h1>Programmation films de la semaine</h1></marquee>
<div class="main-container col-10 offset-1 bg-white">
    <table class="table table-striped table-hover">
        <thead>
            <tr>  
                <th>Titre Filme</th>
                <th>Heure projection </th>
                <th>Reservez votre place </th>
            </tr>
        </thead>
        <tbody>
            @if($projections->count()>0)

            @foreach ($projections as $projection)
            <tr>
                <td>{{ $projection->title}} </td>
                <td>{{ $projection->heur_projection}} </td>
                <td class="col-2">
                    <a data-toggle="m-tooltip" data-placement="top" title="reservez votre place" data-original-title="Détails"
                    href="{{ route('reservation', $projection->id) }}"
                    class="btn btn-outline-info m-btn m-btn--icon m-btn--icon-only m-btn--outline-2x text-white bg-primary">
                    reservez votre place
                    </a>
                </td>
            </tr>

            @endforeach
            @else
            <h1> <strong>
                    Pas de programme cette semaine
                </strong>
            </h1>
            @endif
        </tbody>

    </table>
    <br>
</div>
<br><br><br><br>

@endsection