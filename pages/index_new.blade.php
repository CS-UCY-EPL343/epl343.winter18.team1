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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  <style>
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

  a {
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

  .team_columns_carousel_wrapper {
    padding: 25px;
    overflow: hidden
}
.team_columns_carousel_control_left,
.team_columns_carousel_control_right {
    top: 26px;
    z-index: 2;
    opacity: 1;
    width: 35px;
    height: 35px;
    border: 0;
    text-shadow: none;
    text-align: center;
    -webkit-transition: all ease-in-out .3s;
    transition: all ease-in-out .3s
}
.team_columns_carousel_control_icons {
    line-height: 35px;
    font-size: 20px!important;
    font-weight: normal!important;
    margin-top:8px;
}
.team_columns_carousel_control_left {
    left: 26px!important
}
.team_columns_carousel_control_right {
    left: 63px!important
}
.adv_left {
    left: 41px!important
}
.adv_right {
    left: 78px!important
}
.team_columns_item_image {
    padding-top: 60px;
    padding-bottom: 25px
}
.team_columns_item_image img {
    width: 100%;
    cursor: pointer;
    -webkit-filter: grayscale(70%);
    -moz-filter: grayscale(70%);
    -ms-filter: grayscale(70%);
    -o-filter: grayscale(70%);
    filter: grayscale(70%);
    -webkit-transition: all ease-in-out .3s;
    -moz-transition: all ease-in-out .3s;
    -ms-transition: all ease-in-out .3s;
    -o-transition: all ease-in-out .3s;
    transition: all ease-in-out .3s

}
.team_columns_item_image:hover img {
    -webkit-filter: grayscale(0%);
    -moz-filter: grayscale(0%);
    -ms-filter: grayscale(0%);
    -o-filter: grayscale(0%);
    filter: grayscale(0%)
}
.team_columns_item_caption {
    padding: 10px;
    text-align: center;
    padding-bottom: 30px
}
.team_columns_item_caption>hr {
    width: 15%
}
.team_columns_item_caption h4 {
    font-weight: 800;
    text-transform: uppercase;
    font-family: 'Open Sans', sans-serif
}
.team_columns_item_caption h5 {
    font-weight: 600;
    text-transform: uppercase;
    font-family: 'Open Sans', sans-serif
}
.team_columns_item_caption p {
    font-weight: 400;
    margin-top: 20px;
    font-family: 'Open Sans', sans-serif
}
.team_columns_item_caption p a,
.team_columns_item_caption p a:visited {
    text-decoration: none;
    -webkit-transition: all ease-in-out .3s;
    transition: all ease-in-out .3s
}
.team_columns_item_social a,
.team_columns_item_social a:visited {
    width: 25px;
    float: left;
    height: 25px;
    display: block;
    line-height: 25px;
    margin-right: 2px;
    text-decoration: none;
    -webkit-transition: background ease-in-out .3s;
    transition: background ease-in-out .3s
}
@media(min-width:768px) and (max-width:789px) {
    .adv_team_columns_item_social a, .adv_team_columns_item_social a:visited {
        margin-right: 0;
    }
}
.team_columns_carousel_wrapper {
    background: #fff
}
.team_columns_carousel_control_left,
.team_columns_carousel_control_left:hover,
.team_columns_carousel_control_left:active,
.team_columns_carousel_control_left:focus,
.team_columns_carousel_control_right,
.team_columns_carousel_control_right:hover,
.team_columns_carousel_control_right:active,
.team_columns_carousel_control_right:focus {
    color: #fff;
    background: #f4511e!important
}
.team_columns_item_caption {
    color: #fff;
    background: #171717
}
.team_columns_item_caption>hr {
    border-top: 2px solid #feb600
}
.team_columns_item_caption p a,
.team_columns_item_caption p a:visited {
    color: #feb600
}
.team_columns_item_caption p a:hover,
.team_columns_item_caption p a:active {
    color: #cb9200
}
.team_columns_item_social a,
.team_columns_item_social a:visited {
    color: #171717;
    background: #feb600
}
.team_columns_item_social a:hover,
.team_columns_item_social a:active {
    background: #cb9200
}
.four_shows_one_move .cloneditem-1,
.four_shows_one_move .cloneditem-2,
.four_shows_one_move .cloneditem-3 {
    display: none
}
@media all and (min-width: 768px) {
    .four_shows_one_move .carousel-inner>.active.left,
    .four_shows_one_move .carousel-inner>.prev {
        left: -50%;
    }
    .four_shows_one_move .carousel-inner>.active.right,
    .four_shows_one_move .carousel-inner>.next {
        left: 50%;
    }
    .four_shows_one_move .carousel-inner>.left,
    .four_shows_one_move .carousel-inner>.prev.right,
    .four_shows_one_move .carousel-inner>.active {
        left: 0;
    }
    .four_shows_one_move .carousel-inner .cloneditem-1 {
        display: block;
    }
}
@media all and (min-width: 768px) ,
all and (min-width: 768px)  {
    .four_shows_one_move .carousel-inner>.item.active.right,
    .four_shows_one_move .carousel-inner>.item.next {
        -webkit-transform: translate3d(50%, 0, 0);
        transform: translate3d(50%, 0, 0);
        left: 0;
    }
    .four_shows_one_move .carousel-inner>.item.active.left,
    .four_shows_one_move .carousel-inner>.item.prev {
        -webkit-transform: translate3d(-50%, 0, 0);
        transform: translate3d(-50%, 0, 0);
        left: 0;
    }
    .four_shows_one_move .carousel-inner>.item.left,
    .four_shows_one_move .carousel-inner>.item.prev.right,
    .four_shows_one_move .carousel-inner>.item.active {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        left: 0;
    }
}
@media all and (min-width: 992px) {
    .four_shows_one_move .carousel-inner>.active.left,
    .four_shows_one_move .carousel-inner>.prev {
        left: -25%;
    }
    .four_shows_one_move .carousel-inner>.active.right,
    .four_shows_one_move .carousel-inner>.next {
        left: 25%;
    }
    .four_shows_one_move .carousel-inner>.left,
    .four_shows_one_move .carousel-inner>.prev.right,
    .four_shows_one_move .carousel-inner>.active {
        left: 0;
    }
    .four_shows_one_move .carousel-inner .cloneditem-2,
    .four_shows_one_move .carousel-inner .cloneditem-3 {
        display: block;
    }
}
@media all and (min-width: 992px) and (transform-3d),
all and (min-width: 992px) and (-webkit-transform-3d) {
    .four_shows_one_move .carousel-inner>.item.active.right,
    .four_shows_one_move .carousel-inner>.item.next {
        -webkit-transform: translate3d(25%, 0, 0);
        transform: translate3d(25%, 0, 0);
        left: 0;
    }
    .four_shows_one_move .carousel-inner>.item.active.left,
    .four_shows_one_move .carousel-inner>.item.prev {
        -webkit-transform: translate3d(-25%, 0, 0);
        transform: translate3d(-25%, 0, 0);
        left: 0;
    }
    .four_shows_one_move .carousel-inner>.item.left,
    .four_shows_one_move .carousel-inner>.item.prev.right,
    .four_shows_one_move .carousel-inner>.item.active {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        left: 0;
    }
}

.carousel-control .glyphicon-chevron-left {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -15px;
    color: white;
    font-size: 25px;
}

.carousel-control .glyphicon-chevron-right {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -15px;
    color: white;
    font-size: 25px;
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

.next1 {
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

.prev1 {
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

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}


#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}


  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top" style="height: 80px;">
  <div class="container" style="width: 100%;">
    <div class="navbar-header"">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" ">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home"><img name="img" src="images/logo.png" height="50px" width="155px""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="margin-top: 15px;  max-height: 900px;">

      <ul class="nav navbar-nav">
        
          <li><a href="home">HOME</a></li>
          <li class="dropdown mega-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES<span class="caret"></span></a>        
            <ul class="dropdown-menu" style="background: #f4511e;">
                    <li onclick="buyrent()"><a href="BuyRent">TO SALE / TO RENT</a></li>
                    <li><a href="SellLet">SELL / LET</a></li>
                </ul>       
          </li>
                
                <li><a href="about">ABOUT US</a></li>
            <li onclick="contact()"><a href="contact">CONTACT US</a></li>
            <li><a href="news">NEWS</a></li>
            <li><a href="notifications"><strong><b>NOTIFICATIONS</b></strong></a></li>
             <li class="dropdown mega-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">INFORMATION<span class="caret"></span></a>        
            <ul class="dropdown-menu" style="background: #f4511e;">
                    <li><a href="customers">CUSTOMERS</a></li>
                    <li><a href="employees">EMPLOYEES</a></li>
                    <li><a href="collaborators">COLLABORATORS</a></li>
                </ul>       
          </li>
            <li><a href="statistics"><strong><b>STATISTICS</b></strong></a></li>

          <li class="dropdown mega-dropdown" style="">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language<span class="caret"></span></a>        
            <ul class="dropdown-menu" style="background: #f4511e;">
                    <li><a href="#">Greek</a></li>
                <li><a href="#">English</a></li>
                <li><a href="#">Russia</a></li>
                </ul>       
          </li>
        
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu" style="background-color: rgb(86, 86, 113); float: right; width: 100%;">
        <li>
           <div class="row">
              <div class="col-md-12">
                 <form class="form" role="form" method="post" action="#" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Username</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block" onclick="login()" style="background-color: #1f2a3c;">Sign in</button>
                    </div>
                 </form>
              </div>
           </div>
        </li>
      </ul>
        </li>

            

        </ul>
        {{-- <ul class="nav navbar-nav" style="float: right;">

        
        
          </ul> --}}
      </div>
          
      </div>
  </nav>



<div class="jumbotron text-center" style="align-items: center;">
  <h1>Nicos Orphanou Estates</h1> 
  <p>We specialize in real estates</p> 
  <form>
    <div class="">
      <input required="required" type="email" class="form-control" size="50" placeholder="Email Address" style=" right: 0px; width: 33%; align-self: center; float: initial;" required>
        <button type="submit" class="btn btn-danger" style="float: initial;">Subscribe</button>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-6 carousel slide" id="myCarousel" data-ride="carousel" style="bottom: 10px;">
      <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/r17.jpg" alt="Los Angeles" style=" width: 100%">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/r13.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/r14.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/r15.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/r16.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/r3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
      
    </div>
    <div class="col-sm-6 well auth-box">
      <form>
              <fieldset>
          <!-- Form Name -->
                  <legend>Quick Search</legend>

                  <div class="col-sm-6 form-line text-center">
                  <div class="form-group">
                      <label class=" control-label" for="checkboxes">Interested for</label>                     
                      <div class="">
                          <label class="checkbox-inline" for="checkboxes-0">
                            <input name="checkboxes" id="checkboxes-0" value="" type="checkbox">Buy
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
                          <select id="selectbasic2" name="selectbasic" class="form-control">
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
                            <input name="radios" id="radios-0" value="1" type="radio">
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

                  <div class="col-sm-6 text-center" style="float: right;"> 

                    <div class="form-group">
                      <label class="control-label" for="radios">Furnished</label>
                      <div class="">
                          <div class="radio">
                            <label for="radios-3">
                                <input name="radios" id="radios-3" value="1" checked="checked" type="radio">
                                Yes
                            </label>
                          </div>
                          <div class="radio">
                            <label for="radios-4">
                                <input name="radios" id="radios-4" value="2" type="radio">
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

                    <div class="form-group search center">
                      <a class="btn btn-primary singlebutton" id="singlebutton" style="width: 100%; padding-right: 0px; padding-left: 0px; margin-left: -3px; margin-right: -6px; border-radius: 0px; background-color: #1f2a3c; border-color: #1f2a3c;">Search</a>
                    </div>


                  </div>
            </fieldset>
            </form>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8" >
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>The power you need for deal with real estates</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOYALTY</h4>
      <p>Always next to the customer for all his needs</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Accomplished any task</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>We manage and respect the land</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Multiple certifications for our work in our industry</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>We don't let anything to luck</p>
    </div>
  </div>
</div>

<div class="container-fluid text-center" style="padding: 0px 0px; margin-bottom: -30px;"><h2>Best and Latest Offers</h2></div>

  <div id="adv_team_4_columns_carousel" class="carousel slide four_shows_one_move team_columns_carousel_wrapper" data-ride="carousel" data-interval="2000" data-pause="hover">
         <!--========= Wrapper for slides =========-->
         <div class="carousel-inner" role="listbox">
            <!--========= 1st slide =========-->
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <img src="images/r1.jpg" width="300px" height="320px" alt="slider 01">
                  <div class="team_columns_item_caption">
                     <h4>Nicosia</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <img src="images/r2.jpg" width="300px" height="320px" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Nicosia</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <img src="images/r3.jpg" width="300px" height="320px" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Limassol</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <img src="images/r8.jpg" width="300px" height="320px" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Nicosia</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
            </div>
            <!--========= 2nd slide =========-->
            <div class="item active">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <img src="images/r9.jpg" width="300px" height="320px" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Nicosia</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <img src="images/r10.jpg" width="300px" height="320px" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Limassol</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <img src="images/r11.jpg" width="300px" height="320px" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Nicosia</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <img src="images/r17.jpg" width="300px" height="320px" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Limassol</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
            </div>
            <!--========= 3rd slide =========-->
            <div class="item">
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                  <img src="images/r13.jpg" width="300px" height="320px" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Limassol</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
                  <img src="images/r14.jpg" width="300px" height="320px" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Nicosia</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
                  <img src="images/r15.jpg" width="300px" height="320px" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Limassol</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
                  <img src="images/r16.jpg" width="300px" height="320px" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4>Nicosia</h4>
                     <hr>
                     <h5>CYPRUS</h5>
                  </div>
               </div>
            </div>
            
         </div>
         <!--======= Navigation Buttons =========-->
         <!--======= Left Button =========-->
         <a class="left carousel-control team_columns_carousel_control_left adv_left" href="#adv_team_4_columns_carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
         </a>
         <!--======= Right Button =========-->
         <a class="right carousel-control team_columns_carousel_control_right adv_right" href="#adv_team_4_columns_carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
         </a>
      </div>
  
  <div class="container-fluid text-center">
  <h2>What our customers say</h2>
  <div id="myCarousel2" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color: #f4511e;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"  style="color: #f4511e;"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 style="color: white;">
        Property in Famagousta
      </h2>
    </div>
    <div class="modal-body">
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <a class="prev1" onclick="plusSlides(-1)">❮</a> 
        <img src="images/r1.jpg" width="600px" height="500px">
        <a class="next1" onclick="plusSlides(1)">❯</a>
        <div style="float: right; margin-right: 15%; margin-bottom: 50px;"><br><br><strong>Property Details For Sale</strong><br><br>•Property Type: Apartment<br>•Location: Famagusta, Paralimni, Cyprus<br>•Internal Area: 65sqm<br>•Uncovered Verandas: 8sqm<br>•Bedrooms: 1<br>•Price: €110,000-€114,000<br>•VAT: Plus<br>More Information<br>•Pool: Yes<br>•Status: Under-construction<br>•Estimated Year: 2019<br>•Month of Completion: JUNE</div>
    </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <a class="prev1" onclick="plusSlides(-1)">❮</a> 
    <img src="images/r2.jpg" width="600px" height="500px">
    <a class="next1" onclick="plusSlides(1)">❯</a>
    <div style="float: right; margin-right: 100px; margin-bottom: 50px;"><br><br>Property Details For Sale<br><br>•Property Type: Apartment<br>•Location: Famagusta, Paralimni, Cyprus<br>•Internal Area: 65sqm<br>•Uncovered Verandas: 8sqm<br>•Bedrooms: 1<br>•Price: €110,000-€114,000<br>•VAT: Plus<br>More Information<br>•Pool: Yes<br>•Status: Under-construction<br>•Estimated Year: 2019<br>•Month of Completion: JUNE</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <a class="prev1" onclick="plusSlides(-1)">❮</a> 
    <img src="images/r3.jpg" width="600px" height="500px">
    <a class="next1" onclick="plusSlides(1)">❯</a>
    <div style="float: right; margin-right: 100px; margin-bottom: 50px;"><br><br>Property Details For Sale<br><br>•Property Type: Apartment<br>•Location: Famagusta, Paralimni, Cyprus<br>•Internal Area: 65sqm<br>•Uncovered Verandas: 8sqm<br>•Bedrooms: 1<br>•Price: €110,000-€114,000<br>•VAT: Plus<br>More Information<br>•Pool: Yes<br>•Status: Under-construction<br>•Estimated Year: 2019<br>•Month of Completion: JUNE</div>
</div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <a class="prev1" onclick="plusSlides(-1)">❮</a> 
    <img src="images/r4.jpg" width="600px" height="500px">
    <a class="next1" onclick="plusSlides(1)">❯</a>
    <div style="float: right; margin-right: 100px; margin-bottom: 50px;"><br><br>Property Details For Sale<br><br>•Property Type: Apartment<br>•Location: Famagusta, Paralimni, Cyprus<br>•Internal Area: 65sqm<br>•Uncovered Verandas: 8sqm<br>•Bedrooms: 1<br>•Price: €110,000-€114,000<br>•VAT: Plus<br>More Information<br>•Pool: Yes<br>•Status: Under-construction<br>•Estimated Year: 2019<br>•Month of Completion: JUNE</div>
</div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <a class="prev1" onclick="plusSlides(-1)">❮</a> 
    <img src="images/r5.jpg" width="600px" height="500px">
    <a class="next1" onclick="plusSlides(1)">❯</a>
    <div style="float: right; margin-right: 100px; margin-bottom: 50px;"><br><br>Property Details For Sale<br><br>•Property Type: Apartment<br>•Location: Famagusta, Paralimni, Cyprus<br>•Internal Area: 65sqm<br>•Uncovered Verandas: 8sqm<br>•Bedrooms: 1<br>•Price: €110,000-€114,000<br>•VAT: Plus<br>More Information<br>•Pool: Yes<br>•Status: Under-construction<br>•Estimated Year: 2019<br>•Month of Completion: JUNE</div>
</div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <a class="prev1" onclick="plusSlides(-1)">❮</a> 
    <img src="images/r6.jpg" width="600px" height="500px">
    <a class="next1" onclick="plusSlides(1)">❯</a>
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


<footer class="container-fluid text-center">
 <div class="row">
  <a href="#myPage" title="To Top" style="background-color: white;">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</div>
  <div class="row"> 
    <a href="PrivacyPolicy"style="background-color: transparent; color: gray">Privacy Policy</a><p>
    <a href="TermsAndConditions"style="background-color: transparent; color: gray">Terms & Conditions</a>
    <p>© Copyright 2018. Orphanou Nicos ltd. All Rights Reserved. Sitemap. 
 Real Estate Website Design by EPL449 Team 1</p>

  </div>
</footer>

<script>

  var modal = document.getElementById('myModal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

  // var modal = document.getElementById('myModal');


// Get the button that opens the modal
var btn = document.getElementById("singlebutton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];



// When the user clicks the button, open the modal 
btn.onclick = function() {
  var modal = document.getElementById('myModal');
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  var modal = document.getElementById('myModal');
    modal.style.display = "none";
}

function login() {

	var sign = document.getElementById('signin');
  	sign.classList.remove("hidden");

  
}


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

</body>
</html>
