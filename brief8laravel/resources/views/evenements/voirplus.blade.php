@extends('layout.nav')
@section('contenue')

@if (session('status'))
<div class="row d-flex justify-content-center align-items-center">
    <div class="alert alert-success col-lg-4">
        {{ session('status') }}
    </div>
</div>
@endif
@if (session('statut'))
<div class="row d-flex justify-content-center align-items-center">
    <div class="alert alert-success col-lg-4">
        {{ session('statut') }}
    </div>
</div>
@endif
<div>
<div class=" d-flex card " style="width: 18rem;">
<img  class="card-header p-0 position-relative mt-n3 mx-2 z-index-2 bg-transparent
d-flex justify-content-center align-items-center"src="{{ asset('images/' . $evenement->image) }}" style="width: 98%; height: 250px; object-fit: cover;object-position: center center;" alt="image de l'article">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">{{$evenement->libelle}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$evenement->date_limite}}</li>
    <li class="list-group-item">{{$evenement->description}}</li>
    <li class="list-group-item">{{$evenement->statut}}</li>
    <li class="list-group-item">{{$evenement->date_evenement}}</li>
  </ul>
  <div class="card-body">
    <a href="{{ '/evenement/modifier/' . $evenement->id }}" class="card-link">Modifier</a>
    <a href="/evenements/deleteevenement/{{ $evenement->id }}" class="card-link">Supprimer</a>
  </div>
</div>
</div>
@endsection
