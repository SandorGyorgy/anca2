@extends('Store.dashboard')

@section('adminContents')

@php
    $counter = 1;
@endphp

<div class="container">


<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Comanda NR</th>
      <th scope="col">Destinatar</th>
      <th scope="col">Status</th>
      <th scope="col">Total</th>
      <th scope="col">Vizualizeaza</th>
      
    </tr>
  </thead>

  <tbody>
@foreach ($orders as $comanda )
    
    <tr>
      <th scope="row" style="width:50px">{{$counter++}}</th>
      <td> {{ $comanda->id }} </td>
      <td> {{ $comanda->buyer }} </td>
      @if($comanda->status == null)
      <td> Nepreluata </td>
      @else
      <td> {{$comanda->status}} </td>

      @endif
      <td> {{$comanda->total}} RON</td>   
      <td> <a class="btn btn-success" href="/show/order/{{$comanda->id}}">Vizualizeaza</a> </td>   
    </tr>

@endforeach
    
  
 
  
  </tbody>
</table>






</form>



</div>
 
@endsection