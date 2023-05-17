@extends('layouts.app')

@section('content')

<div class="container">
    <div id="dash"></div>
    <div class="row justify-content-center">
        <div class="col-md-24">
            <div class="card">

                <div class="card-header"><h1>Flotte</h1></div>

                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        Ajouter Flotte
                    </button>

                    <!-- Modal -->
                    @include('flotte.ajout')
                    <br>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table id="dtBasicExample" class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Immatriculation</th>
                                <th scope="col">Marque</th>
                                <th scope="col">Type</th>
                                <th scope="col">Modèle</th>
                                <th scope="col">Kilométrage</th>
                                <th scope="col">Nombre de porte</th>
                                <th scope="col">Couleur</th>
                                <th scope="col">Dispnibilite</th>
                                <th scope="col">Expedition de la carte grise</th>
                                <th scope="col">Date fin d'assurance</th>
                                <th scope="col">Prix de location</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ( $flottes as $flotte)

                                <tr>
                                  <th scope="row">{{ $flotte->id }}</th>
                                  <td>{{ $flotte->immatriculation }}</td>
                                  <td>{{ $flotte->marque }}</td>
                                  <td>{{ $flotte->type }}</td>
                                  <td>{{ $flotte->modele }}</td>
                                  <td>{{ $flotte->kilometrage }}</td>
                                  <td>{{ $flotte->nbrPorte }}</td>
                                  <td>{{ $flotte->couleur }}</td>
                                  <td>{{ $flotte->dispnibilite }}</td>
                                  <td>{{ $flotte->expeditionCarteGrise }}</td>
                                  <td>{{ $flotte->dateFinAssurance }}</td>
                                  <td>{{ $flotte->prixLocation }}</td>



                                  <td>
                                    <form class="" action="{{ route('delete_flotte' , $flotte->id) }}" method="POST">

                                        {!! csrf_field() !!}
                                        {{-- <input type="hidden" class="form-control" value="{{ $partenaire->id }}" id="nompartenaire" name="partenaireId"> --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $flotte->id }}">
                                            modifier
                                        </button>
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger show_confirm"  type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                        </svg></button>

                                    </form>
                                  </td>
                                </tr>

                                <!-- Modal -->
                                @include('flotte.modifier')

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>

</div>
@include('flotte.supprimer')
@endsection
