@extends('layouts.SkyDiveStore.storeIndex')
@csrf
@section('styles')
<style>
    /* Fixed sidenav, full height */
    .sidenav {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      top: 50;
      left: 0;
      
      overflow-x: hidden;
      padding-top: 20px;
    }

    /* Style the sidenav links and the dropdown button */
    .sidenav a, .dropdown-btn {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 16px;
      color: #818181;
      display: block;
      border: none;
      background: #FEFEFE;
      
      width:100%;
      text-align: left;
      cursor: pointer;
      outline: none;
    }

    /* On mouse-over */
    .sidenav a:hover, .dropdown-btn:hover {
      color: #B2AAAA;
    }

    /* Main content */
    .main {
      margin-left: 200px; /* Same as the width of the sidenav */
      font-size: 20px; /* Increased text to enable scrolling */
      padding: 0px 10px;
    }


    /* Optional: Style the caret down icon */
    .fa-caret-down {
      float: right;
      padding-right: 8px;
    }
    .content {
        margin-left: 220px;
    }
</style>
@stop

@section('javascript')
<script>
      //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          } else {
            dropdownContent.style.display = "block";
          }
        });
      }
</script>
@stop


@section('content')
<div class="sidenav">

@if(count($subcategorii) > 0)

@foreach ($subcategorii as $subCat )
  <a href="/store/{{$categorie->categorie}}/{{$subCat->name}}">{{ $subCat->name}}</a>
@endforeach

 @endif

</div>
<div class="content">
 <div class="col pt-4">
            <h2>


              @if($subcategorieCurenta == NULL)
                @if(count($subcategorii) == 0 ) 
                  Nu exista subcategorii
                  @else
                  {{$subcategorii{0}['name']}} 
               @endif
               @else
                {{$subcategorieCurenta->name}}
             @endif


            </h2>
            <div class="row">
            
             @if(count($produse) > 0)
            @foreach ($produse as $product )

                <div class="card mr-4 mb-4" style="width: 16rem;">
                    <img class="card-img-top" src="{{$product->poza}}" height="220" width="100%">
                    <div class="card-body">
                      <h5 class="card-title">{{$product->nume}}</h5>
                      <p class="card-text">{{$product->descriere}}</p>
                      <p class="card-text">{{$product->pret}} RON</p>
                      <a href="/add/{{$product->id}}"  class="btn btn-primary">Adauga in cos</a>
                    </div>
                  </div>
            @endforeach
          @else
          <h1>Nu exista produse</h1>
          @endif

            </div>
         
                
</div>
</div>
</div>
@endsection