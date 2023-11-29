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
    <h1>formulaire de Connexion pour association</h1>
    <form action="/login/connexionassociation" method="post">
        @csrf
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="email">Mail</label>
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
        </div><br>
        <div>
            <button class="btn btn-primary">Login</button>
        </div>
    </form>

</div>
@endsection