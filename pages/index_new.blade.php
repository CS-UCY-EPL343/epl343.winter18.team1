<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  <title>Orphanou Estates</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="_token" content="{{ csrf_token() }}"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<link rel="stylesheet" type="text/css" href="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/css/homepage.css">

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

@include('main')


<div class="jumbotron text-center" style="align-items: center;">
  <h1>Orphanou Nicos Estates</h1>
  <p>We specialize in real estates</p>

</div>
<!-- Container (About Section) -->
<div id="about" class="container-fluid" style="margin-bottom: -40px;">
  <div class="row">
    <div class="col-sm-6 carousel slide" id="myCarousel" data-ride="carousel" style="margin-bottom: 10px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r17.jpg" alt="Los Angeles" style=" width: 100%" onclick="onClick(this)">
          <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
          </div>
        </div>
        <div class="item">
          <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r13.jpg" alt="Chicago" style="width:100%;" onclick="onClick(this)">
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
        
        <div class="item">
          <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r14.jpg" alt="New York" style="width:100%;" onclick="onClick(this)">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
        <div class="item">
          <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r15.jpg" alt="New York" style="width:100%;" onclick="onClick(this)">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
        <div class="item">
          <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r16.jpg" alt="New York" style="width:100%;" onclick="onClick(this)">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
        <div class="item">
          <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r3.jpg" alt="New York" style="width:100%;" onclick="onClick(this)">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
        
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
      
    </div>

    <div id="modal01" class="w3-modal" onclick="this.style.display='none'" style="position: fixed; z-index: 999; padding: 50px;">
      <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
      <div class="w3-modal-content w3-animate-zoom">
        <img id="img01" style="width:100%">
      </div>
    </div>
    
    <div class="col-sm-6 well auth-box">
      <form>
        <fieldset>
          <!-- Form Name -->
          <legend>Quick Search</legend>
          <div class="col-sm-6 form-line text-center">
            <div class="form-group">
              <label class=" control-label" for="checkboxes">Interested for</label>
                  <div class="">
                    <label class="radio-inline" for="radios-8" style="padding-right: 10px;">
                      <input name="radios-1" id="radios-8" type="radio" checked="checked" >
                      Buy
                    </label>
                    <label class="radio-inline" for="radios-9">
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
          </div>
          <div class="col-sm-6 text-center" style="float: right;">
            <div class="form-group">
              <label class="control-label" for="radios">Furnished</label>
                  <div class="">
                    <div class="radio">
                      <label class="radio-inline" for="radios-3">
                        <input name="radios-3" id="radios-3" type="radio" checked="checked" >
                        Yes
                      </label>
                    </div>
                    <div class="radio">
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
                    <input value="10" id="m3" type="text" class="m3 form-control" name="m3" placeholder="min price" style="text-align: center;">
                    <span onclick="btnplus3()" class="btn-plus3 input-group-addon" style="cursor: pointer;">+</span>
              </div>
            </div>
            <div class="form-group center">
              <a class="btn btn-primary search singlebutton" id="singlebutton" style="width: 100%; padding-right: 0px; padding-left: 0px; margin-left: -3px; margin-right: -6px; border-radius: 0px; background-color: #1f2a3c; border-color: #1f2a3c;">Search</a>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>


<div class="container-fluid res" id="res" name="res" style="padding: 0 0;"></div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'" style="z-index: 999;">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8" >
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>The power you need for deal with real estates</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOYALTY</h4>
      <p>Always next to the customer for all his needs</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Accomplished any task</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>We manage and respect the land</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Multiple certifications for our work in our industry</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>We don't let anything to luck</p>
    </div>
  </div>
</div>
<div class="container-fluid text-center" style="padding: 0px 0px; margin-bottom: -30px;"><h2>Best and Latest Offers</h2></div>
<div id="adv_team_4_columns_carousel" class="carousel slide four_shows_one_move team_columns_carousel_wrapper" data-ride="carousel" data-interval="2000" data-pause="hover">
  <!--========= Wrapper for slides =========-->
  <div class="carousel-inner" role="listbox">
    <!--========= 1st slide =========-->
    <div class="item">
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r1.jpg" width="300px" height="320px" alt="slider 01">
        <div class="team_columns_item_caption">
          <h4>Nicosia</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r2.jpg" width="300px" height="320px" alt="slider 02">
        <div class="team_columns_item_caption">
          <h4>Nicosia</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r3.jpg" width="300px" height="320px" alt="slider 02">
        <div class="team_columns_item_caption">
          <h4>Limassol</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r8.jpg" width="300px" height="320px" alt="slider 02">
        <div class="team_columns_item_caption">
          <h4>Nicosia</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
    </div>
    <!--========= 2nd slide =========-->
    <div class="item active">
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r9.jpg" width="300px" height="320px" alt="slider 02">
        <div class="team_columns_item_caption">
          <h4>Nicosia</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r10.jpg" width="300px" height="320px" alt="slider 02">
        <div class="team_columns_item_caption">
          <h4>Limassol</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r11.jpg" width="300px" height="320px" alt="slider 02">
        <div class="team_columns_item_caption">
          <h4>Nicosia</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r17.jpg" width="300px" height="320px" alt="slider 02">
        <div class="team_columns_item_caption">
          <h4>Limassol</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
    </div>
    <!--========= 3rd slide =========-->
    <div class="item">
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r13.jpg" width="300px" height="320px" alt="slider 02">
        <div class="team_columns_item_caption">
          <h4>Limassol</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r14.jpg" width="300px" height="320px" alt="slider 02">
        <div class="team_columns_item_caption">
          <h4>Nicosia</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r15.jpg" width="300px" height="320px" alt="slider 02">
        <div class="team_columns_item_caption">
          <h4>Limassol</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
        <img src="http://cproject.in.cs.ucy.ac.cy/NicosOrphanouEstates/test/public/images/r16.jpg" width="300px" height="320px" alt="slider 02">
        <div class="team_columns_item_caption">
          <h4>Nicosia</h4>
          <hr>
          <h5>CYPRUS</h5>
        </div>
      </div>
    </div>
    
  </div>
  <!--======= Navigation Buttons =========-->
  <!--======= Left Button =========-->
  <a class="left carousel-control team_columns_carousel_control_left adv_left" href="#adv_team_4_columns_carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <!--======= Right Button =========-->
  <a class="right carousel-control team_columns_carousel_control_right adv_right" href="#adv_team_4_columns_carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container-fluid text-center">
  <h2>What our customers say</h2>
  <div id="myCarousel2" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color: #f46336;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"  style="color: #f46336;"></span>
      <span class="sr-only">Next</span>
    </a>
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
    <a href="PrivacyPolicy"style="background-color: white; color: black">Privacy Policy</a><p>
    <a href="TermsAndConditions"style="background-color: white; color: black">Terms & Conditions</a>
    <p>© Copyright 2019. Nicos Orphanou Estates. All Rights Reserved. Sitemap.
    Real Estate Website Design by EPL449 Team 1.</p>
  </div>

</footer>

<script type="text/javascript">

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

  $(document).ready(function(){
    $("#app-navbar-collapse").on("hide.bs.collapse", function(){
    document.getElementsByClassName("navbar-right")[0].style.marginTop = "15px";
  });
  $("#app-navbar-collapse").on("show.bs.collapse", function(){
    document.getElementsByClassName("navbar-right")[0].style.marginTop = "-10px";
  });
   
});

          // Edit a post
          $(".search").click(function() {
            $('html,body').animate({
                scrollTop: $(".res").offset().top},
                '1000');
        });

            $(document).on('click', '.search', function() {
                document.getElementById("res").innerHTML = "";
                var TOWN= $('#TOWN').children("option:selected").val();
                var TYPE= $('#TYPE').children("option:selected").val();
                var AREA= $('#selectarea').children("option:selected").val();
                var MIN_PRICE= $('#m2').val();
                var MAX_PRICE= $('#m3').val();
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
                $.ajax({
                    type: 'POST',
                    url: 'searchresulthome',
                    dataType: 'json',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        // 'PROPERTY_ID': PROPERTY_ID,
                        'TOWN': TOWN,
                        'AVAILABLE_FOR': AVAILABLE_FOR,
                        'TYPE': TYPE,
                        'SUBTYPE': SUBTYPE,
                        'AREA': AREA,
                        'MIN_PRICE': MIN_PRICE,
                        'MAX_PRICE': MAX_PRICE,
                        // 'SQUARE_METERS': SQUARE_METERS,
                        // 'FLOORS': FLOORS,
                        'ROOMS': ROOMS,
                        'FURNISHED': FURNISHED,
                        // 'POOL': POOL,
                    },
                    success: function(data) {
                        event.preventDefault();
                      if(Object.keys(data).length==0){
                        $( ".res" ).append("<hr><br/><div class='container-fluid' style='margin-bottom: 50px; background-color:#e0e0d1; text-align:center;'><h1>Properties not found.</h1></div><hr>");
                        return;
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
                      $( ".res" ).append("<br/><div class='container-fluid' style='padding: 0 40px;'><h1>Results</h1></div><hr>");
                      for(var i=0; i < Object.keys(data).length; i++){
                          $( ".res" ).append( "<div class='container-fluid' style='padding: 0 20px;'><h1 style='padding: 0 20px; margin-bottom: 20px;'><strong>Property Code:</strong> <i>"+data[i].PROPERTY_ID+"</i></h1><div class='col-sm-6 carousel slide' id='myCarousel" + i + "' data-ride='carousel' style='bottom: 10px;'><ol class='carousel-indicators indi" + i +"'></ol><div class='carousel-inner car" + i + "'></div><a class='left carousel-control' href='#myCarousel" + i + "'data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span><span class='sr-only'>Previous</span></a><a class='right carousel-control' href='#myCarousel" + i + "'data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span><span class='sr-only'>Next</span></a></div> "+

                            "<div class='col-md-3' style='padding: 0 20px; font-size: 15px;'><strong>For:</strong>&nbsp"+data[i].AVAILABLE_FOR+"<br/><strong>Town:</strong>&nbsp"+data[i].TOWN+" <br/><strong>Area:</strong>&nbsp"+data[i].AREA+"<br/><strong>Property's Type:</strong>&nbsp"+data[i].TYPE+ "<br/><strong>Subtype of Property:</strong>&nbsp"+data[i].SUBTYPE+ "<br/></div><div class='col-md-3' style='padding: 0 20px; font-size: 15px;'><strong>Furnished:</strong>&nbsp"+data[i].FURNISHED+ "<br/><strong>Rooms:</strong>&nbsp"+data[i].ROOMS + "<br/><strong>Price:</strong>&nbsp"+data[i].PRICE+ "<br/></div><br/></div><br/>");

                          // console.log("Object.keys(dataimg).length arxii =  "+Object.keys(data).length);

                          var h = 0;
                          var PROPERTY_ID = data[i].PROPERTY_ID ;
                          $.ajax({
                          type: 'POST',
                          url: 'searchresultimghome',
                          dataType: 'json',
                          data: {
                              '_token': $('input[name=_token]').val(),
                              'PROPERTY_ID': PROPERTY_ID,
                          },
                          success: function(dataimg) {
                              event.preventDefault();
                              
                              
                              // console.log("Object.keys(dataimg).length arxii =  "+Object.keys(data).length);
                            for(j=0; j < Object.keys(dataimg).length; j++){
                              if(j==0)
                                  $( ".indi" + h ).append( "<li data-target='#myCarousel" + h + "' data-slide-to='"+ j +"' class='active'></li>");
                                else
                                  $( ".indi" + h ).append( "<li data-target='#myCarousel" + h + "' data-slide-to='"+ j +"'></li>");

                              }

                              for(j=0; j < Object.keys(dataimg).length; j++){
                              if(j==0)
                                  $( ".car" + h ).append( "<div class='item active'><img src='"+ dataimg[j].image +"' onclick='onClick(this)' height='600px' width='900px'><div class='carousel-caption'></div></div>");
                                else
                                  $( ".car" + h ).append( "<div class='item'><img src='"+ dataimg[j].image +"' onclick='onClick(this)' height='900px' width='900px'><div class='carousel-caption'></div></div>");

                              }
                              h++;
                          },
                          error: function(req, textStatus, errorThrown) {
                              console.log("fail  ");
                              alert('Ooops, something happened: ' + textStatus + ' ' +errorThrown);
                          }
                       });
                      }

                      }
                    },
                    error: function(req, textStatus, errorThrown) {
                        console.log("fail  big");
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
</script>

<script>
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

  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


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
</script>

</body>
</html>
