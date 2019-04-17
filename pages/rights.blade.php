<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Orphanou Estates</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="_token" content="{{ csrf_token() }}"/>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		
	</head>
	<style>
		input[type=checkbox] {
		width: 18px;
		height: 18px;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="{{ url('/css/notification.css') }}">
	<body>
		@include('main')
		<div class="container-fluid" style="padding: 20px;">
			<br/>
			<h1 align="center">Employee Rights Information</h1>
			<br/>
			<table class="table table-bordered" id="sltable">
				<thead>
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>EMAIL</th>
						<th>Add Article</th>
						<th>Add Property/Plot</th>
						<th>Add Customer</th>
						<th>Add Employee</th>
						<th>Add Collaborator</th>
						<th>Notifications</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $row)
					<tr>
						<td>{{$row->id}}</td>
						<td>{{$row->name}}</td>
						<td>{{$row->email}}</td>
						<td class="text-center"><input type="checkbox" class="published1" data-id="{{$row->id}}" @if ($row->ADD_ARTICLE) checked @endif></td>
						<td class="text-center"><input type="checkbox" class="published2" data-id="{{$row->id}}" @if ($row->ADD_PROPERTY_PLOT) checked @endif></td>
						<td class="text-center"><input type="checkbox" class="published3" data-id="{{$row->id}}" @if ($row->ADD_CUSTOMER) checked @endif></td>
						<td class="text-center"><div class="mycheck"><input type="checkbox" class="published4" data-id="{{$row->id}}" @if ($row->ADD_EMPLOYEE) checked @endif><span class="checkmark"></span></div></td>
						<td class="text-center"><input type="checkbox" class="published5" data-id="{{$row->id}}" @if ($row->ADD_COLLABORATOR) checked @endif></td>
						<td class="text-center"><input type="checkbox" class="published6" data-id="{{$row->id}}" @if ($row->NOTIFICATIONS) checked @endif></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){

            $('.published1').on('click', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus1') }}",
                    dataType: 'json',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                        // empty
                    },
                });
            });

            $('.published2').on('click', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus2') }}",
                    dataType: 'json',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                        // empty
                    },
                });
            });

            $('.published3').on('click', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus3') }}",
                    dataType: 'json',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                        // empty
                    },
                });
            });

            $('.published4').on('click', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus4') }}",
                    dataType: 'json',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                        // empty
                    },
                });
            });

            $('.published5').on('click', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus5') }}",
                    dataType: 'json',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                        // empty
                    },
                });
            });

            $('.published6').on('click', function(event){
                id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "{{ URL::route('changeStatus6') }}",
                    dataType: 'json',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function(data) {
                        // empty
                    },
                });
            });
           
        });
</script>




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
