@extends('Store.dashboard')
@section('adminContents')

<div class="container">
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="/add/product">
    <div class="">
         <input type="text" name="titlu" placeholder="adauga titlu">
    </div>

    <div class="">
        <textarea name="descriere" placeholder="descriere">
        </textarea>
    </div>

    <div class="">
     <input type="number" name="pret" placeholder="pret">
    </div>

    <div class="">

        <input list="categorii" placeholder="Alege categoria" name="categorie">
        <datalist id="categorii">
        @foreach($categorii as $categorie)
        <option value = {{$categorie->categorie}}>
        @endforeach
        </datalist>

    </div>

    <div class="">

        <input list="subcategorii" placeholder="Alege subcategoria" name="subcategorie">
        <datalist id="subcategorii">
        @foreach($subcategorii as $subcategorie)
        <option value = {{$subcategorie->name}}>
        @endforeach
        </datalist>

    </div>

    <div class="">
        <input type="file" name="poza">
    </div>

    <div class="">
        <button class="btn btn-default">Add</button>
    </div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>


</div>




@stop