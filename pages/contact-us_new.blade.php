<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

	<title>Orphanou Estates</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{{ csrf_token() }}"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/contact.css') }}">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
</head>

<body style="font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: white;
      background: linear-gradient(to left, #f4511e , #565671);">
@include('main')
<div class="contact" id="contact" style="font-family: Calibri;">
  <div class="container-fluid">
    <div class="contact-form">
      <div class="row">
        <div class="col-sm-6">
          <form id="contactform" role="form" name="contactform">
          	{{csrf_field()}}
            <div class="controls">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="FIRST_NAME">First Name *</label>
                    <input id="FIRST_NAME" type="text" name="FIRST_NAME" class="form-control" maxlength ="20" placeholder="Please enter your first name *" required="required" onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="LAST_NAME">Surname *</label>
                    <input id="LAST_NAME" type="text" name="LAST_NAME" class="form-control" maxlength ="20" placeholder="Please enter your surname *" required="required" onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="EMAIL">Email *</label>
                    <input id="EMAIL" type="email" name="EMAIL" class="form-control" maxlength ="40" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="TELEPHONE">Phone Number *</label>
                    <input id="TELEPHONE" type="text" pattern ="\d*" maxlength ="18" name="TELEPHONE"  class="form-control" placeholder="Please enter your phone number*" required oninvalid="setCustomValidity('Please enter your correct phone number ')"
                    onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                    
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="MESSAGE">Message</label>
                    <textarea id="MESSAGE" name="MESSAGE" class="form-control" maxlength ="300" placeholder="Leave us a message (max 300 characters)" rows="4" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                 	<button type="button" class="btn sub" style="font-size: 20px; background: transparent; border-color: white;">
			            Submit
			        </button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <br>
                  <small class="text-muted" style="color: white;"><strong>*</strong> These fields are required.</small>
                </div>
              </div>
            </div>
          </form>
          
        </div>
        <div class="col-sm-5" style="margin-top: 50px; font-size: 19px;">
          <div class="row col1">
            <div class="col-sm-3">
              <i class="fa fa-map-marker" style="font-size:16px;"></i>   Address
            </div>
            <div class="col-sm-9">
              4060 Potamos Yermasoyias Limassol,<br> Cyprus P.O. Box 52062
            </div>
          </div>
          
          <div class="row col1">
            <div class="col-sm-3">
              <i class="fa fa-phone"></i>   Phone
            </div>
            <div class="col-sm-9">
              25313031, 99661616
            </div>
          </div>
          <div class="row col1">
            <div class="col-sm-3">
              <i class="fa fa-fax"></i>    Fax
            </div>
            <div class="col-sm-9">
              25329293
            </div>
          </div>
          <div class="row col1">
            <div class="col-sm-3">
              <i class="fa fa-envelope"></i>   Email
            </div>
            <div class="col-sm-9">
              <a href="mailto:info@yourdomain.com" style="background-color: transparent; color: white">info@orphanouestates.com</a>
            </div>
          </div>
          <div class="row col1">
            <div class="col-sm-3">
              <i class="fa fa-building"></i>   Hours
            </div>
            <div class="col-sm-9">
              Mon-Fri 08:00 - 18:00, Sat 10:00-13:00
            </div>
          </div><br>
          <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Limassol%20aneksartisias&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:230px;width:100%;}</style></div>
        </div>
        <nav class="social col-sm-1">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss" style="border-color: #1f2a3c; border-style: solid;"><i class="fa fa-rss"></i></a></li>
            <li><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/nicos.orphanou.3" class="icoFacebook" title="Facebook" style="border-color: #1f2a3c; border-style: solid;"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter" style="border-color: #1f2a3c; border-style: solid;"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +" style="border-color: #1f2a3c; border-style: solid;"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin" style="border-color: #1f2a3c; border-style: solid;"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </nav>
      </div>
      
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

</footer>

<script type="text/javascript">

  $(document).on('click', '.sub', function() {  

    var bool = true;

    var x = document.forms["contactform"]["FIRST_NAME"].value;
    if (x == "") {
        document.getElementById("FIRST_NAME").style.border="2px solid red";
        bool = false;
    }
    else{
        document.getElementById("FIRST_NAME").style.border="1px solid #ccc";
    }

    var x = document.forms["contactform"]["LAST_NAME"].value;
    if (x == "") {
        document.getElementById("LAST_NAME").style.border="2px solid red";
        bool = false;
    }
    else{
        document.getElementById("LAST_NAME").style.border="1px solid #ccc";
    }

    var x = document.forms["contactform"]["EMAIL"].value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})/;
    if (x == "" || !x.match(mailformat)) {
        document.getElementById("EMAIL").style.border="2px solid red";
        bool = false;
    }
    else{
        document.getElementById("EMAIL").style.border="1px solid #ccc";
    }

    var x = document.forms["contactform"]["TELEPHONE"].value;
    if (x == "") {
        document.getElementById("TELEPHONE").style.border="2px solid red";
        bool = false;
    }
    else{
        document.getElementById("TELEPHONE").style.border="1px solid #ccc";
    }

    if(bool==false){
        return false;
    }
     $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
        type: 'POST',
        url: 'contactsend',
        dataType: 'json',
        data: {
            '_token': $('input[name=_token]').val(),
            'FIRST_NAME': $("#FIRST_NAME").val(),
            'LAST_NAME': $("#LAST_NAME").val(),
            'EMAIL': $("#EMAIL").val(),
            'TELEPHONE': $("#TELEPHONE").val(),
            'MESSAGE': $("#MESSAGE").val(),
        },
        success: function(data) {
          event.preventDefault();
          if(data=="Email address must not be empty"){
              alert("Edit failed! Email address must not be empty.");
              return false;
          }
          else if(data=="Invalid email address format"){
              alert("Edit failed! Invalid format of email address.");
              return false;
          }
          else if(data=="First Name field must not be empty"){
              alert("Edit failed! First Name field must not be empty.");
              return false;
          }
          else if(data=="First Name field must have only letters"){
              alert("Edit failed! First Name field must have only letters.");
              return false;
          }
          else if(data=="Last Name field must not be empty"){
              alert("Edit failed! Last Name field must not be empty.");
              return false;
          }
          else if(data=="Last Name field must have only letters"){
              alert("Edit failed! Last Name field must have only letters.");
              return false;
          }
          else if(data=="Telephone field must not be empty"){
              alert("Edit failed! Telephone field must not be empty.");
              return false;
          }
           else if(data=="First Name field must not exceeds 20 characters"){
              alert("Edit failed! First Name field must not exceeds 20 characters.");
              return false;
          }
          else if(data=="Last Name field must not exceeds 20 characters"){
              alert("Edit failed! Last Name field must not exceeds 20 characters.");
              return false;
          }
          else if(data=="Telephone must not exceeds 18 digits"){
              alert("Edit failed! Telephone must not exceeds 18 digits.");
              return false;
          }
          else if(data=="Email must not exceeds 40 characters"){
              alert("Edit failed! Email must not exceeds 40 characters.");
              return false;
          }
          else{
            toastr.remove();
            toastr.options = {
                  "closeButton": false,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": true,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "4000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut",
                  "limit": "1"
                }
            toastr.success('Successfully submit contact form!', 'Success submition');
            var form = document.getElementById("contactform");
            form.reset();
          }
        }
    });
  });
</script>


<script>
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
	
</script>

</body>
</html>