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
.carousel-control .glyphicon-chevron-left {
    position: center;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -15px;
    color: white;
    font-size: 25px;
}

.carousel-control .glyphicon-chevron-right {
    position: center;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -15px;
    color: white;
    font-size: 25px;
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
    </ul>
    </div>

    </div>
    </nav>
    @endsection
    <div class="row">
        <br/>

        <div class="col-md-12 container-fluid" style="margin-top: -30px;">
            <ul class="nav nav-tabs" style="margin-top: 70px;">
                <li class="active"><a href="#sltablediv" style="color: #555;">Properties Forms Data</a></li>
            </ul>
            <div class="tab-content">
                <div id="sltablediv" class="tab-pane fade in active">
                    <h1 align="center" {{-- style="margin-top: 70px;" --}}>Properties Forms Data</h1>
                    <table class="table table-bordered" id="sltable">
                        <thead>
                            <tr>
                                <th>PROPERTY ID</th>
                                <th>AVAILABLE FOR</th>
                                <th>TYPE</th>
                                <th>TOWN</th>
                                <th>AREA</th>
                                <th>PRICE</th>
                                <th>SQUARE METERS</th>
                                <th>DATE_SUBMITTED</th>
                                <th>CUSTOMER_ID</th>
                                <th>PICTURES</th>

                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($PROPERTY_PLOT as $row)
                            <tr>
                                <td>{{$row->PROPERTY_ID}}</td>
                                <td>{{$row->AVAILABLE_FOR}}</td>
                                <td>{{$row->TYPE}}</td>
                                <td>{{$row->TOWN}}</td>
                                <td>{{$row->AREA}}</td>
                                <td>{{$row->PRICE}}</td>
                                <td>{{$row->SQUARE_METERS}}</td>
                                <td>{{$row->DATE_SUBMITTED}}</td>
                                 <td>{{$row->CUSTOMER_ID}}</td>
                              
                                  <td style="text-align: center;">
                                    <i class="fas fa-image" 
                                       aria-hidden="true" 
                                       style="cursor: pointer;" 
                                       onclick="document.getElementById('id04{{$row->PROPERTY_ID}}').style.display='block'">
                                    </i>
                                </td>
 
                                <td style="text-align: center;">
                                    <i class="fa fa-pencil-square-o" 
                                       aria-hidden="true" 
                                       style="cursor: pointer;" 
                                       onclick="document.getElementById('id01{{$row->PROPERTY_ID}}').style.display='block'">
                                    </i>
                                </td>

                                <td style="text-align: center;">
                                    <i class="fa fa-trash-o" 
                                       aria-hidden="true" 
                                       style="cursor: pointer; 
                                       color: red;" 
                                       onclick="document.getElementById('id02{{$row->PROPERTY_ID}}').style.display='block'">
                                       </i>
                                </td>
                            </tr>


                            <div id="id04{{$row->PROPERTY_ID}}" class="modal slmodal">
                                <div class="modal-content animate" name="slmodal">

                                    <form method="post" 
                                          action="{{url('PropertyImage')}}" 
                                          role="form" 
                                          id="sldata"
                                        >

                                    <div id="about" class="container-fluid" style="width: 1700px; margin-right: auto; margin-left: 320px;">
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
                                                <div class="carousel-inner" >

                                                  <div class="item active" >


                                                    <img src="images/r17.jpg" alt="Los Angeles" style=" width: 100%">
                                                    <div class="carousel-caption">
                                                      <h3>Limassol</h3>
                                                      <p>In Limassol is always so much fun!</p>
                                                    </div>
                                                  </div>

                                                  <div class="item">
                                                    <img src="images/r13.jpg" alt="Chicago" style="width:100%;">
                                                    <div class="carousel-caption">
                                                    
                                                      <p>Thank you, Limassol!</p>
                                                    </div>
                                                  </div>
                                                
                                                  <div class="item">
                                                    <img src="images/r14.jpg" alt="New York" style="width:100%;">
                                                    <div class="carousel-caption">
                                                     
                                                    </div>
                                                  </div>

                                                  <div class="item">
                                                    <img src="images/r15.jpg" alt="New York" style="width:100%;">
                                                    <div class="carousel-caption">
                                                      
                                                    </div>
                                                  </div>

                                                  <div class="item">
                                                    <img src="images/r16.jpg" alt="New York" style="width:100%;">
                                                    <div class="carousel-caption">
                                                      
                                                    </div>
                                                  </div>

                                                  <div class="item">
                                                    <img src="images/r3.jpg" alt="New York" style="width:100%;">
                                                    <div class="carousel-caption">
                                                      
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
                                      </div>
                                    </div>
                                    <div class="container-fluid" style="background-color:#f1f1f1; padding: 0px;">
                                                <div class="" 
                                                     style="float: center;">
                                                    <button type="button" 
                                                            onclick="document.getElementById('id04{{$row->PROPERTY_ID}}').style.display='none'" 
                                                            class="cancelbtn"
                                                            align="center" 
                                                            style="font-size: 20px; background: transparent; border-color: #f4511e;">Back</button>
                                                </div>

                                               
                                    </div>  
                                     </form>
                                     
                                 </div>    
                            </div>   




                            <div id="id01{{$row->PROPERTY_ID}}" class="modal slmodal">
                                <div class="modal-content animate" name="slmodal">

                                    <form method="post" 
                                          action="{{url('PropertyUpdate')}}" 
                                          role="form" 
                                          id="sldata"
                                        >

                                        {{csrf_field()}}
                                        <div class="container-fluid" style="padding: 16px;">

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">Property ID: </label>
                                                        <input onkeypress="return inputAlphabet(event)" 
                                                               onkeyup="alphaOnly(this)" 
                                                               id="PROPERTY_ID" 
                                                               type="text" 
                                                               name="PROPERTY_ID" 
                                                               class="form-control" 
                                                               placeholder="Please enter PROPERTY_ID *" 
                                                               required="required" 
                                                               data-error="Property ID is required." 
                                                               value="{{$row->PROPERTY_ID}}"
                                                               disabled>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                        <label class=" control-label" >Available For: </label>

                                                        <select class ="form-control" id="AVAILABLE_FOR" name="AVAILABLE_FOR">

                                               
                                                            <option {{ $row->AVAILABLE_FOR == 'For Sale' ? 'selected':'' }}>For Sale</option>
                                                            <option {{ $row->AVAILABLE_FOR == 'For Rent' ? 'selected':'' }}>For Rent</option>
                                                        </select>
                                                        <div class="help-block with-errors"></div> 
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class=" control-label" >Property's Type: </label>

                                                    <select class ="form-control" id="TYPE" name="TYPE">

                                             
                                                        <option {{ $row->TYPE == 'Apartment' ? 'selected':'' }}>Apartment</option>
                                                        <option {{ $row->TYPE == 'Building' ? 'selected':'' }}>Building</option>
                                                        <option {{ $row->TYPE == 'House' ? 'selected':'' }}>House</option>
                                                        <option {{ $row->TYPE == 'Field' ? 'selected':'' }}>Field</option>
                                                        <option {{ $row->TYPE == 'Office' ? 'selected':'' }}>Office</option>
                                                        <option {{ $row->TYPE == 'Plot' ? 'selected':'' }}>Plot</option>
                                                        <option {{ $row->TYPE == 'Warehouse' ? 'selected':'' }}>Warehouse</option>
                                                        <option {{ $row->TYPE == 'Store' ? 'selected':'' }}>Store</option>
                                                    </select>
                                                  
                                                    <div class="help-block with-errors"></div> 
                                    
                                                </div>

                                                <div class="col-sm-3">
                                                    <label class=" control-label" >Subtype's Type: </label>

                                                    <select class ="form-control" id="SUBTYPE" name="SUBTYPE">

                                                        
                                                        <option {{ $row->SUBTYPE == 'Residential' ? 'selected':'' }}>Residential</option>
                                                        <option {{ $row->SUBTYPE == 'Commercial' ? 'selected':'' }}>Commercial</option>
                                                        <option {{ $row->SUBTYPE == 'Industrial' ? 'selected':'' }}>Industrial</option>
                                                        
                                                    </select>
                                                    <div class="help-block with-errors"></div> 
                                                </div>      
                                            </div>

                                            <div class="row">


                                                <div class="col-sm-3">
                                                    <label class=" control-label" >Town: </label>

                                                    <select class ="form-control" id="TOWN" name="TOWN">

                                                     
                                                        <option {{ $row->TOWN == 'Nicosia' ? 'selected':'' }}>Nicosia</option>
                                                        <option {{ $row->TOWN == 'Larnaca' ? 'selected':'' }}>Larnaca</option>
                                                        <option {{ $row->TOWN == 'Limassol' ? 'selected':'' }}>Limassol</option>
                                                        <option {{ $row->TOWN == 'Paphos' ? 'selected':'' }}>Paphos</option>
                                                        <option {{ $row->TOWN == 'Famagusta' ? 'selected':'' }}>Famagusta</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div> 
                                                </div> 

                                                 <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="form_name">Area: </label>
                                                        <input onkeypress="return inputAlphabet(event)" 
                                                               onkeyup="alphaOnly(this)" 
                                                               id="AREA" 
                                                               type="number" 
                                                               name="AREA" 
                                                               class="form-control" 
                                                               placeholder="Please enter area."
                                                               value="{{$row->AREA}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_name">Price: </label>
                                                        <input pattern="\d*" maxlength="8" onkeypress="return inputAlphabet(event)" 
                                                               onkeyup="alphaOnly(this)" 
                                                               id="PRICE" 
                                                               type="number" 
                                                               name="PRICE" 
                                                               class="form-control" 
                                                                required="required" 
                                                               required oninvalid="setCustomValidity('Please enter price')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               onkeyup="lettersOnly(this)"  
                                                               value="{{$row->PRICE}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="row">
                                     			<div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_name">Square Meters: </label>
                                                        <input pattern="\d*" maxlength="8" onkeypress="return inputAlphabet(event)" 
                                                               onkeyup="alphaOnly(this)" 
                                                               id="SQUARE_METERS" 
                                                               type="number" 
                                                               name="SQUARE_METERS" 
                                                               class="form-control" 
                                                               placeholder="Please enter square meters of property." 
                                                               required="required" 
                                                               required oninvalid="setCustomValidity('Please enter the square meters ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               onkeyup="lettersOnly(this)"  
                                                               value="{{$row->SQUARE_METERS}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_name">Floors: </label>
                                                        <input pattern="\d*" maxlength="8" onkeypress="return inputAlphabet(event)" 
                                                               onkeyup="alphaOnly(this)"
                                                               id="FLOORS" 
                                                               type="number" 
                                                               name="FLOORS" 
                                                               class="form-control" 
                                                               placeholder="Please enter floors." 
                                                               required="required" 
                                                               required oninvalid="setCustomValidity('Please enter the square meters ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               onkeyup="lettersOnly(this)"  
                                                               value="{{$row->FLOORS}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_name">Rooms: </label>
                                                        <input pattern="\d*" maxlength="8" onkeypress="return inputAlphabet(event)" " 
                                                               onkeyup="alphaOnly(this)"
                                                               id="ROOMS" 
                                                               type="number" 
                                                               name="ROOMS" 
                                                               class="form-control" 
                                                               placeholder="Please enter rooms." 
                                                               required="required" 
                                                               required oninvalid="setCustomValidity('Please enter the square meters ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               onkeyup="lettersOnly(this)"  
                                                               value="{{$row->ROOMS}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">


                                                    <div class="col-sm-5">
                                                        <label class=" control-label" >Furnished: </label>

                                                        <select class ="form-control" id="FURNISHED" name="FURNISHED">
                                                            <option {{ $row->FURNISHED == 'Yes' ? 'selected':'' }}>Yes</option>
                                                            <option {{ $row->FURNISHED == 'No' ? 'selected':'' }}>No</option>
                                                        </select>
                                                        <div class="help-block with-errors"></div> 
                                                    </div> 

                                                  	 <div class="col-sm-5">
                                                        <label class=" control-label" >Pool:</label>

                                                        <select class ="form-control" id="POOL" name="POOL">
                                                            <option {{ $row->POOL == 'Yes' ? 'selected':'' }}>Yes</option>
                                                            <option {{ $row->POOL == 'No' ? 'selected':'' }}>No</option>
                                                        </select>
                                                        <div class="help-block with-errors"></div> 
                                                    </div> 

                                              	</div>
                                            <div class="row">

                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_name">Customer ID: </label>
                                                        <input onkeypress="return inputAlphabet(event)" 
                                                               onkeyup="alphaOnly(this)" 
                                                               id="CUSTOMER_ID" 
                                                               type="text" 
                                                               name="CUSTOMER_ID" 
                                                               class="form-control" 
                                                               placeholder="Please enter customer ID *" 
                                                               required="required" 
                                                               data-error="Customer ID is required." 
                                                               value="{{$row->CUSTOMER_ID}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                  				<div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_message">Pictures: </label>                         
                                                        	
                                                        	 <div id="about" class="container-fluid" style="width: 1000px; margin-right: auto; margin-left: 20px;">
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
                                                <div class="carousel-inner" >

                                                  <div class="item active" >


                                                    <img src="images/r17.jpg" alt="Los Angeles" style=" width: 100%">
                                                    <div class="carousel-caption">
                                 
                                                    </div>
                                                  </div>

                                                  <div class="item">
                                                    <img src="images/r13.jpg" alt="Chicago" style="width:100%;">
                                                    <div class="carousel-caption">
                                                    
                                              
                                                    </div>
                                                  </div>
                                                
                                                  <div class="item">
                                                    <img src="images/r14.jpg" alt="New York" style="width:100%;">
                                                    <div class="carousel-caption">
                                                     
                                                    </div>
                                                  </div>

                                                  <div class="item">
                                                    <img src="images/r15.jpg" alt="New York" style="width:100%;">
                                                    <div class="carousel-caption">
                                                      
                                                    </div>
                                                  </div>

                                                  <div class="item">
                                                    <img src="images/r16.jpg" alt="New York" style="width:100%;">
                                                    <div class="carousel-caption">
                                                      
                                                    </div>
                                                  </div>

                                                  <div class="item">
                                                    <img src="images/r3.jpg" alt="New York" style="width:100%;">
                                                    <div class="carousel-caption">
                                                      
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
                                      </div>
                                    </div>

                                                            <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                </div>
                                <div class="row">

 												<div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_message">Date Submitted</label>
                                                        <input id="DATE_SUBMITTED" 
                                                               type="DATE" 
                                                               name="DATE_SUBMITTED" 
                                                               class="form-control" 
                                                               placeholder="Please enter valid date submitted *" 
                                                               value="{{$row->DATE_SUBMITTED}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                				            </div>
                                        </div>    
                                        <div class="container col-md-12" 
                                             style="background-color:#f1f1f1; 
                                             padding: 16px;">
                                             
                                            <div class="col-md-4" 
                                                 style="float: left;">
                                                <button type="button" 
                                                        onclick="document.getElementById('id01{{$row->PROPERTY_ID}}').style.display='none'" 
                                                        class="cancelbtn">Cancel</button>
                                            </div>

                                            <div class="col-md-4" align="center">
                                                <input id="submition" 
                                                       type="submit" 
                                                       class="btn btn-black" 
                                                       align="center" 
                                                       value="Save" 
                                                       style="font-size: 20px; 
                                                       background: transparent; 
                                                       border-color: #f4511e;">
                                            </div>
                                            <div class="col-md-4" 
                                                 style="float: left;">
                                                <input name="PROPERTY_ID" 
                                                id="PROPERTY_ID" 
                                                class="hidden ID" 
                                                value="{{$row->PROPERTY_ID}}">
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>



                            <div id="id02{{$row->PROPERTY_ID}}" 
                                 class="modal">
                                <div class="modal-content animate modal-sm">

                                    <form method="post" 
                                    	  action="{{url('PropertyDestroy')}}" 
                                    	  role="form" 
                                    	  id="sldata">

                                        {{csrf_field()}}
                                             <div class="container-fluid" style="text-align: center; padding: 0;">
                                                <p style="font-size: 20px;">Do you want to delete delete this record <b>{{$row->PROPERTY_ID}} </b>?</p>
                                            </div>

                                            <div class="container-fluid" 
                                                 style="background-color:#f1f1f1; padding: 0px;">
                                                <div class="" 
                                                     style="float: left;">
                                                    <button type="button" 
                                                            onclick="document.getElementById('id02{{$row->PROPERTY_ID}}').style.display='none'" 
                                                            class="cancelbtn">Cancel</button>
                                                </div>

                                                <div class="" align="center">
                                                    <input id="submition" 
                                                           type="submit" 
                                                           class="btn btn-black" 
                                                           align="center" 
                                                           value="Confirm" 
                                                           style="font-size: 20px; background: transparent; border-color: #f4511e;">
                                                </div>
                                                <div class="" style="float: left;">
                                                    <input name="PROPERTY_ID" 
                                                           id="PROPERTY_ID" 
                                                           class="hidden ID" 
                                                           value="{{$row->PROPERTY_ID}}">
                                                </div>
                                            </div>  
                                    </form>
                                </div>
                            </div>
                               @endforeach  

                              

  						<thead>
                            <tr>
                                <th  style="text-align: center;">
                                	<i class="fa fa-plus-circle" 
                                	aria-hidden="true" 
                                	style="cursor: pointer; color: orange;" 
                                	onclick="document.getElementById('id03{{$row->PROPERTY_ID}}').style.display='block'">
                                	</i>
                                </th>
                            </tr>
                        </thead>

                        <div id="id03{{$row->PROPERTY_ID}}" 

                        	 class="modal slmodal">
                              <div class="modal-content animate" name="slmodal">

                                    <form method="post" 
                                    	  action="{{url('PropertyAdd')}}" 
                                    	  role="form" 
                                    	  id="sldata">

                                       {{csrf_field()}}
                                       <div class="container" style="padding: 16px;">
                                            <div class="row">
                                            	  <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Property ID: </label>
                                                        <input onkeypress="return 
                                                               id="PROPERTY_ID" 
                                                               type="text" 
                                                               name="PROPERTY_ID" 
                                                               class="form-control" 
                                                               placeholder="Please fill this field*" 
                                                               required="required" 
                                                               data-error="PROPERTY_ID field is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-3">
                                                        <label class=" control-label" >Available For: </label>

                                                        <select class ="form-control" id="AVAILABLE_FOR" name="AVAILABLE_FOR">

                                               
                                                            <option {{ $row->AVAILABLE_FOR == 'For Sale' ? 'selected':'' }}>For Sale</option>
                                                            <option {{ $row->AVAILABLE_FOR == 'For Rent' ? 'selected':'' }}>For Rent</option>
                                                        </select>
                                                        <div class="help-block with-errors"></div> 
                                                </div> 
                                            </div>                                            


                                           <div class="row">
                                                <div class="col-sm-3">
                                                    <label class=" control-label" >Property's Type: </label>

                                                    <select class ="form-control" id="TYPE" name="TYPE">

                                             
                                                        <option {{ $row->TYPE == 'Apartment' ? 'selected':'' }}>Apartment</option>
                                                        <option {{ $row->TYPE == 'Building' ? 'selected':'' }}>Building</option>
                                                        <option {{ $row->TYPE == 'House' ? 'selected':'' }}>House</option>
                                                        <option {{ $row->TYPE == 'Field' ? 'selected':'' }}>Field</option>
                                                        <option {{ $row->TYPE == 'Office' ? 'selected':'' }}>Office</option>
                                                        <option {{ $row->TYPE == 'Plot' ? 'selected':'' }}>Plot</option>
                                                        <option {{ $row->TYPE == 'Warehouse' ? 'selected':'' }}>Warehouse</option>
                                                        <option {{ $row->TYPE == 'Store' ? 'selected':'' }}>Store</option>
                                                    </select>
                                                  
                                                    <div class="help-block with-errors"></div> 
                                    
                                                </div>

                                                <div class="col-sm-3">
                                                    <label class=" control-label" >Subtype's Type: </label>

                                                    <select class ="form-control" id="SUBTYPE" name="SUBTYPE">

                                                        
                                                        <option {{ $row->SUBTYPE == 'Residential' ? 'selected':'' }}>Residential</option>
                                                        <option {{ $row->SUBTYPE == 'Commercial' ? 'selected':'' }}>Commercial</option>
                                                        <option {{ $row->SUBTYPE == 'Industrial' ? 'selected':'' }}>Industrial</option>
                                                        
                                                    </select>
                                                    <div class="help-block with-errors"></div> 
                                                </div>      
                                            </div>

                                             <div class="row">


                                                <div class="col-sm-3">
                                                    <label class=" control-label" >Town: </label>

                                                    <select class ="form-control" id="TOWN" name="TOWN">

                                                     
                                                        <option {{ $row->TOWN == 'Nicosia' ? 'selected':'' }}>Nicosia</option>
                                                        <option {{ $row->TOWN == 'Larnaca' ? 'selected':'' }}>Larnaca</option>
                                                        <option {{ $row->TOWN == 'Limassol' ? 'selected':'' }}>Limassol</option>
                                                        <option {{ $row->TOWN == 'Paphos' ? 'selected':'' }}>Paphos</option>
                                                        <option {{ $row->TOWN == 'Famagusta' ? 'selected':'' }}>Famagusta</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div> 
                                                </div> 

                                                 <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="form_name">Area: </label>
                                                        <input onkeypress="return inputAlphabet(event)" 
                                                               onkeyup="alphaOnly(this)" 
                                                               id="AREA" 
                                                               type="text" 
                                                               name="AREA" 
                                                               class="form-control" 
                                                               placeholder="Please enter area *"
                                                            >
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Price: </label>
                                                        <input pattern="\d*" maxlength="8" onkeypress="return inputAlphabet(event)" 
                                                               onkeyup ="alphaOnly(this)"
                                                               id="PRICE" 
                                                        	   type="number" 
                                                        	   name="PRICE" 
                                                        	   class="form-control" 
                                                        	   placeholder="Please enter price *" 
                                                        	  required="required" 
                                                               required oninvalid="setCustomValidity('Please enter price ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               onkeyup="lettersOnly(this)"  >

                                                    	<div class="help-block with-errors"></div>

                                            		<div>  
                                            </div>
											</div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Square Meters: </label>
                                                        <input pattern="\d*" maxlength="8" onkeypress="return inputAlphabet(event)" 
                                                               onkeyup ="alphaOnly(this)"
                                                               id="SQUARE_METERS" 
                                                               type="number" 
                                                               name="SQUARE_METERS" 
                                                               class="form-control" 
                                                               placeholder="Please enter square meters *"  
                                                               required="required" 
                                                               required oninvalid="setCustomValidity('Please enter the square meters ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               onkeyup="lettersOnly(this)"  >

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Floors: </label>
                                                        <input pattern="\d*" maxlength="8" onkeypress="return inputAlphabet(event)" 
                                                               onkeyup ="alphaOnly(this)"
                                                               id="FLOORS" 
                                                               type="number" 
                                                               name="FLOORS" 
                                                               class="form-control" 
                                                               placeholder="Please enter the number of floors" 
                                                               required="required" 
                                                               required oninvalid="setCustomValidity('Please enter the number of floors ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               onkeyup="lettersOnly(this)">
                                                    </div>
                                                </div>

                                            	<div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Rooms: </label>
                                                        <input pattern="\d*" maxlength="8" onkeypress="return inputAlphabet(event)" 
                                                               onkeyup ="alphaOnly(this)"
                                                               id="ROOMS" 
                                                               type="number" 
                                                               name="ROOMS" 
                                                               class="form-control" 
                                                               placeholder="Please enter number of rooms *" 
                                                                required="required" 
                                                               required oninvalid="setCustomValidity('Please enter rooms ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               onkeyup="lettersOnly(this)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">


                                                    <div class="col-sm-5">
                                                        <label class=" control-label" >Furnished: </label>

                                                        <select class ="form-control" id="FURNISHED" name="FURNISHED">
                                                            <option {{ $row->FURNISHED == 'Yes' ? 'selected':'' }}>Yes</option>
                                                            <option {{ $row->FURNISHED == 'No' ? 'selected':'' }}>No</option>
                                                        </select>
                                                        <div class="help-block with-errors"></div> 
                                                    </div> 

                                                     <div class="col-sm-5">
                                                        <label class=" control-label" >Pool:</label>

                                                        <select class ="form-control" id="POOL" name="POOL">
                                                            <option {{ $row->POOL == 'Yes' ? 'selected':'' }}>Yes</option>
                                                            <option {{ $row->POOL == 'No' ? 'selected':'' }}>No</option>
                                                        </select>
                                                        <div class="help-block with-errors"></div> 
                                                    </div> 

                                            </div>

                                        <div class="row">
                                            <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <l
                                                        abel for="form_name">Customer ID: </label>
                                                        <input pattern="\d*" maxlength="8" onkeypress="return inputAlphabet(event)" 
                                                               onkeyup ="alphaOnly(this)" 
                                                               id="CUSTOMER_ID" 
                                                               type="text" 
                                                               name="CUSTOMER_ID" 
                                                               class="form-control" 
                                                               placeholder="Please enter customers' ID *" 
                                                               required="required" 
                                                               data-error="Customer ID is required." 
                                                               required oninvalid="setCustomValidity('Please enter an existing customer ID ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               onkeyup="lettersOnly(this)">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_message">Picture: </label>                         
                                                            
                                                            <input id="PICTURE" 
                                                               type="file" 
                                                               name="PICTURE"  
                                                               placeholder="Browse image"    
                                                               value="{{$row->PICTURE}}"
                                                               required="required" 
                                                               data-error="Pictre is required." 
                                                            >

                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                        <label for="form_message">Date Submitted: </label>
                                                        <input id="DATE_SUBMITTED" 
                                                               type="DATE" 
                                                               name="DATE_SUBMITTED" 
                                                               class="form-control" 
                                                               placeholder="Please enter date *" 
                                                               required="required" 
                                                               data-error="Date submitted field is required.">

                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                            </div>
                                          
        								</div>
                                     
                                        <div class="container col-md-12" style="background-color:#f1f1f1; padding: 16px;">
                                            <div class="col-md-4" style="float: left;">
                                                <button type="button" 
                                                		onclick="document.getElementById('id03{{$row->PROPERTY_ID}}').style.display='none'" 
                                                		class="cancelbtn">Cancel</button>
                                            </div>

                                            <div class="col-md-4" align="center">
                                                <input id="submition" 
                                                	   type="submit" 
                                                	   class="btn btn-black" 
                                                	   align="center" 
                                                	   value="Save" 
                                                	   style="font-size: 20px; background: transparent; border-color: #f4511e;">
                                            </div>
                                            <div class="col-md-4" 
                                            	 style="float: left;">
                                                <input name="ID" 
                                                	   id="ID" 
                                                	   class="hidden ID" 
                                                	   value="{{$row->PROPERTY_ID}}">
                                            </div>
                                        </div>

                                    </form>
                               
                            </div>
                    	</div>
                    
                         </tbody>
                    </table>
                    </div>
                    
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



<script>

  //var modal = document.getElementById('myModal');

// When the user clicks anywhere outside of the modal, close it

/*
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
*/
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



