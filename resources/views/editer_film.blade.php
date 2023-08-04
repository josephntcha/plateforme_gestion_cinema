@extends('layout.master')

@section('content')
    <div class=" col-10 offset-1">
        <form action="{{ route('gestion.update',$film->id) }}" method="POST" class="col-10 offset-1  bg-white"
            enctype="multipart/form-data">
            <fieldset>
                <legend>
                    <div class="h2 text-center">Modifier le film </div>
                </legend>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                    <div class="mb-4 row">
                        <label for="title" class="col-md-2 col-form-label">Film</label>
                        <div class="col-md-10">
                            <input class="form-control required" value="{{ $film->title }}" type="text" name="title"
                                id="title">
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="description" class="col-md-2 col-form-label">Description</label>
                        <div class="col-md-10">
                            <input class="form-control required" value="{{ $film->description }}" type="text"
                                name="description" id="description">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="heur_projection" class="col-md-2 col-form-label">Date et Heure
                            <span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input class="form-control required" type="text" value="{{ $film->heur_projection }}"
                                name="heur_projection" id="date">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="montant" class="col-md-2 col-form-label">Montant</label>
                        <div class="col-md-10">
                            <input class="form-control required" type="text" name="montant" value="{{ $film->montant }}"
                                id="montant">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="place_libre" class="col-md-2 col-form-label">Place Libre</label>
                        <div class="col-md-10">
                            <input class="form-control required" type="text" value="{{ $film->place_libre }}"
                                name="place_libre" id="libre">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="place_reserver" class="col-md-2 col-form-label">Place Occupée</label>
                        <div class="col-md-10">
                            <input class="form-control required" type="text" value="{{ $film->place_reserver }}"
                                name="place_reserver" id="reserver">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light offset-6"> Modifier le film
                    </button>
                </div>
            </fieldset>
        </form>
        <a href="/liste" class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</a>
    </div>
    <br><br><br>
@endsection
