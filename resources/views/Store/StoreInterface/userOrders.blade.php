@extends('layouts.SkyDiveStore.storeIndex')
@section('content')

@php

    $counter = 1;
    $total= 0 ;

@endphp

<div class="container">

    <table class="table text-center">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Comanda NR</th>
            <th scope="col">Status</th>
            <th scope="col">Total</th>
            <th scope="col">Vizualizeaza</th>
            
            </tr>
        </thead>

        <tbody>
                @foreach ($comenzi as $comanda )
                    <tr>
                    <th scope="row" style="width:50px">{{$counter++}}</th>
                    <td> {{ $comanda->id }} </td>
                    @if($comanda->status == null)
                    <td> In Curs de procesare </td>
                    @else
                    <td> {{$comanda->status}} </td>

                    @endif
                    <td> {{$comanda->total}} RON</td>   
                    <td> <a class="btn btn-success" href="/single/order/{{$comanda->id}}">Vizualizeaza</a> </td>   
                    </tr>
                @endforeach
            
        </tbody>
    </table>

</div>
 
@endsection