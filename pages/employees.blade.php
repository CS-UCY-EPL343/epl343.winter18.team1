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
                    <h1 align="center">Employees Personal Information</h1>
                    <table class="table table-bordered" id="sltable">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>First Name</th>
                                <th>Surname</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Salary</th>
                                <th>Address</th>
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($EMPLOYEE as $row)
                            <tr>
                                <td>{{$row->EMPLOYEE_ID}}</td>
                                <td>{{$row->NAME}}</td>
                                <td>{{$row->SURNAME}}</td>
                                <td>{{$row->TELEPHONE}}</td>
                                <td>{{$row->EMAIL}}</td>
                                <td>{{$row->SALARY}}</td>
                                <td>{{$row->ADDRESS}}</td>
                               
                                  <td style="text-align: center;"><i id="editemp" class="fa fa-pencil-square-o editemp" data-empid="{{$row->EMPLOYEE_ID}}" data-firstname="{{$row->NAME }}" data-surnname="{{$row->SURNAME}}" data-phonenumber="{{$row->TELEPHONE}}"data-email="{{$row->EMAIL}}" data-salary="{{$row->SALARY}}" data-address="{{$row->ADDRESS}}"   aria-hidden="true" style="cursor: pointer;"></i></td>

                                <td style="text-align: center;"><i id="delemp" class="fa fa-trash-o delemp" data-empid="{{$row->EMPLOYEE_ID}}" data-firstname="{{$row->NAME }}" data-surnname="{{$row->SURNAME}}" data-phonenumber="{{$row->TELEPHONE}}"data-email="{{$row->EMAIL}}" data-salary="{{$row->SALARY}}" data-address="{{$row->ADDRESS}}" aria-hidden="true" style="cursor: pointer; color: red;"></i></td>
                               
                                

                            </tr>


                            <!-- Modal form to delete a form -->
    <div ID="EmpUpdate" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                    <h3 class="text-center">Update Employee's Personal Information</h3>
                </div>
                <div class="modal-body">    
                    <br />
                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                    <form class="form-horizontal" role="form" method="post" action="EmployeesUpdate">
                        {{csrf_field()}}
                        <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="form_name">First Name</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="NAME1" maxlength ="20" type="text" name="NAME1" class="form-control" placeholder="Please enter first name *" required="required" data-error="First name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="form_lastname">Surname</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="SURNAME1" maxlength ="20" type="text" name="SURNAME1" class="form-control" placeholder="Please enter surname *" required="required" data-error="Surname is required." >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="form_phone">Telephone</label>
                                        <input value="{{$row->TELEPHONE}}" id="TELEPHONE1" type="text" pattern="\d*" maxlength="18" name="TELEPHONE1"  class="form-control" placeholder="Please enter phone*" required oninvalid="setCustomValidity('Please enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
                                            onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_email">Email</label>
                                        <input id="EMAIL1" type="email" name="EMAIL1" class="form-control" maxlength ="50" placeholder="Please enter email *" required="required" data-error="Valid email is required." >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_message">Salary</label>
                                        <input id="SALARY1" type="number" name="SALARY1" class="form-control" placeholder="Please enter salary *" required="required" data-error="Valid Salary is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_message">Address</label>
                                        <input id="ADDRESS1" type="text" name="ADDRESS1" class="form-control" maxlength ="20" placeholder="Please enter address *" required="required" data-error="Valid address is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input id="submition" type="submit" class="btn btn-primary" align="center" value="Save" >
                            <input name="EMPLOYEE_ID1" id="EMPLOYEE_ID1" class="hidden ID" >
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

                            <!-- <div id="id01{{$row->EMPLOYEE_ID}}" class="modal slmodal">
                                <div class="modal-content animate" name="slmodal">
                                    <form method="post" action="EmployeesUpdate" role="form" id="sldata">
                                        {{csrf_field()}}
                                        <div class="container" style="padding: 16px;">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">First Name</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="NAME" type="text" name="NAME" class="form-control" placeholder="Please enter first name *" required="required" data-error="First name is required." value="{{$row->NAME}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Surname</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="form_lastname" type="text" name="SURNAME" class="form-control" placeholder="Please enter surname *" required="required" data-error="Surname is required." value="{{$row->SURNAME}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_phone">Telephone</label>
                                                        <input value="{{$row->TELEPHONE}}" id="TELEPHONE" type="text" pattern="\d*" maxlength="8" name="TELEPHONE"  class="form-control" placeholder="Please enter phone*" required oninvalid="setCustomValidity('Please enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
                                                            onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                                                    </div>
                                                </div>
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
                                                        <label for="form_message">Salary</label>
                                                        <input id="SALARY" type="number" name="SALARY" class="form-control" placeholder="Please enter salary *" required="required" data-error="Valid Salary is required." value="{{$row->SALARY}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="form_message">Address</label>
                                                        <input id="ADDRESS" type="text" name="ADDRESS" class="form-control" placeholder="Please enter address *" required="required" data-error="Valid address is required." value="{{$row->ADDRESS}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12" style="background-color:#f1f1f1; padding: 16px;">
                                            <div class="col-md-4" style="float: left;">
                                                <button type="button" onclick="document.getElementById('id01{{$row->EMPLOYEE_ID}}').style.display='none'" class="cancelbtn">Cancel</button>
                                            </div>

                                            <div class="col-md-4" align="center">
                                                <input id="submition" type="submit" class="btn btn-black" align="center" value="Save" style="font-size: 20px; background: transparent; border-color: #f4511e;">
                                            </div>
                                            <div class="col-md-4" style="float: left;">
                                                <input name="EMPLOYEE_ID" id="EMPLOYEE_ID" class="hidden ID" value="{{$row->EMPLOYEE_ID}}">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->

      <div ID="EmpDestroy" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 900px;">
            <div class="modal-content">
                <div class="modal-header" style="height: 50px;">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                </div>
                 <h3 class="text-center">Do you want to delete employee's form?</h3>
                <div class="modal-body">
                </br> 
                    <div class="hidden"><input type="text" name="ID3" id="ID0"></div>
                    <form class="form-horizontal" role="form" method="post" action="EmployeesDestroy">
                    	{{csrf_field()}}                        
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
	                            <label class="control-label col-sm-2" for="title">Last Name:</label>
	                            <div class="col-sm-6">
	                                <input type="name" class="form-control" id="SURNAME2" disabled>
	                            </div>
	                        </div>
	                    </div><br/>
	                    <div class="row">
	                     	<div class="form-group">
		                        <div class="modal-footer">
			                        <input type="submit" class="btn btn-primary delete" value="Delete">
			                        <input name="EMPLOYEE_ID21" id="EMPLOYEE_ID21" class="hidden ID">
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
                                <td style="text-align: center;"><i id="addemp" class="fa fa-plus-circle addemp" aria-hidden="true" style="cursor: pointer; color: orange;"></i></td>
                            </tr>
                        </thead>

                       <div ID="EmpAdd" class="modal fade" role="dialog">
                         <div class="modal-dialog" style="width: 900px;">
                             <div class="modal-content">
                                <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                             <h3 class="text-center">Add Employee's Personal Information</h3>
                        </div>
                    <div class="modal-body">
                    
                    <br />
                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                    <form method="post" action="EmployeesAdd" role="form" id="sldata">
                                        {{csrf_field()}}
                                        <!-- <div class="container" style="padding: 16px;"> -->
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">Firstname</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="NAME" maxlength ="20" type="text" name="NAME" class="form-control" placeholder="Please enter first name *" required="required" data-error="First name is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Surname</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="form_lastname" maxlength ="20" type="text" name="SURNAME" class="form-control" placeholder="Please enter surname *" required="required" data-error="Surname is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Telephone</label>
                                                        <input id="TELEPHONE" type="text" pattern="\d*" " maxlength="18" name="TELEPHONE" class="form-control" placeholder="Please enter phone*" required oninvalid="setCustomValidity('Please enter correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
                                                            onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_email">Email</label>
                                                        <input id="EMAIL" type="email" name="EMAIL" class="form-control" maxlength ="50" placeholder="Please enter email *" required="required" data-error="Valid email is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="form_message">Salary</label>
                                                        <input id="SALARY" name="SALARY" class="form-control" placeholder="Please enter salary" required="required"
                                                        data-error="Valid salary is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_message">Address</label>
                                                        <input id="ADDRESS" type="text" name="ADDRESS" class="form-control" maxlength ="50" placeholder="Please enter address *" required="required" data-error="Valid address is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                        <div class="modal-footer">
                                            <!-- <div class="col-md-4" align="center"> -->
                                                <input id="submition" type="submit" class="btn btn-primary" align="center" value="Add">
                                            <!-- </div> -->
                                            <!-- <div class="col-md-4" style="float: left;"> -->
                                                <input name="ID" id="ID" class="hidden ID" value="{{$row->EMPLOYEE_ID}}">
                                            <!-- </div> -->
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


    <script>
  $('#postTable').DataTable({
    responsive: true,
     "autoWidth": false,
  });   
   $('#BRTable').DataTable({
    responsive: true,
     "autoWidth": false,
  });  
   $('#CTable').DataTable({
    responsive: true,
     "autoWidth": false
    // 'columnDefs' : [
    //         {'targets': [0,1], 'width': '10px'}
    //     ]
  });   
    </script>




<script type="text/javascript">

 $(document).on('click', '.editemp', function() {
           
            $('#NAME1').val($(this).data('firstname'));
            $('#SURNAME1').val($(this).data('surnname'));
            $('#PHONENUMBER1').val($(this).data('phonenumber'));
            $('#EMAIL1').val($(this).data('email'));
            $('#ADDRESS1').val($(this).data('address'));
            $('#SALARY1').val($(this).data('salary'));
            $('#EMPLOYEE_ID1').val($(this).data('empid'));

            $('#EmpUpdate').modal('show');
        });

$(document).on('click', '.delemp', function() {
     	$('#NAME2').val($(this).data('firstname'));
        $('#SURNAME2').val($(this).data('surnname'));
     	$('#Empid21').val($(this).data('empid'));
        $('#EmpDestroy').modal('show');
        });


    $(document).on('click', '.editemp', function() {
            $('#EmpUpdate').modal('show');
        });
     $(document).on('click', '.delemp', function() {
            $('#EmpDestroy').modal('show');
        });
     $(document).on('click', '.addemp', function() {
            $('#EmpAdd').modal('show');
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

  $("#TELEPHONE").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#COMMENTS").keyup(function(event) {
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
