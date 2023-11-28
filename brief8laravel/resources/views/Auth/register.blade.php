@extends('layout.nav')
@section('contenue')
<div>
  <h1>Formulaire d'incription</h1>
  <form action="/register/ajouterinscription" method="post">
    @csrf
      <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="nom">name</label>
              <input id="name" class="form-control" type="text" name="name">
            </div>
          </div>
      </div>
      <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="mail">Mail</label>
              <input id="email" class="form-control" type="email" name="email" >
            </div>
          </div>
      </div>
      <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="password">Password</label>
              <input id="password" class="form-control" type="password" name="password" >
            </div>
          </div>
      </div>
      <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="confirm_password"> confirm Password</label>
              <input id="confirm_password" class="form-control" type="password" name="confirm_password" >
            </div>
          </div>
      </div><br>
      <div>
        <button class="btn btn-primary">Register</button>
      </div>
      
    </form>
    <br>
    <span>Vous avez déjà un compte ? <a href="/login">Connectez-vous ici</a>.</span>
  
</div>
@endsection()
