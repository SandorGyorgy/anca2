@extends('Store.dashboard')

@section('adminContents')
<br>
<form action="/edit/post" method="post" enctype="multipart/form-data">
@csrf
<input hidden value="{{$produs->id}}" name="id">

 <label for="titlu">Titlu</label>
<input id="titlu" name="titlu" value="{{$produs->nume}}">

<br>

 <label for="descriere">Descriere</label>
<textarea id="descriere" name="descriere"> {{$produs->descriere}} </textarea>

<br>

 <label for="pret">Pret</label>
<input id="pret" value="{{$produs->pret}}" name="pret">
<br>

<label for="poza">Poza</label>
<img src="{{$produs->poza}}" width="100" height="100" id="poza" >
<br>

<input type="file" name="poza">

<button class="btn btn-info">Editează produs</button>

</form>





@stop