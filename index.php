<?
  include ('sql.php');
  sql_connect();
  mysql_select_db('orchid') or die('ERR: DB not found');
  $sql="SELECT * FROM `dat` WHERE 1";
  $count=0;
  while($row=mysql_fetch_array(mysql_query($sql)))
  {
    $count++;
    $dat[$i][0]=$row[0];
    $dat[$i][1]=$row[1];
    $dat[$i][2]=$row[2];
    $dat[$i][3]=$row[3];
    $dat[$i][4]=$row[4];
    $dat[$i][5]=$row[5];
    $dat[$i][6]=$row[6];
    $dat[$i][7]=$row[7];
  }
  mysql_close();
?>
<!DOCTYPE html>
<script src="js/jquery.min.js"></script>
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

<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<script type="text/javascript">
  $(window).on('load', function() { // SHOW PRELOAD UNTIL PAGE IS COMPLETELY LOADED
    $('#status').fadeOut();
    $('#preloader').delay(500).fadeOut('slow');
    $('body').delay(350).css({'overflow':'visible'});
  })
</script>

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
              <img src="img/card_img.jpg" alt="splash">
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
                <?
                for($i=1;$i<=$count;$i++) {
                ?>
                <div class="col l4 s6">
                  <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="<? echo $dat[$i][7]; ?>" alt="Doritaenopsis Chain Xen Diamond Celebration">
                    </div>
                    <div class="card-content">
                      <p><i><? echo $dat[$i][1]; ?></i></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Detail<i class="material-icons right">close</i></span>
                      <p class="truncate"><? echo $dat[$i][2]; ?></p>
                      <br /><a href="#modal<? echo $dat[$i][0]; ?>" class="blue-text">MORE</a>
                    </div>
                  </div>
                </div>
                <?
                }
                ?>
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


  <?
  for($i=1;$i<=$count;$i++) {
  ?>
  <div id="modal<? echo $dat[$i][0]; ?>" class="modal">
    <div class="modal-content">
      <div class="row">
        <h4><? echo $dat[$i][1]; ?></h4>
      </div>
      <div class="row">
        <div class="container">
          <div class="col l4 s12">
              <center><img src="<? echo $dat[$i][7]; ?>" class="responsive-img" /></center>
              <blockquote>
                <? echo $dat[$i][3]; ?>
          </div>
          <div class="col l8 s12">
          <div class="row">
            <b>BLOOMING SEASON:</b> <? echo $dat[$i][4]; ?><br /><br />
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
              <b>WATER:</b>
            </div>
            <div class="col s9 l10">
              <div class="progress" style="height: 20px;">
                <div class="determinate green" style="width: <? echo $dat[$i][5]; ?>%;"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s3 l2">
              <b>RANKING:</b>
            </div>
            <div class="col s9 l10">
              <div class="progress" style="height: 20px;">
                <div class="determinate yellow" style="width: <? echo $dat[$i][6]; ?>%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div></div>
    </div>
    <div class="modal-footer">
      <a href="#scanh" class="modal-action modal-close waves-effect waves-light btn-flat">Done</a>
    </div>
  </div>
  <?
  }
  ?>

  <script src="js/materialize.js"></script>
  <? //<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> ?>
</body>
</html>

<!-- JS SETUP -->
<script type="text/javascript">
  $(document).ready(function(){
    var toast = Materialize.toast('Loading...', 3000);
    $('.collapsible').collapsible();
    $('.modal').modal({
      startingTop: '4%',
      endingTop: '10%'
    });
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
        <?
        for($i=1;$i<=$count;$i++) {
        ?>
        "<? echo $dat[$i][1]; ?>": null<? if($i!=$count){ echo ","; } ?>
        <?
        }
        ?>
      },
      limit: 3, // The max amount of results that can be shown at once. Default: Infinity.
      onAutocomplete: function(val) {
        // Callback function when value is autcompleted.
      },
      minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
    });

  });
</script>
