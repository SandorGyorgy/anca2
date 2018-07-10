  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="{{route('skydivestore')}}">Skydivestore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('accesories')}}">Accesories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('helmets')}}">Helmets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('instruments')}}">Instruments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('flywear')}}">Flywear</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('rigs')}}">Rigs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('canopies')}}">Canopies</a>
      </li>
      </ul>
      <ul class=" navbar-nav  ml-auto">
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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

