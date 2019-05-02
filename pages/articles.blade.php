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
                    <h1 align="center">Articles Data</h1>
                    <table class="table table-bordered" id="sltable">
                        <thead>
                            <tr>
                                <th class="hidden"></th>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Article</th>
                                
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-picture-o ic" aria-hidden="true"></i></th>
                                
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($image_gallery_articles as $row)
                            
                            <tr>
                                <td class="hidden">{{$row->id}}</td>
                                <td>{{$row->DATE}}</td>
                                <td>{{$row->title}}</td>
                                <td>{{$row->DOCUMENT}}</td>
                                
                                <!-- <td>{{$row->id}}</td> -->
                                
                                <td style="text-align: center;">
                                                <i class="fa fa-picture-o ic" aria-hidden="true"
                                                onclick="document.getElementById('id04{{$row->id}}').style.display='block'"
                                                style="background: none; 
                                                cursor: default; 
                                                text-align: center; 
                                                cursor: pointer;"></i>
                                            </td>

                                <td style="text-align: center;"><i id="editart" class="fa fa-pencil-square-o editart" data-article_id="{{$row->id}}" data-date="{{$row->DATE }}" data-title="{{$row->title}}" data-document="{{$row->DOCUMENT}}" data-image="{{$row->image}}" aria-hidden="true" style="cursor: pointer;"></i></td>
                                <td style="text-align: center;"><i id="delart" class="fa fa-trash-o delart" data-article_id="{{$row->id}}" data-date="{{$row->DATE }}" data-title="{{$row->title}}" data-document="{{$row->DOCUMENT}}" data-image="{{$row->image}}" aria-hidden="true" style="cursor: pointer; color: red;"></i></td>
                            </tr>

                            <div id="id04{{$row->id}}" 
                                 class="modal slmodal">
                                <div class="modal-content animate" 
                                     name="slmodal">
 

                                    <h3>Image Gallery</h3>

                                    <form action="update-image-gallery-articles" 
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

                                            <strong>Image:</strong>

                                            <input type="file" name="image" class="form-control">
                                            
                                        </div>

                                        <div class="col-md-5">
                                        <!-- <strong>Title:</strong>   -->
                                            <input type="text" name="title" class="form-control hidden" placeholder="Title" value="{{ $row->title }}" >
                                        </div>

                                        <div class="col-md-5">
                                        <!-- <strong>Doc:</strong>   -->
                                        <input type="text" name="DOCUMENT" class="form-control hidden" placeholder="DOCUMENT" value="{{ $row->DOCUMENT }}">
                                        </div>

                                        <div class="col-md-5">
                                        <!-- <strong>Date:</strong>   -->
                                        <input type="date" name="DATE" class="form-control hidden" placeholder="DATE" value="{{ $row->DATE }}">
                                        </div>

                                        <div class="col-md-5">
                                        <!-- <strong>Id:</strong>   -->
                                        <input type="number" name="id" class="form-control hidden" placeholder="id" value="{{ $row->id }}">
                                        </div>

                                        <div class="col-md-2">

                                            <br/>

                                            <button type="submit" class="btn btn-success">Upload</button>

                                        </div>

                                </div>

                                    <div class="container-fluid" style="background-color:#f1f1f1; padding: 0px;">
                                                <div class="" 
                                                     style="float: center;">
                                                    <button type="button" 
                                                            onclick="document.getElementById('id04{{$row->id}}').style.display='none'" 
                                                            class="cancelbtn"
                                                            align="center" 
                                                            style="font-size: 20px; background: transparent; border-color: #f4511e;">Back</button>
                                                </div>

                                               
                                    </div> 
                                    </form>
                                     
                                 </div>    
                            </div>

    <div ID="ArtUpdate" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                    <h3 class="text-center">Update the Article</h3>
                </div>
                <div class="modal-body">    
                    <br />
                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                    <form method="post" action="ArticlesUpdate" role="form" id="sldata">
                                        {{csrf_field()}}
                                        <div class="container" style="padding: 16px;">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="form_name">Title</label>
                                                        <textarea id="TITLE1" name="TITLE1" class="form-control"  maxlength ="100" placeholder="Write Title.." rows="5" required="required" data-error="Title is required.">{{$row->title}}</textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="form_name">Document</label>
                                                        <textarea id="DOCUMENT1" name="DOCUMENT1" class="form-control" placeholder="Write Αrticle.." rows="5" required="required" data-error="Document is required.">{{$row->DOCUMENT}}</textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <i class="fa fa-picture-o ic" aria-hidden="true"
                                                onclick="document.getElementById('id04{{$row->id}}').style.display='block'"
                                                style="background: none; 
                                                cursor: default; 
                                                text-align: center; 
                                                cursor: pointer;"></i>
                                            </div> -->
                                        </div>
                                        <div class="modal-footer">
                                            <input id="submition" type="submit" class="btn btn-primary" align="center" value="Save"> 
                                            <input name="ARTICLE_ID1" id="ARTICLE_ID1" class="hidden ID" value="{{$row->id}}">
                                            <input name="DATE1" id="DATE1" class="hidden ID" value="{{$row->DATE}}">
                                            <!-- <input name="image" id="image" class="hidden ID" value="{{$row->image}}"> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                            <!-- <div id="id01{{$row->id}}" class="modal slmodal">
                                <div class="modal-content animate" name="slmodal">
                                    <form method="post" action="ArticlesUpdate" role="form" id="sldata">
                                        {{csrf_field()}}
                                        <div class="container" style="padding: 16px;">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="form_name">Title</label>
                                                        <textarea id="form_message" name="TITLE" class="form-control" placeholder="Write Title..">{{$row->title}}</textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="form_name">Document</label>
                                                        <textarea id="form_message" name="DOCUMENT" class="form-control" placeholder="Write Αrticle.." rows="5">{{$row->DOCUMENT}}</textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_message">Image</label>    
                                                        /////First upload the image on the server and then get the image url from the db and display it on the website                     
                                                        <input id="IMAGE" type="file" name="IMAGE" class="form-control" placeholder="Browse image*">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12" style="background-color:#f1f1f1; padding: 16px;">
                                            <div class="col-md-4" style="float: left;">
                                                <button type="button" onclick="document.getElementById('id01{{$row->id}}').style.display='none'" class="cancelbtn">Cancel</button>
                                            </div>

                                            <div class="col-md-4" align="center">
                                                <input id="submition" type="submit" class="btn btn-black" align="center" value="Save" style="font-size: 20px; background: transparent; border-color: #f4511e;">
                                            </div>
                                            <div class="col-md-4" style="float: left;">
                                                <input name="id" id="id" class="hidden ID" value="{{$row->id}}">
                                            </div>
                                            <div class="col-md-4" style="float: left;">
                                                <input name="DATE" id="DATE" class="hidden ID" value="{{$row->DATE}}">
                                            </div>
                                            <div class="col-md-4" style="float: left;">
                                                <input name="IMAGE" id="IMAGE" class="hidden ID" value="{{$row->image}}">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->

<div ID="ArtDestroy" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 900px;">
            <div class="modal-content">
                <div class="modal-header"style="height: 50px;">
                    <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                </div>
                <h3 class="text-center">Do you want to delete this article?</h3>
                <div class="modal-body">
                    <br />
                    <div class="hidden"><input type="text" name="ID3" id="ID0"></div>
                    <form class="form-horizontal" role="form" method="post" action="ArticlesDestroy">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Title:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="TITLE2" disabled>
                                </div>
                            </div>
                        </div></br>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Article:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="DOCUMENT2" disabled>
                                </div>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="form-group">
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary delete" value="Delete">
                                    <input name="ARTICLE_ID2" id="ARTICLE_ID2" class="hidden ID">
                                </div>
                            </div>
                        </div>
                    </form>                  
                </div>
            </div>
        </div>
    </div>

                            <!-- <div id="id02{{$row->id}}" class="modal">
                                <div class="modal-content animate modal-sm">
                                    <form method="post" action="ArticlesDestroy" role="form" id="sldata">
                                        {{csrf_field()}}
                                            <div class="container-fluid" style="text-align: center; padding: 0;">
                                                <p style="font-size: 25px;">Do you want to delete the notification from article: <b>{{$row->id}}</b>?</p>
                                            </div>

                                            <div class="container-fluid" style="background-color:#f1f1f1; padding: 16px;">
                                                <div class="" style="float: left;">
                                                    <button type="button" onclick="document.getElementById('id02{{$row->id}}').style.display='none'" class="cancelbtn">Cancel</button>
                                                </div>

                                                <div class="" align="center">
                                                    <input id="submition" type="submit" class="btn btn-black" align="center" value="Confirm" style="font-size: 20px; background: transparent; border-color: #f4511e;">
                                                </div>
                                                <div class="" style="float: left;">
                                                    <input name="id" id="id" class="hidden ID" value="{{$row->id}}">
                                                </div>
                                            </div>
                                    </form>
                                    </div>
                                </div> -->
                            @endforeach
                                <thead>
                            <tr>
                                <th  style="text-align: center;"><i id="addart" class="fa fa-plus-circle addart" aria-hidden="true" style="cursor: pointer; color: orange;" onclick="document.getElementById('id03{{$row->id}}').style.display='block'"></i></th>
                            </tr>
                        <!-- </thead>
                        <div ID="ArtAdd" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width: 900px;">
                 <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                        <h3 class="text-center">Add Article</h3>
                       </div>
                    <div class="modal-body">   
                    <br />
                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                    <form method="post" action="ArticlesAdd" role="form" id="sldata">
                                        {{csrf_field()}}
                                        <div class="container" style="padding: 16px;">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">Title</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="TITLE" type="text" name="TITLE" class="form-control" placeholder="Please enter the article's title *" required="required" data-error="Title is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_name">Date</label>
                                                        <input id="DATE" type="date" name="DATE" class="form-control" placeholder="Please enter the article's date *" required="required" data-error="Date is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_message">Document</label>
                                                        <textarea id="form_message" name="DOCUMENT" class="form-control" placeholder="Write the article.." rows="5"></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="form_message">Image</label>    
                                                        ////////First upload the image on the server and then get the image url from the db and display it on the website                    
                                                        <input id="IMAGE" type="file" name="IMAGE" class="form-control" placeholder="Browse image*" required="required" data-error="Image is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input id="submition" type="submit" class="btn btn-primary" align="center" value="Add">
                                                <input name="ID" id = "ID" class="hidden ID" value="{{$row->id}}">   
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </tbody> -->
                        </thead>

                       <div ID="ArtAdd" class="modal fade" role="dialog">
                         <div class="modal-dialog" style="width: 900px;">
                             <div class="modal-content">
                                <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" style="margin-top: 10px;">&times;</button>
                             <h3 class="text-center">Add Article</h3>
                        </div>
                    <div class="modal-body">
                    
                    <br />
                    <div class="hidden"><input type="text" name="ID8" id="ID8"></div>
                                    <form method="post" action="ArticlesAdd" role="form" id="sldata">
                                        {{csrf_field()}}
                                        <!-- <div class="container" style="padding: 16px;"> -->
                                        <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="form_name">Title</label>
                                                        <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" maxlength ="100" id="title" type="text" name="title" class="form-control" placeholder="Please enter the article's title *" required="required" data-error="Title is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="form_name">Date</label>
                                                        <input id="DATE" type="date" name="DATE" class="form-control" placeholder="Please enter the article's date *" required="required" data-error="Date is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="form_message">Document</label>
                                                        <textarea id="form_message" name="DOCUMENT" class="form-control" placeholder="Write the article.." rows="5" required="required" data-error="Document is required."></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="form_message">Image</label>    
                                                        <input id="image" type="file" name="image" class="form-control" placeholder="Browse image*" required="required" data-error="Image is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        <!-- </div> -->
                                        <div class="modal-footer">
                                            <!-- <div class="col-md-4" align="center"> -->
                                                <input id="submition" type="submit" class="btn btn-primary" align="center" value="Add">
                                            <!-- </div> -->
                                            <!-- <div class="col-md-4" style="float: left;"> -->
                                                <input name="ID" id="ID" class="hidden ID" value="{{$row->id}}">
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

<script type="text/javascript">

    $(document).on('click', '.editart', function() {
            $('#TITLE1').val($(this).data('title'));
            $('#DOCUMENT1').val($(this).data('document'));
            $('#DATE1').val($(this).data('date'));
            $('#ARTICLE_ID1').val($(this).data('article_id'));

            $('#ArtUpdate').modal('show');
    });

    $(document).on('click', '.delart', function() {
        $('#TITLE2').val($(this).data('title'));
        $('#DOCUMENT2').val($(this).data('document'));
        $('#ARTICLE_ID2').val($(this).data('article_id'));
        $('#ArtDestroy').modal('show');
    });

    $(document).on('click', '.editart', function() {
            $('#ArtUpdate').modal('show');
        });

     $(document).on('click', '.delart', function() {
            $('#ArtDestroy').modal('show');
        });

     $(document).on('click', '.addart', function() {
            $('#ArtAdd').modal('show');
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
