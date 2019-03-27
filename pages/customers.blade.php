<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <title>Orphanou Estates</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 
</head>

<link rel="stylesheet" type="text/css" href="{{ url('/css/Information.css') }}">

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
                <li class="active"><a href="#sltablediv" style="color: #555;">Customers Forms Data</a></li>
                
            </ul>
            <div class="tab-content">
                <div id="sltablediv" class="tab-pane fade in active">
                    <h1 align="center" {{-- style="margin-top: 70px;" --}}>Customers Forms Data</h1>
                    <table class="table table-bordered" id="sltable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($CUSTOMER as $row)
                            <tr>
                                <td>{{$row->ID}}</td>
                                <td>{{$row->NAME}}</td>
                                <td>{{$row->SURNAME}}</td>
                                <td>{{$row->TELEPHONE}}</td>
                                <td>{{$row->EMAIL}}</td>
                                <td style="text-align: center;"><i class="fa fa-pencil-square-o" aria-hidden="true" style="cursor: pointer;" onclick="document.getElementById('id01{{$row->ID}}').style.display='block'"></i></td>
                                <td style="text-align: center;"><i class="fa fa-trash-o" aria-hidden="true" style="cursor: pointer; color: red;" onclick="document.getElementById('id02{{$row->ID}}').style.display='block'"></i></td>
                            </tr>
                            <div id="id01{{$row->ID}}" class="modal slmodal">
                                <div class="modal-content animate" name="slmodal">
                                    <form method="post" action="{{url('CustomersUpdate')}}" role="form" id="sldata">
                                        {{csrf_field()}}
                                        <div class="container" style="padding: 16px;">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">Firstname</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="NAME" type="text" name="NAME" class="form-control" placeholder="Please enter first name *" required="required" data-error="First name is required." value="{{$row->NAME}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Lastname</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="form_lastname" type="text" name="SURNAME" class="form-control" placeholder="Please enter last name *" required="required" data-error="Last name is required." value="{{$row->SURNAME}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Telephone</label>
                                                        <input value="{{$row->TELEPHONE}}" id="TELEPHONE" type="text" pattern="\d*" maxlength="8" name="TELEPHONE" class="form-control" placeholder="Please enter phone*" required oninvalid="setCustomValidity('Please enter correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
                                                            onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_email">Email</label>
                                                        <input id="EMAIL" type="email" name="EMAIL" class="form-control" placeholder="Please enter email *" required="required" data-error="Valid email is required." value="{{$row->EMAIL}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="form_message">Comments</label>
                                                        <textarea id="form_message" name="COMMENTS" class="form-control" placeholder="Write comments.." rows="3">{{$row->COMMENTS}}</textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="container col-md-12" style="background-color:#f1f1f1; padding: 16px;">
                                            <div class="col-md-4" style="float: left;">
                                                <button type="button" onclick="document.getElementById('id01{{$row->ID}}').style.display='none'" class="cancelbtn">Cancel</button>
                                            </div>

                                            <div class="col-md-4" align="center">
                                                <input id="submition" type="submit" class="btn btn-black" align="center" value="Save" style="font-size: 20px; background: transparent; border-color: #f4511e;">
                                            </div>
                                            <div class="col-md-4" style="float: left;">
                                                <input name="ID" id="ID" class="hidden ID" value="{{$row->ID}}">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="id02{{$row->ID}}" class="modal">
                                <div class="modal-content animate modal-sm">
                                    <form method="post" action="{{url('CustomersDestroy')}}" role="form" id="sldata">
                                        {{csrf_field()}}
                                            <div class="container-fluid" style="text-align: center; padding: 0;">
                                                <p style="font-size: 15px;">Do you want to delete the notification from <b>{{$row->NAME}} {{$row->SURNAME}}</b>?</p>
                                            </div>

                                            <div class="container-fluid" style="background-color:#f1f1f1; padding: 16px;">
                                                <div class="" style="float: left;">
                                                    <button type="button" onclick="document.getElementById('id02{{$row->ID}}').style.display='none'" class="cancelbtn">Cancel</button>
                                                </div>

                                                <div class="" align="center">
                                                    <input id="submition" type="submit" class="btn btn-black" align="center" value="Confirm" style="font-size: 20px; background: transparent; border-color: #f4511e;">
                                                </div>
                                                <div class="" style="float: left;">
                                                    <input name="ID" id="ID" class="hidden ID" value="{{$row->ID}}">
                                                </div>
                                            </div>
                                    </form>
                                    </div>
                                </div>
                                @endforeach
                                <thead>
                            <tr>
                                <th  style="text-align: center;"><i class="fa fa-plus-circle" aria-hidden="true" style="cursor: pointer; color: orange;" onclick="document.getElementById('id03{{$row->ID}}').style.display='block'"></i></th>
                            </tr>
                        </thead>
                        <div id="id03{{$row->ID}}" class="modal slmodal">
                                <div class="modal-content animate" name="slmodal">
                                    <form method="post" action="{{url('CustomersAdd')}}" role="form" id="sldata">
                                        {{csrf_field()}}
                                        <div class="container" style="padding: 16px;">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">Firstname</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="NAME" type="text" name="NAME" class="form-control" placeholder="Please enter first name *" required="required" data-error="Firstname is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Lastname</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="form_lastname" type="text" name="SURNAME" class="form-control" placeholder="Please enter last name *" required="required" data-error="Last name is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Telephone</label>
                                                        <input id="TELEPHONE" type="text" pattern="\d*" maxlength="8" name="TELEPHONE" class="form-control" placeholder="Please enter phone*" required oninvalid="setCustomValidity('Please enter correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
                                                            onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_email">Email</label>
                                                        <input id="EMAIL" type="email" name="EMAIL" class="form-control" placeholder="Please enter email *" required="required" data-error="Valid email is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="form_message">Comments</label>
                                                        <textarea id="form_message" name="COMMENTS" class="form-control" placeholder="Write comments.." rows="3"></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12" style="background-color:#f1f1f1; padding: 16px;">
                                            <div class="col-md-4" style="float: left;">
                                                <button type="button" onclick="document.getElementById('id03{{$row->ID}}').style.display='none'" class="cancelbtn">Cancel</button>
                                            </div>

                                            <div class="col-md-4" align="center">
                                                <input id="submition" type="submit" class="btn btn-black" align="center" value="Save" style="font-size: 20px; background: transparent; border-color: #f4511e;">
                                            </div>
                                            <div class="col-md-4" style="float: left;">
                                                <input name="ID" id="ID" class="hidden ID" value="{{$row->ID}}">
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

<script type="text/javascript">
  $("#FIRST_NAME").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

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

    $('#checkboxes2')
    .on('click', function() {
      $(this)
        .val(this.checked ? 1 : 0);
      //console.log($(this).val());
    });
  $('#checkboxes3')
    .on('click', function() {
      $(this)
        .val(this.checked ? 1 : 0);
      //console.log($(this).val());
    });

    $('#checkboxes4')
    .on('click', function() {
      $(this)
        .val(this.checked ? 1 : 0);
      //console.log($(this).val());
    });
  $('#checkboxes5')
    .on('click', function() {
      $(this)
        .val(this.checked ? 1 : 0);
      //console.log($(this).val());
    });

  $("#LAST_NAME").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#ADDRESS").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#TELEPHONE").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#EMAIL").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#MESSAGE").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $('#checkboxes0').on('click', function() {
   $(this).val(this.checked ? 1 : 0);
  });

  $('#checkboxes1').on('click', function() {
    $(this).val(this.checked ? 1 : 0);
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

  $('#sltable').DataTable({
    responsive: true
  });

  $('#srtable').DataTable({
    responsive: true
  });

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
