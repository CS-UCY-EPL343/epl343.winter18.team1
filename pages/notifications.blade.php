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

        <div class="col-md-12 container-fluid">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#sltablediv" style="color: #555;">Advertise with us Forms Data</a></li>
                <li><a href="#srtablediv" style="color: #555;">For Sale/For Rent Forms Data</a></li>
                <li><a href="#ctablediv" style="color: #555;">Contact us Forms Data</a></li>
            </ul>
            <div class="tab-content">
                <div id="sltablediv" class="tab-pane fade in active">
                    <h1 align="center">Sell - Let Forms Data</h1>
                    <table class="table table-striped table-bordered table-hover" ID="postTable" style="visibility: hidden;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Form Code</th>
                                <th>Property Type</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th style="background: none; cursor: default; text-align: center;">Show</th>
                                <th style="background: none; cursor: default; text-align: center;">Edit</th>
                                <th style="background: none; cursor: default; text-align: center;">Delete</th>
                            </tr>
                            {{ csrf_field() }}
                        </thead>
                        <tbody>
                            @foreach($SELL_LET as $indexKey => $post)
                                <tr class="item{{ htmlspecialchars($post->ID) }}">
                                    <td>{{ htmlspecialchars($post->ID) }}</td>
                                    <td>{{ htmlspecialchars($post->FORM_NO) }}</td>
                                    <td>{{ htmlspecialchars($post->PROPERTY_ID) }}</td>
                                    <td>{{ htmlspecialchars($post->FIRST_NAME) }}</td>
                                    <td>{{ htmlspecialchars($post->LAST_NAME) }}</td>
                                    <td>{{ htmlspecialchars($post->ADDRESS) }}</td>
                                    <td>{{ htmlspecialchars($post->EMAIL) }}</td>
                                    <td>{{ htmlspecialchars($post->TELEPHONE) }}</td>

                                    <td style="text-align: center;">
                                    <button class="show-modal btn btn-success" data-id="{{ htmlspecialchars($post->ID) }}" data-form_no="{{ htmlspecialchars($post->FORM_NO) }}" data-property_id="{{ htmlspecialchars($post->PROPERTY_ID) }}" data-first_name="{{ htmlspecialchars($post->FIRST_NAME) }}" data-last_name="{{ htmlspecialchars($post->LAST_NAME) }}" data-address="{{ htmlspecialchars($post->ADDRESS) }}" data-email="{{ htmlspecialchars($post->EMAIL) }}" data-telephone="{{ htmlspecialchars($post->TELEPHONE) }}" data-sell="{{$post->SELL}}" data-let="{{$post->LET}}" data-message="{{$post->MESSAGE}}">
                                    <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                    </td>
                                    <td style="text-align: center;">
                                    <button class="edit-modal btn btn-info" data-id="{{ htmlspecialchars($post->ID) }}" data-form_no="{{ htmlspecialchars($post->FORM_NO) }}" data-property_id="{{ htmlspecialchars($post->PROPERTY_ID) }}" data-first_name="{{ htmlspecialchars($post->FIRST_NAME) }}" data-last_name="{{ htmlspecialchars($post->LAST_NAME) }}" data-address="{{ htmlspecialchars($post->ADDRESS) }}" data-email="{{ htmlspecialchars($post->EMAIL) }}" data-telephone="{{ htmlspecialchars($post->TELEPHONE) }}" data-sell="{{$post->SELL}}" data-let="{{$post->LET}}" data-message="{{$post->MESSAGE}}">
                                    <span class="glyphicon glyphicon-eye-open"></span> Edit</button>
                                    </td>
                                    <td style="text-align: center;">
                                    <button class="delete-modal btn btn-danger" data-id="{{ htmlspecialchars($post->ID) }}" data-form_no="{{ htmlspecialchars($post->FORM_NO) }}" data-property_id="{{ htmlspecialchars($post->PROPERTY_ID) }}" data-first_name="{{ htmlspecialchars($post->FIRST_NAME) }}" data-last_name="{{ htmlspecialchars($post->LAST_NAME) }}" data-address="{{ htmlspecialchars($post->ADDRESS) }}" data-email="{{ htmlspecialchars($post->EMAIL) }}" data-telephone="{{ htmlspecialchars($post->TELEPHONE) }}" data-sell="{{$post->SELL}}" data-let="{{$post->LET}}" data-message="{{$post->MESSAGE}}">
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
                                <tr class="item2{{ htmlspecialchars($sr->ID) }}">
                                    <td>{{ htmlspecialchars($sr->ID) }}</td>
                                    <td>{{ htmlspecialchars($sr->FORM_ID) }}</td>
                                    <td>{{ htmlspecialchars($sr->FIRST_NAME) }}</td>
                                    <td>{{ htmlspecialchars($sr->LAST_NAME) }}</td>
                                    <td>{{ htmlspecialchars($sr->ADDRESS) }}</td>
                                    <td>{{ htmlspecialchars($sr->EMAIL) }}</td>
                                    <td>{{ htmlspecialchars($sr->TELEPHONE) }}</td>
                                    <td>{{ htmlspecialchars($sr->DATETIME) }}</td>

                                    <td style="text-align: center;">
                                        <button class="show-modal2 btn btn-success" data-id="{{ htmlspecialchars($sr->ID) }}" data-form_no="{{ htmlspecialchars($sr->FORM_ID) }}" data-first_name="{{ htmlspecialchars($sr->FIRST_NAME) }}" data-last_name="{{ htmlspecialchars($sr->LAST_NAME) }}" data-address="{{ htmlspecialchars($sr->ADDRESS) }}" data-email="{{ htmlspecialchars($sr->EMAIL) }}" data-telephone="{{ htmlspecialchars($sr->TELEPHONE) }}" data-sell="{{$sr->SELL}}" data-let="{{$sr->LET}}" data-message="{{$sr->MESSAGE}}" data-datetime="{{ htmlspecialchars($sr->DATETIME) }}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                    </td>
                                    <td style="text-align: center;">
                                        <button class="edit-modal2 btn btn-info" data-id="{{ htmlspecialchars($sr->ID) }}" data-form_no="{{ htmlspecialchars($sr->FORM_ID) }}" data-first_name="{{ htmlspecialchars($sr->FIRST_NAME) }}" data-last_name="{{ htmlspecialchars($sr->LAST_NAME) }}" data-address="{{ htmlspecialchars($post->ADDRESS) }}" data-email="{{ htmlspecialchars($sr->EMAIL) }}" data-telephone="{{ htmlspecialchars($sr->TELEPHONE) }}" data-sell="{{$sr->SELL}}" data-let="{{$sr->LET}}" data-message="{{$sr->MESSAGE}}" data-datetime="{{ htmlspecialchars($sr->DATETIME) }}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Edit</button>
                                    </td>
                                    <td style="text-align: center;">
                                        <button class="delete-modal2 btn btn-danger" data-id="{{ htmlspecialchars($sr->ID) }}" data-form_no="{{ htmlspecialchars($sr->FORM_ID) }}" data-first_name="{{ htmlspecialchars($sr->FIRST_NAME) }}" data-last_name="{{ htmlspecialchars($sr->LAST_NAME) }}" data-address="{{ htmlspecialchars($sr->ADDRESS) }}" data-email="{{ htmlspecialchars($sr->EMAIL) }}" data-telephone="{{ htmlspecialchars($sr->TELEPHONE) }}" data-sell="{{$sr->SELL}}" data-let="{{$sr->LET}}" data-message="{{$sr->MESSAGE}}" data-datetime="{{ htmlspecialchars($sr->DATETIME) }}">
                                        <span class="glyphicon glyphicon-eye-open"></span> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div id="ctablediv" class="tab-pane fade">
                    <h1 align="center">Contact Forms Data</h1>
                    <table class="table table-striped table-bordered table-hover" ID="CTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="width: 10%;">Form Code</th>
                                <th style="width: 15%;">First Name</th>
                                <th style="width: 15%;">Last Name</th>
                                <th style="width: 20%;">Email</th>
                                <th>Telephone</th>
                                <th style="background: none; cursor: default; text-align: center;">Show</th>
                                <th style="background: none; cursor: default; text-align: center;">Edit</th>
                                <th style="background: none; cursor: default; text-align: center;">Delete</th>
                            </tr>
                            {{ csrf_field() }}
                        </thead>
                        <tbody>
                            @foreach($CONTACT as $indexKey => $post)
                                <tr class="item3{{ htmlspecialchars($post->ID) }}">
                                    <td>{{ htmlspecialchars($post->ID) }}</td>
                                    <td>{{ htmlspecialchars($post->FORM_NO) }}</td>
                                    <td>{{ htmlspecialchars($post->FIRST_NAME) }}</td>
                                    <td>{{ htmlspecialchars($post->LAST_NAME) }}</td>
                                    <td>{{ htmlspecialchars($post->EMAIL) }}</td>
                                    <td>{{ htmlspecialchars($post->TELEPHONE) }}</td>

                                    <td style="text-align: center;">
                                    <button class="show-modal3 btn btn-success" data-id="{{ htmlspecialchars($post->ID) }}" data-form_no="{{ htmlspecialchars($post->FORM_NO) }}" data-first_name="{{ htmlspecialchars($post->FIRST_NAME) }}" data-last_name="{{ htmlspecialchars($post->LAST_NAME) }}" data-email="{{ htmlspecialchars($post->EMAIL) }}" data-telephone="{{ htmlspecialchars($post->TELEPHONE) }}" data-message="{{$post->MESSAGE}}">
                                    <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                    </td>
                                    <td style="text-align: center;">
                                    <button class="edit-modal3 btn btn-info" data-id="{{ htmlspecialchars($post->ID) }}" data-form_no="{{ htmlspecialchars($post->FORM_NO) }}" data-first_name="{{ htmlspecialchars($post->FIRST_NAME) }}" data-last_name="{{ htmlspecialchars($post->LAST_NAME) }}" data-email="{{ htmlspecialchars($post->EMAIL) }}" data-telephone="{{ htmlspecialchars($post->TELEPHONE) }}" data-message="{{$post->MESSAGE}}">
                                    <span class="glyphicon glyphicon-eye-open"></span> Edit</button>
                                    </td>
                                    <td style="text-align: center;">
                                    <button class="delete-modal3 btn btn-danger" data-id="{{ htmlspecialchars($post->ID) }}" data-form_no="{{ htmlspecialchars($post->FORM_NO) }}" data-first_name="{{ htmlspecialchars($post->FIRST_NAME) }}" data-last_name="{{ htmlspecialchars($post->LAST_NAME) }}"  data-email="{{ htmlspecialchars($post->EMAIL) }}" data-telephone="{{ htmlspecialchars($post->TELEPHONE) }}" data-message="{{$post->MESSAGE}}">
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
                        	{{csrf_field()}}

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
                                            onkeypress="return isNumberKey(event)" onkeyup="numbersOnly(this)" disabled>
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
                <form class="form" role="form" name="slform" id="slform">
                	{{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="FIRST_NAME">First Name</label>
                                <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="FIRST_NAME2" type="text" name="FIRST_NAME2" class="form-control" placeholder="Please enter your firstname *" data-error="Firstname is required." maxLength="20" autofocus required="true">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="form_lastname">Last Name</label>
                                <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="LAST_NAME2" type="text" name="LAST_NAME2" class="form-control" placeholder="Please enter your lastname *" required data-error="Lastname is required." maxLength="20">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="form_address">Address</label>
                                <input id="ADDRESS2" type="text" name="ADDRESS2" class="form-control" placeholder="Please enter your address *" required data-error="Address is required." maxLength="40">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="form_email">Email</label>
                                <input id="EMAIL2" type="email" name="EMAIL2" class="form-control" placeholder="Please enter your email *" required data-error="Valid email is required." maxLength="40">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="form_phone">Telephone</label>
                                <input maxLength="18" id="TELEPHONE2" type="text" pattern="\d*" name="TELEPHONE2" class="form-control" placeholder="Please enter your phone*" required oninvalid="setCustomValidity('Please enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"onkeypress="return isNumberKey(event)" onkeyup="numbersOnly(this)">
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
                            <input readonly id="PROPERTY_ID2" type="text" name="PROPERTY_ID2" class="form-control" placeholder="Please enter a valid property type *" required data-error="Property type is required." disabled="">
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
                    <button type="button" class="btn btn-primary edit" data-dismiss="modal" id="submition">
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
                    <div class="hidden"><input type="text" name="ID0" id="ID0"></div>
                    <form class="form-horizontal" role="form">
                    	{{csrf_field()}}
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
                    	{{csrf_field()}}
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
                                        onkeypress="return isNumberKey(event)" onkeyup="numbersOnly(this)" disabled>
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

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form_message">Message</label>
                                    <textarea id="MESSAGE3" name="MESSAGE" class="form-control" rows="5" disabled></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            {{-- <div class="form-group col-md-4">
                                <label for="PROPERTY_ID">Property's Code</label>
                                <input readonly id="PROPERTY_ID3" type="text" name="PROPERTY_ID" class="form-control" disabled>
                                <div class="help-block with-errors"></div>
                            </div> --}}

                        </div>
                        {{-- <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form_message">Message</label>
                                    <textarea id="MESSAGE3" name="MESSAGE" class="form-control" rows="5" disabled></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div> --}}
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
                <form class="form" role="form" name="brform">
                	{{csrf_field()}}
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
                                <input maxLength="18" id="TELEPHONE4" type="text" pattern="\d*" name="TELEPHONE2" class="form-control" placeholder="Please enter your phone*" required oninvalid="setCustomValidity('Please enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"onkeypress="return isNumberKey(event)" onkeyup="numbersOnly(this)">
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="form_message">Message</label>
                                <textarea id="MESSAGE4" name="MESSAGE2" class="form-control" rows="5" maxLength="300"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        {{-- <div class="form-group col-md-4">
                            <label for="PROPERTY_ID">Property's Code</label>
                            <input readonly id="PROPERTY_ID4" type="text" name="PROPERTY_ID2" class="form-control" placeholder="Please enter a valid property type *" required="required" data-error="Property type is required." disabled="">
                            <div class="help-block with-errors"></div>
                        </div> --}}

                    </div>
                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="form_message">Message</label>
                                <textarea id="MESSAGE4" name="MESSAGE2" class="form-control" rows="5" maxLength="300"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div> --}}
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit4" data-dismiss="modal" id="bredit">
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
                    	{{csrf_field()}}
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

    <!-- Modal form to show3 a post -->
    <div ID="showModal3" class="modal cmodal fade">
            <div class="modal-content">               
                    <div class="modal-header imgcontainer">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-id" id="ID" style="width: 10%; float: left; margin-top: -5px;"></h4>
                        <h4 class="modal-title" style="margin-top: -5px;"></h4>
                    </div>
                    <div class="modal-body" style="padding: 16px;">
                        <form class="form" role="form">
                        	{{csrf_field()}}
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="FIRST_NAME6">First Name</label>
                                        <input id="FIRST_NAME6" type="text" name="FIRST_NAME6" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="LAST_NAME6">Last Name</label>
                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="LAST_NAME6" type="text" name="LAST_NAME6" class="form-control" disabled>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="TELEPHONE6">Telephone</label>
                                        <input id="TELEPHONE6" type="number" name="TELEPHONE6" class="form-control" oninvalid="setCustomValidity('Please enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"
                                            onkeypress="return isNumberKey(event)" onkeyup="numbersOnly(this)" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="EMAIL6">Email</label>
                                        <input id="EMAIL6" type="email" name="EMAIL6" class="form-control" disabled>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="MESSAGE6">Message</label>
                                        <textarea id="MESSAGE6" name="MESSAGE6" class="form-control" rows="5" disabled></textarea>
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

    <!-- Modal form to edit3 a form -->
    <div ID="editModal3" class="modal cmodal fade">
        <div class="modal-content">               
            <div class="modal-header imgcontainer">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-id" id="ID7" style="width: 10%; float: left; margin-top: -5px;"></h4>
                <h4 class="modal-title" style="margin-top: -5px;"></h4>
            </div>
            <div class="modal-body" style="padding: 16px;">
                <form class="form" role="form" name="cform">
                	{{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="FIRST_NAME7">First Name</label>
                                <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="FIRST_NAME7" type="text" name="FIRST_NAME7" class="form-control" placeholder="Please enter your firstname *" data-error="Firstname is required." maxLength="20" autofocus required="true">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="LAST_NAME7">Last Name</label>
                                <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="LAST_NAME7" type="text" name="LAST_NAME7" class="form-control" placeholder="Please enter your lastname *" required data-error="Lastname is required." maxLength="20">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label for="TELEPHONE7">Telephone</label>
                                <input maxLength="18" id="TELEPHONE7" type="text" pattern="\d*" name="TELEPHONE7" class="form-control" placeholder="Please enter your phone*" required oninvalid="setCustomValidity('Please enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}"onkeypress="return isNumberKey(event)" onkeyup="numbersOnly(this)">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="EMAIL7">Email</label>
                                <input id="EMAIL7" type="email" name="EMAIL7" class="form-control" placeholder="Please enter your email *" required data-error="Valid email is required." maxLength="40">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="MESSAGE7">Message</label>
                                <textarea id="MESSAGE7" name="MESSAGE7" class="form-control" rows="5" maxLength="300"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    
                </form> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit7" data-dismiss="modal" id="submition">
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
    <div ID="deleteModal3" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Are you sure you want to delete the following notification?</h3>
                    <br />
                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                    <form class="form-horizontal" role="form">
                    	{{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="ID">Form's code:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="FORM_NO8" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">First Name:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="FIRST_NAME8" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Last Name:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="LAST_NAME8" disabled>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger delete8" data-dismiss="modal">
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
        $('.modal').on('hidden.bs.modal', function () {
            document.getElementById("FIRST_NAME2").style.border="1px solid #ccc";
            document.getElementById("LAST_NAME2").style.border="1px solid #ccc";
            document.getElementById("ADDRESS2").style.border="1px solid #ccc";
            document.getElementById("EMAIL2").style.border="1px solid #ccc";
            document.getElementById("TELEPHONE2").style.border="1px solid #ccc";

            document.getElementById("FIRST_NAME4").style.border="1px solid #ccc";
            document.getElementById("LAST_NAME4").style.border="1px solid #ccc";
            document.getElementById("ADDRESS4").style.border="1px solid #ccc";
            document.getElementById("EMAIL4").style.border="1px solid #ccc";
            document.getElementById("TELEPHONE4").style.border="1px solid #ccc";

            $.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});


        });  
    });
    $(function() {
      $('[autofocus]:not(:focus)').eq(0).focus();
    });
</script>


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
            // $('#PROPERTY_ID3').val($(this).data('property_id'));
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
                var res = $(this).data('form_no').substring(2);
                $('#ID4').val(res);
                $('.modal-id').text('ID:\xa0\xa0'+ res);
            }else{
                $('#ID4').val($(this).data('id'));
                $('.modal-id').text('ID:\xa0\xa0'+ $(this).data('id'));
            }
            
            form_no = $(this).data('form_no');
            $('.modal-title').text('Editing notification with code:\xa0\xa0'+ form_no);
            
            // $('#PROPERTY_ID4').val($(this).data('property_id'));
            $('#FIRST_NAME4').val($(this).data('first_name'));
            $('#LAST_NAME4').val($(this).data('last_name'));
            $('#ADDRESS4').val($(this).data('address'));
            $('#EMAIL4').val($(this).data('email'));
            $('#TELEPHONE4').val($(this).data('telephone'));
            $('#DATETIME4').val($(this).data('datetime'));
            $('#MESSAGE4').val($(this).data('message'));
            
            $('#editModal2').modal('show');
            id = $('#ID4').val();

            $('.modal-footer').off('click').on('click', '.edit4', function() {
                toastr.remove();

                var bool = true;

                var x = document.forms["brform"]["FIRST_NAME4"].value;
                if (x == "") {
                    document.getElementById("FIRST_NAME4").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("FIRST_NAME4").style.border="1px solid #ccc";
                }

                var x = document.forms["brform"]["LAST_NAME4"].value;
                if (x == "") {
                    document.getElementById("LAST_NAME4").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("LAST_NAME4").style.border="1px solid #ccc";
                }

                var x = document.forms["brform"]["ADDRESS4"].value;
                if (x == "") {
                    document.getElementById("ADDRESS4").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("ADDRESS4").style.border="1px solid #ccc";
                }

                var x = document.forms["brform"]["EMAIL4"].value;
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})/;
                if (x == "" || !x.match(mailformat)) {
                    document.getElementById("EMAIL4").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("EMAIL4").style.border="1px solid #ccc";
                }

                var x = document.forms["brform"]["TELEPHONE4"].value;
                if (x == "") {
                    document.getElementById("TELEPHONE4").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("TELEPHONE4").style.border="1px solid #ccc";
                }

                if(bool==false){
                    return false;
                }

                id = $("#ID4").val();
                // property_id = $("#PROPERTY_ID4").val();
                first_name = $('#FIRST_NAME4').val();
                last_name = $('#LAST_NAME4').val();
                address = $('#ADDRESS4').val();
                email = $('#EMAIL4').val();
                telephone = $('#TELEPHONE4').val();
                message = $('#MESSAGE4').val();
                datetime = $('#DATETIME4').val();

                $.ajax({
                    type: 'POST',
                    url: 'editbr',
                    dataType: 'json',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $("#ID4").val(),
                        // 'property_id': $("#PROPERTY_ID4").val(),
                        'first_name': $('#FIRST_NAME4').val(),
                        'last_name': $('#LAST_NAME4').val(),
                        'address': $('#ADDRESS4').val(),
                        'email': $('#EMAIL4').val(),
                        'telephone': $('#TELEPHONE4').val(),
                        'message': $('#MESSAGE4').val(),
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

                            var htmlspecialchars = function(string) {
  
							// Our finalized string will start out as a copy of the initial string.
							var escapedString = string;

							// For each of the special characters,
							var len = htmlspecialchars.specialchars.length;
							for (var x = 0; x < len; x++) {

								// Replace all instances of the special character with its entity.
								escapedString = escapedString.replace(
								  new RegExp(htmlspecialchars.specialchars[x][0], 'g'),
								  htmlspecialchars.specialchars[x][1]
								);
							}

							// Return the escaped string.
							return escapedString;
							};

							// A collection of special characters and their entities.
							htmlspecialchars.specialchars = [
							[ '&', '&amp;' ],
							[ '<', '&lt;' ],
							[ '>', '&gt;' ],
							[ '"', '&quot;' ]
							];
                     
                            toastr.success('Successfully updated Notification!', 'Success Alert');
                            $('.item2' + id).replaceWith("<tr class='item2" + id + "'><td>" + id + "</td><td>" + htmlspecialchars(form_no) + "</td><td>" + htmlspecialchars(first_name) + "</td><td>" + htmlspecialchars(last_name) + "</td><td>" + htmlspecialchars(address) + "</td><td>" + htmlspecialchars(email) + "</td><td>" + htmlspecialchars(telephone) + "</td><td>" + htmlspecialchars(datetime) + "</td><td style='text-align: center;'><button class='show-modal2 btn btn-success' data-id='" + id + "' data-form_no='" + htmlspecialchars(form_no) + "' data-first_name='" + htmlspecialchars(first_name) + "' data-last_name='" + htmlspecialchars(last_name) + "' data-address='" + htmlspecialchars(address) + "' data-email='" + htmlspecialchars(email) + "' data-telephone='" + htmlspecialchars(telephone) + "' data-message='" + message + "' data-datetime='" + htmlspecialchars(datetime) + "'><span class='glyphicon glyphicon-eye-open'></span> Show</button></td><td style='text-align: center;'><button class='edit-modal2 btn btn-info data-id='" + id + "' data-form_no='" + htmlspecialchars(form_no) + "' data-first_name='" + htmlspecialchars(first_name) + "' data-last_name='" + htmlspecialchars(last_name) + "' data-address='" + htmlspecialchars(address) + "' data-email='" + htmlspecialchars(email) + "' data-telephone='" + htmlspecialchars(telephone) + "' data-message='" + message + "' data-datetime='" + htmlspecialchars(datetime) + "'><span class='glyphicon glyphicon-eye-open'></span> Edit</button></td><td style='text-align: center;'><button class='delete-modal2 btn btn-danger' data-id='" + id + "' data-form_no='" + htmlspecialchars(form_no) + "' data-first_name='" + htmlspecialchars(first_name) + "' data-last_name='" + htmlspecialchars(last_name) + "' data-address='" + htmlspecialchars(address) + "' data-email='" + htmlspecialchars(email) + "' data-telephone='" + htmlspecialchars(telephone) + "' data-message='" + message + "' data-datetime='" + htmlspecialchars(datetime) + "'><span class='glyphicon glyphicon-eye-open'></span> Delete</button></td></tr>");


                            var s = document.getElementById("ID4");
                            s.value = id;
                        }
                    },
                    error: function(req, textStatus, errorThrown) {
                        alert('Ooops, something happened: ' + textStatus + ' ' +errorThrown);
                    }
                });
            });
        });
        
        // delete a post
        $(document).on('click', '.delete-modal2', function() {
            $('.modal-title').text('Delete');
            $('#ID5').val($(this).data('id'));
            $('#FORM_NO5').val($(this).data('form_no'));
            $('#FIRST_NAME5').val($(this).data('first_name'));
            $('#LAST_NAME5').val($(this).data('last_name'));
            $('#deleteModal2').modal('show');
            id = $('#ID5').val();
        });
        $('.modal-footer').on('click', '.delete5', function() {
            $.ajax({
                type: 'POST',
                url: 'delbr',
                dataType: 'json',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $("#ID5").val(),
                },
                success: function(data) {
                    toastr.remove();
                    toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
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

        // Edit a post
        $(document).on('click', '.edit-modal', function() {
            if($(this).data('id')==undefined){
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
            
            $('#editModal').modal('show');
            id = $('#ID2').val();

            $('.modal-footer').off('click').on('click', '.edit', function() {
                toastr.remove();

                var bool = true;

                var x = document.forms["slform"]["FIRST_NAME2"].value;
                if (x == "") {
                    document.getElementById("FIRST_NAME2").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("FIRST_NAME2").style.border="1px solid #ccc";
                }

                var x = document.forms["slform"]["LAST_NAME2"].value;
                if (x == "") {
                    document.getElementById("LAST_NAME2").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("LAST_NAME2").style.border="1px solid #ccc";
                }

                var x = document.forms["slform"]["ADDRESS2"].value;
                if (x == "") {
                    document.getElementById("ADDRESS2").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("ADDRESS2").style.border="1px solid #ccc";
                }

                var x = document.forms["slform"]["EMAIL2"].value;
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})/;
                if (x == "" || !x.match(mailformat)) {
                    document.getElementById("EMAIL2").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("EMAIL2").style.border="1px solid #ccc";
                }

                var x = document.forms["slform"]["TELEPHONE2"].value;
                if (x == "") {
                    document.getElementById("TELEPHONE2").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("TELEPHONE2").style.border="1px solid #ccc";
                }

                if(bool==false){
                    return false;
                }

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

                var currentURL = $(location).attr('href'); 
                var newURL = currentURL + "/edit";
                $.ajax({
                    type: 'POST',
                    url: 'edit',
                    dataType: 'json',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $("#ID2").val(),
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

                            var htmlspecialchars = function(string) {
  
								// Our finalized string will start out as a copy of the initial string.
								var escapedString = string;

								// For each of the special characters,
								var len = htmlspecialchars.specialchars.length;
								for (var x = 0; x < len; x++) {

									// Replace all instances of the special character with its entity.
									escapedString = escapedString.replace(
									  new RegExp(htmlspecialchars.specialchars[x][0], 'g'),
									  htmlspecialchars.specialchars[x][1]
									);
								}

								// Return the escaped string.
								return escapedString;
							};

							// A collection of special characters and their entities.
							htmlspecialchars.specialchars = [
							[ '&', '&amp;' ],
							[ '<', '&lt;' ],
							[ '>', '&gt;' ],
							[ '"', '&quot;' ]
							];

                           	$('.item' + id).replaceWith("<tr class='item" + id + "'><td>" + id + "</td><td>" + htmlspecialchars(form_no) + "</td><td>" + htmlspecialchars(property_id) + "</td><td>" + first_name + "</td><td>" + htmlspecialchars(last_name) + "</td><td>" + htmlspecialchars(address) + "</td><td>" + htmlspecialchars(email) + "</td><td>" + htmlspecialchars(telephone) + "</td><td style='text-align: center;'><button class='show-modal btn btn-success' data-id='" + id + "' data-form_no='" + htmlspecialchars(form_no) + "' data-property_id='" + htmlspecialchars(property_id) + "' data-first_name='" + htmlspecialchars(first_name) + "' data-last_name='" + htmlspecialchars(last_name) + "' data-address='" + htmlspecialchars(address) + "' data-email='" + htmlspecialchars(email) + "' data-telephone='" + htmlspecialchars(telephone) + "' data-sell='" + htmlspecialchars(sell) + "' data-let='" + htmlspecialchars(let) + "' data-message='" + htmlspecialchars(message) +"'><span class='glyphicon glyphicon-eye-open'></span> Show</button></td><td style='text-align: center;'><button class='edit-modal btn btn-info data-id='" + id + "' data-form_no='" + htmlspecialchars(form_no) + "' data-property_id='" + htmlspecialchars(property_id) + "' data-first_name='" + htmlspecialchars(first_name) + "' data-last_name='" + htmlspecialchars(last_name) + "' data-address='" + htmlspecialchars(address) + "' data-email='" + htmlspecialchars(email) + "' data-telephone='" + htmlspecialchars(telephone) + "' data-sell='" + htmlspecialchars(sell) + "' data-let='" + htmlspecialchars(let) + "' data-message='" + htmlspecialchars(message) +"'><span class='glyphicon glyphicon-eye-open'></span> Edit</button></td><td style='text-align: center;'><button class='delete-modal btn btn-danger' data-id='" + id + "' data-form_no='" + htmlspecialchars(form_no) + "' data-property_id='" + htmlspecialchars(property_id) + "' data-first_name='" + htmlspecialchars(first_name) + "' data-last_name='" + htmlspecialchars(last_name) + "' data-address='" + htmlspecialchars(address) + "' data-email='" + htmlspecialchars(email) + "' data-telephone='" + htmlspecialchars(telephone) + "' data-sell='" + htmlspecialchars(sell) + "' data-let='" + htmlspecialchars(let) + "' data-message='" + htmlspecialchars(message) + "'><span class='glyphicon glyphicon-eye-open'></span> Delete</button></td></tr>");


	                            var s = document.getElementById("ID2");
	                            s.value = id;
                        }
                    },
                    error: function(req, textStatus, errorThrown) {
                        alert('Ooops, something happened: ' + textStatus + ' ' +errorThrown);
                    }
                });
            });
        });
        
        // delete a post
        $(document).on('click', '.delete-modal', function() {
            $('.modal-title').text('Delete');
            $('#ID0').val($(this).data('id'));
            $('#FORM_NO0').val($(this).data('form_no'));
            $('#FIRST_NAME0').val($(this).data('first_name'));
            $('#LAST_NAME0').val($(this).data('last_name'));
            $('#deleteModal').modal('show');
            id = $('#ID0').val();
        
	        $('.modal-footer').on('click', '.delete', function(e) {
    			
	            $.ajax({
	                type: 'POST',
	                url: 'del',
	                dataType: 'json',
	                data: {
	                    '_token': $('input[name=_token]').val(),
	                    'id': $("#ID0").val(),
	                },
	                success: function(data) {
                        toastr.remove();
	                	toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
	                    $('.item' + id).remove();
	                }
	            });
	        });
        });
    </script>



    {{-- contact ajax --}}

    <script type="text/javascript">
        // Show a post
        $(document).on('click', '.show-modal3', function() {
            $('.modal-id').text('ID:\xa0\xa0'+ $(this).data('id'));
            var form = $(this).data('form_no');
            $('.modal-title').text('Showing notification with code:\xa0\xa0'+ form);
            $('#ID6').val($(this).data('id'));
            $('#FIRST_NAME6').val($(this).data('first_name'));
            $('#LAST_NAME6').val($(this).data('last_name'));
            $('#ADDRESS6').val($(this).data('address'));
            $('#EMAIL6').val($(this).data('email'));
            $('#TELEPHONE6').val($(this).data('telephone'));
            $('#MESSAGE6').val($(this).data('message'));

            $('#showModal3').modal('show');
        });

        // Edit a post
        $(document).on('click', '.edit-modal3', function() {
            if($(this).data('id')==undefined){
                var res = $(this).data('form_no').substring(1);
                $('#ID7').val(res);
                $('.modal-id').text('ID:\xa0\xa0'+ res);
            }else{
                $('#ID7').val($(this).data('id'));
                $('.modal-id').text('ID:\xa0\xa0'+ $(this).data('id'));
            }
            
            form_no = $(this).data('form_no');
            $('.modal-title').text('Editing notification with code:\xa0\xa0'+ form_no);
            
            $('#FIRST_NAME7').val($(this).data('first_name'));
            $('#LAST_NAME7').val($(this).data('last_name'));
            $('#EMAIL7').val($(this).data('email'));
            $('#TELEPHONE7').val($(this).data('telephone'));
            $('#MESSAGE7').val($(this).data('message'));
            
            $('#editModal3').modal('show');
            id = $('#ID7').val();

            $('.modal-footer').off('click').on('click', '.edit7', function() {
                toastr.remove();

                var bool = true;

                var x = document.forms["cform"]["FIRST_NAME7"].value;
                if (x == "") {
                    document.getElementById("FIRST_NAME7").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("FIRST_NAME7").style.border="1px solid #ccc";
                }

                var x = document.forms["cform"]["LAST_NAME7"].value;
                if (x == "") {
                    document.getElementById("LAST_NAME7").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("LAST_NAME7").style.border="1px solid #ccc";
                }

                var x = document.forms["cform"]["EMAIL7"].value;
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})/;
                if (x == "" || !x.match(mailformat)) {
                    document.getElementById("EMAIL7").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("EMAIL7").style.border="1px solid #ccc";
                }

                var x = document.forms["cform"]["TELEPHONE7"].value;
                if (x == "") {
                    document.getElementById("TELEPHONE7").style.border="2px solid red";
                    bool = false;
                }
                else{
                    document.getElementById("TELEPHONE7").style.border="1px solid #ccc";
                }

                if(bool==false){
                    return false;
                }

                id= $("#ID7").val();
                property_id= $("#PROPERTY_ID7").val();
                first_name= $('#FIRST_NAME7').val();
                last_name= $('#LAST_NAME7').val();
                email= $('#EMAIL7').val();
                telephone= $('#TELEPHONE7').val();
                message= $('#MESSAGE7').val();

                $.ajax({
                    type: 'POST',
                    url: 'editcon',
                    dataType: 'json',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $("#ID7").val(),
                        'first_name': $('#FIRST_NAME7').val(),
                        'last_name': $('#LAST_NAME7').val(),
                        'email': $('#EMAIL7').val(),
                        'telephone': $('#TELEPHONE7').val(),
                        'message': $('#MESSAGE7').val(),
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
                            
                            toastr.success('Successfully updated Notification!', 'Success Alert');

                            var htmlspecialchars = function(string) {
  
                            // Our finalized string will start out as a copy of the initial string.
                            var escapedString = string;

                            // For each of the special characters,
                            var len = htmlspecialchars.specialchars.length;
                            for (var x = 0; x < len; x++) {

                                // Replace all instances of the special character with its entity.
                                escapedString = escapedString.replace(
                                  new RegExp(htmlspecialchars.specialchars[x][0], 'g'),
                                  htmlspecialchars.specialchars[x][1]
                                );
                            }

                            // Return the escaped string.
                            return escapedString;
                            };

                            // A collection of special characters and their entities.
                            htmlspecialchars.specialchars = [
                            [ '&', '&amp;' ],
                            [ '<', '&lt;' ],
                            [ '>', '&gt;' ],
                            [ '"', '&quot;' ]
                            ];

                            $('.item3' + id).replaceWith("<tr class='item" + id + "'><td>" + id + "</td><td>" + htmlspecialchars(form_no) + "</td><td>" + first_name + "</td><td>" + htmlspecialchars(last_name) + "</td><td>" + htmlspecialchars(email) + "</td><td>" + htmlspecialchars(telephone) + "</td><td style='text-align: center;'><button class='show-modal3 btn btn-success' data-id='" + id + "' data-form_no='" + htmlspecialchars(form_no) + "' data-first_name='" + htmlspecialchars(first_name) + "' data-last_name='" + htmlspecialchars(last_name) + "' data-email='" + htmlspecialchars(email) + "' data-telephone='" + htmlspecialchars(telephone) + "' data-message='" + htmlspecialchars(message) +"'><span class='glyphicon glyphicon-eye-open'></span> Show</button></td><td style='text-align: center;'><button class='edit-modal3 btn btn-info data-id='" + id + "' data-form_no='" + htmlspecialchars(form_no) + "' data-first_name='" + htmlspecialchars(first_name) + "' data-last_name='" + htmlspecialchars(last_name) + "' data-email='" + htmlspecialchars(email) + "' data-telephone='" + htmlspecialchars(telephone) + "' data-message='" + htmlspecialchars(message) +"'><span class='glyphicon glyphicon-eye-open'></span> Edit</button></td><td style='text-align: center;'><button class='delete-modal3 btn btn-danger' data-id='" + id + "' data-form_no='" + htmlspecialchars(form_no) + "' data-first_name='" + htmlspecialchars(first_name) + "' data-last_name='" + htmlspecialchars(last_name) + "' data-email='" + htmlspecialchars(email) + "' data-telephone='" + htmlspecialchars(telephone) + "' data-message='" + htmlspecialchars(message) + "'><span class='glyphicon glyphicon-eye-open'></span> Delete</button></td></tr>");


                                var s = document.getElementById("ID2");
                                s.value = id;
                        }
                    },
                    error: function(req, textStatus, errorThrown) {
                        alert('Ooops, something happened: ' + textStatus + ' ' +errorThrown);
                    }
                });
            });
        });
        
        // delete a post
        $(document).on('click', '.delete-modal3', function() {
            $('.modal-title').text('Delete');
            $('#ID8').val($(this).data('id'));
            $('#FORM_NO8').val($(this).data('form_no'));
            $('#FIRST_NAME8').val($(this).data('first_name'));
            $('#LAST_NAME8').val($(this).data('last_name'));
            $('#deleteModal3').modal('show');
            id = $('#ID8').val();
        });
        $('.modal-footer').on('click', '.delete8', function() {
            $.ajax({
                type: 'POST',
                url: 'delcon',
                dataType: 'json',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $("#ID8").val(),
                },
                success: function(data) {
                    toastr.remove();
                	toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                    $('.item3' + id).remove();
                }
            });
        });
    </script>

    <script type="text/javascript">
  $("#FIRST_NAME2").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#LAST_NAME2").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#ADDRESS2").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#TELEPHONE2").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#EMAIL2").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });

  $("#MESSAGE2").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#submition").click();
    }
  });


  $("#FIRST_NAME4").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#bredit").click();
    }
  });

  $("#LAST_NAME4").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#bredit").click();
    }
  });

  $("#ADDRESS4").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#bredit").click();
    }
  });

  $("#TELEPHONE4").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#bredit").click();
    }
  });

  $("#EMAIL4").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#bredit").click();
    }
  });

  $("#MESSAGE4").keyup(function(event) {
    if (event.keyCode === 13) {
      $("#bredit").click();
    }
  });

  $('#checkboxes0').on('click', function() {
    $(this).val(this.checked ? 1 : 0);
  });

  $('#checkboxes1').on('click', function() {
    $(this).val(this.checked ? 1 : 0);
  });

  // allow only letters for input
  function inputAlphabet(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode != 32 && (charCode < 65 || charCode > 122))
        return false;
    return true;
  }

  // remove any charcter that is not a letter
  function alphaOnly(input) {
    var regex = /[^a-zA-Z ]/gi;
    input.value = input.value.replace(regex, "");
  }

  // validate if input match to the email format
  function validateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.value.match(mailformat))
    {
    return true;
    }
    else
    {
    alert("You have entered an invalid email address!");
    return false;
    }
  }

  // allow only numbers for input
  function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  }

  // remove any character that is not a number
  function numbersOnly(input) {
    var regex = /[^0-9]/gi;
    input.value = input.value.replace(regex, "");
  }

</script>

</body>
</html>
