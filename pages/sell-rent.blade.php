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
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>  
  </head>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/sell.css') }}">
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="background: linear-gradient(to left, #f4511e , #565671); color: black;">
    @extends('main')
    @section('navbar')
  </ul>
</div>

</div>
</nav>
@endsection
<!-- Container (About Section) -->
<div id="sell" class="container-fluid" style="margin-top: 80px;">
<div class="row col-sm-12" style="font-size: 36px; margin-top: 2px;">    
  <strong>Let us know how we can help you</strong>                           
</div>
<div class="col-sm-12 row">
<form onsubmit="return validateEmail(this)" id="myForm" name="ajax-contact" method="post" action="{{url('SellLet')}}" role="form">
  {{csrf_field()}}
  <div class="messages" id="form-messages"></div>
  <div class="controls">
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <label for="form_name">Firstname *</label>
          <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="FIRST_NAME" type="text" name="FIRST_NAME" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required."  maxLength="20">
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
          <label for="form_email">Email *</label>
          <input id="EMAIL" type="email" name="EMAIL" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required." maxLength="40">
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="form_phone">Telephone*</label>
          <input maxLength="30" id="TELEPHONE" type="text" pattern="\d*" name="TELEPHONE"  class="form-control" placeholder="Please enter your phone*" required oninvalid="setCustomValidity('Please enter your correct phone number ')"
          onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
          
        </div>
      </div>
    </div>
    <div class="row">
      <!--                                                                                                                                                                                                                                             <div class="col-md-8"> -->
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
      
      
      <div class="form-group col-md-4">
        <label class=" control-label" for="PROPERTY_ID">Property's Type *</label>
        <div class="">
          <select id="PROPERTY_ID" name="PROPERTY_ID" class="form-control">
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
      <!--                                                                                                                                                                                                                                             </div> -->
      
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="MESSAGE">Message (optional)</label>
          <textarea maxLength="300" id="MESSAGE" name="MESSAGE" class="form-control" placeholder="Something you want to mention" rows="3"></textarea>
          <div class="help-block with-errors"></div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="form-group">
         
          <div>
            <label class="checkbox-inline" for="che">
              <input id="che" type="checkbox" required>I agree with terms of use and privacy policy of NOE</label>
            <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <input type="submit" class="btn btn-black sub" value="Submit" style="font-size: 20px; background: transparent; border-color: white;">
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

<script>
  $('#checkboxes0')
    .on('click', function() {
      $(this)
        .val(this.checked ? 1 : 0);
      //console.log($(this).val());
    });
  $('#checkboxes1')
    .on('click', function() {
      $(this)
        .val(this.checked ? 1 : 0);
      //console.log($(this).val());
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

$( "#myForm" ).submit(function( event ) {

            // window.stop();
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
                "timeOut": "2000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "limit": "1"
            };

            toastr.success('Successfully submitted form!', 'Success Alert');
          
});



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