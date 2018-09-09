@extends('layouts.SkyDiveStore.storeIndex')
@section('content')


<div class="container">
@php

$counter = 1;

@endphp

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Denumire</th>
      <th scope="col">Cantitate</th>
      <th scope="col">Pret</th>
      
    </tr>
  </thead>

  <tbody>
  @foreach ($order->items as $item )
 
    <tr>
      <th scope="row" style="width:50px">{{$counter++}}</th>
      <td><h4>
      {{$item->name}}
      </h4></td>



      <td ><div class="input-group">
         
            
          
                    <h4 class="mr-3 ml-3">
                     {{$item->quantity}}
                    </h4>
          
            
           </td>



      <td><h4>
      {{$item->subtotal}} RON
      </h4> </td>
     
    </tr>
  @endforeach
 
    <tr>
      <th></th>
      <td></td>
      <td> <h4>  TOTAL </h4> </td>
      <td> <h4> {{$order->total}} RON </h4> </td>
     
      
    </tr>
    
  </tbody>
</table>



<table class="table">
    <thead>
        <tr>
            <th>Nr Comanda</th>
            <th>Destinatar</th>
            <th>Adresa Livrare</th>
            <th>Livrat Cu</th>
            <th>Status Comanda</th>   
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <h4> {{$order->id}} </h4> </td>
            <td> <h4> {{$order->buyer}} </h4> </td>
            <td> <h4> {{ $order->address }} </h4> </td>
            <td> <h4> {{ $order->delivery }} </h4> </td>
            <td> <h4> @if ($order->status == null)
                     In Curs de procesare
                        @else
                     {{ $order->status }}
                        @endif 
                </h4>     
            </td>
        
        </tr>
    
    </tbody>

</table>


</div>
 
@endsection