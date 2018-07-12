@extends('Store.dashboard')

@section('adminContents')

<form class="form-horizontal" method="post" action="/add/subcategory">
<br>
<input type="text" name="subcategorie" placeholder="Adauga Subcategorie" style="width:300px;"><br><br>

<button class="btn btn-default">Add</button>  

<input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>

@stop