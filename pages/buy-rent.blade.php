<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Orphanou Estates</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
  <style>
  html{
  	scroll-behavior: smooth;
  }
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
      margin-bottom: 0px;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }

  .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
    color: #555;
    background-color: #cd3100;
}

  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }

  .form-control{
		display: unset;
	}

	.prev , .next {
    background-color: #f4511e;
	}

  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

  /*--------*/

  	input[type="radio"],
	input[type="checkbox"] {
	  margin: 8px 0 0;
	  margin-top: 1px \9; // IE8-9
	  line-height: normal;
	}

	.btn:hover {
      border: 1px solid #f4511e;
      /*background-color: #fff !important;*/
      color: #black;
  }

  .search li a:hover{
  	background-color: #f4511e;
  }

  .image {
  opacity: 1;
  display: block;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.card:hover .image {
  opacity: 0.6;
}

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 9999; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}



/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #f4511e;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-header {
    padding: 2px 16px;
    background-color: #f4511e;
    color: white;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #f2f3f4;
    color: black

}

/* Hide the images by default */
.mySlides {
  display: block;
}

.mySlides2 {
  display: block;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */

.next {
  cursor: pointer;
  position: relative;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

.prev {
  cursor: pointer;
  position: relative;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 3px 0 0 3px;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
/*.next {
  right: 0px;
  border-radius: 3px 0 0 3px;
}*/

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

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.bootstrap-datetimepicker-widget table td,
 
.bootstrap-datetimepicker-widget table th {
 
text-align: center;
 
border-radius: 0px;
 
background-color: white;
 
color:black;
 
}

.bootstrap-datetimepicker-widget table td.day{
  background: white;
  cursor: pointer;
  color:black;
}

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="background: linear-gradient(to left, #f4511e , #565671); color: black;">

@extends('main')
  @section('navbar')
				</ul>
			</div>
			
  		</div>
	</nav>
@endsection
<div id="buy" class="container-fluid" style="margin-top: 80px;">
  <div class="row">
    
    <div class="col-sm-12 well auth-box">
      <!-- <span class="glyphicon glyphicon-signal logo"></span> -->
      <form>
        			<fieldset>

          <!-- Form Name -->
		          		<legend>Search</legend>

		          <!-- Password input-->
		           <!-- Multiple Checkboxes (inline) -->
		           		<div class="col-sm-4 form-line">
			      			<div class="form-group">
			            		<label class=" control-label" for="checkboxes">Interested for</label>			            		
			            		<div class="">
				              		<label class="checkbox-inline" for="checkboxes-0">
				                		<input name="checkboxes" id="checkboxes-0" value="" type="checkbox" checked="">Buy
				              		</label>
				              		<label class="checkbox-inline" for="checkboxes-1">
				                		<input name="checkboxes" id="checkboxes-1" value="" type="checkbox">Rent
				              		</label>             
			            		</div>
			          		</div>


			          <!-- Select Basic -->
				          	<div class="form-group">
				            	<label class=" control-label" for="selectbasic">Town</label>
				            	<div class="">
				              		<select id="selectbasic" name="selectbasic" class="form-control">
						                <option value="1">Nicosia</option>
						                <option value="2">Larnaca</option>
						                <option value="3">Limassol</option>
						                <option value="4">Paphos</option>
						                <option value="5">Famagusta</option>
				              		</select>
				            	</div>
				          	</div>

				          	<div class="form-group">
				            	<label class=" control-label" for="searchinput">Area</label>
				            	<div class="">
				              		<input id="searchinput" name="searchinput" placeholder="Search for specific area" class="form-control input-md" type="search">
				            	</div>
				          	</div>

				          	<div class="form-group">
				            	<label class=" control-label" for="selectbasic">Property's Type</label>
				            	<div class="">
				              		<select id="selectbasic" name="selectbasic" class="form-control">
						                <option value="1">Apartment</option>
						                <option value="2">Building</option>
						                <option value="3">House</option>
						                <option value="4">Field</option>
						                <option value="5">Office</option>
						                <option value="6">Plot</option>
						                <option value="7">Warehouse</option>
						                <option value="8">Store</option>
				              		</select>
				            	</div>
				          	</div>

				          	<div class="form-group">
			            		<label class="control-label" for="radios">Subtype of Property</label>
			            		<div class=""> 
			              			<label class="radio-inline" for="radios-0">
			                			<input name="radios" id="radios-0" value="" checked="checked" type="radio">
			                			Residential
			              			</label> 
			              			<label class="radio-inline" for="radios-1">
			                			<input name="radios" id="radios-1" value="2" type="radio">
			                			Commercial
			              			</label> 
			              			<label class="radio-inline" for="radios-2">
			                			<input name="radios" id="radios-2" value="3" type="radio">
			                			Industrial
			              			</label> 
			            		</div>
			          		</div>

			          	</div>

			          	<div class="col-sm-4"> 

			          		<div class="form-group">
			            		<label class="control-label" for="radios">Furnished</label>
			            		<div class="">
			              			<div class="radio">
			                			<label for="radios-4">
			                  				<input name="radios-2" id="radios-4" type="radio">
			                  				Yes
			                			</label>
			              			</div>
			              			<div class="radio">
			                			<label for="radios-5">
			                  				<input name="radios-2" id="radios-5" value="" type="radio">
			                  				No
			                			</label>
			              			</div>
			            		</div>
			          		</div>

			          		<div class="form-group">
			            		<label class="control-label" for="radios">Rooms</label>
			            		<div class="section input-group form-group">
	    							<span onclick="btnminus()" class="btn-minus input-group-addon" style="cursor: pointer;">-</span>
								    <input value="1" id="m1" type="text" class="m1 form-control" name="m1" style="text-align: center;">
								    <span onclick="btnplus()" class="btn-plus input-group-addon" style="cursor: pointer;">+</span>
						  		</div>
			              	</div>
			                   
			                <div class="form-group">
			            		<label class="control-label" for="radios">Min Price (€)</label> 
			            		<div class="section input-group form-group">
	    							<span onclick="btnminus2()" class="btn-minus2 input-group-addon" style="cursor: pointer;">-</span>
								    <input value="10" id="m2" type="text" class="m2 form-control" name="m2" placeholder="min price" style="text-align: center;">
								    <span onclick="btnplus2()" class="btn-plus2 input-group-addon" style="cursor: pointer;">+</span>
						  		</div>
			              	</div>

			              	<div class="form-group">
			            		<label class="control-label" for="radios">Max Price (€)</label>
			            		<div class="section input-group form-group">
	    							<span onclick="btnminus3()" class="btn-minus3 input-group-addon" style="cursor: pointer;">-</span>
								    <input value="10" id="m3" type="text" class="m3 form-control" name="m3" placeholder="min price" style="text-align: center;">
								    <span onclick="btnplus3()" class="btn-plus3 input-group-addon" style="cursor: pointer;">+</span>
						  		</div>
			              	</div>

			            </div>

			            <div class="col-sm-4"> 
			            	<div class="form-group">
				            	<label class=" control-label" for="selectbasic">Square meters</label>
				            	<div class="">
				              		<select id="selectbasic" name="selectbasic" class="form-control">
						                <option value="1">50  or  less</option>
						                <option value="2">50 - 75</option>
						                <option value="3">75 - 100</option>
						                <option value="4">100 - 125</option>
						                <option value="5">125 - 150</option>
						                <option value="6">150 - 200</option><option value="7">200+</option>

				              		</select>
				            	</div>
				          	</div>


				          	<div class="form-group">
			            		<label class=" control-label" for="checkboxes">Pool included</label>			            		
			            		<div class="">
				              		<label class="checkbox-inline" for="checkboxes-0">
				                		<input name="checkboxes" id="checkboxes-0" value="" type="checkbox" checked="">Yes
				              		</label>
				              		<label class="checkbox-inline" for="checkboxes-1">
				                		<input name="checkboxes" id="checkboxes-1" value="" type="checkbox">No
				              		</label>             
			            		</div>
			          		</div>

			          		<div class="form-group">
			            		<label class="control-label" for="radios">Floors</label>
			            		<div class="section input-group form-group">
	    							<span onclick="btnminus0()" class="btn-minus0 input-group-addon" style="cursor: pointer;">-</span>
								    <input value="1" id="m0" type="text" class="m0 form-control" name="m0" style="text-align: center;">
								    <span onclick="btnplus0()" class="btn-plus0 input-group-addon" style="cursor: pointer;">+</span>
						  		</div>
			              	</div>

				          	<div class="form-group search" style="margin-top: 50px;">
		            			<div class="search" id="search">
		              				<ul class="nav search" id="search" style="width: 100%; text-align: center; border: solid;
		              				border-color: #1f2a3c;">
		              					<li class="search" id="search" onclick="result()" style="width: 100%;"><a onclick="ser()" class="search" id="search" href="#res1" style="color: #1f2a3c; font-size: 20px;"><strong>Search</strong></a></li>
		              				</ul>
		            			</div>
		          			</div>
			            </div>
	    			</fieldset>
      			</form>
    </div>
  </div>
  <div class="row res hidden container-fluid" id="res1" style="font-size: 30px; margin-bottom: -100px;"><br><strong>Results<hr></strong></div>

  <div class="row container-fluid hidden res" id="res" name="res" style="width: 100%;">
  	<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 style="color: white;">
      	Property in Ergates
      </h2>
    </div>
    <div class="modal-body">
    <div class="mySlides">
		    <div class="numbertext">1 / 6</div>
		    <a class="prev" onclick="plusSlides(-1)">❮</a> 
		    <img src="images/r1.jpg" width="600px" height="500px">
		    <a class="next" onclick="plusSlides(1)">❯</a>
		    <div style="float: right; margin-right: 15%; margin-bottom: 50px;"><br><br><strong>Property Details For Sale</strong><br><br>•Property Type: Apartment<br>•Location: Famagusta, Paralimni, Cyprus<br>•Internal Area: 65sqm<br>•Uncovered Verandas: 8sqm<br>•Bedrooms: 1<br>•Price: €110,000-€114,000<br>•VAT: Plus<br>More Information<br>•Pool: Yes<br>•Status: Under-construction<br>•Estimated Year: 2019<br>•Month of Completion: JUNE</div>
  	</div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <a class="prev" onclick="plusSlides(-1)">❮</a> 
    <img src="images/r2.jpg" width="600px" height="500px">
    <a class="next" onclick="plusSlides(1)">❯</a>
    <div style="float: right; margin-right: 100px; margin-bottom: 50px;"><br><br>Property Details For Sale<br><br>•Property Type: Apartment<br>•Location: Famagusta, Paralimni, Cyprus<br>•Internal Area: 65sqm<br>•Uncovered Verandas: 8sqm<br>•Bedrooms: 1<br>•Price: €110,000-€114,000<br>•VAT: Plus<br>More Information<br>•Pool: Yes<br>•Status: Under-construction<br>•Estimated Year: 2019<br>•Month of Completion: JUNE</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <a class="prev" onclick="plusSlides(-1)">❮</a> 
    <img src="images/r3.jpg" width="600px" height="500px">
    <a class="next" onclick="plusSlides(1)">❯</a>
    <div style="float: right; margin-right: 100px; margin-bottom: 50px;"><br><br>Property Details For Sale<br><br>•Property Type: Apartment<br>•Location: Famagusta, Paralimni, Cyprus<br>•Internal Area: 65sqm<br>•Uncovered Verandas: 8sqm<br>•Bedrooms: 1<br>•Price: €110,000-€114,000<br>•VAT: Plus<br>More Information<br>•Pool: Yes<br>•Status: Under-construction<br>•Estimated Year: 2019<br>•Month of Completion: JUNE</div>
</div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <a class="prev" onclick="plusSlides(-1)">❮</a> 
    <img src="images/r4.jpg" width="600px" height="500px">
    <a class="next" onclick="plusSlides(1)">❯</a>
    <div style="float: right; margin-right: 100px; margin-bottom: 50px;"><br><br>Property Details For Sale<br><br>•Property Type: Apartment<br>•Location: Famagusta, Paralimni, Cyprus<br>•Internal Area: 65sqm<br>•Uncovered Verandas: 8sqm<br>•Bedrooms: 1<br>•Price: €110,000-€114,000<br>•VAT: Plus<br>More Information<br>•Pool: Yes<br>•Status: Under-construction<br>•Estimated Year: 2019<br>•Month of Completion: JUNE</div>
</div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <a class="prev" onclick="plusSlides(-1)">❮</a> 
    <img src="images/r5.jpg" width="600px" height="500px">
    <a class="next" onclick="plusSlides(1)">❯</a>
    <div style="float: right; margin-right: 100px; margin-bottom: 50px;"><br><br>Property Details For Sale<br><br>•Property Type: Apartment<br>•Location: Famagusta, Paralimni, Cyprus<br>•Internal Area: 65sqm<br>•Uncovered Verandas: 8sqm<br>•Bedrooms: 1<br>•Price: €110,000-€114,000<br>•VAT: Plus<br>More Information<br>•Pool: Yes<br>•Status: Under-construction<br>•Estimated Year: 2019<br>•Month of Completion: JUNE</div>
</div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <a class="prev" onclick="plusSlides(-1)">❮</a> 
    <img src="images/r6.jpg" width="600px" height="500px">
    <a class="next" onclick="plusSlides(1)">❯</a>
    <div style="float: right; margin-right: 100px; margin-bottom: 50px;"><br><br>Property Details For Sale<br><br>•Property Type: Apartment<br>•Location: Famagusta, Paralimni, Cyprus<br>•Internal Area: 65sqm<br>•Uncovered Verandas: 8sqm<br>•Bedrooms: 1<br>•Price: €110,000-€114,000<br>•VAT: Plus<br>More Information<br>•Pool: Yes<br>•Status: Under-construction<br>•Estimated Year: 2019<br>•Month of Completion: JUNE</div>
</div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" height="133px" src="images/r1.jpg" style="width:100%" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" height="133px" src="images/r2.jpg" style="width:100%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" height="133px" src="images/r3.jpg" style="width:100%" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" height="133px" src="images/r4.jpg" style="width:100%" onclick="currentSlide(4)">
    </div>
    <div class="column">
      <img class="demo cursor" height="133px" src="images/r5.jpg" style="width:100%" onclick="currentSlide(5)">
    </div>    
    <div class="column">
      <img class="demo cursor" height="133px" src="images/r6.jpg" style="width:100%" onclick="currentSlide(6)">
    </div>
  </div>
    </div>

    <div class="modal-footer" style="float: left; margin-bottom: 50px;">
      <p style="text-align: left;"><strong>Description</strong>A luxurious modern development in a sought-after location setting will make this project very appealing to home buyers looking for a permanent residence or a stylish holiday apartment.
Unique in both design and quality, this exclusive residential development is found in the heart Paralimni, walking distance to the business and commercial center of the town.
As these impressive residences have been designed for permanent residence, layout, dimensions and use of space have all been carefully considered during the design process.
The development will have a variety of high-quality internal choices available for each purchaser to put the finishing touches to their property.
Location is the main factor that makes this complex such an appealing choice. Classed as the hub of the East Coast, Paralimni has boomed in recent years from a rural community into a progressive town, which boasts an array of shops, banks, offices, boutiques and restaurants.
</p>
    </div>
  </div>

</div>



  <div class="card col-md-4" style="border: solid; width: 255px; padding-right: 4px; padding-left: 0px; margin-right: 20%; margin-top: 10px;">
  <img class="card-img-top image i1" id="i1" src="images/r1.jpg" alt="Card image cap" height="200px" width="250px" style="cursor: pointer;">
  <div class="card-body" style="padding-left: 3px;">
    <h5 class="card-title"><strong>Ergates</strong></h5>
    <p class="card-text">•	For Sale <br>
•	Property Type: Apartment<br>
•	Location: Nicosia, Ergates, Cyprus<br>
•	Internal Area: 65sqm<br>
•	Uncovered Verandas: 8sqm<br>
•	Bedrooms: 1<br>
•	Price: €110,000-€114,000
</p>
    <a class="btn btn-primary view_res" id="view_res" style="width: 250px; padding-right: 0px; padding-left: 0px; margin-left: -3px; margin-right: -6px; border-radius: 0px; background-color: #1f2a3c; border-color: #1f2a3c;">View Details</a>
    <a onclick="ap1()" href="#appointment" class="btn btn-primary ap1" id="ap1" style="width: 250px; padding-right: 0px; padding-left: 0px; margin-left: -3px; margin-right: -6px; border-radius: 0px; background-color: #1f2a3c; border: solid; border-color: #1f2a3c; border-top-color: black;">Arrange an appointment</a>
  </div>
</div>
<div class="card col-md-4" style="border: solid; width: 255px; padding-right: 4px; padding-left: 0px; margin-right: 20%; margin-top: 10px;">
  <img class="card-img-top image i2" id="i2" src="images/r2.jpg" alt="Card image cap" height="200px" width="250px" style="cursor: pointer;">
  <div class="card-body" style="padding-left: 3px;">
    <h5 class="card-title"><strong>Famagousta</strong></h5>
    <p class="card-text">•	Plot Granting <br>
•	Property Type: Plot<br>
•	Location: Famagusta, Paralimni, Cyprus<br>
•	Price: €170,000<br>
•	VAT: N/A
</p>
    <a class="btn btn-primary" style="width: 250px; padding-right: 0px; padding-left: 0px; margin-left: -3px; margin-right: -4px; border-radius: 0px; background-color: #1f2a3c; border-color: #1f2a3c;">View Details</a>
    <a onclick="ap1()" href="#appointment" class="btn btn-primary ap1" id="ap1" style="width: 250px; padding-right: 0px; padding-left: 0px; margin-left: -3px; margin-right: -6px; border-radius: 0px; background-color: #1f2a3c; border: solid; border-color: #1f2a3c; border-top-color: black;">Arrange an appointment</a>
  </div>
</div>
<div class="card col-md-4" style="border: solid; width: 255px; padding-right: 4px; padding-left: 0px; margin-top: 10px;">
  <img class="card-img-top image i3" id="i3" src="images/r3.jpg" alt="Card image cap" height="200px" width="250px" style="cursor: pointer;">
  <div class="card-body" style="padding-left: 3px;">
    <h5 class="card-title"><strong>Mazotos</strong></h5>
    <p class="card-text">•	For Sale<br>
•	Property Type: House<br>
•	Property Subtype: Semi-detached<br>
•	Location: Larnaca, Mazotos, Cyprus<br>
•	Internal Area: 78sqm<br>
•	Bedrooms: 2<br>
•	Price: €69,000<br>
•	VAT: N/A
</p>
   <a class="btn btn-primary" style="width: 250px; padding-right: 0px; padding-left: 0px; margin-left: -3px; margin-right: -6px;  border-radius: 0px; background-color: #1f2a3c; border-color: #1f2a3c;">View Details</a>
   <a onclick="ap1()" href="#appointment" class="btn btn-primary ap1" id="ap1" style="width: 250px; padding-right: 0px; padding-left: 0px; margin-left: -3px; margin-right: -6px; border-radius: 0px; background-color: #1f2a3c; border: solid; border-color: #1f2a3c; border-top-color: black;">Arrange an appointment</a>
  </div>
</div>
</div>
  <div class="hidden" id="appointment">
  <div class="row col-sm-12" style="font-size: 36px; margin-top: 20px;"><strong>Arrange an appointment with us</strong></div>
  	 <div class="col-sm-12 row">                  
                    <form id="brform"  method="post" action="{{url('BuyRentStore')}}" role="form">
                      {{csrf_field()}}
                        <div class="messages" id="form-messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="form_name" type="text" name="FIRST_NAME" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required." maxLength="20">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="form_lastname" type="text" name="LAST_NAME" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required." maxLength="20">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_address">Address *</label>
                                        <input id="form_address" type="text" name="ADDRESS" class="form-control" placeholder="Please enter your address *" required="required" data-error="Address is required." maxLength="40">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="EMAIL" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required." maxLength="40">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Telephone *</label>
                                        <input maxLength="30" id="form_phone" type="text" pattern="\d*" name="TELEPHONE"  class="form-control" placeholder="Please enter your phone*" required oninvalid="setCustomValidity('Please enter your correct phone number ')"
          onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="MESSAGE" class="form-control" placeholder="Message *" rows="4" required="required" data-error="Please,leave us a message." maxLength="300"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                </div>

                                <div class="col-md-4" style="height:130px;">
							        <div class="form-group">
							        	<label for="form_message">Select a date for appointment *</label>
							            <div class='input-group date' id='datetimepicker1' style="width: 100%;">
						                    <div class='input-group date' id='datetimepicker1'>
									          <input type='text' required="required" class="form-control" name="DATETIME" />
									          <span class="input-group-addon">
									            <span class="glyphicon glyphicon-calendar"></span>
									          </span>
									        </div>									        
						                </div>
							        </div>
                            	</div>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-black" value="Send message" style="font-size: 20px; background: transparent; border-color: white;">
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-md-8">
                                   <br>
                                    <small class="text-muted" style="color: white;"><strong>*</strong> These fields are required.</small>
                                </div>
                            </div>
                    </form>   
               </div>
           </div>
</div>

<script  type="text/javascript">


  $('#datetimepicker1').datetimepicker({
     format:'YYYY-MM-DD HH:mm:ss'
  });

	function ap1() {
   var element = document.getElementById("appointment");
   element.classList.remove("hidden");
}

function ser() {
   var element = document.getElementById("appointment");
   element.classList.add("hidden");
}

	var modal = document.getElementById('myModal');


// Get the button that opens the modal
var btn = document.getElementById("i1");
var btn2 = document.getElementById("view_res");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];



// When the user clicks the button, open the modal 
btn.onclick = function() {
	var modal = document.getElementById('myModal');
    modal.style.display = "block";
}

btn2.onclick = function() {
	var modal = document.getElementById('myModal');
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	var modal = document.getElementById('myModal');
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	var modal = document.getElementById('myModal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// }
var slideIndex = 1;
showSlides(slideIndex);
	


function plusSlides(n) {
  showSlides(slideIndex += n);
}

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
  if(dots[slideIndex-1].alt!=""){
  captionText.innerHTML = dots[slideIndex-1].alt;}
}

	function result(){
		
		 $(".res").removeClass("hidden");
		 
		
	} 

	function btnminus0(){
		 var now = $(".m0").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".m0").val(now);
                }else{
                    $(".m0").val("1");
                }
	} 
	function btnplus0(){
		var now = $(".m0").val();
                if ($.isNumeric(now)){
                    $(".m0").val(parseInt(now)+1);
                }else{
                    $(".m0").val("1");
                }
	} 

	function btnminus(){
		 var now = $(".m1").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".m1").val(now);
                }else{
                    $(".m1").val("1");
                }
	} 
	function btnplus(){
		var now = $(".m1").val();
                if ($.isNumeric(now)){
                    $(".m1").val(parseInt(now)+1);
                }else{
                    $(".m1").val("1");
                }
	} 
	function btnminus2(){
		 var now2 = $(".m2").val();
                
                if ($.isNumeric(now2)){
                    if (parseInt(now2) -1 > 9){ now2=now2 - 10;}
                    $(".m2").val(now2);
                }else{
                    $(".m2").val("1");
                }
	} 
	function btnplus2(){
		var now2 = $(".m2").val();
                if ($.isNumeric(now2)){
                    $(".m2").val(parseInt(now2)+10);
                }else{
                    $(".m2").val("1");
                }
	} 
	function btnminus3(){
		var now3 = $(".m3").val();
                if ($.isNumeric(now3)){
                    if (parseInt(now3) -1 > 9){ now3=now3-10;}
                    $(".m3").val(now3);
                }else{
                    $(".m3").val("1");
                }
	} 
	function btnplus3(){
		var now3 = $(".m3").val();
                if ($.isNumeric(now3)){
                    $(".m3").val(parseInt(now3)+10);
                }else{
                    $(".m3").val("1");
                }
	} 

    function inputAlphabet(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode != 32 && (charCode < 65 || charCode > 122))
      return false;
    return true;
  }

  function alphaOnly(input) {
    var regex = /[^a-zA-Z ]/gi;
    input.value = input.value.replace(regex, "");
  }

  function validateEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.EMAIL.value)) {
      return (true);
    }
    else {
      alert("You have entered an invalid email address!");
      return (false);
    }
  }

  function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  }

  function lettersOnly(input) {
    var regex = /[^0-9]/gi;
    input.value = input.value.replace(regex, "");
  }

$(document).ready(function(){

	


  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

<!-- Default Statcounter code for Nicos Orphanou Estates  -->
<script type="text/javascript">
var sc_project=11950604; 
var sc_invisible=0; 
var sc_security="89639aa6"; 
var sc_https=1; 
var scJsHost = "https://";
document.write("<sc"+"ript type='text/javascript' src='" + scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="https://statcounter.com/" target="_blank"><img class="statcounter"
src="https://c.statcounter.com/11950604/0/89639aa6/0/" alt="Web
Analytics"></a></div></noscript>
<!-- End of Statcounter Code -->
<a href="https://statcounter.com/p11950604/?guest=1">View My Stats</a>

</body>
</html>
