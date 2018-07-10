@extends('Store.dashboard')

@section('adminContents')
<form class="form-horizontal" method="post" action="/add/category">

    <input type="text" name="categorie" placeholder="Adauga categorie" style="width:300px;"><br>

    <button class="btn btn-default">Adauga Categorie</button>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

 </form>   
@stop