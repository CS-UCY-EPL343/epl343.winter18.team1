<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSFR token for ajax call -->
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<link rel="stylesheet" type="text/css" href="{{ url('/css/notification.css') }}">

<body>
    @include('main') 

    <div class="row">
        <br/>

        <div class="col-md-12 container-fluid" style="margin-top: -30px;">
            <ul class="nav nav-tabs" style="margin-top: 70px;">
                <li class="active"><a href="#sltablediv" style="color: #555;">Sell - Let Forms Data</a></li>
                <li><a href="#srtablediv" style="color: #555;">Buy - Rent Forms Data</a></li>
            </ul>
            <div class="tab-content">
                <div id="sltablediv" class="tab-pane fade in active">
                    <h1 align="center">Sell - Let Forms Data</h1>
                    <table class="table table-striped table-bordered table-hover" ID="postTable" style="visibility: hidden;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="width: 4%;">Form Code</th>
                                <th>Property Type</th>
                                <th style="width: 6%;">First Name</th>
                                <th style="width: 6%;">Last Name</th>
                                <th style="width: 16%;">Address</th>
                                <th style="width: 16%;">Email</th>
                                <th>Telephone</th>
                                <th style="background: none; cursor: default; text-align: center;">Show</th>
                                <th style="background: none; cursor: default; text-align: center;">Edit</th>
                                <th style="background: none; cursor: default; text-align: center;">Delete</th>
                            </tr>
                            {{ csrf_field() }}
                        </thead>
                        <tbody>
                            @foreach($SELL_LET as $indexKey => $post)
                                <tr class="item{{$post->ID}}">
                                    <td>{{$post->ID}}</td>
                                    <td>{{$post->FORM_NO}}</td>
                                    <td>{{$post->PROPERTY_ID}}</td>
                                    <td>{{$post->FIRST_NAME}}</td>
                                    <td>{{$post->LAST_NAME}}</td>
                                    <td>{{$post->ADDRESS}}</td>
                                    <td>{{$post->EMAIL}}</td>
                                    <td>{{$post->TELEPHONE}}</td>

                                    <td style="text-align: center;">
                                    <button class="show-modal btn btn-success" data-id="{{$post->ID}}" data-form_no="{{$post->FORM_NO}}" data-property_id="{{$post->PROPERTY_ID}}" data-first_name="{{$post->FIRST_NAME}}" data-last_name="{{$post->LAST_NAME}}" data-address="{{$post->ADDRESS}}" data-email="{{$post->EMAIL}}" data-telephone="{{$post->TELEPHONE}}" data-sell="{{$post->SELL}}" data-let="{{$post->LET}}" data-message="{{$post->MESSAGE}}">
                                    <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                    </td>
                                    <td style="text-align: center;">
                                    <button class="edit-modal btn btn-info" data-id="{{$post->ID}}" data-form_no="{{$post->FORM_NO}}" data-property_id="{{$post->PROPERTY_ID}}" data-first_name="{{$post->FIRST_NAME}}" data-last_name="{{$post->LAST_NAME}}" data-address="{{$post->ADDRESS}}" data-email="{{$post->EMAIL}}" data-telephone="{{$post->TELEPHONE}}" data-sell="{{$post->SELL}}" data-let="{{$post->LET}}" data-message="{{$post->MESSAGE}}">
                                    <span class="glyphicon glyphicon-eye-open"></span> Edit</button>
                                    </td>
                                    <td style="text-align: center;">
                                    <button class="delete-modal btn btn-danger" data-id="{{$post->ID}}" data-form_no="{{$post->FORM_NO}}" data-property_id="{{$post->PROPERTY_ID}}" data-first_name="{{$post->FIRST_NAME}}" data-last_name="{{$post->LAST_NAME}}" data-address="{{$post->ADDRESS}}" data-email="{{$post->EMAIL}}" data-telephone="{{$post->TELEPHONE}}" data-sell="{{$post->SELL}}" data-let="{{$post->LET}}" data-message="{{$post->MESSAGE}}">
                                    <span class="glyphicon glyphicon-eye-open"></span> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                

                <div id="srtablediv" class="tab-pane fade">
                    <h1 align="center">Buy - Rent Appointment Forms Data</h1>
                    <table class="table table-striped table-bordered table-hover" ID="BRTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Form Code</th>
                                {{-- <th>Property Type</th> --}}
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Date & Time</th>
                                <th style="background: none; cursor: default; text-align: center;">Show</th>
                                <th style="background: none; cursor: default; text-align: center;">Edit</th>
                                <th style="background: none; cursor: default; text-align: center;">Delete</th>
                            </tr>
                            {{ csrf_field() }}
                        </thead>
                        <tbody>
                            @foreach($SELL_RENT as $indexKey => $sr)
                                <tr class="item2{{$sr->ID}}">
                                    <td>{{$sr->ID}}</td>
                                    <td>{{$sr->FORM_ID}}</td>
                                    <td>{{$sr->FIRST_NAME}}</td>
                                    <td>{{$sr->LAST_NAME}}</td>
                                    <td>{{$sr->ADDRESS}}</td>
                                    <td>{{$sr->EMAIL}}</td>
                                    <td>{{$sr->TELEPHONE}}</td>
                                    <td>{{$sr->DATETIME}}</td>

                                    <td style="text-align: center;">
                                        <button class="show-modal2 btn btn-success" data-id="{{$sr->ID}}" data-form_no="{{$sr->FORM_ID}}" data-property_id="{{$sr->PROPERTY_ID}}" data-first_name="{{$sr->FIRST_NAME}}" data-last_name="{{$sr->LAST_NAME}}" data-address="{{$sr->ADDRESS}}" data-email="{{$sr->EMAIL}}" data-telephone="{{$sr->TELEPHONE}}" data-sell="{{$sr->SELL}}" data-let="{{$sr->LET}}" data-message="{{$sr->MESSAGE}}" data-datetime="{{$sr->DATETIME}}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                    </td>
                                    <td style="text-align: center;">
                                        <button class="edit-modal2 btn btn-info" data-id="{{$sr->ID}}" data-form_no="{{$sr->FORM_ID}}" data-property_id="{{$sr->PROPERTY_ID}}" data-first_name="{{$sr->FIRST_NAME}}" data-last_name="{{$sr->LAST_NAME}}" data-address="{{$post->ADDRESS}}" data-email="{{$sr->EMAIL}}" data-telephone="{{$sr->TELEPHONE}}" data-sell="{{$sr->SELL}}" data-let="{{$sr->LET}}" data-message="{{$sr->MESSAGE}}" data-datetime="{{$sr->DATETIME}}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Edit</button>
                                    </td>
                                    <td style="text-align: center;">
                                        <button class="delete-modal2 btn btn-danger" data-id="{{$sr->ID}}" data-form_no="{{$sr->FORM_ID}}" data-property_id="{{$sr->PROPERTY_ID}}" data-first_name="{{$sr->FIRST_NAME}}" data-last_name="{{$sr->LAST_NAME}}" data-address="{{$sr->ADDRESS}}" data-email="{{$sr->EMAIL}}" data-telephone="{{$sr->TELEPHONE}}" data-sell="{{$sr->SELL}}" data-let="{{$sr->LET}}" data-message="{{$sr->MESSAGE}}" data-datetime="{{$sr->DATETIME}}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
  

    <!-- Modal form to show a post -->
    <div ID="showModal" class="modal slmodal fade">
            <div class="modal-content">               
                    <div class="modal-header imgcontainer">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-id" id="ID" style="width: 10%; float: left; margin-top: -5px;"></h4>
                        <h4 class="modal-title" style="margin-top: -5px;"></h4>
                    </div>
                    <div class="modal-body" style="padding: 16px;">
                        <form class="form" role="form">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="FIRST_NAME">First Name</label>
                                        <input id="FIRST_NAME" type="text" name="FIRST_NAME" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="form_lastname">Last Name</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="LAST_NAME" type="text" name="LAST_NAME" class="form-control" disabled>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_address">Address</label>
                                        <input id="ADDRESS" type="text" name="ADDRESS" class="form-control" disabled>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_email">Email</label>
                                        <input id="EMAIL" type="email" name="EMAIL" class="form-control" disabled>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="TELEPHONE">Telephone</label>
                                        <input id="TELEPHONE" type="number" name="TELEPHONE" class="form-control" oninvalid="setCustomValidity('Plz enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
                                            onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="checkboxes">Ineterested for</label>
                                        <div>
                                            <label class="checkbox-inline" for="checkboxes0">
                                                <input name="SELL" id="SELL" value="0" disabled type="checkbox">Sell
                                            </label>
                                            <label class="checkbox-inline" for="checkboxes1">
                                                <input name="LET" id="LET" value="0" disabled type="checkbox">Let
                                            </label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="PROPERTY_ID">Property's Type</label>
                                    <input readonly id="PROPERTY_ID" type="text" name="PROPERTY_ID" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_message">Message</label>
                                        <textarea id="MESSAGE" name="MESSAGE" class="form-control" rows="5" disabled></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>                      
                </div>
        </div>
    </div>

    <!-- Modal form to edit a form -->
    <div ID="editModal" class="modal slmodal fade">
            <div class="modal-content">               
                    <div class="modal-header imgcontainer">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-id" id="ID2" style="width: 10%; float: left; margin-top: -5px;"></h4>
                        <h4 class="modal-title" style="margin-top: -5px;"></h4>
                    </div>
                    <div class="modal-body" style="padding: 16px;">
                        <form class="form" role="form">
                            {{-- <div class="hidden"><input type="text" name="ID2" id="ID2"></div> --}}
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="FIRST_NAME">First Name</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="FIRST_NAME2" type="text" name="FIRST_NAME2" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required." maxLength="20" autofocus>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="form_lastname">Last Name</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="LAST_NAME2" type="text" name="LAST_NAME2" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required." maxLength="20">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_address">Address</label>
                                        <input id="ADDRESS2" type="text" name="ADDRESS2" class="form-control" placeholder="Please enter your address *" required="required" data-error="Address is required." maxLength="40">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_email">Email</label>
                                        <input id="EMAIL2" type="email" name="EMAIL2" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required." maxLength="40">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_phone">Telephone</label>
                                        <input maxLength="18" id="TELEPHONE2" type="text" pattern="\d*" name="TELEPHONE2" class="form-control" placeholder="Please enter your phone*" required oninvalid="setCustomValidity('Please enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="checkboxes">Ineterested for</label>
                                        <div>
                                            <label class="checkbox-inline" for="checkboxes0">
                                                <input name="SELL2" id="SELL2" disabled type="checkbox">Sell
                                            </label>
                                            <label class="checkbox-inline" for="checkboxes1">
                                                <input name="LET2" id="LET2" disabled type="checkbox">Let
                                            </label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="PROPERTY_ID">Property's Type</label>
                                    <input readonly id="PROPERTY_ID2" type="text" name="PROPERTY_ID2" class="form-control" placeholder="Please enter a valid property type *" required="required" data-error="Property type is required." disabled="">
                                    <div class="help-block with-errors"></div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_message">Message</label>
                                        <textarea id="MESSAGE2" name="MESSAGE2" class="form-control" rows="5" maxLength="300"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                            <span class='glyphicon glyphicon-check'></span> Edit
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>                      
                </div>
        </div>
    </div>
    <!-- Modal form to delete a form -->
    <div ID="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Are you sure you want to delete the following notification?</h3>
                    <br />
                    <div class="hidden"><input type="text" name="ID3" id="ID0"></div>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="ID0">Form's code:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="FORM_NO0" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">First Name:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="FIRST_NAME0" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Last Name:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="LAST_NAME0" disabled>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger delete" data-dismiss="modal">
                            <span ID="" class='glyphicon glyphicon-trash'></span> Delete
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- Modal form to show2 a post -->
    <div ID="showModal2" class="modal slmodal fade">
            <div class="modal-content">               
                    <div class="modal-header imgcontainer">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-id" id="ID3" style="width: 10%; float: left; margin-top: -5px;"></h4>
                        <h4 class="modal-title" style="margin-top: -5px;"></h4>
                    </div>
                    <div class="modal-body" style="padding: 16px;">
                        <form class="form" role="form">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="FIRST_NAME">First Name</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="FIRST_NAME3" type="text" name="FIRST_NAME" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="form_lastname">Last Name</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="LAST_NAME3" type="text" name="LAST_NAME" class="form-control" disabled>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_address">Address</label>
                                        <input id="ADDRESS3" type="text" name="ADDRESS" class="form-control" disabled>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_email">Email</label>
                                        <input id="EMAIL3" type="email" name="EMAIL" class="form-control" disabled>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="TELEPHONE">Telephone</label>
                                        <input id="TELEPHONE3" type="number" name="TELEPHONE" class="form-control" oninvalid="setCustomValidity('Plz enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
                                            onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="checkboxes">Date and Time</label>
                                        <input readonly id="DATETIME3" type="text" name="DATETIME" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="PROPERTY_ID">Property's Code</label>
                                    <input readonly id="PROPERTY_ID3" type="text" name="PROPERTY_ID" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_message">Message</label>
                                        <textarea id="MESSAGE3" name="MESSAGE" class="form-control" rows="5" disabled></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>                      
                </div>
        </div>
    </div>

    <!-- Modal form to edit2 a form -->
    <div ID="editModal2" class="modal slmodal fade">
            <div class="modal-content">               
                    <div class="modal-header imgcontainer">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-id" id="ID4" style="width: 10%; float: left; margin-top: -5px;"></h4>
                        <h4 class="modal-title" style="margin-top: -5px;"></h4>
                    </div>
                    <div class="modal-body" style="padding: 16px;">
                        <form class="form" role="form">
                            {{-- <div class="hidden"><input type="text" name="ID2" id="ID2"></div> --}}
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="FIRST_NAME">First Name</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="FIRST_NAME4" type="text" name="FIRST_NAME2" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required." maxLength="20" autofocus>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="form_lastname">Last Name</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="LAST_NAME4" type="text" name="LAST_NAME2" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required." maxLength="20">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_address">Address</label>
                                        <input id="ADDRESS4" type="text" name="ADDRESS4" class="form-control" placeholder="Please enter your address *" required="required" data-error="Address is required." maxLength="40">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_email">Email</label>
                                        <input id="EMAIL4" type="email" name="EMAIL2" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required." maxLength="40">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_phone">Telephone</label>
                                        <input maxLength="18" id="TELEPHONE4" type="text" pattern="\d*" name="TELEPHONE2" class="form-control" placeholder="Please enter your phone*" required oninvalid="setCustomValidity('Please enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="checkboxes">Date and Time</label>
                                        <input readonly id="DATETIME4" type="text" name="DATETIME" class="form-control" disabled>
                                    <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="PROPERTY_ID">Property's Code</label>
                                    <input readonly id="PROPERTY_ID4" type="text" name="PROPERTY_ID2" class="form-control" placeholder="Please enter a valid property type *" required="required" data-error="Property type is required." disabled="">
                                    <div class="help-block with-errors"></div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="form_message">Message</label>
                                        <textarea id="MESSAGE4" name="MESSAGE2" class="form-control" rows="5" maxLength="300"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit4" data-dismiss="modal">
                            <span class='glyphicon glyphicon-check'></span> Edit
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>                      
                </div>
        </div>
    </div>
    <!-- Modal form to delete2 a form -->
    <div ID="deleteModal2" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Are you sure you want to delete the following notification?</h3>
                    <br />
                    <div class="hidden"><input type="text" name="ID" id="ID5"></div>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Form's code:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="FORM_NO5" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">First Name:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="FIRST_NAME5" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Last Name:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="LAST_NAME5" disabled>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger delete5" data-dismiss="modal">
                            <span ID="" class='glyphicon glyphicon-trash'></span> Delete
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
        $( ".log" ).removeClass( "hidden" );
        @if (Auth::guard('admin')->check()){
            $( ".log" ).hide();
            $( ".info" ).removeClass( "hidden" );
        }
        @endif
        // console.log("APOEL");
        $(".dropdown").hover(  
        // console.log("APOEL13")          
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
    });
</script>


    <script>
  $('#postTable').DataTable({
    responsive: true
  });   
   $('#BRTable').DataTable({
    responsive: true
  });   
    </script>
    <!-- Delay table load until everything else is loaded -->
    <script>
        $(window).load(function(){
            $('#postTable').removeAttr('style');
        })
    </script>

    <script>
        $(window).load(function(){
            $('#BRTable').removeAttr('style');
        })
    </script>

    <script type="text/javascript">
        // Show a post
        $(document).on('click', '.show-modal2', function() {
            $('.modal-id').text('ID:\xa0\xa0'+ $(this).data('id'));
            var form = $(this).data('form_no');
            $('.modal-title').text('Showing notification with code:\xa0\xa0'+ form);
            $('#ID3').val($(this).data('id'));
            $('#PROPERTY_ID3').val($(this).data('property_id'));
            $('#FIRST_NAME3').val($(this).data('first_name'));
            $('#LAST_NAME3').val($(this).data('last_name'));
            $('#ADDRESS3').val($(this).data('address'));
            $('#EMAIL3').val($(this).data('email'));
            $('#TELEPHONE3').val($(this).data('telephone'));
            $('#DATETIME3').val($(this).data('datetime'));
            $('#MESSAGE3').val($(this).data('message'));
            
            $('#showModal2').modal('show');
        });

        // Edit a post
        $(document).on('click', '.edit-modal2', function() {
            if($(this).data('id')==undefined){
                // console.log("thrilos");
                var res = $(this).data('form_no').substring(2);
                $('#ID4').val(res);
                $('.modal-id').text('ID:\xa0\xa0'+ res);
            }else{
                $('#ID4').val($(this).data('id'));
                $('.modal-id').text('ID:\xa0\xa0'+ $(this).data('id'));
            }
            
            form_no = $(this).data('form_no');
            $('.modal-title').text('Editing notification with code:\xa0\xa0'+ form_no);
            
            $('#PROPERTY_ID4').val($(this).data('property_id'));
            $('#FIRST_NAME4').val($(this).data('first_name'));
            $('#LAST_NAME4').val($(this).data('last_name'));
            $('#ADDRESS4').val($(this).data('address'));
            $('#EMAIL4').val($(this).data('email'));
            $('#TELEPHONE4').val($(this).data('telephone'));
            $('#DATETIME4').val($(this).data('datetime'));
            $('#MESSAGE4').val($(this).data('message'));
            
            // console.log(ID);
            $('#editModal2').modal('show');
            id = $('#ID4').val();

            $('.modal-footer').on('click', '.edit4', function() {
                toastr.remove();
                id = $("#ID4").val();
                property_id = $("#PROPERTY_ID4").val();
                first_name = $('#FIRST_NAME4').val();
                last_name = $('#LAST_NAME4').val();
                address = $('#ADDRESS4').val();
                email = $('#EMAIL4').val();
                telephone = $('#TELEPHONE4').val();
                message = $('#MESSAGE4').val();
                datetime = $('#DATETIME4').val();

                $.ajax({
                    type: 'POST',
                    url: '{{url('editbr')}}',
                    dataType: 'json',
                    // cache: 'false',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $("#ID4").val(),
                        // 'form_no': $("#FORM_NO2").val(),
                        'property_id': $("#PROPERTY_ID4").val(),
                        'first_name': $('#FIRST_NAME4').val(),
                        'last_name': $('#LAST_NAME4').val(),
                        'address': $('#ADDRESS4').val(),
                        'email': $('#EMAIL4').val(),
                        'telephone': $('#TELEPHONE4').val(),
                        'message': $('#MESSAGE4').val(),
                    },
                    success: function(data) {
                        // event.preventDefault();
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
                 
                        toastr.success('Successfully updated Notification!', 'Success Alert');
                       $('.item2' + id).replaceWith("<tr class='item2" + id + "'><td>" + id + "</td><td>" + form_no + "</td><td>" + first_name + "</td><td>" + last_name + "</td><td>" + address + "</td><td>" + email + "</td><td>" + telephone + "</td><td>" + datetime + "</td><td style='text-align: center;'><button class='show-modal2 btn btn-success' data-id='" + id + "' data-form_no='" + form_no + "' data-property_id='" + property_id + "' data-first_name='" + first_name + "' data-last_name='" + last_name + "' data-address='" + address + "' data-email='" + email + "' data-telephone='" + telephone + " data-message='" + message + "' data-datetime='" + datetime + "'><span class='glyphicon glyphicon-eye-open'></span> Show</button></td><td style='text-align: center;'><button class='edit-modal2 btn btn-info data-id='" + id + "' data-form_no='" + form_no + "' data-property_id='" + property_id + "' data-first_name='" + first_name + "' data-last_name='" + last_name + "' data-address='" + address + "' data-email='" + email + "' data-telephone='" + telephone + "' data-message='" + message + "' data-datetime='" + datetime + "'><span class='glyphicon glyphicon-eye-open'></span> Edit</button></td><td style='text-align: center;'><button class='delete-modal2 btn btn-danger' data-id='" + id + "' data-form_no='" + form_no + "' data-property_id='" + property_id + "' data-first_name='" + first_name + "' data-last_name='" + last_name + "' data-address='" + address + "' data-email='" + email + "' data-telephone='" + telephone + "' data-message='" + message + "' data-datetime='" + datetime + "'><span class='glyphicon glyphicon-eye-open'></span> Delete</button></td></tr>");


                        var s = document.getElementById("ID4");
                        s.value = id;
                        // $('#ID2').val(data.id);
                        // console.log("success  "+ document.getElementById("ID4").value);

                        // }
                    },
                    error: function(req, textStatus, errorThrown) {
                        // console.log("fail  "+ $("#ID4").val());
                        alert('Ooops, something happened: ' + textStatus + ' ' +errorThrown);
                    }
                });
            });
        });
         // $(document).on('click', '.edit', function() {

        
        // delete a post
        $(document).on('click', '.delete-modal2', function() {
            $('.modal-title').text('Delete');
            $('#ID5').val($(this).data('id'));
            $('#FORM_NO5').val($(this).data('form_no'));
            $('#FIRST_NAME5').val($(this).data('first_name'));
            $('#LAST_NAME5').val($(this).data('last_name'));
            $('#deleteModal2').modal('show');
            id = $('#ID5').val();
            // console.log(id);
        });
        $('.modal-footer').on('click', '.delete5', function() {
            $.ajax({
                type: 'POST',
                url: '{{url('delbr')}}',
                dataType: 'json',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $("#ID5").val(),
                },
                success: function(data) {
                    // toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                    $('.item2' + id).remove();
                }
            });
        });
    </script>

    </script>

    <!-- AJAX CRUD operations -->
    <script type="text/javascript">
        $(document).ready(function() {

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
        // add a new post
        $(document).on('click', '.add-modal', function() {
            // Empty input fields
            $('#title_add').val('');
            $('#content_add').val('');

            $('.modal-title').text('Add');
            $('#addModal').modal('show');
        });
        $('.modal-footer').on('click', '.add', function() {
            $.ajax({
                type: 'POST',
                url: 'posts',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'title': $('#title_add').val(),
                    'content': $('#content_add').val()
                },
                success: function(data) {
                    $('.errorTitle').addClass('hidden');
                    $('.errorContent').addClass('hidden');

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#addModal').modal('show');
                            toastr.error('ValIDation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.title) {
                            $('.errorTitle').removeClass('hidden');
                            $('.errorTitle').text(data.errors.title);
                        }
                        if (data.errors.content) {
                            $('.errorContent').removeClass('hidden');
                            $('.errorContent').text(data.errors.content);
                        }
                    } else {
                        toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
                        $('#postTable').prepend("<tr class='item" + data.ID + "'><td class='col1'>" + data.ID + "</td><td>" + data.title + "</td><td>" + data.content + "</td><td class='text-center'><input type='checkbox' class='new_published' data-ID='" + data.ID + " '></td><td>Just now!</td><td><button class='show-modal btn btn-success' data-ID='" + data.ID + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-eye-open'></span> Show</button> <button class='edit-modal btn btn-info' data-ID='" + data.ID + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-ID='" + data.ID + "' data-title='" + data.title + "' data-content='" + data.content + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
                        $('.new_published').iCheck({
                            checkboxClass: 'icheckbox_square-yellow',
                            radioClass: 'iradio_square-yellow',
                            increaseArea: '20%'
                        });
                        $('.new_published').on('ifToggled', function(event){
                            $(this).closest('tr').toggleClass('warning');
                        });
                        $('.col1').each(function (index) {
                            $(this).html(index+1);
                        });
                    }
                },
            });
        });

        // Show a post
        $(document).on('click', '.show-modal', function() {
            $('.modal-id').text('ID:\xa0\xa0'+ $(this).data('id'));
            var form = $(this).data('form_no');
            $('.modal-title').text('Showing notification with code:\xa0\xa0'+ form);
            $('#ID').val($(this).data('id'));
            $('#PROPERTY_ID').val($(this).data('property_id'));
            $('#FIRST_NAME').val($(this).data('first_name'));
            $('#LAST_NAME').val($(this).data('last_name'));
            $('#ADDRESS').val($(this).data('address'));
            $('#EMAIL').val($(this).data('email'));
            $('#TELEPHONE').val($(this).data('telephone'));
            $('#MESSAGE').val($(this).data('message'));

            document.getElementById("SELL").value = "0";
            document.getElementById("LET").value = "0";
            $('#SELL').val($(this).data('sell'));
            $('#LET').val($(this).data('let'));
            var s = document.getElementById("SELL").value;
            var l = document.getElementById("LET").value;
            
            $('#SELL').prop("checked", false);
            $('#LET').prop("checked", false);
            if(s == "1"){
                $('#SELL').prop("checked", true);
            }
            if(l == "1"){
                $('#LET').prop("checked", true);
            }
            $('#showModal').modal('show');
        });

        // $(document).on('change', '.modal-id', function() {
        //     $('#ID2').val($(this).data('id'));
        // var s = document.getElementById("ID2");
        // s.value = $(this).data('id');
        // console.log("apoel");
        // });

        // Edit a post
        $(document).on('click', '.edit-modal', function() {
            if($(this).data('id')==undefined){
                // console.log("thrilos");
                var res = $(this).data('form_no').substring(2);
                $('#ID2').val(res);
                $('.modal-id').text('ID:\xa0\xa0'+ res);
            }else{
                $('#ID2').val($(this).data('id'));
                $('.modal-id').text('ID:\xa0\xa0'+ $(this).data('id'));
            }
            
            form_no = $(this).data('form_no');
            $('.modal-title').text('Editing notification with code:\xa0\xa0'+ form_no);
            
            $('#PROPERTY_ID2').val($(this).data('property_id'));
            $('#FIRST_NAME2').val($(this).data('first_name'));
            $('#LAST_NAME2').val($(this).data('last_name'));
            $('#ADDRESS2').val($(this).data('address'));
            $('#EMAIL2').val($(this).data('email'));
            $('#TELEPHONE2').val($(this).data('telephone'));
            $('#MESSAGE2').val($(this).data('message'));
            $('#SELL2').val($(this).data('sell'));
            $('#LET2').val($(this).data('let'));

            document.getElementById("SELL2").value = "0";
            document.getElementById("LET2").value = "0";
            $('#SELL2').val($(this).data('sell'));
            $('#LET2').val($(this).data('let'));
            var s = document.getElementById("SELL2").value;
            var l = document.getElementById("LET2").value;
            
            $('#SELL2').prop("checked", false);
            $('#LET2').prop("checked", false);
            if(s == "1"){
                $('#SELL2').prop("checked", true);
            }
            if(l == "1"){
                $('#LET2').prop("checked", true);
            }
            
            // console.log(ID);
            $('#editModal').modal('show');
            id = $('#ID2').val();

            $('.modal-footer').on('click', '.edit', function() {
                toastr.remove();
                id= $("#ID2").val();
                property_id= $("#PROPERTY_ID2").val();
                first_name= $('#FIRST_NAME2').val();
                last_name= $('#LAST_NAME2').val();
                address= $('#ADDRESS2').val();
                email= $('#EMAIL2').val();
                telephone= $('#TELEPHONE2').val();
                sell= $("#SELL2").val();
                let = $("#LET2").val();
                message= $('#MESSAGE2').val();

                $.ajax({
                    type: 'POST',
                    url: '{{url('admin/edit')}}',
                    dataType: 'json',
                    // cache: 'false',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $("#ID2").val(),
                        // 'form_no': $("#FORM_NO2").val(),
                        'property_id': $("#PROPERTY_ID2").val(),
                        'first_name': $('#FIRST_NAME2').val(),
                        'last_name': $('#LAST_NAME2').val(),
                        'address': $('#ADDRESS2').val(),
                        'email': $('#EMAIL2').val(),
                        'telephone': $('#TELEPHONE2').val(),
                        'sell': $("#SELL2").val(),
                        'let': $("#LET2").val(),
                        'message': $('#MESSAGE2').val(),
                    },
                    success: function(data) {
                        // event.preventDefault();
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
                 
                        toastr.success('Successfully updated Notification!', 'Success Alert');
                       $('.item' + id).replaceWith("<tr class='item" + id + "'><td>" + id + "</td><td>" + form_no + "</td><td>" + property_id + "</td><td>" + first_name + "</td><td>" + last_name + "</td><td>" + address + "</td><td>" + email + "</td><td>" + telephone + "</td><td style='text-align: center;'><button class='show-modal btn btn-success' data-id='" + id + "' data-form_no='" + form_no + "' data-property_id='" + property_id + "' data-first_name='" + first_name + "' data-last_name='" + last_name + "' data-address='" + address + "' data-email='" + email + "' data-telephone='" + telephone + "' data-sell='" + sell + "' data-let='" + let + "' data-message='" + message +"'><span class='glyphicon glyphicon-eye-open'></span> Show</button></td><td style='text-align: center;'><button class='edit-modal btn btn-info data-id='" + id + "' data-form_no='" + form_no + "' data-property_id='" + property_id + "' data-first_name='" + first_name + "' data-last_name='" + last_name + "' data-address='" + address + "' data-email='" + email + "' data-telephone='" + telephone + "' data-sell='" + sell + "' data-let='" + let + "' data-message='" + message +"'><span class='glyphicon glyphicon-eye-open'></span> Edit</button></td><td style='text-align: center;'><button class='delete-modal btn btn-danger' data-id='" + id + "' data-form_no='" + form_no + "' data-property_id='" + property_id + "' data-first_name='" + first_name + "' data-last_name='" + last_name + "' data-address='" + address + "' data-email='" + email + "' data-telephone='" + telephone + "' data-sell='" + sell + "' data-let='" + let + "' data-message='" + message + "'><span class='glyphicon glyphicon-eye-open'></span> Delete</button></td></tr>");


                        var s = document.getElementById("ID2");
                        s.value = id;
                        // $('#ID2').val(data.id);
                        console.log("success  "+ document.getElementById("ID2").value);

                        // }
                    },
                    error: function(req, textStatus, errorThrown) {
                        console.log("fail  "+ $("#ID2").val());
                        alert('Ooops, something happened: ' + textStatus + ' ' +errorThrown);
                    }
                });
            });
        });
         // $(document).on('click', '.edit', function() {

        
        // delete a post
        $(document).on('click', '.delete-modal', function() {
            $('.modal-title').text('Delete');
            $('#ID0').val($(this).data('id'));
            $('#FORM_NO0').val($(this).data('form_no'));
            $('#FIRST_NAME0').val($(this).data('first_name'));
            $('#LAST_NAME0').val($(this).data('last_name'));
            $('#deleteModal').modal('show');
            id = $('#ID0').val();
            // console.log(id);
        });
        $('.modal-footer').on('click', '.delete', function() {
            $.ajax({
                type: 'POST',
                url: '{{url('del')}}',
                dataType: 'json',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $("#ID0").val(),
                },
                success: function(data) {
                    // toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                    $('.item' + id).remove();
                }
            });
        });
    </script>

    <script type="text/javascript">
  $("#FIRST_NAME").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
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

</script>

</body>
</html>