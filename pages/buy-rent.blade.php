<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Orphanou Estates</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <style type="text/css">
    	#myInput {
		    padding: 20px;
		    border: 0;
		    border-radius: 0;
		    background: #f1f1f1;
		    width: 100%;
		  }
		  .area{
		  	width: 100%;
		  }
    </style>

  </head>
  <link rel="stylesheet" type="text/css" href="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/css/buy.css">

  <body id="myPage" data-spy="scroll" data-offset="60" style="background: linear-gradient(to left, #f4511e , #565671); color: black;">

    @include('main')

    <div id="buy" class="container-fluid" style="margin-top: 80px;">
      <div class="row">
        
        <div class="col-sm-12 well auth-box">
          <form>
            <fieldset>
              <!-- Form Name -->
              <legend>Search</legend>
              <!-- Password input-->
              <!-- Multiple Checkboxes (inline) -->
              <div class="col-sm-4 form-line">
                <div class="form-group">
                  <label class=" control-label" for="checkboxes">Interested for</label>
                  <div class="">
                    <label class="radio-inline" for="radios-8" style="padding-right: 10px; font-weight: 400;">
                      <input name="radios-1" id="radios-8" type="radio" checked="checked" >
                      Buy
                    </label>
                    <label class="radio-inline" for="radios-9" style="font-weight: 400;">
                      <input name="radios-1" id="radios-9" value="1" type="radio">
                      Rent
                    </label>
                  </div>
                </div>
                <!-- Select Basic -->
                <div class="form-group">
                  <label class=" control-label" for="selectbasic">Town</label>
                  <div class="">
                    <select id="TOWN" name="TOWN" class="form-control">
                      <option value="Nicosia">Nicosia</option>
                      <option value="Larnaca">Larnaca</option>
                      <option value="Limassol">Limassol</option>
                      <option value="Paphos">Paphos</option>
                      <option value="Famagusta">Famagusta</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class=" control-label" for="searchinput">Area</label>
				<div>
					<input type="text" id="searcharea" name="search" onkeyup="filter()" style="width: 100%;">
				</div>
					<div class="">
				        <select id="selectarea" class="form-control selectarea" name="selectarea" style="width: 100%;" size="1">
				        	<option value="">-- Select Area --</option>
				            <option value="Achna">Achna</option>
							<option value="Agia Marina">Agia Marina</option>
							<option value="Agia Marinouda">Agia Marinouda</option>
							<option value="Agia Trias">Agia Trias</option>
							<option value="Agia Varvara">Agia Varvara</option>
							<option value="Agioi Trimithias">Agioi Trimithias</option>
							<option value="Agios Sozomenos">Agios Sozomenos</option>
							<option value="Aglandjia">Aglandjia</option>
							<option value="Agros">Agros</option>
							<option value="Akaki">Akaki</option>
							<option value="Akanthou">Akanthou</option>
							<option value="Akrotiri">Akrotiri</option>
							<option value="Amargeti">Amargeti</option>
							<option value="Amathous">Amathous</option>
							<option value="Anarita">Anarita</option>
							<option value="Apostolos Andreas">Apostolos Andreas</option>
							<option value="Argaki">Argaki</option>
							<option value="Arminou">Arminou</option>
							<option value="Asha">Asha</option>
							<option value="Asinou">Asinou</option>
							<option value="Askas">Askas</option>
							<option value="Astromeritis">Astromeritis</option>
							<option value="Athienou">Athienou</option>
							<option value="Ayia Napa">Ayia Napa</option>
							<option value="Ayios Dhometios">Ayios Dhometios</option>
							<option value="Bellapais">Bellapais</option>
							<option value="Buffavento">Buffavento</option>
							<option value="Chirokitia">Chirokitia</option>
							<option value="Chloraka">Chloraka</option>
							<option value="Dali">Dali</option>
							<option value="Dasaki tis Achnas">Dasaki tis Achnas</option>
							<option value="Deryneia">Deryneia</option>
							<option value="Dhekelia">Dhekelia</option>
							<option value="Dhrousha">Dhrousha</option>
							<option value="Episkopi">Episkopi</option>
							<option value="Ergates">Ergates</option>
							<option value="Evrychou">Evrychou</option>
							<option value="Fyti">Fyti</option>
							<option value="Galata">Galata</option>
							<option value="Gerakies">Gerakies</option>
							<option value="Geri">Geri</option>
							<option value="Gerolakkos">Gerolakkos</option>
							<option value="Geroskipou">Geroskipou</option>
							<option value="Gialousa">Gialousa</option>
							<option value="Giolou">Giolou</option>
							<option value="Idalium">Idalium</option>
							<option value="Inia">Inia</option>
							<option value="Kaimakli">Kaimakli</option>
							<option value="Kakopetria">Kakopetria</option>
							<option value="Kalavasos">Kalavasos</option>
							<option value="Kalo Chorio">Kalo Chorio</option>
							<option value="Kalopanagiotis">Kalopanagiotis</option>
							<option value="Kampia">Kampia</option>
							<option value="Kampos">Kampos</option>
							<option value="Kantou">Kantou</option>
							<option value="Kapedes">Kapedes</option>
							<option value="Kato Deftera">Kato Deftera</option>
							<option value="Kato Lefkara">Kato Lefkara</option>
							<option value="Kato Zodeia">Kato Zodeia</option>
							<option value="Kellia">Kellia</option>
							<option value="Kelokedara">Kelokedara</option>
							<option value="Kissonerga">Kissonerga</option>
							<option value="Kiti">Kiti</option>
							<option value="Kofinou">Kofinou</option>
							<option value="Koilani">Koilani</option>
							<option value="Kokkina">Kokkina</option>
							<option value="Kormakitis">Kormakitis</option>
							<option value="Kornokipos">Kornokipos</option>
							<option value="Kornos">Kornos</option>
							<option value="Kouklia">Kouklia</option>
							<option value="Kyperounta">Kyperounta</option>
							<option value="Kythrea">Kythrea</option>
							<option value="Lagoudera">Lagoudera</option>
							<option value="Lambousa">Lambousa</option>
							<option value="Lapithos">Lapithos</option>
							<option value="Latsia">Latsia</option>
							<option value="Lefka">Lefka</option>
							<option value="Lefkoniko">Lefkoniko</option>
							<option value="Leonarisso">Leonarisso</option>
							<option value="Limnitis">Limnitis</option>
							<option value="Louroujina">Louroujina</option>
							<option value="Lythrangomi">Lythrangomi</option>
							<option value="Lythrodontas">Lythrodontas</option>
							<option value="Malounta">Malounta</option>
							<option value="Mammari">Mammari</option>
							<option value="Mandria, Limassol">Mandria, Limassol</option>
							<option value="Mandria, Paphos">Mandria, Paphos</option>
							<option value="Margo">Margo</option>
							<option value="Maroni">Maroni</option>
							<option value="Mathiatis">Mathiatis</option>
							<option value="Melini">Melini</option>
							<option value="Meniko">Meniko</option>
							<option value="Mia Milia">Mia Milia</option>
							<option value="Milia">Milia</option>
							<option value="Miliou">Miliou</option>
							<option value="Morphou">Morphou</option>
							<option value="Moutoullas">Moutoullas</option>
							<option value="Mylikouri">Mylikouri</option>
							<option value="Nata">Nata</option>
							<option value="Oikos">Oikos</option>
							<option value="Omorphita">Omorphita</option>
							<option value="Ormideia">Ormideia</option>
							<option value="Oroklini">Oroklini</option>
							<option value="Orounta">Orounta</option>
							<option value="Pachna">Pachna</option>
							<option value="Palaichori Morphou">Palaichori Morphou</option>
							<option value="Palaichori Oreinis">Palaichori Oreinis</option>
							<option value="Panagia">Panagia</option>
							<option value="Pano Deftera">Pano Deftera</option>
							<option value="Pano Lefkara">Pano Lefkara</option>
							<option value="Pano Zodeia">Pano Zodeia</option>
							<option value="Paralimni">Paralimni</option>
							<option value="Pedoulas">Pedoulas</option>
							<option value="Pegeia">Pegeia</option>
							<option value="Pera Chorio">Pera Chorio</option>
							<option value="Pera Orinis">Pera Orinis</option>
							<option value="Pera Pedi">Pera Pedi</option>
							<option value="Peristerona">Peristerona</option>
							<option value="Peristeronopigi">Peristeronopigi</option>
							<option value="Pissouri">Pissouri</option>
							<option value="Platanistasa">Platanistasa</option>
							<option value="Platres">Platres</option>
							<option value="Polis">Polis</option>
							<option value="Politiko">Politiko</option>
							<option value="Polystypos">Polystypos</option>
							<option value="Pomos">Pomos</option>
							<option value="Potamos tou Kampou">Potamos tou Kampou</option>
							<option value="Protaras">Protaras</option>
							<option value="Psimolofou">Psimolofou</option>
							<option value="Pyla">Pyla</option>
							<option value="Pyrgos">Pyrgos</option>
							<option value="Rizokarpaso">Rizokarpaso</option>
							<option value="Silikou">Silikou</option>
							<option value="Sotira, Famagusta">Sotira, Famagusta</option>
							<option value="Sotira, Limassol">Sotira, Limassol</option>
							<option value="Strovolos">Strovolos</option>
							<option value="Templos">Templos</option>
							<option value="Trikomo">Trikomo</option>
							<option value="Troulloi">Troulloi</option>
							<option value="Tsakistra">Tsakistra</option>
							<option value="Tseri">Tseri</option>
							<option value="Tymbou">Tymbou</option>
							<option value="Varosha">Varosha</option>
							<option value="Vasilikos">Vasilikos</option>
							<option value="Vavla">Vavla</option>
							<option value="Vouni">Vouni</option>
							<option value="Vretsia">Vretsia</option>
							<option value="Vrysoulles">Vrysoulles</option>
							<option value="Xeros">Xeros</option>
							<option value="Xylofagou">Xylofagou</option>
							<option value="Xylotymbou">Xylotymbou</option>
							<option value="Yermasogeia">Yermasogeia</option>
							<option value="Zygi">Zygi</option>
				        </select>
				        
					</div>
                </div>
                <div class="form-group">
                  <label class=" control-label" for="selectbasic">Property's Type</label>
                  <div class="">
                    <select id="TYPE" name="TYPE" class="form-control">
                      <option value="Apartment">Apartment</option>
                      <option value="Building">Building</option>
                      <option value="House">House</option>
                      <option value="Field">Field</option>
                      <option value="Office">Office</option>
                      <option value="Plot">Plot</option>
                      <option value="Warehouse">Warehouse</option>
                      <option value="Store">Store</option>
                    </select>
                  </div>
                </div>

                

              </div>
              <div class="col-sm-4">
              	<div class="form-group">
                  <label class="control-label" for="radios">Subtype of Property</label>
                  <div class="">
                    <label class="radio-inline" for="radios-0">
                      <input name="radios-2" id="radios-0" value="1" checked="checked" type="radio">
                      Residential
                    </label>
                    <label class="radio-inline" for="radios-1">
                      <input name="radios-2" id="radios-1" value="2" type="radio">
                      Commercial
                    </label>
                    <label class="radio-inline" for="radios-2">
                      <input name="radios-2" id="radios-2" value="3" type="radio">
                      Industrial
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label" for="radios">Furnished</label>
                  <div class="">
                    <div class="radio">
                      <label class="radio-inline" for="radios-3" style="padding-right: 10px; ">
                        <input name="radios-3" id="radios-3" type="radio" checked="checked" >
                        Yes
                      </label>
                      <label class="radio-inline" for="radios-4">
                        <input name="radios-3" id="radios-4" value="1" type="radio">
                        No
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label" for="radios">Rooms</label>
                  <div class="section input-group form-group">
                    <span onclick="btnminus()" class="btn-minus input-group-addon" style="cursor: pointer;">-</span>
                    <input value="1" id="m1" type="text" class="m1 form-control" name="m1" style="text-align: center;">
                    <span onclick="btnplus()" class="btn-plus input-group-addon" style="cursor: pointer;">+</span>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label" for="radios">Min Price (€)</label>
                  <div class="section input-group form-group">
                    <span onclick="btnminus2()" class="btn-minus2 input-group-addon" style="cursor: pointer;">-</span>
                    <input value="10" id="m2" type="text" class="m2 form-control" name="m2" placeholder="min price" style="text-align: center;">
                    <span onclick="btnplus2()" class="btn-plus2 input-group-addon" style="cursor: pointer;">+</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label" for="radios">Max Price (€)</label>
                  <div class="section input-group form-group">
                    <span onclick="btnminus3()" class="btn-minus3 input-group-addon" style="cursor: pointer;">-</span>
                    <input value="10" id="m3" type="text" class="m3 form-control" name="m3" placeholder="max price" style="text-align: center;">
                    <span onclick="btnplus3()" class="btn-plus3 input-group-addon" style="cursor: pointer;">+</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class=" control-label" for="selectbasic">Square meters</label>
                  <div class="">
                    <select id="SQUARE_METERS" name="SQUARE_METERS" class="form-control">
                      <option value="1">50  or  less</option>
                      <option value="2">50 - 75</option>
                      <option value="3">75 - 100</option>
                      <option value="4">100 - 125</option>
                      <option value="5">125 - 150</option>
                      <option value="6">150 - 200</option>
                      <option value="7">200+</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label" for="radios">Pool included</label>
                  <div class="">
                    <div class="radio">
                      <label class="radio-inline" for="radios-5">
                        <input name="radios-4" id="radios-5" type="radio" checked="checked" >
                        Yes
                      </label>
                    </div>
                    <div class="radio">
                      <label class="radio-inline" for="radios-6">
                        <input name="radios-4" id="radios-6" type="radio">
                        No
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label" for="radios">Floors</label>
                  <div class="section input-group form-group">
                    <span onclick="btnminus0()" class="btn-minus0 input-group-addon" style="cursor: pointer;">-</span>
                    <input value="1" id="m0" type="text" class="m0 form-control" name="m0" style="text-align: center;">
                    <span onclick="btnplus0()" class="btn-plus0 input-group-addon" style="cursor: pointer;">+</span>
                  </div>
                </div>
                <div class="form-group" style="margin-top: 50px;">
                  <div class="" id="">
                    <ul class="nav " name="" id="" style="width: 100%; text-align: center; border: solid;
                      border-color: #1f2a3c; cursor: pointer;">
                      <li class="" id="" name="" style="width: 100%;"><a class="search" name="search" id="search" style="color: #1f2a3c; font-size: 20px;"><strong>Search</strong></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>

      <br/><br/>
      <div class="container-fluid res" id="res" name="res" style="padding: 0 0;"></div>
      <br/><br/>

      <div id="modal01" class="w3-modal" onclick="this.style.display='none'" style="z-index: 999;">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img id="img01" style="width:100%">
        </div>
      </div>

      <div class="hidden" id="appointment">
        <div class="row col-sm-12" style="font-size: 36px; margin-top: 20px;"><strong>Arrange an appointment with us</strong></div>
        <div class="col-sm-12 row">
          <form id="brform"  method="post" action="BuyRentStore" role="form">
            {{csrf_field()}}
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="form_name" type="text" name="FIRST_NAME" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required."  maxLength="20">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input onkeypress="return inputAlphabet(event)" onkeyup="alphaOnly(this)" id="form_lastname" type="text" name="LAST_NAME" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required." maxLength="20">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_address">Address *</label>
                    <input id="form_address" type="text" name="ADDRESS" class="form-control" placeholder="Please enter your address *" required="required" data-error="Address is required." maxLength="40">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="EMAIL" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required." maxLength="40">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_phone">Telephone *</label>
                    <input id="form_phone" type="text" pattern ="\d*" maxlength ="18" name="TELEPHONE"  class="form-control" placeholder="Please enter your phone*" required oninvalid="setCustomValidity('Please enter your correct phone number ')"
                    onchange="try{setCustomValidity('')}catch(e){}" onkeypress="return isNumberKey(event)" onkeyup="lettersOnly(this)">
                    
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="form_message">Message</label>
                    <textarea id="form_message" name="MESSAGE" class="form-control" placeholder="Message" rows="4" maxLength="300"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-4" style="height:130px;">
                  <div class="form-group">
                    <label for="form_message">Select a date for appointment *</label>
                    <div class='input-group date' id='datetimepicker1' style="width: 100%;">
                      <div class='input-group date' id='datetimepicker1'>
                        <input type='text' required="required" class="form-control" name="DATETIME" />
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <input type="submit" class="btn btn-black" value="Send message" style="font-size: 20px; background: transparent; border-color: white;">
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <br>
                  <small class="text-muted" style="color: white;"><strong>*</strong> These fields are required.</small>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

 <footer class="container-fluid text-center"style="background-color: white;"">
  <div class="row">
    <a href="#myPage" 
       title="To Top" 
       style="background-color: white;">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
  </div>
  <div class="row">
    <a href="PrivacyPolicy"style="background-color: transparent; color: black">Privacy Policy</a><p>
    <a href="TermsAndConditions"style="background-color: transparent; color: black">Terms & Conditions</a>

    <p style="background-color: transparent; color: black">© Copyright 2019. Nicos Orphanou Estates. All Rights Reserved. Sitemap.
    Real Estate Website Design by EPL449 Team 1.</p>
  </div>

</footer>
        
              <script type="text/javascript">
          // Edit a post

        function filter() {
		    var keyword = document.getElementById("searcharea").value;
		    var select = document.getElementById("selectarea");
		    for (var i = 0; i < select.length; i++) {
		        var txt = select.options[i].text;
		        if (txt.substring(0, keyword.length).toLowerCase() !== keyword.toLowerCase() && keyword.trim() !== "") {
		          $(select.options[i]).attr('disabled', 'disabled').hide();
		        } else {
		          $(select.options[i]).removeAttr('disabled').show();
		        }
		    }
		    var elements = document.getElementById("selectarea").options;
			var select = document.getElementById("selectarea");
			select.size = 4;
			if(keyword===""){
				select.size = 1;
			}
		}

		$(document).on('click', '.selectarea', function() {
			var sel= $('#selectarea').children("option:selected").val();
			if(sel!=""){
				var select = document.getElementById("selectarea");
				select.size = 1;
				document.getElementById("searcharea").value = "";
			}
  		});

		


            $(document).on('click', '.search', function() {
                toastr.remove();
                document.getElementById("res").innerHTML = "";
                var PROPERTY_ID= $('#PROPERTY_ID').val();
                var TOWN= $('#TOWN').children("option:selected").val();
                var TYPE= $('#TYPE').children("option:selected").val();
                var AREA= $('#selectarea').children("option:selected").val();
                var MIN_PRICE= $('#m2').val();
                var MAX_PRICE= $('#m3').val();
                var SQUARE_METERS = $('#SQUARE_METERS').children("option:selected").val();
                var FLOORS= $('#m0').val();
                var ROOMS= $('#m1').val();

                var radios = document.getElementsByName('radios-1');
                var length = radios.length;
                for(var i = 0; i < length; i++){
                    if(radios[i].checked){
                        if(i==0){
                            var AVAILABLE_FOR="For Sale";
                        }
                        else if(i==1){
                            var AVAILABLE_FOR="For Rent";
                        }
                    }
                }

                var radios = document.getElementsByName('radios-2');
                var length = radios.length;
                for(var i = 0; i < length; i++){
                    if(radios[i].checked){
                        if(i==0){
                            var SUBTYPE="Residential";
                        }
                        else if(i==1){
                            var SUBTYPE="Commercial";
                        }
                        else if(i==2){
                            var SUBTYPE="Industrial";
                        }
                    }
                }

                var radios = document.getElementsByName('radios-3');
                var length = radios.length;
                for(var i = 0; i < length; i++){
                    if(radios[i].checked){
                        if(i==0){
                            var FURNISHED="Yes";
                        }
                        else if(i==1){
                            var FURNISHED="No";
                        }
                    }
                }

                var radios = document.getElementsByName('radios-4');
                var length = radios.length;
                for(var i = 0; i < length; i++){
                    if(radios[i].checked){
                        if(i==0){
                            var POOL="Yes";
                        }
                        else if(i==1){
                            var POOL="No";
                        }
                    }
                }
                  $.ajaxSetup({
					  headers: {
					    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  }
					});
                $.ajax({
                    type: 'POST',
                    url: 'searchresult',
                    dataType: 'json',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'PROPERTY_ID': PROPERTY_ID,
                        'TOWN': TOWN,
                        'AVAILABLE_FOR': AVAILABLE_FOR,
                        'TYPE': TYPE,
                        'SUBTYPE': SUBTYPE,
                        'AREA': AREA,
                        'MIN_PRICE': MIN_PRICE,
                        'MAX_PRICE': MAX_PRICE,
                        'SQUARE_METERS': SQUARE_METERS,
                        'FLOORS': FLOORS,
                        'ROOMS': ROOMS,
                        'FURNISHED': FURNISHED,
                        'POOL': POOL,
                    },
                    success: function(data) {
                        event.preventDefault();
                   	
                      if(Object.keys(data).length==0){
                        $( ".res" ).append("<div class='container-fluid' style='color: white;'><h1>Properties not found.</h1></div>");
                      }
                      else if(data=="Min Price field must contains an integer value"){
                            alert("Search failed! Min Price field must contain an integer value.");
                            return false;
                        }
                        else if(data=="Max Price field must contains an integer value"){
                            alert("Search failed! Max Price field must contain an integer value.");
                            return false;
                        }
                        else if(data=="Min Price value must be greater than 10 Euros"){
                            alert("Search failed! Min Price value must be greater than 10 Euros.");
                            return false;
                        }
                        else if(data=="Max Price value must be greater than 10 Euros"){
                            alert("Search failed! Min Price value must be greater than 10 Euros.");
                            return false;
                        }
                      else{
                      $( ".res" ).append("<br/><div class='container-fluid'><h1>Results</h1></div><hr>");
                    	for(var i=0; i < Object.keys(data).length; i++){
                        	$( ".res" ).append( "<div class='container-fluid'><h1><strong>Property Code:</strong> <i>"+data[i].PROPERTY_ID+"</i></h1><div class='col-sm-6 carousel slide' id='myCarousel" + i + "' data-ride='carousel' style='bottom: 10px;'><ol class='carousel-indicators indi" + i +"'></ol><div class='carousel-inner car" + i + "'></div><a class='left carousel-control' href='#myCarousel" + i + "'data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span><span class='sr-only'>Previous</span></a><a class='right carousel-control' href='#myCarousel" + i + "'data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span><span class='sr-only'>Next</span></a></div> "+

                        		"<div class='col-md-3' style='padding: 0 20px; font-size: 20px;'><strong>For:</strong>&nbsp"+data[i].AVAILABLE_FOR+"<br/><strong>Town:</strong>&nbsp"+data[i].TOWN+" <br/><strong>Area:</strong>&nbsp"+data[i].AREA+"<br/><strong>Property's Type:</strong>&nbsp"+data[i].TYPE+ "<br/><strong>Subtype of Property:</strong>&nbsp"+data[i].SUBTYPE+ "<br/><ul class='nav' style='cursor:pointer; width: 100%; text-align: center; border: solid; border-color: #1f2a3c;'><li style='width: 100%;'><a href='#appointment' class='cod' name='cod' onclick='ap1()' value='"+data[i].PROPERTY_ID+"' style='color: #1f2a3c; font-size: 20px;'><strong>Arrange appointment</strong></a></li></ul><br/></div><div class='col-md-3' style='padding: 0 20px; font-size: 20px;'><strong>Furnished:</strong>&nbsp"+data[i].FURNISHED+ "<br/><strong>Rooms:</strong>&nbsp"+data[i].ROOMS+ "<br/><strong>Square meters:</strong>&nbsp"+data[i].SQUARE_METERS+ "<br/><strong>Pool Included:</strong>&nbsp"+data[i].POOL+ "<br/><strong>Floors:</strong>&nbsp"+data[i].FLOORS+ "<br/><strong>Price:</strong>&nbsp"+data[i].PRICE+ "<br/></div><br/></div><br/>");

                        	var h = 0;
                        	var PROPERTY_ID = data[i].PROPERTY_ID ;
                        	$.ajax({
			                    type: 'POST',
			                    url: 'searchresultimg',
			                    dataType: 'json',
			                    data: {
			                        '_token': $('input[name=_token]').val(),
			                        'PROPERTY_ID': PROPERTY_ID,
			                    },
			                    success: function(dataimg) {
			                        event.preventDefault();
			                        
			                        

			                    	for(j=0; j < Object.keys(dataimg).length; j++){
			                    		if(j==0)
			                        		$( ".indi" + h ).append( "<li data-target='#myCarousel" + h + "' data-slide-to='"+ j +"' class='active'></li>");
			                        	else
			                        		$( ".indi" + h ).append( "<li data-target='#myCarousel" + h + "' data-slide-to='"+ j +"'></li>");

			                        }

			                        for(j=0; j < Object.keys(dataimg).length; j++){
			                    		if(j==0)
			                        		$( ".car" + h ).append( "<div class='item active'><img src='"+ dataimg[j].image +"' onclick='onClick(this)' height='100%' width='100%'><div class='carousel-caption'></div></div>");
			                        	else
			                        		$( ".car" + h ).append( "<div class='item'><img src='"+ dataimg[j].image +"' onclick='onClick(this)' height='100%' width='100%'><div class='carousel-caption'></div></div>");

			                        }
			                        h++;
			                    },
			                    error: function(req, textStatus, errorThrown) {
			                        alert('Ooops, something happened: ' + textStatus + ' ' +errorThrown);
			                    }
		                	 });
                    	}

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
                              "hideDuration": "500",
                              "timeOut": "2500",
                              "extendedTimeOut": "0",
                              "showEasing": "swing",
                              "hideEasing": "linear",
                              "showMethod": "fadeIn",
                              "hideMethod": "fadeOut",
                              "limit": "1"
                            }          
                        toastr.success('Results found!', 'Success');
                      }
                    },
                    error: function(req, textStatus, errorThrown) {
                        console.log("fail  "+ $("#ID2").val());
                        alert('Ooops, something happened: ' + textStatus + ' ' +errorThrown);
                    }
                });
            });
      
      </script>



      <script type="text/javascript">
      
      function display(element){
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "none";
      }

      function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
      }

      $(".search").click(function() {
            $('html,body').animate({
                scrollTop: $(".res").offset().top},
                '1000');
        });

      </script>


      <script  type="text/javascript">
      $('#datetimepicker1').datetimepicker({
      format:'YYYY-MM-DD HH:mm:ss'
      });
        function ap1() {
      var element = document.getElementById("appointment");
      element.classList.remove("hidden");
      }
      function ser() {
      var element = document.getElementById("appointment");
      element.classList.add("hidden");
      }
  
            function btnminus0(){
              var now = $(".m0").val();
          if ($.isNumeric(now)){
          if (parseInt(now) -1 > 0){ now--;}
          $(".m0").val(now);
          }else{
          $(".m0").val("1");
          }
            }
            function btnplus0(){
              var now = $(".m0").val();
          if ($.isNumeric(now)){
          $(".m0").val(parseInt(now)+1);
          }else{
          $(".m0").val("1");
          }
            }
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
          $(document).ready(function(){
            
          // Add smooth scrolling to all links in navbar + footer link
          $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
          // Store hash
          var hash = this.hash;
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
          scrollTop: $(hash).offset().top
          }, 900, function(){
          
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
          });
          } // End if
          });
          
          $(window).scroll(function() {
          $(".slideanim").each(function(){
          var pos = $(this).offset().top;
          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
          $(this).addClass("slide");
          }
          });
          });
          })

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