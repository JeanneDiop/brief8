 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.css">
    <style>
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            z-index: 1000;
        }
    </style>
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Gestion evenement</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="http://127.0.0.1:8000/evenements/listeevenements">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Inscription-conexion</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="http://127.0.0.1:8000/register">inscription_user</a>
              <a class="dropdown-item" href="http://127.0.0.1:8000/associationregister">inscription_association</a>
            </div>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-sm-2" type="search" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
      @yield('contenue')

