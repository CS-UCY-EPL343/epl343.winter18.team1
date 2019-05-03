<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Orphanou Estates</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
  </head>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/sell.css') }}">
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="background: linear-gradient(to left, #f4511e , #565671); color: white;">
@include('main')
<!-- Container (About Section) -->
<div id="sell" class="container-fluid">
<div class="row col-sm-12" style="font-size: 36px; margin-top: 2px;">    
  <strong>Let us know how we can help you</strong>                           
</div>
<div class="col-sm-12 row">
<form onsubmit="return validateEmail(this)" id="myForm" role="form">
  {{csrf_field()}}
  <div class="messages" id="form-messages"></div>
  <div class="controls">
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <label for="form_name">Firstname *</label>
          <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="FIRST_NAME" type="text" name="FIRST_NAME" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required." maxLength="20">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="LAST_NAME">Lastname *</label>
          <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="LAST_NAME" type="text" name="LAST_NAME" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required." maxLength="20">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="form_address">Address *</label>
          <input id="ADDRESS" type="text" name="ADDRESS" class="form-control" placeholder="Please enter your address *" required="required" data-error="Address is required." maxLength="40">
          <div class="help-block with-errors"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="EMAIL">Email *</label>
          <input id="EMAIL" type="email" name="EMAIL" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required." maxLength="40">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="TELEPHONE">Telephone*</label>
          <input id="TELEPHONE" maxLength="18" type="text" pattern="\d*" name="TELEPHONE"  class="form-control" placeholder="Please enter your phone*" required oninvalid="setCustomValidity('Please enter your correct phone number ')"
          onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
          
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-md-4">
        <div class="form-group">
          <label for="checkboxes">Ineterested for</label>
          <div>
            <label class="checkbox-inline" for="checkboxes0">
              <input name="SELL" id="checkboxes0" type="checkbox">Sell</label>
            <label class="checkbox-inline" for="checkboxes1">
              <input name="LET" id="checkboxes1" type="checkbox">Let</label>
            <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>
      
      
      <div class="form-group col-md-4" >
        <label class=" control-label" for="PROPERTY_ID">Property's Type *</label>
        <div class="">
          <select id="PROPERTY_ID" name="PROPERTY_ID" class="form-control" >
            <option value="Apartment">Apartment                                                                                                                                                                                                              </option>
            <option value="Building">Building                                                                                                                                                                                                                </option>
            <option value="House">House                                                                                                                                                                                                                      </option>
            <option value="Field">Field                                                                                                                                                                                                                      </option>
            <option value="Office">Office                                                                                                                                                                                                                    </option>
            <option value="Plot">Plot                                                                                                                                                                                                                        </option>
            <option value="Warehouse">Warehouse                                                                                                                                                                                                              </option>
            <option value="Store">Store                                                                                                                                                                                                                      </option>
          </select>
        </div>
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="MESSAGE">Message (optional)</label>
          <textarea id="MESSAGE" name="MESSAGE" class="form-control" placeholder="Something you want to mention" rows="3" maxLength="300"></textarea>
          <div class="help-block with-errors"></div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="form-group">
         
          <div>
            <label class="checkbox-inline" for="che" id="reqfield">
              <input id="che" name="che" type="checkbox" required>I agree with terms of use and privacy policy of ONE</label>
            <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <button type="button" class="btn sub" style="color: white; font-size: 20px; background: transparent; border-color: white;">
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

    var x = document.forms["myForm"]["FIRST_NAME"].value;
    if (x == "") {
        document.getElementById("FIRST_NAME").style.border="2px solid red";
        bool = false;
    }
    else{
        document.getElementById("FIRST_NAME").style.border="1px solid #ccc";
    }

    var x = document.forms["myForm"]["LAST_NAME"].value;
    if (x == "") {
        document.getElementById("LAST_NAME").style.border="2px solid red";
        bool = false;
    }
    else{
        document.getElementById("LAST_NAME").style.border="1px solid #ccc";
    }

    var x = document.forms["myForm"]["ADDRESS"].value;
    if (x == "") {
        document.getElementById("ADDRESS").style.border="2px solid red";
        bool = false;
    }
    else{
        document.getElementById("ADDRESS").style.border="1px solid #ccc";
    }

    var x = document.forms["myForm"]["EMAIL"].value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})/;
    if (x == "" || !x.match(mailformat)) {
        document.getElementById("EMAIL").style.border="2px solid red";
        bool = false;
    }
    else{
        document.getElementById("EMAIL").style.border="1px solid #ccc";
    }

    var x = document.forms["myForm"]["TELEPHONE"].value;
    if (x == "") {
        document.getElementById("TELEPHONE").style.border="2px solid red";
        bool = false;
    }
    else{
        document.getElementById("TELEPHONE").style.border="1px solid #ccc";
    }

    var x = $('input[name="che"]:checked').length;
    if (x == 0) {
        document.getElementById("reqfield").style.border="2px solid red";
        bool = false;
    }
    else{
        document.getElementById("reqfield").style.border="none";
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
        url: 'SellLetSubmit',
        dataType: 'json',
        data: {
            '_token': $('input[name=_token]').val(),
            'PROPERTY_ID': $("#PROPERTY_ID").val(),
            'FIRST_NAME': $("#FIRST_NAME").val(),
            'LAST_NAME': $("#LAST_NAME").val(),
            'ADDRESS': $("#ADDRESS").val(),
            'EMAIL': $("#EMAIL").val(),
            'TELEPHONE': $("#TELEPHONE").val(),
            'MESSAGE': $("#MESSAGE").val(),
            'SELL': $("#checkboxes0").val(),
            'LET': $("#checkboxes1").val(),
        },
        success: function(data) {
          toastr.remove();
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
          else if(data=="Address field must not be empty"){
              alert("Edit failed! Address field must not be empty.");
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
          else if(data=="Address field must not exceeds 40 characters"){
              alert("Edit failed! Address field must not exceeds 40 characters.");
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
            toastr.success('Successfully submit form!', 'Success submition');
          }
          var form = document.getElementById("myForm");
          form.reset();
        }
    });
  });
</script>

<script>
  $('#checkboxes0')
    .on('click', function() {
      $(this)
        .val(this.checked ? 1 : 0);
    });
  $('#checkboxes1')
    .on('click', function() {
      $(this)
        .val(this.checked ? 1 : 0);
    });

    $('#che')
    .on('click', function() {
      $(this)
        .val(this.checked ? 1 : 0);
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

      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']")
        .on('click', function(event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body')
              .animate({
                scrollTop: $(hash)
                  .offset()
                  .top
              }, 900, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
          } // End if
        });

      $(window)
        .scroll(function() {
          $(".slideanim")
            .each(function() {
              var pos = $(this)
                .offset()
                .top;
              var winTop = $(window)
                .scrollTop();
              if (pos < winTop + 600) {
                $(this)
                  .addClass("slide");
              }
            });
        });
    })

</script>
</body>
</html>