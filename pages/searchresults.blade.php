<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <title>Orphanou Estates</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 
</head>
<style>
  body {
     font: 400 15px Lato, sans-serif;
     line-height: 1.8;
     color: black;
     background: white;
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
 .slideanim {
    visibility:hidden;
}
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
 navbar-nav>li>a {
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
 .site-title {
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
 table {
     border-collapse: collapse;
     border-spacing: 0;
     width: 100%;
     border: 2px solid #ddd;
}
 th, td {
     text-align: left;
     padding: 16px;
}
 tr:nth-child(even){
    background-color: #f2f2f2
}
 i{
     color: #26b2ad;
     font-size: 2em !important;
}
 .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
     color: #555;
     cursor: default;
     background-color: #fff;
     border: 3px solid #ddd;
     border-bottom-color: transparent;
}
 .nav-tabs>li>a {
     margin-right: 2px;
     line-height: 1.42857143;
     border: 1px solid transparent;
     border-radius: 4px 4px 0 0;
     background-color: #d7dfe6;
}
/* Extra styles for the cancel button */
 .cancelbtn {
     width: auto;
     padding: 10px 18px;
     background-color: #f44336;
}
/* Center the image and position the close button */
 .imgcontainer {
     text-align: center;
     margin: 24px 0 12px 0;
     position: relative;
}
 img.avatar {
     width: 40%;
     border-radius: 50%;
}
/*.container {
     padding: 16px;
}
*/
 span.psw {
     float: right;
     padding-top: 16px;
}
/* The Modal (background) */
 .modal {
     display: none;
    /* Hidden by default */
     position: fixed;
    /* Stay in place */
     z-index: 1;
    /* Sit on top */
     left: 0;
     top: 0;
     width: 100%;
    /* Full width */
     height: 100%;
    /* Full height */
     overflow: auto;
    /* Enable scroll if needed */
     background-color: rgb(0,0,0);
    /* Fallback color */
     background-color: rgba(0,0,0,0.4);
    /* Black w/ opacity */
     padding-top: 60px;
}
 .modal2 {
     display: none;
    /* Hidden by default */
     position: fixed;
    /* Stay in place */
     z-index: 1;
    /* Sit on top */
     left: 0;
     top: 0;
     width: 50%;
    /* Full width */
     height: 50%;
    /* Full height */
     overflow: auto;
    /* Enable scroll if needed */
     background-color: rgb(0,0,0);
    /* Fallback color */
     background-color: rgba(0,0,0,0.4);
    /* Black w/ opacity */
     padding-top: 60px;
}
/* Modal Content/Box */
 .modal-content {
     background-color: #fefefe;
     margin: 5% auto 15% auto;
    /* 5% from the top, 15% from the bottom and centered */
     border: 1px solid #888;
     width: 80%;
    /* Could be more or less, depending on screen size */
}
 .modal-content2 {
     background-color: #fefefe;
     margin: 5% auto 15% auto;
    /* 5% from the top, 15% from the bottom and centered */
     border: 1px solid #888;
     width: 30%;
    /* Could be more or less, depending on screen size */
}
/* The Close Button (x) */
 .close {
     position: absolute;
     right: 25px;
     top: 0;
     color: #000;
     font-size: 35px;
     font-weight: bold;
}
 .close:hover, .close:focus {
     color: red;
     cursor: pointer;
}
/* Add Zoom Animation */
 .animate {
     -webkit-animation: animatezoom 0.6s;
     animation: animatezoom 0.6s 
}
 @-webkit-keyframes animatezoom {
     from {
        -webkit-transform: scale(0)
    }
     to {
        -webkit-transform: scale(1)
    }
}
 @keyframes animatezoom {
     from {
        transform: scale(0)
    }
     to {
        transform: scale(1)
    }
}
/* Change styles for span and cancel button on extra small screens */
 @media screen and (max-width: 300px) {
     span.psw {
         display: block;
         float: none;
    }
     .cancelbtn {
         width: 100%;
    }
}
 input[type=checkbox] {
     margin: 7px 0 0;
     margin-top: 1px \9;
     line-height: normal;
}

.dataTables_wrapper .dataTables_filter input {
    margin-left: 0.5em;
    width: 350px;
}

</style>
<body>
    @extends('main') @section('navbar')
    @endsection
    <div class="row">
        <br/>

        <div class="col-md-12 container-fluid" style="margin-top: -30px;">
            <ul class="nav nav-tabs" style="margin-top: 70px;">
                <li class="active"><a href="#sltablediv" style="color: #555;">Properties Forms Data</a></li>
            </ul>
            <div class="tab-content">
                <div id="sltablediv" class="tab-pane fade in active">
           
                    <table class="table table-bordered" id="sltable">
                        <thead>
                            <tr>
                                <th>PROPERTY ID</th>
                                <th>AVAILABLE_FOR</th>
                                <th>TYPE</th>
                                <th>SUBTYPE</th>
                                <th>TOWN</th>
                                <th>AREA</th>
                                <th>PRICE</th>
                                <th>SQUARE METERS</th>
                                <th>FLOORS</th>
                                <th>ROOMS</th>
                                <th>FURNISHED</th>
                                <th>POOL</th>
                                <th>PICTURE</th>

                                <th style="background: none; cursor: default; text-align: center;">
                                    <i class="fa fa-certificate" aria-hidden="true"></i></th>
                               
                            </tr>
                            {{ csrf_field() }}
                        </thead>
    
                        <tbody>
                        
                            <tr>
                                <td>{{$row->PROPERTY_ID}}</td>
                                <td>{{$row->AVAILABLE_FOR}}</td>
                                <td>{{$row->TYPE}}</td>
                                <td>{{$row->SUBTYPE}}</td>
                                <td>{{$row->TOWN}}</td>
                                <td>{{$row->AREA}}</td>
                                <td>{{$row->PRICE}}</td>
                                <td>{{$row->SQUARE_METERS}}</td>
                                <td>{{$row->FLOORS}}</td>
                                <td>{{$row->ROOMS}}</td>
                                <td>{{$row->FURNISHED}}</td>
                                <td>{{$row->POOL}}</td>
                                <td>{{$row->PICTURE}}</td>


                                <td style="text-align: center;">
                                    <i class="fa fa-certificate" 
                                       aria-hidden="true" 
                                       style="cursor: pointer;" 
                                       onclick="document.getElementById('id01{{$row->PROPERTY_ID}}').style.display='block'">
                                    </i>
                                </td>


                            </tr>
                      
                        </tbody>
                    </table>
                   </div> 
                </div>
            </div>
        </div>
    </body>
</html>
 <script type="text/javascript">
  $("#PROPERTY_ID").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#AVAILABLE_FOR").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#TYPE").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#SUBTYPE").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#TOWN").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#AREA").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#PRICE").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#SQUARE_METERS").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

$("#FLOORS").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

$("#ROOMS").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

$("#FURNISHED").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

$("#POOL").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#DATE_SUBMITTED").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#PICTURE").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  
    $("#CUSTOMER_ID").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

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

  $(document).ready(function() {

    var modal = document.getElementsByClassName("modal");

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    $(".nav-tabs a").click(function() {
      $(this).tab('show');
    });
    $('.nav-tabs a').on('shown.bs.tab', function(event) {
      var x = $(event.target).text(); // active tab
      var y = $(event.relatedTarget).text(); // previous tab
      $(".act span").text(x);
      $(".prev span").text(y);
    });

  });

</script>




