<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <meta name="theme-color" content="#0d47a1">
  <meta name="msapplication-navbutton-color" content="#0d47a1">
  <meta name="apple-mobile-web-app-status-bar-style" content="#0d47a1">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="OrchidGazer" />
  <meta property="og:site_name" content="OrchidGazer"/>
  <meta property="og:description" content="An innovation for orchid lovers" />
  <meta property="og:image" content="https://testtube.rayriffy.com/torkla_wip/img/OrchidGaz_LO_RESIZE.png" />
  <title>OrchidGazer</title>
  <script src="js/companion.js" data-service-worker="sw.js"></script>
  <link rel="icon" type="image/png" href="img/ico.png">
  <link rel="manifest" href="manifest.json">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }
    main {
      flex: 1 0 auto;
    }
    .riffyfullH {
      height: 100vh !important;
    }
  </style>
  <style>
    body {
    	overflow: hidden;
    }
    #preloader {
    	position: fixed;
    	top:0;
    	left:0;
    	right:0;
    	bottom:0;
    	background-color:#ffffff;
    	z-index:99;
    }

    #status {
    	width:200px;
    	height:200px;
    	position:absolute;
    	left:50%;
    	top:50%;
    	background-image:url(img/loader.gif);
    	background-repeat:no-repeat;
    	background-position:center;
    	margin:-100px 0 0 -100px;
    }
  </style>
</head>
<body>
  <ul id="more_pg_pc" class="dropdown-content">
    <li><a class="blue-text" href="#!">one</a></li>
    <li><a class="blue-text" href="#!">two</a></li>
  </ul>
  <ul id="more_pg_mo" class="dropdown-content">
    <li><a class="blue-text" href="#!">one</a></li>
    <li><a class="blue-text" href="#!">two</a></li>
  </ul>
  <div class="container">
    <div class="row">
      <div class="col l4 s12">
        <div class="row">
          <div class="card">
            <div class="card-image">
              <img src="img/card_img.jpg">
              <span class="card-title">OrchidGazer</span>
            </div>
            <div class="card-content">
              <p>#OrchidGazer</p>
            </div>
            <div class="card-action">
              <a href="#" class="blue-text">SETTINGS</a>
              <a class="dropdown-button blue-text" data-activates="more_pg_pc">MORE<i class="material-icons">arrow_drop_down</i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col l8 s12">
        <div class="card" id="scanh">
          <div class="card-content">
            <span class="card-title">Database</span>
          </div>
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active" href="#gallerypc">GALLERY</a></li>
              <li class="tab"><a href="#scanpc">SCAN</a></li>
            </ul>
          </div>
          <div class="card-content">
            <div id="gallerypc">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">search</i>
                  <input type="text" id="autocomplete-input" class="autocomplete">
                  <label for="autocomplete-input">Search</label>
                </div>
              </div>
              <div class="row">
                <div class="col l4 s6">
                  <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="img/data/1-1.jpg">
                    </div>
                    <div class="card-content">
                      <p><i>Doritaenopsis Chain Xen Diamond Celebration</i></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Detail<i class="material-icons right">close</i></span>
                      <p>These seedlings are some of the newest "Harlequin" type seedlings. Dtps. Chain Xen Diamond 'Celebration' received an FCC from the American Orchid Society and had well shaped flowers with a pink background overlaid with blotches of dark red.</p>
                      <br /><a href="#modal1-1" class="blue-text">MORE</a>
                    </div>
                  </div>
                </div>
                <div class="col l4 s6">
                  <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="img/data/1-2.jpg">
                    </div>
                    <div class="card-content">
                      <p><i>Cattleya labiata</i></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                      <br /><a href="#modal1-2" class="blue-text">MORE</a>
                    </div>
                  </div>
                </div>
                <div class="col l4 s6">
                  <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="img/data/1-3.jpg">
                    </div>
                    <div class="card-content">
                      <p><i>Cattleya Arctic Star 'Snow Queen'</i></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                      <br /><a href="#modal1-3" class="blue-text">MORE</a>
                    </div>
                  </div>
                </div>
                <div class="col l4 s6">
                  <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="img/data/2-1.jpg">
                    </div>
                    <div class="card-content">
                      <p><i>Phalanenopsis lindenii</i></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                      <br /><a href="#modal2-1" class="blue-text">MORE</a>
                    </div>
                  </div>
                </div>
                <div class="col l4 s6">
                  <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="img/data/2-2.jpg">
                    </div>
                    <div class="card-content">
                      <p><i>Oncidium Sweet Sugar</i></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                      <br /><a href="#modal2-2" class="blue-text">MORE</a>
                    </div>
                  </div>
                </div>
                <div class="col l4 s6">
                  <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="img/data/2-3.jpg">
                    </div>
                    <div class="card-content">
                      <p><i>Epidendrum Stamfordianum</i></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                      <p>Here is some more information about this product that is only revealed once clicked on.</p>
                      <br /><a href="#modal2-3" class="blue-text">MORE</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="scanpc">
              <span class="card-title">Upload File</span>
              <div class="file-field input-field">
                <div class="btn waves-effect waves-light blue darken-1">
                <span>File</span>
                <input type="file" name="fileUpload" id="fileUpload">
                </div>
                <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
                </div>
              </div>
              <button class="btn waves-effect waves-light blue col s12" type="submit" value="Upload Image" name="submit">SEND</button>&nbsp;
            </div>
          </div>
          <div class="card-action">
            <a href="#" class="blue-text">MORE</a>
          </div>
        </div>
      </div>
  </div>
  </div>
  <div id="modal1-1" class="modal bottom-sheet">
    <div class="modal-content">
      <div class="row">
        <h4>Doritaenopsis Chain Xen Diamond Celebration</h4>
      </div>
      <div class="row">
        <center><img src="img/modal/1-1.jpg" class="responsive-img" /></center>
      </div>
      <div class="row">
        <b>BLOOMING SEASON:</b> Summer<br /><br />
        <b>HOW TO TAKE CARE IT:</b>
        <ul>
          <li>Step 1</li>
          <li>Step 2</li>
          <li>Step 3</li>
          <li>Step 4</li>
        </ul>
      </div>
      <div class="row">
        <div class="col s3 l2">
          <b>RANKING:</b>
        </div>
        <div class="col s9 l10">
          <div class="progress" style="height: 20px;">
            <div class="determinate green" style="width: 80%;"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s3 l2">
          <b>RANKING:</b>
        </div>
        <div class="col s9 l10">
          <div class="progress" style="height: 20px;">
            <div class="determinate yellow" style="width: 45%;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#scanh" class="modal-action modal-close waves-effect waves-light btn-flat">Done</a>
    </div>
  </div>
  <div id="modal1-2" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Cattleya labiata</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#scanh" class="modal-action modal-close waves-effect waves-light btn-flat">Done</a>
    </div>
  </div>
  <div id="modal1-3" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Cattleya Arctic Star 'Snow Queen'</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#scanh" class="modal-action modal-close waves-effect waves-light btn-flat">Done</a>
    </div>
  </div>
  <div id="modal2-1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Phalanenopsis lindenii</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#scanh" class="modal-action modal-close waves-effect waves-light btn-flat">Done</a>
    </div>
  </div>
  <div id="modal2-2" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Oncidium Sweet Sugar</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#scanh" class="modal-action modal-close waves-effect waves-light btn-flat">Done</a>
    </div>
  </div>
  <div id="modal2-3" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Epidendrum Stamfordianum</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#scanh" class="modal-action modal-close waves-effect waves-light btn-flat">Done</a>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/materialize.js"></script>
  <? //<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> ?>
  <script type="text/javascript">
    $(window).on('load', function() { // SHOW PRELOAD UNTIL PAGE IS COMPLETELY LOADED
      $('#status').fadeOut();
      $('#preloader').delay(500).fadeOut('slow');
      $('body').delay(350).css({'overflow':'visible'});
    })
  </script>
</body>
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
</html>

<!-- JS SETUP -->
<script type="text/javascript">
  $(document).ready(function(){
    var toast = Materialize.toast('Loading...', 3000);
    $('.collapsible').collapsible();
    $('.modal').modal();
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false,
      hover: false,
      belowOrigin: false,
      alignment: "left",
      stopPropagation: false
    });
    $('input.autocomplete').autocomplete({
      data: {
        "Doritaenopsis Chain Xen Diamond Celebration": null,
        "Cattleya labiata": null,
        "Cattleya Arctic Star 'Snow Queen'": null,
        "Dendrobium  secundum": null,
        "Ascocentrum curvifolium": null,
        "Ascocentrum miniatum": null,
        "Rhynchostylis gigantea":null,
        "Rhynchostylis retusa": null,
        "Aerides falcata Lindl.": null,
        "Aerides multiflora Roxb.": null,
        "Phalaenopsis cornucervi (Breda) Bl. & Rchb. f.": null,
        "Bulbophyllum cirrhopetalum picturatum Lodd. ex Lindl.": null,
        "Bulbophyllum patens King ex. Hook. f.": null,
        "Bulbophyllum smitinandii": null,
        "Paphiopedilum niveum": null,
        "Vanda insignis": null
      },
      limit: 3, // The max amount of results that can be shown at once. Default: Infinity.
      onAutocomplete: function(val) {
        // Callback function when value is autcompleted.
      },
      minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
    });

  });
</script>
