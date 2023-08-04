@extends('layout.master')


@section('content')
    <div class=" col-10 offset-1">
        <form action="{{ route('enregistrer_reservation', $identifiant) }}" method="POST" class="col-10 offset-1  bg-white"
            enctype="multipart/form-data">
            <fieldset>
                <legend>
                    <div class="h2 text-center">Reserver une place pour le cinéma</div>
                </legend>
                {{ csrf_field() }}

                <div class="card-body">
                    <div class="mb-4 row">
                        <label for="nom" class="col-md-2 col-form-label">Nom</label>
                        <div class="col-md-10">
                            <input class="form-control required" type="text" name="nom" id="example-text-input ">
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="prenom" class="col-md-2 col-form-label">Prenom</label>
                        <div class="col-md-10">
                            <input class="form-control required" type="text" name="prenom" id="example-text-input ">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="title" class="col-md-2 col-form-label">Films
                            <span class="text-danger">*</span></label>
                        <select required id="title" name="title" class=" col-md-10">
                            <option></option>
                            @foreach ($projections as $projection)
                                <option value="{{ $projection->title }}" data-montant={{ $projection->montant }}
                                    data-libre={{ $projection->place_libre }}
                                    data-reserver={{ $projection->place_reserver }}>
                                    {{ $projection->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 row">
                        <label for="montant" class="col-md-2 col-form-label">Montant</label>
                        <div class="col-md-10">
                            <input class="form-control required" type="text" name="montant" id="montant">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="libre" class="col-md-2 col-form-label">Place Libre</label>
                        <div class="col-md-10">
                            <input class="form-control required" type="text" name="prix" id="libre">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="reserver" class="col-md-2 col-form-label">Place Occupée</label>
                        <div class="col-md-10">
                            <input class="form-control required" type="text" name="etat" id="reserver">
                        </div>
                    </div>
                    <div class="mb-3 row" id="champ">
                        <label for="num" class="col-md-2 col-form-label">Numéro disponible</label>
                        <div class="col-md-10">
                            <input class="form-control required" type="text" name="num" id="num">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary waves-effect waves-light offset-6">Reservez votre
                        place</button>
                </div>
            </fieldset>
        </form>
        <a href="/liste" class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</a>

    </div>
    <br><br><br>
    <script>
        $(function() {

            $("#champ").hide();
            $("#title").on("change", function() {
                const option = $("#title :selected");
                const montant = option.data('montant');
                const reserver = option.data('reserver');
                const libre = option.data('libre');
                const num = libre - 1;
                $("#montant").val(montant);
                $("#libre").val(libre);
                $("#reserver").val(reserver);
                $("#champ").slideDown(1000);
                $("#num").val(num);

            });
        });
    </script>
@endsection
