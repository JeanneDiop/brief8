@extends('layout.nav')
@section('contenue')
<div>
  <h1>Formulaire d'incription de l'association</h1>
  <form action="register/ajouterassociation" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="logo">Logo</label>
                <input id="logo" class="form-control" type="file" name="logo">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="date_creation">Date Creation</label>
                <input id="date_creation" class="form-control" type="date" name="date_creation">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="slogan">Slogan</label>
                <input id="slogan" class="form-control" type="text" name="slogan">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="password">Password</label>
                <input id="password" class="form-control" type="password" name="password">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label for="confirm_password">Confirm Password</label>
                <input id="confirm_password" class="form-control" type="password" name="confirm_password">
            </div>
        </div>
    </div><br>

    <div>
        <button class="btn btn-primary">Register</button>
    </div>
</form>

<br>

<span>Vous avez déjà un compte ? <a href="/loginassociation">Connectez-vous ici</a>.</span>

</div>
@endsection()