@extends('Store.dashboard')

@section('adminContents')

 
<br>
{{-- itereaza prin produsele din baza de date si le afiseaza pe pagina  --}}
@foreach ($produse as $produs )
    <p>
        <img src="{{$produs->poza}}" width="50" height="50">
        {{$produs->id}}
        {{$produs->nume}} ----
        {{$produs->descriere}}----
        {{$produs->pret}} $---
        
        <a class="btn btn-danger" href="{{route('delete' , $produs->id)}}">Delete button</a>
        <a class="btn btn-info" href="{{route('show' , $produs->id)}}">Edit button</a>
        @csrf
    </p>
@endforeach



@stop