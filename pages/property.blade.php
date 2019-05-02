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
 
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
    
    
    <style type="text/css">

    .gallery

    {

        display: inline-block;

        margin-top: 20px;

    }

    .close-icon{

      border-radius: 50%;

        position: absolute;

        right: 5px;

        top: -10px;

        padding: 5px 8px;

    }

    .form-image-upload{

        background: #e8e8e8 none repeat scroll 0 0;

        padding: 15px;

    }

    </style>

</head>
   <link rel="stylesheet" type="text/css" href="{{ url('/css/property.css') }}">
<body>
    @include('main') 
   
    <div class="row">
        <br/>

        <div class="col-md-12 container-fluid" style="margin-top: -30px;">
          
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
                                <th>DATE SUBMITTED</th>
                                <th>CUSTOMER ID</th>
                                
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-picture-o ic" aria-hidden="true"></i></th>

                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-pencil-square-o ic" aria-hidden="true"></i></th>
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-trash-o ic" aria-hidden="true" style="color: red;"></i></th>
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
                                <td>{{$row->DATE_SUBMITTED}}</td>
                                 <td>{{$row->CUSTOMER_ID}}</td>
                              
                                  <td style="text-align: center;">
                                    <i class="fa fa-picture-o ic" 
                                       aria-hidden="true" 
                                       style="cursor: pointer;" 
                                       onclick="document.getElementById('id04{{$row->PROPERTY_ID}}').style.display='block'">
                                    </i>
                                </td>
                              
                                <td style="text-align: center;"> 
                                    <i id ="editpro" class="fa fa-pencil-square-o editpro ic" 
                                       data-proid="{{$row->PROPERTY_ID}}" 
                                       data-available_for="{{$row->AVAILABLE_FOR}}" 
                                       data-type="{{$row->TYPE}}" 
                                       data-subtype="{{$row->SUBTYPE}}"
                                       data-town="{{$row->TOWN}}"
                                       data-area="{{$row->AREA}}"
                                       data-price="{{$row->PRICE}}"
                                       data-squaremet="{{$row->SQUARE_METERS}}"
                                       data-floors="{{$row->FLOORS}}"
                                       data-rooms="{{$row->ROOMS}}"
                                       data-furnished="{{$row->FURNISHED}}"
                                       data-pool="{{$row->POOL}}"
                                       data-date_submited="{{$row->DATE_SUBMITTED}}" 
                                       data-customer_id="{{$row->CUSTOMER_ID}}"
                                       aria-hidden="true" 
                                       style="cursor: pointer;">
                                    </i>
                                </td>
                                <!-- <td style="text-align: center;"> 
                                    <i class="fa fa-pencil-square-o ic" 
                                       aria-hidden="true" 
                                       style="cursor: pointer;" 
                                       onclick="document.getElementById('id01{{$row->PROPERTY_ID}}').style.display='block'">
                                    </i>
                                </td>-->


                                <!--
                                <td style="text-align: center;">
                                    <i class="fa fa-trash-o ic" 
                                       aria-hidden="true" 
                                       style="cursor: pointer; 
                                       color: red;" 
                                       onclick="document.getElementById('id02{{$row->PROPERTY_ID}}').style.display='block'">
                                       </i>
                                </td>

                              --->
                              <td style="text-align: center;">
                                <i class="fa fa-trash-o delPro ic" 
                                  id="delPro"

                                  data-proid="{{$row->PROPERTY_ID}}" 
                                  data-available_for="{{$row->AVAILABLE_FOR}}" 
                                  data-type="{{$row->TYPE}}" 
                                  data-subtype="{{$row->SUBTYPE}}"
                                  data-town="{{$row->TOWN}}"
                                  data-area="{{$row->AREA}}"
                                  data-price="{{$row->PRICE}}"
                                  data-squaremet="{{$row->SQUARE_METERS}}"
                                  data-floors="{{$row->FLOORS}}"
                                  data-rooms="{{$row->ROOMS}}"
                                  data-furnished="{{$row->FURNISHED}}"
                                  data-pool="{{$row->POOL}}"
                                  data-date_submited="{{$row->DATE_SUBMITTED}}" 
                                  data-customer_id="{{$row->CUSTOMER_ID}}" 
                                  aria-hidden="true"
                                  style="cursor: pointer; color: red;"
                                  ></i></td>

              
                            </tr>


                            <div id="id04{{$row->PROPERTY_ID}}" 
                                 class="modal slmodal">
                                <div class="modal-content animate" 
                                     name="slmodal">
 

                                    <h3>Image Gallery</h3>

                                    <form action="image-gallery" 
                                          class="form-image-upload" 
                                          method="POST" 
                                          enctype="multipart/form-data">

                                   {!! csrf_field() !!}


                                    @if (count($errors) > 0)

                                        <div class="alert alert-danger">

                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>

                                            <ul>

                                                @foreach ($errors->all() as $error)

                                                    <li>{{ $error }}</li>

                                                @endforeach

                                            </ul>

                                        </div>

                                    @endif


                                    @if ($message = Session::get('success'))

                                    <div class="alert alert-success alert-block">

                                        <button type="button" class="close" data-dismiss="alert">×</button>

                                            <strong>{{ $message }}</strong>

                                    </div>

                                    @endif


                                    <div class="row">

                                        <div class="col-md-5">

                                            <strong>Title:</strong>

                                            <input type="text" 
                                                   name="title" 
                                                   class="form-control" 
                                                   placeholder="Title"
                                                   value="{{ $row->PROPERTY_ID }}"
                                                   disabled>

                                             <input type="text" 
                                             name="title" 

                                             
                                             class="form-control hidden" 
                                             placeholder="Title"
                                             value="{{ $row->PROPERTY_ID }}"
                                             >


                                        </div>

                                        <div class="col-md-5">

                                            <strong>Image:</strong>

                                            <input type="file" name="image" class="form-control">

                                        </div>

                                        <div class="col-md-2">

                                            <br/>

                                            <button type="submit" class="btn btn-success">Upload</button>

                                        </div>

                                </div>



                                    <div class="row">

                                    <div class='list-group gallery'>


                                            @if($image_gallery->count())

                                                @foreach($image_gallery as $image)
                                                @if( $image->title  == $row->PROPERTY_ID )
                                                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>

                                                    <a class="thumbnail fancybox" rel="ligthbox" href="{{ $image->image }}">

                                                        <img class="img-responsive" alt="" src="{{ $image->image }}" />

                                                        <div class='text-center'>

                                                            <small class='text-muted'>{{ $image->title }}</small>

                                                        </div> <!-- text-center / end -->

                                                    </a>

                                                    <form action="image-gallerydel" method="post">
                                                      {!! csrf_field() !!}
                                                    <input class="hidden id" name="id" id="id" value="{{ $image->id }}">

                                                    

                                                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>

                                                    </form>

                                                </div> <!-- col-6 / end -->
                                                @endif
                                                @endforeach

                                            @endif


                                        </div> <!-- list-group / end -->

                                    </div> <!-- row / end -->



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
<!--------- END OF IMAGE GALLERY---->


                            <!-- <div id="id01{{$row->PROPERTY_ID}}" class="modal slmodal"> 
                                <div class="modal-content animate" name="slmodal">

                                    <form method="post" 
                                          action="PropertyUpdate" 
                                          role="form" 
                                          id="sldata"
                                        >
                                        -->

            <div ID="ProUpdate" class="modal fade" role="dialog">
                             <div class="modal-dialog" style="width: 1500px;">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                                        <h3 class="text-center">Update Property's Information</h3>
                                    </div>
                                    <div class="modal-body">    
                                    <br />
                                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                    <form class="form-horizontal" method="post" action="PropertyUpdate" role="form" >

                                        {{csrf_field()}}
                                        <!-- <div class="container-fluid" style="padding: 16px;"> -->

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">Property ID: </label>
                                                        <input onkeypress="return inputAlphabet(event)" 
                                                               onkeyup="alphaOnly(this)" 
                                                               id="PROPERTY_ID0" 
                                                               type="text" 
                                                               name="PROPERTY_ID0" 
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
                                                  <div class="form-group">
                                                        <label class=" control-label" >Available For: </label>

                                                        <select class ="form-control" id="AVAILABLE_FOR1" name="AVAILABLE_FOR1">        
                                                            <option {{ $row->AVAILABLE_FOR == 'For Sale' ? 'selected':'' }}>For Sale</option>
                                                            <option {{ $row->AVAILABLE_FOR == 'For Rent' ? 'selected':'' }}>For Rent</option>

                                                        </select>
                                                        <div class="help-block with-errors"></div> 
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-3">
                                                  <div class="form-group">
                                                    <label class=" control-label" >Property's Type: </label>

                                                    <select class ="form-control" id="TYPE1" name="TYPE1">

                                             
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
                                              </div>

                                                <div class="col-sm-3">
                                                  <div class="form-group">
                                                    <label class=" control-label" >Subtype's Type: </label>

                                                    <select class ="form-control" id="SUBTYPE1" name="SUBTYPE1">

                                                        
                                                        <option {{ $row->SUBTYPE == 'Residential' ? 'selected':'' }}>Residential</option>
                                                        <option {{ $row->SUBTYPE == 'Commercial' ? 'selected':'' }}>Commercial</option>
                                                        <option {{ $row->SUBTYPE == 'Industrial' ? 'selected':'' }}>Industrial</option>
                                                        
                                                    </select>
                                                    <div class="help-block with-errors"></div> 
                                                  </div>
                                                </div>      
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                    <label class=" control-label" >Town: </label>

                                                    <select class ="form-control" id="TOWN1" name="TOWN1">

                                                     
                                                        <option {{ $row->TOWN == 'Nicosia' ? 'selected':'' }}>Nicosia</option>
                                                        <option {{ $row->TOWN == 'Larnaca' ? 'selected':'' }}>Larnaca</option>
                                                        <option {{ $row->TOWN == 'Limassol' ? 'selected':'' }}>Limassol</option>
                                                        <option {{ $row->TOWN == 'Paphos' ? 'selected':'' }}>Paphos</option>
                                                        <option {{ $row->TOWN == 'Famagusta' ? 'selected':'' }}>Famagusta</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div> 
                                                </div> 
                                              </div>

                                                 <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="form_name">Area: </label>
                                                        <input maxlength="20" 
                                                               onkeypress="return inputAlphabet(event)" 
                                                               onkeyup="alphaOnly(this)" 
                                                               id="AREA1" 
                                                               type="text" 
                                                               name="AREA1" 
                                                               class="form-control" 
                                                               placeholder="Please enter area*"
                                                               required="required" 
                                                               required oninvalid="setCustomValidity('Please enter area')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"     
                                                               onkeyup="lettersOnly(this)" 
                                                               data-error="Property ID is required." 
                                                               value="{{$row->AREA}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                        

                                             <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_name">Price: </label>
                                                        <input pattern="\d*" maxlength="8" 
                                                               onkeyup="lettersOnly(this)" 
                                                               id="PRICE1" 
                                                               type="text" 
                                                               name="PRICE1" 
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
                                                        <input pattern="\d*" maxlength="8"  
                                                               onkeyup="lettersOnly(this)" 
                                                               id="SQUARE_METERS1" 
                                                               type="text" 
                                                               name="SQUARE_METERS1" 
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
                                                        <input pattern="\d*" maxlength="8" 
                                                               onkeyup="lettersOnly(this)"
                                                               id="FLOORS1" 
                                                               type="text" 
                                                               name="FLOORS1" 
                                                               class="form-control" 
                                                               placeholder="Please enter floors." 
                                                               required="required" 
                                                               required oninvalid="setCustomValidity('Please enter the square meters ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               value="{{$row->FLOORS}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_name">Rooms: </label>
                                                        <input pattern="\d*" maxlength="8" 
                                                               onkeyup="lettersOnly(this)"
                                                               id="ROOMS1" 
                                                               type="text" 
                                                               name="ROOMS1" 
                                                               class="form-control" 
                                                               placeholder="Please enter rooms." 
                                                               required="required" 
                                                               required oninvalid="setCustomValidity('Please enter the square meters ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               value="{{$row->ROOMS}}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                      <div class="form-group">
                                                        <label class=" control-label" >Furnished: </label>

                                                        <select class ="form-control" id="FURNISHED1" name="FURNISHED1">
                                                            <option {{ $row->FURNISHED == 'Yes' ? 'selected':'' }}>Yes</option>
                                                            <option {{ $row->FURNISHED == 'No' ? 'selected':'' }}>No</option>
                                                        </select>
                                                        <div class="help-block with-errors"></div> 
                                                    </div> 
                                                    </div>
                                                     <div class="col-sm-5">
                                                        <div class="form-group">
                                                        <label class=" control-label" >Pool:</label>

                                                        <select class ="form-control" id="POOL1" name="POOL1">
                                                            <option {{ $row->POOL == 'Yes' ? 'selected':'' }}>Yes</option>
                                                            <option {{ $row->POOL == 'No' ? 'selected':'' }}>No</option>
                                                        </select>
                                                        <div class="help-block with-errors"></div> 
                                                      </div> 
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_name">Customer ID: </label>
                                                        <input onkeypress="return isNumberKey(event)" 
                                                               onkeyup ="lettersOnly(this)"  
                                                               id="CUSTOMER_ID1" 
                                                               type="text" 
                                                               name="CUSTOMER_ID1" 
                                                               class="form-control" 
                                                               placeholder="Please enter customer ID *" 
                                                               required="required" 
                                                               data-error="Customer ID is required." 
                                                               value="{{$row->CUSTOMER_ID}}">
                                                        <div class="help-block with-errors"></div>

                                                         </div>
                                                </div>
                                            </div>

                                      <!-- </div> -->

                                       <div class="row">
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                        <label for="form_name">Date Submitted: </label>
                                                        <input id="DATE_SUBMITTED1" 
                                                               type="DATE" 
                                                               name="DATE_SUBMITTED1" 
                                                               class="form-control" 
                                                               placeholder="Please enter date *" 
                                                               required="required" 
                                                               data-error="Date submitted field is required.">

                                                        <div class="help-block with-errors"></div>
                                                    
                                                </div>
                                            </div>     
                                        </div>
                                                              
                                            <div class="modal-footer">
                                                <input id="editsubmit" type="submit" class="btn btn-primary editsubmit" align="center" value="Save">
                                                <input name="PROPERTY_ID1" id="PROPERTY_ID1" class="hidden ID">
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                                                    <!-- </div> 
                                                </div>
                                            </div>
                                  
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_message">Date Submitted:</label>
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
                                    </div>
                                    </form>
                                </div>
                            </div>
                          -->

<!--
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
-->



     <!--
    <div ID="id02{{$row->PROPERTY_ID}}" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width:900px;">
            <div class="modal-content">

                <div class="modal-header" style="height: 50px;">

                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                </div>
                <h3 class="text-center">Do you want to delete property's form?</h3>
                <div class="modal-body">
                <br />
                <div class="hidden"><input type="text" name="ID3" id="ID8"></div>


                    <form class="form-horizontal" 
                          role="form" 
                          method="post" 
                          action="PropertyDestroy">
                      {{csrf_field()}}

                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="ID0">Property ID:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="PROPERTY_ID" disabled>
                                </div>
                            </div>
                        </div>
                      <br/>

                     <div class="row">
                      
                          <div class="modal-footer">
                              <input type="submit" class="btn btn-primary delete"align="center" value="Delete">
                              <input name="PROPERTY_ID" id="PROPERTY_ID" class="hidden ID">
                          </div>
                      
                      </div>

                    </form>                  
                </div>
            </div>
        </div>
    </div>

    -->

       <div ID="ProDestroy" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width:900px;">
            <div class="modal-content">
                <div class="modal-header" style="height: 50px;">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                </div>
                 <h3 class="text-center">Do you want to delete property's form?</h3>
                <div class="modal-body">
                    <br />
                    <div class="hidden"><input type="text" name="ID3" id="ID8"></div>
                    <form class="form-horizontal" role="form" method="post" action="PropertyDestroy">

                      {{csrf_field()}}
                      <div class="row">
                          <div class="form-group">
                              <label class="control-label col-sm-2" for="ID0">Property ID:</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" id="PROPERTY_ID2" disabled>
                              </div>
                          </div>
                      </div>
                      <br/>
                       <div class="row">
                          <div class="form-group">
                              <label class="control-label col-sm-2" for="ID0">Customer ID:</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" id="CUSTOMER_ID2" disabled>
                              </div>
                          </div>
                      </div>
                              
                      <div class="row">
                        <!-- <div class="form-group"> -->
                          <div class="modal-footer">
                              <input type="submit" class="btn btn-primary delete"align="center" value="Delete">
                              <input name="PROPERTY_ID21" id="PROPERTY_ID21" class="hidden ID">
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
                                <td style="text-align: center;"><i id="addpro" class="fa fa-plus-circle addpro ic" aria-hidden="true" style="cursor: pointer; color: orange;"></i></td>
                            </tr>
                        </thead>

                        <div ID="ProAdd" class="modal fade" role="dialog">
                         <div class="modal-dialog" style="width: 1500px;">
                             <div class="modal-content">
                                <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                             <h3 class="text-center">Add Property's Information</h3>
                        </div>
                    <div class="modal-body">
                    <br />
                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                    <form method="post" action="PropertyAdd" role="form" id="sldata">

                                       {{csrf_field()}}
                                       <div class="container" style="padding: 16px;">
                                            <div class="row">
                                                  <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Property ID: </label>
                                                        <input 
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
                                                        <input maxlength="20" 
                                                               onkeypress="return inputAlphabet(event)" 
                                                               onkeyup="alphaOnly(this)" 
                                                               id="AREA" 
                                                               type="text" 
                                                               name="AREA" 
                                                               class="form-control" 
                                                               placeholder="Please enter area *"
                                                               required="required"
                                                               required oninvalid="setCustomValidity('Please enter area')" 
                                                               data-error="Area is required." 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                            >
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Price: </label>
                                                        <input pattern="\d*" maxlength="8" 
                                                               onkeyup ="lettersOnly(this)"
                                                               id="PRICE" 
                                                               type="text" 
                                                               name="PRICE" 
                                                               class="form-control" 
                                                               placeholder="Please enter price *" 
                                                              required="required" 
                                                               required oninvalid="setCustomValidity('Please enter price ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}"
                                                               onkeypress="return isNumberKey(event)" 
                                                               onkeyup="lettersOnly(this)"  >

                                                        <div class="help-block with-errors"></div>
                                                    </div>  
                                               </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Square Meters: </label>
                                                        <input pattern="\d*" maxlength="8"  
                                                               onkeyup ="lettersOnly(this)"
                                                               id="SQUARE_METERS" 
                                                               type="text" 
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
                                                        <input pattern="\d*" maxlength="8"  
                                                               onkeyup ="lettersOnly(this)"
                                                               id="FLOORS" 
                                                               type="text" 
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
                                                        <input pattern="\d*" maxlength="8"  
                                                               onkeyup ="lettersOnly(this)"
                                                               id="ROOMS" 
                                                               type="text" 
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
                                                        <label for="form_name">Customer ID: </label>
                                                        <input pattern="\d*" 
                                                               maxlength="8" 
                                                               onkeypress="return isNumberKey(event)" 
                                                               onkeyup ="lettersOnly(this)" 
                                                               id="CUSTOMER_ID" 
                                                               type="text" 
                                                               name="CUSTOMER_ID" 
                                                               class="form-control" 
                                                               placeholder="Please enter customers' ID *" 
                                                               required="required" 
                                                               data-error="Customer ID is required." 
                                                               required oninvalid="setCustomValidity('Please enter an existing customer ID ')" 
                                                               onchange="try{setCustomValidity('')}catch(e){}">
                                                               
                                                      
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                            </div>
                                        </div>
                                       
                                           
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                        <label for="form_message">Date Submitted: </label>
                                                        <input id="DATE_SUBMITTED2" 
                                                               type="DATE" 
                                                               name="DATE_SUBMITTED2" 
                                                               class="form-control" 
                                                               placeholder="Please enter date *" 
                                                               required="required" 
                                                               data-error="Date submitted field is required.">

                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>     
                                        </div>
                                     
                                        
                                            <div class="modal-footer">
                                                <input id="submition" type="submit" class="btn btn-primary" align="center" value="Add">
                                                <input name="ID" id="ID" class="hidden ID" value="{{$row->PROPERTY_ID}}">
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

   $(document).on('click', '.editpro', function() {
            $('#PROPERTY_ID0').val($(this).data('proid'));
            $('#AVAILABLE_FOR1').val($(this).data('available_for'));
            $('#TYPE1').val($(this).data('type'));
            $('#SUBTYPE1').val($(this).data('subtype'));
            $('#TOWN1').val($(this).data('town'));
            $('#AREA1').val($(this).data('area'));
            $('#PRICE1').val($(this).data('price'));
            $('#SQUARE_METERS1').val($(this).data('squaremet'));
            $('#FLOORS1').val($(this).data('floors'));
            $('#ROOMS1').val($(this).data('rooms'));
            $('#FURNISHED1').val($(this).data('furnished'));
            $('#POOL1').val($(this).data('pool'));
            $('#DATE_SUBMITTED1').val($(this).data('date_submited'));
            $('#CUSTOMER_ID1').val($(this).data('customer_id'));
            
            $('#PROPERTY_ID1').val($(this).data('proid'));

            $('#ProUpdate').modal('show');
        });

$(document).on('click', '.delPro', function() {

      $('#PROPERTY_ID2').val($(this).data('proid'));
      $('#CUSTOMER_ID2').val($(this).data('customer_id'));
      $('#PROPERTY_ID21').val($(this).data('proid'));
        $('#ProDestroy').modal('show');
 });



     $(document).on('click', '.addpro', function() {

      
        $('#ProAdd').modal('show');
        });



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
  });
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

</script>

