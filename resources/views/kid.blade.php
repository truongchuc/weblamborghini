@extends('master.master')
@section('title','Homepage')
@section('content')
<div class="CSSgal">

  <!-- Don't wrap targets in parent -->
  <s id="s1"></s> 
  <s id="s2"></s>
  <s id="s3"></s>
  <s id="s4"></s>

  <div class="slider1">
    <div>
			<img src="https://static.lamborghinistore.com/media/wysiwyg/LMBGST-666-A_14.jpg" alt="" width="100%" height="110%">
		</div>
    <div>
			<img src="https://static.lamborghinistore.com/media/wysiwyg/LMBGST-666-C_2.jpg" alt="" width="100%" height="110%">
		</div>
    <div>
			<img src="https://static.lamborghinistore.com/media/wysiwyg/2-SLIDER-D-1920x1200_14.jpg" alt="" width="100%" height="110%">
		</div>
    <div>
			<img src="https://static.lamborghinistore.com/media/wysiwyg/LMBGST-666-C_2.jpg" alt="" width="100%" height="110%">
		</div>
  </div>
  <div class="prevNext">
    <div><a href="#s4"></a><a href="#s2"></a></div>
    <div><a href="#s1"></a><a href="#s3"></a></div>
    <div><a href="#s2"></a><a href="#s4"></a></div>
    <div><a href="#s3"></a><a href="#s1"></a></div>
  </div>


</div>
        
    </div>
    <style>
        *{box-sizing: border-box; -webkit-box-sizing: border-box; }
html, body { height: 100%; }
body { margin: 0; font: 16px/1.3 sans-serif; }

/*
PURE RESPONSIVE CSS3 SLIDESHOW GALLERY by Roko C. buljan
http://stackoverflow.com/a/34696029/383904
*/

.CSSgal {
	position: relative;
	overflow: hidden;
	height: 100%; /* Or set a fixed height */
}

/* SLIDER */

.CSSgal .slider1 {
	height: 100%;
	white-space: nowrap;
	font-size: 0;
	transition: 0.8s;
}

/* SLIDES */

.CSSgal .slider1 > * {
	font-size: 1rem;
	display: inline-block;
	white-space: normal;
	vertical-align: top;
	height: 100%;
	width: 100%;
	background: none 50% no-repeat;
	background-size: cover;
}

/* PREV/NEXT, CONTAINERS & ANCHORS */

.CSSgal .prevNext {
	position: absolute;
	z-index: 1;
	top: 50%;
	width: 100%;
	height: 0;
}

.CSSgal .prevNext > div+div {
	visibility: hidden; /* Hide all but first P/N container */
}

.CSSgal .prevNext a {
	background: #fff;
	position: absolute;
	width:       60px;
	height:      60px;
	line-height: 60px; /* If you want to place numbers */
	text-align: center;
	opacity: 0.7;
	-webkit-transition: 0.3s;
					transition: 0.3s;
	-webkit-transform: translateY(-50%);
					transform: translateY(-50%);
	left: 0;
}
.CSSgal .prevNext a:hover {
	opacity: 1;
}
.CSSgal .prevNext a+a {
	left: auto;
	right: 0;
}

/* NAVIGATION */

.CSSgal .bullets {
	position: absolute;
	z-index: 2;
	bottom: 0;
	padding: 10px 0;
	width: 100%;
	text-align: center;
}
.CSSgal .bullets > a {
	display: inline-block;
	width:       30px;
	height:      30px;
	line-height: 30px;
	text-decoration: none;
	text-align: center;
	background: rgba(255, 255, 255, 1);
	-webkit-transition: 0.3s;
					transition: 0.3s;
}
.CSSgal .bullets > a+a {
	background: rgba(255, 255, 255, 0.5); /* Dim all but first */
}
.CSSgal .bullets > a:hover {
	background: rgba(255, 255, 255, 0.7) !important;
}

/* NAVIGATION BUTTONS */
/* ALL: */
.CSSgal >s:target ~ .bullets >* {      background: rgba(255, 255, 255, 0.5);}
/* ACTIVE */
#s1:target ~ .bullets >*:nth-child(1) {background: rgba(255, 255, 255,   1);}
#s2:target ~ .bullets >*:nth-child(2) {background: rgba(255, 255, 255,   1);}
#s3:target ~ .bullets >*:nth-child(3) {background: rgba(255, 255, 255,   1);}
#s4:target ~ .bullets >*:nth-child(4) {background: rgba(255, 255, 255,   1);}
/* More slides? Add here more rules */

/* PREV/NEXT CONTAINERS VISIBILITY */
/* ALL: */
.CSSgal >s:target ~ .prevNext >* {      visibility: hidden;}
/* ACTIVE: */
#s1:target ~ .prevNext >*:nth-child(1) {visibility: visible;}
#s2:target ~ .prevNext >*:nth-child(2) {visibility: visible;}
#s3:target ~ .prevNext >*:nth-child(3) {visibility: visible;}
#s4:target ~ .prevNext >*:nth-child(4) {visibility: visible;}
/* More slides? Add here more rules */

/* SLIDER ANIMATION POSITIONS */

#s1:target ~ .slider1 {transform: translateX(   0%); -webkit-transform: translateX(   0%);}
#s2:target ~ .slider1 {transform: translateX(-100%); -webkit-transform: translateX(-100%);}
#s3:target ~ .slider1 {transform: translateX(-200%); -webkit-transform: translateX(-200%);}
#s4:target ~ .slider1 {transform: translateX(-300%); -webkit-transform: translateX(-300%);}
/* More slides? Add here more rules */


/* YOU'RE THE DESIGNER! 
   ____________________
   All above was mainly to get it working :)
   CSSgal CUSTOM STYLES / OVERRIDES HERE: */

.CSSgal{
	color: #fff;	
	text-align: center;
}
.CSSgal .slider1 h2 {
	margin-top: 40vh;
	font-weight: 200;
	letter-spacing: -0.06em;
	word-spacing: 0.2em;
	font-size: 3em;
}
.CSSgal a {
	border-radius: 50%;
	margin: 0 3px;
	color: rgba(0,0,0,0.8);
	text-decoration: none;
}
    </style>
    <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>THE LATEST LOOKS FOR THE SEASON</h2>
                <p>A collection of apparel for young fans of the super-sports cars from Sant’Agata Bolognese. A selection of sweatshirts, T-shirts and jackets adorned with statement rubber-coated prints and a new standout glitch effect that makes for outfits that are not only iconic, but practical and comfortable too.</p>
                <p>&diams;&ensp;DISCOVER THE COLLECTION</p>
            </div>
            <div class="col-6">
                <img src="https://static.lamborghinistore.com/media/wysiwyg/LMBGST-666-I_2.jpg" alt="" width="100%" height="650px">
            </div>
        </div>
    </div>
<br><br><br><br>
<div class="container">
    <h2>PREVIEW</h2>
<div class="tabs">
  <input type="radio" class="tabs__radio" name="tabs-example" id="tab1" checked>
  <label for="tab1" class="tabs__label">SweatShrits</label>
  <div class="tabs__content">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<div class="wrapper">
    <div class="carousel owl-carousel">
       <div class="card card-1">
       <img src="https://static.lamborghinistore.com/rx/1250x,ofmt_webp/media//catalog/product/1/5/15451CCB072_01.jpg" alt="">
       </div>
       <div class="card card-2">
          <img src="https://static.lamborghinistore.com/rx/1250x,ofmt_webp/media//catalog/product/1/5/15455CCU227_01.jpg" alt="">
       </div>
       <div class="card card-3">
          <img src="https://static.lamborghinistore.com/rx/1250x,ofmt_webp/media//catalog/product/1/5/15455CCO007_01.jpg" alt="">
       </div>
       <div class="card card-4">
          <img src="https://static.lamborghinistore.com/rx/1250x,ofmt_webp/media//catalog/product/1/5/15455CCE103_01.jpg" alt="">
       </div>
       <div class="card card-5">
          <img src="https://static.lamborghinistore.com/rx/1250x,ofmt_webp/media//catalog/product/1/5/15452CCY052_01.jpg" alt="">
       </div>
    </div>
 </div>
 
  </div>
  <input type="radio" class="tabs__radio" name="tabs-example" id="tab2">
  <label for="tab2" class="tabs__label">T-shirts</label>
  <div class="tabs__content">
  <div class="wrapper">
    <div class="carousel owl-carousel">
       <div class="card card-1">
       <img src="https://static.lamborghinistore.com/rx/1250x,ofmt_webp/media//catalog/product/1/5/15462CCB072_01.jpg" alt="">
       </div>
       <div class="card card-2">
          <img src="https://static.lamborghinistore.com/rx/1250x,ofmt_webp/media//catalog/product/1/5/15456CCB072_01.jpg" alt="">
       </div>
       <div class="card card-3">
          <img src="https://static.lamborghinistore.com/rx/1250x,ofmt_webp/media//catalog/product/1/5/15456CCU227_01.jpg" alt="">
       </div>
       <div class="card card-4">
          <img src="https://static.lamborghinistore.com/rx/1250x,ofmt_webp/media//catalog/product/1/5/15458CCG047_01.jpg" alt="">
       </div>
       <div class="card card-5">
          <img src="https://static.lamborghinistore.com/rx/1250x,ofmt_webp/media//catalog/product/1/5/15458CCU039_01.jpg" alt="">
       </div>
    </div>
 </div>
  </div>
</div>
</div>
<style>
    .tabs {
  display: flex;
  flex-wrap: wrap;
  max-width: 400px;
  font-family: sans-serif;
}

.tabs__label {
  padding: 10px 16px;
  cursor: pointer;
}

.tabs__radio {
  display: none;
}

.tabs__content {
  order: 1;
  width: 100%;
  line-height: 1.5;
  font-size: 0.9em;
  display: none;
}

.tabs__radio:checked + .tabs__label {
  font-weight: bold;
  color: #009578;
  border-bottom: 2px solid #009578;
}

.tabs__radio:checked + .tabs__label + .tabs__content {
  display: initial;
}

</style>
<style>
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
.tabs{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.wrapper{
  width: 100%;
}
.carousel{
  max-width: 1200px;
  margin: auto;
  padding: 0 30px;
  height: auto;
  width: 11000px;
}
.carousel .card{
  color: rgb(0, 0, 0);
  text-align: center;
  margin: 20px 0;
  line-height: 250px;
  font-size: 90px;
  font-weight: 600;
  border-radius: 10px;
  box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
}
.carousel .card-1{
 border: none;
}
.carousel .card-2{
    border: none;
}
.carousel .card-3{
    border: none;
}
.carousel .card-4{
    border: none;
}
.carousel .card-5{
    border: none;
}
.owl-dots{
  text-align: center;
  margin-top: 40px;
}
.owl-dot{
  height: 15px;
  width: 45px;
  margin: 0 5px;
  outline: none;
  border-radius: 14px;
  border: 2px solid #0072bc!important;
  box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
  transition: all 0.2s ease;
}
.owl-dot.active,
.owl-dot:hover{
  background: #19405a!important;
}
</style>
<script>
  $(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             600:{
items:2,
 nav: false
},
1000:{
items:3,
nav: false
             }
       }
         });
 
</script>
<br><br><br>
<div class="container">
  <div class="row">
<div class="col-6">
  <img class="c400" src="https://static.lamborghinistore.com/media/wysiwyg/LMBGST-666-L_2.jpg" alt="">
</div>
<style>
.c400{
  height: 100%;
  width: 100%;
}
</style>
<div class="col-6 c408">
  <p>ICONIC ELEMENTS</p>
  <h2>SWEATSHIRTS</h2>
  <p>Beautifully bright and elevated with irresistibly stylish prints, they will be a chic Automobili-Lamborghini addition to children’s wardrobe too.</p>
  <p>&diams;&ensp;PICK YOUR FAVOURITE</p>
  <br><br><br>
  <img class="c413" src="https://static.lamborghinistore.com/media/wysiwyg/LMBGST-666-M_2.jpg" alt="">
</div>
<style>
  .c413{
    height: 55%;
    width: 100%;
  }
  .c408{
    left: 80px;
  }
</style>
  </div>
</div>
<br><br><br>
<style>
.c470 {
  position: relative;
  text-align: center;
  color: white;
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 25%;
  transform: translate(-50%, -25%);
  font-size: 30px;
}
.c474{
  font-size: 90px;
}
</style>
<div class="fuid-container c470">
  <img src="https://static.lamborghinistore.com/media/wysiwyg/LMBGST-666-G_2.jpg" alt="Snow" style="width:100%;">
  <div class="centered">
    <p class="c477">SPORTING SOUL</p>
    <h2 class="c474">T-SHIRTS</h2>
    <p class="c475" >&diams;&ensp;DISCOVER THE COLLECTION</p>
  </div>
</div>
<style>
  .c477{
    font-size: 20px;
    left:-25px;
  }
  .c475{
    font-size: 20px;
  }
</style>
<br><br><br>
<div class="fuid-container c488" >
<div class="slider-wrap">
  <div class="slider" id="slider">
    <div class="holder">
      <div class="slide" id="slide-0"><span class="temp">LEGO</span></div>
      <div class="slide" id="slide-1"><span class="temp">PISTA OMP</span></div>
        <div class="slide" id="slide-2"><span class="temp">LOOKSMART</span></div>
        
    </div>
  </div>
</div>
</div>

<style>
  @import url(https://fonts.googleapis.com/css?family=Josefin+Slab:100);

.slider-wrap {
  width: 1000px;
  height: 500px;
  margin: 20px auto;
}
.c488 {
  background-image: url(https://media.istockphoto.com/photos/dark-blue-metal-pattern-background-picture-id1161683702?k=20&m=1161683702&s=612x612&w=0&h=G84UjjnfQQuvQs1yY9pTc3Mbqa5hCr0jgHcQ3ly6ocY=);
  padding: 60px;
  
}
.slider {
  overflow-x: scroll;
}
.holder {
  width: 300%;
}
.slide {
  float: left;
  width: 1000px;
  height: 500px;
  position: relative;
  background-position: -100px 0;
}
.temp {
  position: absolute;
  color: white;
  font-size: 100px;
  bottom: 15px;
  left: 15px;
  font-family: 'Josefin Slab', serif;
  font-weight: 100;
}
#slide-0 {
  background-image: url(https://static.lamborghinistore.com/media/wysiwyg/LMB-72-S04-DESK_8.jpg);
}
#slide-1 {
  background-image: url(https://static.lamborghinistore.com/media/wysiwyg/Desk_OMP_37.jpg);
}
#slide-2 {
  background-image: url(https://static.lamborghinistore.com/media/wysiwyg/D03_55.jpg);
}
.slide:before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 40%;
  background: linear-gradient(transparent, black);
}
.slider-nav {
  text-align: center;
  margin: 10px 0 0 0;
}
.slider-nav a {
  width: 10px;
  height: 10px;
  display: inline-block;
  background: #ddd;
  overflow: hidden;
  text-indent: -9999px;
  border-radius: 50%;
}
.slider-nav a.active {
  background: #999;
}
</style>
<script>
  var slider = {
  
  // Not sure if keeping element collections like this
  // together is useful or not.
  el: {
    slider: $("#slider"),
    allSlides: $(".slide"),
    sliderNav: $(".slider-nav"),
    allNavButtons: $(".slider-nav > a")
  },
  
  timing: 800,
  slideWidth: 300, // could measure this
 
  // In this simple example, might just move the
  // binding here to the init function
  init: function() {
    this.bindUIEvents();
  },
  
  bindUIEvents: function() {
    // You can either manually scroll...
    this.el.slider.on("scroll", function(event) {
      slider.moveSlidePosition(event);
    });
    // ... or click a thing
    this.el.sliderNav.on("click", "a", function(event) {
      slider.handleNavClick(event, this);
    });
    // What would be cool is if it had touch
    // events where you could swipe but it
    // also kinda snapped into place.
  },
  
  moveSlidePosition: function(event) {
    // Magic Numbers =(
    this.el.allSlides.css({
      "background-position": $(event.target).scrollLeft()/6-100+ "px 0"
    });  
  },
  
  handleNavClick: function(event, el) {
    event.preventDefault();
    var position = $(el).attr("href").split("-").pop();
    
    this.el.slider.animate({
      scrollLeft: position * this.slideWidth
    }, this.timing);
    
    this.changeActiveNav(el);
  },
  
  changeActiveNav: function(el) {
    this.el.allNavButtons.removeClass("active");
    $(el).addClass("active");
  }
  
};

slider.init();

// https://codepen.io/BaylorRae/pen/ImGBC
// Originally added click links, so I ported over and re-wrote
</script>
@endsection