@extends('layout.nav')
@section('contenue')
 <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Reference</th>
      <th scope="col">Nombre de place</th>
      <th scope="col">Date de reservationn</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reservations as $reservation)
    <tr class="le">
      <th scope="row">1</th>
      <td>{{$reservation->reference}}</td>
      <td>{{$reservation->nombre_place}}</td>
      <td>{{$reservation->create_at}}</td>
      <td><a href="/reservations/{{$reservation->id}}" class="btn btn-warning">decliner</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
 





  

