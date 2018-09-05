@extends('layouts.SkyDiveStore.storeIndex')


@section('content')

@php

$counter = 1;
$total= 0 ;

@endphp

<div class="container">

@if($items > 0)

<form method="post" action="">
@csrf

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Denumire</th>
      <th scope="col">Cantitate</th>
      <th scope="col">Pret</th>
      <th scope="col">Sterge Produs</th>
    </tr>
  </thead>

  <tbody>
  @foreach ($cart as $item )
    @php
        $total += $item->subtotal;
    @endphp
    <tr>
      <th scope="row" style="width:50px">{{$counter++}}</th>
      <td><h4>
      {{$item->name}}
      </h4></td>



      <td ><div class="input-group">
         
              <a  class="btn btn-danger" href="/substract/{{$item->id}}">
                <span class="fa fa-minus"></span>
              </a>
          
                    <h4 class="mr-3 ml-3">
                     {{$item->quantity}}
                    </h4>
          
              <a  class="btn btn-success " href="/plus/{{$item->id}}">
                  <span class="fa fa-plus"></span>
              </a>
           </td>



      <td><h4>
      {{$item->subtotal}} RON
      </h4> </td>
      <td style="width:150px;"><a href="/delete/item/{{$item->id}}" class="close button" aria-label="Close" >
            <span aria-hidden="true" style="margin-right:65px">&times;</span>
        </a></td>
    </tr>
  @endforeach
  <tr>
  <th></th>
  <th></th>
  <th></th>
  <th><h4>  TOTAL </h4></th>
  </tr>
    <tr>
      <th></th>
      <td></td>
     
      <td><button class="btn btn-success">Check Out</button></td>
      <td><h4>
      {{$total}} RON
      
      </h4></td>
      
    </tr>
    
  </tbody>
</table>
 </form>
@else

<h1>Cosul este gol!</h1>

@endif





</div>
 
@endsection