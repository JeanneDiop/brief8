@extends('layout.nav')
@section('contenue')
<div class="">

<header>
  <h1>Liste de tous les evenements</h1>
</header>
<div class=" d-flex card " style="width: 18rem;">
  @foreach($evenements as $evenement)
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
    <a href="/evenements/{{$evenement->id}}" class="card-link">voir plus</a>
  </div>
  @endforeach
</div>
</div>
@endsection
