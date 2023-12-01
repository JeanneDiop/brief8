@extends('layout.nav')
@section('contenue')
@if (session('status'))
<div class="row d-flex justify-content-center align-items-center">
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
</div>
@endif
<div>
    <h1>Ajouter reservation</h1>
    <form action="/addreservation" method="post" >
      @csrf
        <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="confirm_password"> nombre_place</label>
                <input id="confirm_password" class="form-control" type="number" name="nombre_place" >
              </div>
            </div>
        </div><br>
        <input type="hidden" name="evenement_id" value="{{$evenement->id}}">
        <div>
          <button class="btn btn-primary">Ajouter</button>
        </div>
  
      </form>
      <br>
  </div>
  @endsection