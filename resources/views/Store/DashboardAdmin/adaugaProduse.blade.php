@extends('Store.dashboard')
@section('adminContents')
<br>
<div class="container">
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="/add/product">
    <div class="">
         <input type="text" name="Titlu" placeholder="Adaugă titlu" style="width:300px;"><br><br>
    </div>

    <div class="">
        <textarea name="Descriere" placeholder="Descriere" name="Descriere" style="width:300px;">
        </textarea>
        <br>
    </div>
    
<br>
    <div class="">
     <input type="number" name="Preț" placeholder="Preț" style="width:300px;"><br><br>
    </div>



    <div class="">

        <input list="subcategorii" placeholder="Alege subcategoria" name="subcategorie" style="width:300px;"><br><br>
        <datalist id="subcategorii">
        @foreach($categorii as $subcategorie)
            @foreach ($subcategorie->subcategory as $sub)
                
              <option>{{$subcategorie->categorie}} -- {{$sub->name}}</option>

            @endforeach
        @endforeach
        </datalist>

    </div>

    <div class="">
        <input type="file" name="Poză">
    </div>
<br>
    <div class="">
        <button class="btn btn-default">Add</button>
    </div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>


</div>




@stop