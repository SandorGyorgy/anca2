@extends('Store.dashboard')

@section('adminContents')

@csrf 


@foreach ($produse as $produs )
    <p>
        <img src="{{$produs->poza}}" width="50" height="50">
        {{$produs->id}}
        {{$produs->nume}} ----
        {{$produs->descriere}}----
        {{$produs->pret}} $---
        <a href="{{route('delete' , $produs->id)}}">Delete button</a>
    </p>
@endforeach



@stop