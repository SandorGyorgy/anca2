<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
                    <a class="btn btn-secondary  mr-2" 
                        
                        href="{{route('welcome')}}">
                              Acasă
                            </a>
                        
                            <ul class="navbar-nav ml-auto">
                       <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Salt cu parașuta
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('tandemjump')}}">Tandem</a>
                                <a class="dropdown-item" href="{{route('affjump')}}">Curs începători (AFF)</a>
                                <a class="dropdown-item" href="{{route('advancedjump')}}">Cursuri avansați</a>
                            </div>
                            
                       </div>


                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropzone
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('about')}}">Despre noi</a>
                                <a class="dropdown-item" href="{{route('rules')}}">Reguli</a>
                                <a class="dropdown-item" href="{{route('staff')}}">Staff</a>
                            </div>
                       </div>
                        <a class="btn btn-secondary mr-2"
                        href="{{route('preturi')}}">
                               Prețuri
                            </a>
                        <a class="btn btn-secondary  mr-2" 
                        
                        href="{{route('skydivestore')}}">
                               Skydivestore
                            </a>
                        
                        
                   

                    </ul>
                </div>
            </div>
        </nav>
        
