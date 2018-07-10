<div class=" mt-5">

<!-- Images used to open the lightbox -->
<div class="row">
  <div class="column">
    <img src="https://www.ramblers.com.au/wp-content/uploads/2016/09/aff-belgy-and-tracy-with-aff-student-g0010071-bywade-800x500.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow" width="300" height="200">
  </div>
  <div class="column">
    <img src="https://www.flynfriends.com/wp-content/uploads/2016/12/DSC00084-800x500.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow" width="300" height="200" >
  </div>
  <div class="column">
    <img src="http://mblogthumb1.phinf.naver.net/MjAxNjEyMTRfMTI5/MDAxNDgxNjQyNTA3ODY0.GTG25ImcL0ZiLDGepjy4a7Fn5Qc7avmJgq07Pj1yLgAg.NFrJy_qg3iYHZvyPZiFR23-wRbzlkkkyL21kDjpEfUIg.JPEG.han_pan/%EC%8A%A4%ED%81%AC%EB%A6%B0%EC%83%B7_2016-09-05_%EC%98%A4%ED%9B%84_2.15.54.jpg?type=w800" onclick="openModal();currentSlide(3)" class="hover-shadow" width="300" height="200">
  </div>
  <div class="column">
    <img src="http://www.skydive.wroclaw.pl/wp-content/uploads/2014/01/aff3.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow" width="300" height="200">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="https://www.ramblers.com.au/wp-content/uploads/2016/09/aff-belgy-and-tracy-with-aff-student-g0010071-bywade-800x500.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="https://www.flynfriends.com/wp-content/uploads/2016/12/DSC00084-800x500.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="http://mblogthumb1.phinf.naver.net/MjAxNjEyMTRfMTI5/MDAxNDgxNjQyNTA3ODY0.GTG25ImcL0ZiLDGepjy4a7Fn5Qc7avmJgq07Pj1yLgAg.NFrJy_qg3iYHZvyPZiFR23-wRbzlkkkyL21kDjpEfUIg.JPEG.han_pan/%EC%8A%A4%ED%81%AC%EB%A6%B0%EC%83%B7_2016-09-05_%EC%98%A4%ED%9B%84_2.15.54.jpg?type=w800" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="http://www.skydive.wroclaw.pl/wp-content/uploads/2014/01/aff3.jpg" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    
  </div>
</div>

<style>
.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 58.3px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 800px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
</style>

<script>
// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>