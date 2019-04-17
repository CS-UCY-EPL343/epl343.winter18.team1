<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <title>Orphanou Estates</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 
</head>
<link rel="stylesheet" type="text/css" href="{{ url('/css/Information.css') }}">
<body>
    @include('main') 
    
    <div class="row">
        <br/>
        <div class="col-md-12 container-fluid" style="margin-top: -30px;">
            
            <div class="tab-content">
                <div id="sltablediv" class="tab-pane fade in active">
                    <h1 align="center" {{-- style="margin-top: 70px;" --}}>Collaborators Personal Information</h1>
                    <table class="table table-bordered" id="sltable">
                        <thead>
                            <tr>
                                <th>No License</th>
                                <th>First Name</th>
                                <th>Surname</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($COLLABORATOR as $row)
                            <tr>
                                <td>{{$row->NoLicense}}</td>
                                <td>{{$row->NAME}}</td>
                                <td>{{$row->SURNAME}}</td>
                                <td>{{$row->ADDRESS}}</td>
                                <td>{{$row->EMAIL}}</td>
                                <td>{{$row->PHONENUMBER}}</td>
                                

                                 <td style="text-align: center;"><i id="editcoll" class="fa fa-pencil-square-o editcoll" data-license="{{$row->NoLicense}}" data-firstname="{{$row->NAME }}" data-surnname="{{$row->SURNAME}}" data-phonenumber="{{$row->PHONENUMBER}}"data-email="{{$row->EMAIL}}" data-address="{{$row->ADDRESS}}"   aria-hidden="true" style="cursor: pointer;"></i></td>

                                 <td style="text-align: center;"><i id="delcoll" class="fa fa-trash-o delcoll" data-license="{{$row->NoLicense}}" data-firstname="{{$row->NAME }}" data-surnname="{{$row->SURNAME}}" data-phonenumber="{{$row->PHONENUMBER}}"data-email="{{$row->EMAIL}}" data-address="{{$row->ADDRESS}}" aria-hidden="true" style="cursor: pointer; color: red;"></i></td>
                            </tr>
                           <div ID="CollUpdate" class="modal fade" role="dialog">
                             <div class="modal-dialog" style="width: 900px;">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                                        <h3 class="text-center">Update Collaborator's Information</h3>
                                    </div>
                                    <div class="modal-body">    
                                    <br />
                                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                    <form class="form-horizontal" method="post" action="CollaboratorsUpdate" role="form" >
                                        {{csrf_field()}}
                                        <div class="row">
                                             <div class="col-sm-3">
                                                <div class="form-group">
                                                        <label for="NoLicense">No License</label>
                                                        <input id="NoLicense0" type="text" name="NoLicense0" class="form-control" placeholder="Please enter the License Number" required="required" data-error="License Number is required." disabled>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">First Name</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="NAME1" type="text" maxlength ="20"name="NAME1" class="form-control" placeholder="Please enter  first name *" required="required" data-error="First name is required." >
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Surname</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="SURNAME1" type="text"  maxlength ="20"name="SURNAME1" class="form-control" placeholder="Please enter surname *" required="required" data-error="Surname is required." >
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_phone">Phone Number</label>
                                                        <input value="{{$row->PHONENUMBER}}" id="PHONENUMBER1" type="text" pattern ="\d*" maxlength ="18" name="PHONENUMBER1" class="form-control" placeholder="Please enter phone number*" required oninvalid="setCustomValidity('Please enter correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
                                                            onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_email">Email</label>
                                                        <input id="EMAIL1" type="email" maxlength ="50"name="EMAIL1" class="form-control" placeholder="Please enter email *" required="required" data-error="Valid email is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_email">Address</label>
                                                        <input id="ADDRESS1" type="text"  maxlength ="50"name="ADDRESS1" class="form-control" placeholder="Please enter address *" required="required" data-error="Valid address is required." >
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                              
                                            <div class="modal-footer">
                                                <input id="editsubmit" type="submit" class="btn btn-primary editsubmit" align="center" value="Save">
                                                <input name="NoLicense1" id="NoLicense1" class="hidden ID">
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                          <!-- div ID="CollDestroy" class="modal fade" role="dialog">
                            <div class="modal-dialog" style="width: 900px;">
                            <div class="modal-content">
                                <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                                   <h3 class="text-center">Delete Collaborator's Form</h3>
                                </div>
                          <div class="modal-body"> 
                          <br/>
                          <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                     <form method="post" action="CollaboratorsDestroy" role="form" id="sldata">
                                        {{csrf_field()}}
                                            <div class="" style="text-align: center; padding: 0;">
                                            	<h4 class="modal-title"></h4>
                                                <p style="font-size: 15px;">Do you want to delete <b>{{$row->NAME}} {{$row->SURNAME}}</b>'s form ?</p>
                                            </div>

                                                <div class="modal-footer">
                                                    <input id="submition" type="submit" class="btn btn-primary" align="center" value="Delete">
                                                    <input name="NoLicense2" id="NoLicense2" class="hidden ID">
                                                </div>

                                    </form>
                                    </div>
                                </div> -->

    <!-- Modal form to delete a form -->
    <div ID="CollDestroy" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width:900px;">
            <div class="modal-content">
                <div class="modal-header" style="height: 50px;">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                </div>
                 <h3 class="text-center">Do you want to delete collaborator's form?</h3>
                <div class="modal-body">
                    <br />
                    <div class="hidden"><input type="text" name="ID3" id="ID8"></div>
                    <form class="form-horizontal" role="form" method="post" action="CollaboratorsDestroy">
                    	{{csrf_field()}}
                    	<div class="row">
	                        <div class="form-group">
	                            <label class="control-label col-sm-2" for="ID0">No License:</label>
	                            <div class="col-sm-6">
	                                <input type="text" class="form-control" id="NoLicense2" disabled>
	                            </div>
	                        </div>
                    	</div>
                    	<br/>

                    	<div class="row">
	                        <div class="form-group">
	                            <label class="control-label col-sm-2" for="title">First Name:</label>
	                            <div class="col-sm-6">
	                                <input type="name" class="form-control" id="NAME2" disabled>
	                            </div>
	                        </div>
	                    </div>
	                    <br/>
	                    <div class="row">
	                        <div class="form-group">
	                            <label class="control-label col-sm-2" for="title">Surname:</label>
	                            <div class="col-sm-6">
	                                <input type="name" class="form-control" id="SURNAME2" disabled>
	                            </div>
	                        </div>
	                    </div><br/>
	                    <div class="row">
	                     	<!-- <div class="form-group"> -->
		                        <div class="modal-footer">
			                        <input type="submit" class="btn btn-primary delete"align="center" value="Delete">
			                        <input name="NoLicense21" id="NoLicense21" class="hidden ID">
		                    	</div>
		                    <!-- </div> -->
		                </div>
                    </form>                  
                </div>
            </div>
        </div>
    </div>
                             @endforeach
                                <thead>
                            <tr>
                                <td style="text-align: center;"><i id="addcoll" class="fa fa-plus-circle addcoll" aria-hidden="true" style="cursor: pointer; color: orange;"></i></td>
                            </tr>
                        </thead>

                        <div ID="CollAdd" class="modal fade" role="dialog">
                         <div class="modal-dialog" style="width: 900px;">
                             <div class="modal-content">
                                <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                             <h3 class="text-center">Add Collaborator's Personal Information</h3>
                        </div>
                    <div class="modal-body">
                    <br />
                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                    <form method="post" action="CollaboratorsAdd" role="form" id="sldata">
                                        {{csrf_field()}}
                                       <div class="container-fluid" style="padding: 16px;">
                                            <div class="row">
                                            	<div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="NoLicense">No License</label>
                                                        <input id="NoLicense" type="text" maxlength ="15" name="NoLicense" class="form-control" placeholder="Please enter the License Number" required="required" data-error="License Number is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">First Name</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="NAME" type="text" maxlength ="20" name="NAME" class="form-control" placeholder="Please enter first name *" required="required" data-error="First name is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Surname</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="form_lastname" type="text" maxlength ="20" name="SURNAME" class="form-control" placeholder="Please enter surname *" required="required" data-error="Surname is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Phone Number</label>
                                                        <input pattern="\d*" maxlength="18" id="PHONENUMBER" type="text" name="PHONENUMBER" class="form-control" placeholder="Please enter phone number*" required oninvalid="setCustomValidity('Please enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
                                                            onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)"  >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_email">Email</label>
                                                        <input id="EMAIL" type="email" maxlength ="50"name="EMAIL" class="form-control" placeholder="Please enter email *" required="required" data-error="Valid email is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_message">Address</label>
                                                        <input id="ADDRESS" type="text" maxlength ="50" name="ADDRESS" class="form-control" placeholder="Please enter address *" required="required" data-error="Valid address is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                                <input id="submition" type="submit" class="btn btn-primary" align="center" value="Add">
                                                <input name="ID" id="ID" class="hidden ID" value="{{$row->NoLicense}}">
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

        $(document).on('click', '.editcoll', function() {
            $('#NoLicense0').val($(this).data('license'));
            $('#NAME1').val($(this).data('firstname'));
            $('#SURNAME1').val($(this).data('surnname'));
            $('#PHONENUMBER1').val($(this).data('phonenumber'));
            $('#EMAIL1').val($(this).data('email'));
            $('#ADDRESS1').val($(this).data('address'));
            $('#NoLicense1').val($(this).data('license'));

            $('#CollUpdate').modal('show');
        });

     $(document).on('click', '.delcoll', function() {
     	$('#NAME2').val($(this).data('firstname'));
        $('#SURNAME2').val($(this).data('surnname'));
     	$('#NoLicense2').val($(this).data('license'));
     	$('#NoLicense21').val($(this).data('license'));
        $('#CollDestroy').modal('show');
        });

     $(document).on('click', '.addcoll', function() {
            $('#CollAdd').modal('show');
        });

  $("#NAME").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#SURNAME").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#EMAIL").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#PHONE NUMBER").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#ADDRESS").keyup(function(event) {
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
