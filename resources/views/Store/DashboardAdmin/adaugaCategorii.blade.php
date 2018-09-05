@extends('Store.dashboard')

@section('adminContents')
<br>
<form class="form-horizontal" method="post" action="/add/category">

    <input type="text" name="categorie" placeholder="Adaugă categorie" style="width:300px;"><br><br>
    <button class="btn btn-default">Add</button>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

 </form>   
@stop