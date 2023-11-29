@extends('layout.nav')
@section('contenue')

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Evenement</h5>
    <p class="card-text">libelle</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">date_limite</li>
    <li class="list-group-item">description</li>
    <li class="list-group-item">statut</li>
    <li class="list-group-item">date_evenement</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">voir plus</a>
    {{-- <a href="#" class="card-link">Another link</a> --}}
  </div>
</div>