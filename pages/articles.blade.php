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
	@include('main')

    <div class="row">
        <br/>

        <div class="col-md-12 container-fluid" style="margin-top: -30px;">
            <ul class="nav nav-tabs" style="margin-top: 70px;">
                <li class="active"><a href="#sltablediv" style="color: #555;">Articles</a></li>
            </ul>
            <div class="tab-content">
                <div id="sltablediv" class="tab-pane fade in active">
                    <h1 align="center" {{-- style="margin-top: 70px;" --}}>Articles Data</h1>
                    <table class="table table-bordered" id="sltable">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Article</th>
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
                                <th style="background: none; cursor: default; text-align: center;"><i class="fa fa-trash-o" aria-hidden="true" style="color: red;"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ARTICLE as $row)
                            <tr>
                                <td>{{$row->DATE}}</td>
                                <td>{{$row->TITLE}}</td>
                                <td>{{$row->DOCUMENT}}</td>

                                <td style="text-align: center;"><i class="fa fa-pencil-square-o" aria-hidden="true" style="cursor: pointer;" onclick="document.getElementById('id01{{$row->ARTICLE_ID}}').style.display='block'"></i></td>
                                <td style="text-align: center;"><i class="fa fa-trash-o" aria-hidden="true" style="cursor: pointer; color: red;" onclick="document.getElementById('id02{{$row->ARTICLE_ID}}').style.display='block'"></i></td>
                            </tr>
                            <div id="id01{{$row->ARTICLE_ID}}" class="modal slmodal">
                                <div class="modal-content animate" name="slmodal">
                                    <form method="post" action="ArticlesUpdate" role="form" id="sldata">
                                        {{csrf_field()}}
                                        <div class="container" style="padding: 16px;">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="form_name">Title</label>
                                                        <textarea id="form_message" name="TITLE" class="form-control" placeholder="Write Title..">{{$row->TITLE}}</textarea>
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
                                                        <!--First upload the image on the server and then get the image url from the db and display it on the website-->                     
                                                        <input id="IMAGE" type="file" name="IMAGE" class="form-control" placeholder="Browse image*">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12" style="background-color:#f1f1f1; padding: 16px;">
                                            <div class="col-md-4" style="float: left;">
                                                <button type="button" onclick="document.getElementById('id01{{$row->ARTICLE_ID}}').style.display='none'" class="cancelbtn">Cancel</button>
                                            </div>

                                            <div class="col-md-4" align="center">
                                                <input id="submition" type="submit" class="btn btn-black" align="center" value="Save" style="font-size: 20px; background: transparent; border-color: #f4511e;">
                                            </div>
                                            <div class="col-md-4" style="float: left;">
                                                <input name="ARTICLE_ID" id="ARTICLE_ID" class="hidden ID" value="{{$row->ARTICLE_ID}}">
                                            </div>
                                            <div class="col-md-4" style="float: left;">
                                                <input name="DATE" id="DATE" class="hidden ID" value="{{$row->DATE}}">
                                            </div>
                                            <div class="col-md-4" style="float: left;">
                                                <input name="IMAGE" id="IMAGE" class="hidden ID" value="{{$row->IMAGE}}">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="id02{{$row->ARTICLE_ID}}" class="modal">
                                <div class="modal-content animate modal-sm">
                                    <form method="post" action="ArticlesDestroy" role="form" id="sldata">
                                        {{csrf_field()}}
                                            <div class="container-fluid" style="text-align: center; padding: 0;">
                                                <p style="font-size: 25px;">Do you want to delete the notification from article: <b>{{$row->ARTICLE_ID}}</b>?</p>
                                            </div>

                                            <div class="container-fluid" style="background-color:#f1f1f1; padding: 16px;">
                                                <div class="" style="float: left;">
                                                    <button type="button" onclick="document.getElementById('id02{{$row->ARTICLE_ID}}').style.display='none'" class="cancelbtn">Cancel</button>
                                                </div>

                                                <div class="" align="center">
                                                    <input id="submition" type="submit" class="btn btn-black" align="center" value="Confirm" style="font-size: 20px; background: transparent; border-color: #f4511e;">
                                                </div>
                                                <div class="" style="float: left;">
                                                    <input name="ARTICLE_ID" id="ARTICLE_ID" class="hidden ID" value="{{$row->ARTICLE_ID}}">
                                                </div>
                                            </div>
                                    </form>
                                    </div>
                                </div>
                            @endforeach
                                <thead>
                            <tr>
                                <th  style="text-align: center;"><i class="fa fa-plus-circle" aria-hidden="true" style="cursor: pointer; color: orange;" onclick="document.getElementById('id03{{$row->ARTICLE_ID}}').style.display='block'"></i></th>
                            </tr>
                        </thead>
                        <div id="id03{{$row->ARTICLE_ID}}" class="modal slmodal">
                                <div class="modal-content animate" name="slmodal">
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
                                                        <!--First upload the image on the server and then get the image url from the db and display it on the website-->                     
                                                        <input id="IMAGE" type="file" name="IMAGE" class="form-control" placeholder="Browse image*" required="required" data-error="Image is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container col-md-12" style="background-color:#f1f1f1; padding: 16px;">
                                            <div class="col-md-4" style="float: left;">
                                                <button type="button" onclick="document.getElementById('id03{{$row->ARTICLE_ID}}').style.display='none'" class="cancelbtn">Cancel</button>
                                            </div>

                                            <div class="col-md-4" align="center">
                                                <input id="submition" type="submit" class="btn btn-black" align="center" value="Save" style="font-size: 20px; background: transparent; border-color: #f4511e;">
                                            </div>
                                            <div class="col-md-4" style="float: left;">
                                                <input name="ARTICLE_ID" id="ARTICLE_ID" class="hidden ID" value="{{$row->ARTICLE_ID}}">
                                            </div>
                                            <!--<div class="col-md-4" style="float: left;">
                                                 <input name="IMAGE" id="IMAGE" class="hidden ID" value="{{$row->IMAGE}}"> 
                                            </div>-->
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
