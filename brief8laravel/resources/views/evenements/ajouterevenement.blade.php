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
    <h1>Ajouter Evenement</h1>
    <form action="/addevenement" method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="nom">libelle</label>
                <input id="name" class="form-control" type="text" name="libelle">
              </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="mail">date_limite_inscription</label>
                <input id="date" class="form-control" type="date" name="date_limite" >
              </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="password">Description</label>
                <input id="password" class="form-control" type="text" name="description" >
              </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="logo">image</label>
                    <input id="image" class="form-control" type="file" name="image">
                </div>
            </div>
        </div>
        <label class="form-label ">statut</label>
        <div class="input-group input-group-outline my-3">
            <select style="width: 500px;" name="statut" class="pe-2 btn btn-sm btn-outline-primary "
                aria-label="Default select example">
                <option selected>statut</option>
                <option value="ouvert">ouvert</option>
                <option value="cloturer">cloturer</option>
            </select> 
        </div>
        <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="confirm_password"> date_evenement</label>
                <input id="confirm_password" class="form-control" type="date" name="date_evenement" >
              </div>
            </div>
        </div><br>
        <div>
          <button class="btn btn-primary">Ajouter</button>
        </div>
        
      </form>
      <br>
  </div>
  @endsection