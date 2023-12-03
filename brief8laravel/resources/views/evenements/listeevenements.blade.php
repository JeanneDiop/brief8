@extends('layout.nav')
@section('contenue')
<div class="">

  <header>
    <h1>Liste de tous les evenements</h1>
  </header>

  <div class="row">
    @foreach($evenements as $evenement)
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-header p-0 position-relative mt-n3 mx-2 z-index-2 bg-transparent d-flex justify-content-center align-items-center"
               src="{{ asset('images/' . $evenement->image) }}"
               style="width: 98%; height: 250px; object-fit: cover; object-position: center center;"
               alt="image de l'article">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><b><label for="libelle">libelle:</label></b>   {{$evenement->libelle}}</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><b><label for="libelle">date_limite:</label></b>  {{$evenement->date_limite}}</li>
            <li class="list-group-item"><b><label for="libelle">description:</label></b>   {{$evenement->description}}</li>
            <li class="list-group-item"><b><label for="libelle">statut:</label> </b>  {{$evenement->statut}}</li>
            <li class="list-group-item"><b><label for="libelle">date_evenement:</label></b>   {{$evenement->date_evenement}}</li>
          </ul>
          <div class="card-body">
            <a href="/evenements/{{$evenement->id}}" class="btn btn-dark">voir plus</a>

            <form action="/newreservation" method="post" class="d-inline-block">
              @csrf
              <input type="hidden" value="{{$evenement->id}}" name="id">
              <button type="submit"  class="btn btn-warning">reserver</button>
            </form>
        
           
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection


