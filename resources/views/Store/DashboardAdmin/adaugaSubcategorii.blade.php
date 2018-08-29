@extends('Store.dashboard')

@section('adminContents')
<br>
<form class="form-horizontal" method="post" action="/add/subcategory">

 <input list="categorii" placeholder="Alege categoria" name="categorie"  style="width:300px;">
        <datalist id="categorii">
        @foreach($categorii as $categorie)
        <option>{{$categorie->categorie}}</option>
        @endforeach
        </datalist>
<br><br>
<input type="text" name="subcategorie" placeholder="Adaugă subcategorie" style="width:300px;"><br><br>

<button class="btn btn-default">Add</button>  

<input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>

@stop