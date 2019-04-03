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
                    <h1 align="center" {{-- style="margin-top: 70px;" --}}>Customers Personal Information</h1>
                    <table class="table table-bordered" id="sltable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Surname</th>
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
                                <td style="text-align: center;"><i id="editcust" class="fa fa-pencil-square-o editcust" data-id="{{$row->ID}}" data-firstname="{{$row->NAME }}" data-surnname="{{$row->SURNAME}}" data-telephone="{{$row->TELEPHONE}}" data-email="{{$row->EMAIL}}" data-comments="{{$row->COMMENTS}}" aria-hidden="true" style="cursor: pointer;"></i></td>
                                <td style="text-align: center;"><i id="delcust" class="fa fa-trash-o delcust" data-id="{{$row->ID}}" data-firstname="{{$row->NAME }}" data-surnname="{{$row->SURNAME}}" data-telephone="{{$row->TELEPHONE}}"data-email="{{$row->EMAIL}}" data-comments="{{$row->COMMENTS}}" aria-hidden="true" style="cursor: pointer; color: red;"></i></td>

                            </tr>
 <div ID="CustUpdate" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                    <h3 class="text-center">Update Customer's Personal Information</h3>
                </div>
                <div class="modal-body">    
                    <br />
                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                    <form method="post" action="CustomersUpdate" role="form" id="sldata">
                                        {{csrf_field()}}
                                        <div class="container" style="padding: 16px;">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">First Name</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="NAME1" type="text" name="NAME1" class="form-control" placeholder="Please enter first name *" required="required" data-error="First name is required." value="{{$row->NAME}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Surname</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="SURNAME1" type="text" name="SURNAME1" class="form-control" placeholder="Please enter surname *" required="required" data-error="Surname name is required." value="{{$row->SURNAME}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Telephone</label>
                                                        <input value="{{$row->TELEPHONE}}" id="TELEPHONE1" type="text" pattern="\d*" maxlength="18" name="TELEPHONE1" class="form-control" placeholder="Please enter phone*" required oninvalid="setCustomValidity('Please enter correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
                                                            onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_email">Email</label>
                                                        <input id="EMAIL1" type="email" name="EMAIL1" class="form-control" placeholder="Please enter email *" required="required" data-error="Valid email is required." value="{{$row->EMAIL}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="form_message">Comments</label>
                                                        <textarea id="COMMENTS1" name="COMMENTS1" class="form-control" placeholder="Write comments.." rows="3">{{$row->COMMENTS}}</textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                            <div class="modal-footer">
                                                <input id="submition" type="submit" class="btn btn-primary" align="center" value="Save"> 
                                                <input name="ID1" id="ID1" class="hidden ID" value="{{$row->ID}}">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
         <!-- <div ID="CustDestroy" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                    <h3 class="text-center">Delete Customer's Form</h3>
                </div>
                <div class="modal-body">   
                    <br />
                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                    <form method="post" action="CustomersDestroy" role="form" id="sldata">
                                        {{csrf_field()}}
                                            <div class="container-fluid" style="text-align: center; padding: 0;">
                                                <p style="font-size: 15px;">Do you want to delete <b>{{$row->NAME}} {{$row->SURNAME}}</b>'s form ?</p>
                                            </div>

                                                <div class="modal-footer">
                                                    <input id="submition" type="submit" class="btn btn-primary" align="center" value="Delete"">
                                                    <input name="ID" id="ID" class="hidden ID" value="{{$row->ID}}">
                                            </div>
                                    </form>
                                    </div>
                                </div> -->


    <div ID="CustDestroy" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                    <h4 class="modal-title">Delete Customer's form</h4>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Are you sure you want to delete this customer?</h3>
                    <br />
                    <div class="hidden"><input type="text" name="ID3" id="ID0"></div>
                    <form class="form-horizontal" role="form" method="post" action="CustomersDestroy">
                    	{{csrf_field()}}
                    	<div class="row">
	                        <div class="form-group">
	                            <label class="control-label col-sm-2" for="title">First Name:</label>
	                            <div class="col-sm-10">
	                                <input type="name" class="form-control" id="NAME2" disabled>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="form-group">
	                            <label class="control-label col-sm-2" for="title">Last Name:</label>
	                            <div class="col-sm-10">
	                                <input type="name" class="form-control" id="SURNAME2" disabled>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="row">
	                     	<div class="form-group">
		                        <div class="modal-footer">
			                        <input type="submit" class="btn btn-danger delete" value="Delete">
			                        <input name="ID21" id="ID21" class="hidden ID">
		                    	</div>
		                    </div>
		                </div>
                    </form>                  
                </div>
            </div>
        </div>
    </div>
                                @endforeach
                                <thead>
                            <tr>
                                 <tr>
                                <td style="text-align: center;"><i id="addcust" class="fa fa-plus-circle addcust" aria-hidden="true" style="cursor: pointer; color: orange;"></i></td>
                            </tr>
                            </tr>
                        </thead>
             <div ID="CustAdd" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width: 900px;">
                 <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                        <h3 class="text-center">Add Customer's Personal Information</h3>
                       </div>
                    <div class="modal-body">   
                    <br />
                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                    <form method="post" action="CustomersAdd" role="form" id="sldata">
                                        {{csrf_field()}}
                                        <div class="container" style="padding: 16px;">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">First Name</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="NAME" type="text" name="NAME" class="form-control" placeholder="Please enter first name *" required="required" data-error="First name is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Surname</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="form_lastname" type="text" name="SURNAME" class="form-control" placeholder="Please enter surname *" required="required" data-error="Surname name is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Telephone</label>
                                                        <input id="TELEPHONE" type="text" pattern="\d*" maxlength="18" name="TELEPHONE" class="form-control" placeholder="Please enter phone*" required oninvalid="setCustomValidity('Please enter correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
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
                                            <div class="modal-footer">
                                                <input id="submition" type="submit" class="btn btn-primary" align="center" value="Add">
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

$(document).on('click', '.editcust', function() {
            $('#NAME1').val($(this).data('firstname'));
            $('#SURNAME1').val($(this).data('surnname'));
            $('#TELEPHONE1').val($(this).data('telephone'));
            $('#EMAIL1').val($(this).data('email'));
            $('#COMMENTS1').val($(this).data('comments'));
            $('#ID1').val($(this).data('id'));

            $('#CustUpdate').modal('show');
        });

        $(document).on('click', '.delcust', function() {
     	$('#NAME2').val($(this).data('firstname'));
        $('#SURNAME2').val($(this).data('surnname'));
     	$('#ID21').val($(this).data('id'));
        $('#CollDestroy').modal('show');
        });

     $(document).on('click', '.editcust', function() {
            $('#CustUpdate').modal('show');
        });

     $(document).on('click', '.delcust', function() {
            $('#CustDestroy').modal('show');
        });

     $(document).on('click', '.addcust', function() {
            $('#CustAdd').modal('show');
        });

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
