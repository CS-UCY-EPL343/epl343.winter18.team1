<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
	<title>Orphanou Estates</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  
</head>
<style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: white;
      background: linear-gradient(to left, #f4511e , #565671);
      /*min-height: 100%;*/
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


.about-section {
    padding: 4em 0;
}
.site-title  {
    padding: 2em 0;
}
.site-title h3 {
    font-size: 3.5em;
    color: white;
    font-family: Montserrat, sans-serif;
    font-weight: 700;
}
.site-title p {
    font-size: 1.1em;
    color: white;
    line-height: 1.8em;
    margin-top: 0.5em;
}

.about-inner-column h4 {
    font-size: 2.5em;
    color: #FFD001;
    font-family: Montserrat, sans-serif;
}
.about-inner-column p {
    font-size: 1.1em;
    color: #333333;
    line-height: 1.8em;
    margin: 1em 0 0;
}

.about-inner-column ul li a {
    color: #333333;
    font-size: 1.1em;
    padding-left: 2em;
}
.about-right img {
    width: 100%;
}

  </style>
<body>
  @include('main')


	<div class="about-section" style="margin-top: 5px;">
    <div class="container">
      <div class="site-title text-center">
        <h3><strong>About Us</strong></h3>
        <p>It's always our pleasure to help you, by searching for you the property that will make you happy!</p>
      </div>
      <div class="about-inner-section">       
        <div class="col-md-6 about-inner-column">
          <h4>A successful company is our company</h4>
          <p style="color: white;">“Orphanou Nicos Estates” is the name of a small real estate agency owned by Mr. Nicos Orphanou. It is located in Amathus Area, east of Limassol, Cyprus. The organization was established in January 1992 and has four employees, but also has many associates from all the cities in Cyprus. The real estate agency provides services in a property market such as sales and lettings for customers, who are interested to buy, sell or rent houses, plots/lands, storage buildings, offices, apartments etc. Nicos Orphanou is willing to find properties that the customers interested in and give them a tour.</p>
        
        </div>
        <div class="col-md-6 about-right">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r2.jpg" alt=" ">
      </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>


   <footer class="container-fluid text-center"style="background-color: white;"">
  <div class="row">
    <a href="#myPage" 
       title="To Top" 
       style="background-color: white;">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
  </div>
  <div class="row">
    <a href="PrivacyPolicy"style="background-color: transparent; color: black">Privacy Policy</a><p>
    <a href="TermsAndConditions"style="background-color: transparent; color: black">Terms & Conditions</a>

    <p style="background-color: transparent; color: black">© Copyright 2019. Nicos Orphanou Estates. All Rights Reserved. Sitemap.
    Real Estate Website Design by EPL449 Team 1.</p>
  </div>

</body>

<script>
	$(document).ready(function(){
		var h = $(document).height();
		document.getElementById('contact').style.height = h +"px";

});

</script>