@extends('layout/app2')

@section('title', 'Gestion des procédures')

@section('middleContent')
    <section>
        <h1 class="mx-5 mb-5">Gestion des procédures</h1>
        <form method="POST" class="mb-4 col-9 mx-auto" action="{{ route('consulterProcedures.store') }}">
            @CSRF
            <h3>Ajout d'une procédure a consulter</h3>

            <div class="row">
                <div class="form-outline mb-4 col">
                    <label class="form-label" for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" class="form-control form-control-lg  @error('') is-invalid @enderror" />
                    @error('titre')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>

                <div class="form-outline mb-4 col">
                    <label class="form-label" for="lien">Lien</label>
                    <input type="text" id="lien" name="lien" class="form-control form-control-lg  @error('') is-invalid @enderror" />
                    @error('lien')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
            </div>
            
        
            <div class="form-outline mb-4 col-6">
                <label class="form-label" for="departement">Département</label>
                <br>
                <select class="form-select" name="departement" id="departement">
                    @if(isset($departements))
                        @foreach($departements as $departement)
                            <option value="{{ $departement->nom }}">{{ $departement->nom }}</option>
                        @endforeach
                    @else
                    <p>Aucun département</p>
                    @endif
                </select>
            </div>

            <div class="col-4 mx-auto">
                <button class="btn d-grid text-white w-100" style="background-color: #63BC55;" type="submit">Ajouter</button>
            </div>                     
        </form>

        <br>
        <hr class="col-9 mx-auto p-2">
        <br>
        <form method="GET" class="grid" action="{{route('consulterProcedures.trierProcedure')}}">
            @csrf
            <div class="input-group d-flex justify-content-center">
                <div class="w-25 ">
                    <select class="form-select" name="Trier" id="Trier">
                        <option selected>Trier par</option>
                        <option value="1">Date</option>
                        <option value="2">Departement</option>
                    </select>
                </div>
                <button type="submit" style="background-color: #63BC55; color:white;" class="btn">Trier</button>
            </div>
        </form>
        <div class="mb-4 col-11 mx-auto">
            <h3>Liste des procédures actuelles:</h3>
            <!-- Tri par départment -->

            <div class="row px-2 mx-auto">
                @if(count($procedures))
                    @foreach($procedures as $procedure)
                        <div class="col-sm-3 p-2">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header">
                                    {{$procedure->titre}}

                    


                                    <!-- Button trigger modal -->
                                    <a type="submit" class="btn text-white position-absolute top-0 start-100 translate-middle" href="{{ route('consulterProcedures.zoom', [$procedure->id]) }}">
                                        <i class="fa-sharp fa-solid fa-circle-xmark" style="color: #63BC55;"></i>
                                    </a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-truncate">Departement: {{$procedure->nom}}</li>
                                    <li class="list-group-item text-truncate">Lien: <a href="{{$procedure->lien}}" style="text-decoration: none;">{{$procedure->lien}}</a></li>
                                </ul>
                            </div>
                        </div>

                        
                    @endforeach
                @else
                    <p>Aucune procédure disponible pour le moment..</p>
                @endif
            </div>
        </div>
    </section>
@endsection