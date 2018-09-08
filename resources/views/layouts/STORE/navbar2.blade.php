
   <div class="" >      
        <img src="https://skydivestore.ro/img/cms/images/slide_team.jpg" height="383.2px" weight="793.2px"  > 
      

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a class="navbar-brand" href="{{route('skydivestore')}}">Skydivestore</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">

@foreach ($categories as $categorie)
     <li class="nav-item">
      <a class="nav-link" href="/store/{{$categorie->categorie}}">{{$categorie->categorie}}</a>
    </li>
@endforeach
   

  
  
    </ul>
    <ul class=" navbar-nav  ml-auto">
                      @guest
                          <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                          <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                      @else
                            <li class="nav-item mr-2">
                                <a href="/cart" class="nav-link"> <i class="fas fa-shopping-cart"></i>  Cos <span class="badge"  style="color:red;">{{$items}}</span></a>
                            </li>
                          <li class="nav-item dropdown mr-4">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    @if(Auth::user()->is_admin == 1)
                                  <a class="dropdown-item" href="{{ route('dashboard') }}">
                                      Dashboard
                                  </a>
                                  @endif

                                  <a class="dropdown-item" href="/orders">
                                      Comenzi
                                  </a>

                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                               
                              </div>
                          </li>
                      @endguest
      </div>
  </ul>
  
 
</nav>


