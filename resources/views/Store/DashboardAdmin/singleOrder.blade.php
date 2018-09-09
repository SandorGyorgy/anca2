@extends('layouts.SkyDiveStore.storeIndex')
@section('content')


<div class="container">

<h1> Comanda nr {{$order->id}}</h1>

<h4> Destinatar -> {{$order->buyer}}</h4>
<h4> Livrare cu -> {{ $order->delivery }} </h4>
<h4> Adresa livrare -> {{ $order->address }} </h4>
<h4> Total Comanda -> {{ $order->total }} </h4>
@if ($order->status == null)
    <h4>Satus -> Nepreluata</h4>

@else
<h4> Status -> {{ $order->status }} </h4>
@endif

<form method="post" action="/update/order">
@csrf
<input name="id" value="{{$order->id}}" hidden>
<input list="status" placeholder="Status" name="status">
<datalist id="status">
    @if ($order->delivery == 'Fan Curier')
        
    <option>Predat la Curier</option>
    @else

    <option>Predat la Posta Romana</option>
    @endif
    <option>Livrat</option>
</datalist>
<br>
<button class="btn btn-success mt-4">Actualizeasa Comanda</button>

</form>



</div>
 
@endsection