@extends('layouts.SkyDiveStore.storeIndex')


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

    /* Add an active class to the active dropdown button */
    .active {
      background-color: green;
      color: white;
    }


    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
      display: none;
      
      padding-left: 8px;
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
  <a href="{{route('adaugaCategorii')}}">Adauga categorii</a>
  <a href="{{route('adaugaSubcategorii')}}">Adauga subcategorii</a>
  <a href="{{route('adaugaProduse')}}">Adauga produse</a>
  <a href="{{route('listaProduse')}}">Lista produse</a>
</div>

<div class="content">
 <div class="col pt-4">

    <h2> Admin Panel </h2>

    <div class="container">
        @yield('adminContents')
    </div>
    
   
                
  </div>
</div>
@endsection