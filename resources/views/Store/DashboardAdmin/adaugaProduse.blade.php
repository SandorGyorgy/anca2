@extends('Store.dashboard')

@section('adminContents')

<input list="categorii">
<datalist id="categorii">
@foreach($categorii as $categorie)
<option value = {{$categorie->categorie}}>
@endforeach
</datalist>



<ul>
@foreach($subcategorii as $subcategorie)
<li>{{$subcategorie->name}}</li>
@endforeach
</ul>

@stop