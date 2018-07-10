<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5>AEROCLUBUL TERITORIAL BAIA MARE</h5>
                <div class="row mt-2">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="{{route('tandemjump')}}">Tandem</a></li>
                            <li><a href="{{route('affjump')}}">Curs AFF</a></li>
                            <li><a href="{{route('preturi')}}">Prețuri</a></li>
                            
                        </ul>
                    </div>
                    
                </div>
            <div class="row">
<div class="col-md-4 mt-3">
  <h5 class="">FOLLOW US!</h5> 
      
<i class="fab fa-facebook-square fa-2x mr-2"></i>
<i class="fab fa-twitter-square fa-2x mr-2"></i>
<i class="fab fa-instagram fa-2x"></i>
  </div>
  </div>
  </div>
            <div class="col-md-4">
      <h5 class="">CONTACT US! </h5>
              
      <p>Iți vom răspunde în mai puțin de 24 de ore!</p>
      <p><span class="fas fa-map-marker-alt"></span> Baia Mare, Maramureș, România</p>
      <p><span class="fas fa-phone"></span> +40 748 380 773</p>
      <p><span class="fas fa-envelope"></span>ar-baiamare@yahoo.com</p> 
    </div>
    
      </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</footer>

<style>

/* Sticky footer position and size
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 300px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 290px;
}

/* Taller footer on small screens */
@media (max-width: 34em) {
    body {
      margin-bottom: 300px;
    }
    .footer {
      height: 500px;
    }
}

/* Sticky footer style and color
-------------------------------------------------- */
footer {
  padding-top: 30px;
  background-color: #292c2f;
  color: white;
}

footer a {
  color: #999;
  text-decoration:none;
}

footer a:hover, footer a:focus {
  color: #aaa;
  text-decoration:none;
  border-bottom:1px dotted #999;
}

footer .form-control {
    background-color: #1f2022;
    box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
    border: none;
    resize: none;
    color: #d1d2d2;
    padding: 0.7em 1em;
}
</style>