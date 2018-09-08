@extends('layouts.SkyDiveStore.storeIndex')
@section('content')

@php

    $counter = 1;
    $total= 0 ;

@endphp

<div class="container">

@if($items > 0)

<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Denumire</th>
      <th scope="col">Cantitate</th>
      <th scope="col">Pret</th>
      
    </tr>
  </thead>

  <tbody>
  @foreach ($cart as $item )
    @php
        $total += $item->subtotal;
    @endphp

    <tr>

      <th scope="row" style="width:50px">{{$counter++}}</th>
      <td>   {{$item->name}}          </td>
      <td>  {{$item->quantity}}      </td>
      <td>   {{$item->subtotal}} RON  </td>
    
    </tr>
  @endforeach
 
    <tr>
      <th></th>
      <td></td>
      <td>   TOTAL  </td>
      <td>  {{$total}} RON  </td>
    </tr> 
  </tbody>
</table>
@else
<h1>A aparut o eroare!</h1>
@endif

<form action="/order" method="post" class="text-center">
@csrf
<input type="text" placeholder="adresa completa" name="adresa">
<br>
<input type="text" placeholder="nume destinatar" name="destinatar">
<input name="cart" value="{{$cart}}" hidden>
<input name="total" value="{{$total}}" hidden>

<h4 class="mt-4">Livrare prin</h4>

<div class="radio">
  <label><input type="radio" name="livrare" value="Fan Curier"> Fan Curier </label>
</div>
<div class="radio">
  <label><input type="radio" name="livrare" value="Posta Romana">Posta Romana </label>
</div>

<button type="submit" class="btn btn-success">Trimite comanda</button>

</form>



</div>
 
@endsection