<?
  include ('sql.php');
  sql_connect();
  mysql_select_db('orchid') or die('ERR: DB not found');
  $sql="SELECT * FROM `dat` WHERE 1 ORDER BY `name`";
  $query=mysql_query($sql);
  $count=0;
  while($row=mysql_fetch_array($query))
  {
    $count++;
    $dat[$count][0]=$row[0];
    $dat[$count][1]=$row[1];
    $dat[$count][2]=$row[2];
    $dat[$count][3]=$row[3];
    $dat[$count][4]=$row[4];
    $dat[$count][5]=$row[5];
    $dat[$count][6]=$row[6];
    $dat[$count][7]=$row[7];
  }
  mysql_close();
  $page_num=(int)($count/6);
  if(($count/6)-$page_num!=0)
  {
    $page_num++;
  }
  if(!isset($_REQUEST['p']))
  {
    $crr_page=1;
  }
  else
  {
    $crr_page=$_REQUEST['p'];
  }
  $bak_count=$count;
  $count=$crr_page*6;
  if($crr_page==$page_num)
  {
    $count=$bak_count;
  }
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" lazyload="1">
  <meta name="theme-color" content="#0d47a1">
  <meta name="msapplication-navbutton-color" content="#0d47a1">
  <meta name="apple-mobile-web-app-status-bar-style" content="#0d47a1">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="OrchidGazer" />
  <meta property="og:site_name" content="OrchidGazer"/>
  <meta property="og:description" content="An innovation for orchid lovers" />
  <meta property="og:image" content="https://firebasestorage.googleapis.com/v0/b/riffyorchid.appspot.com/o/OrchidGaz_LO_RESIZE.png?alt=media&token=60136e28-3034-4cc3-b652-e03e9fadbd5e" />
  <title>OrchidGazer</title>
  <link rel="apple-touch-icon-precomposed" href="/img/ico.png" />
  <link rel="stylesheet" href="css/critical.css" lazyload="1">
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" type="image/png" href="img/ico.png">
  <link rel="manifest" href="manifest.json">
  <style>
    .pagination li.active {
      background-color: #039be5 !important;
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
  <!-- FIREBASE OPERATION -->
  <script>
    //var database = firebase.database();
  </script>
  <noscript>
    ERROR: JavaScript disabled! For full functionality of this site it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com/" target="_blank"> instructions how to enable JavaScript in your web browser</a>.
  </noscript>
  <ul id="more_pg_pc" class="dropdown-content">
    <li><a class="blue-text" href="#!">ENGLISH</a></li>
    <li><a class="blue-text" href="#!">THAI</a></li>
  </ul>
  <ul id="more_pg_mo" class="dropdown-content">
    <li><a class="blue-text disabled" href="#!">ENGLISH</a></li>
    <li><a class="blue-text disabled" href="#!">THAI</a></li>
  </ul>
  <?
    if(isset($_COOKIE['uploadst']))
    {
  ?>
  <div class="container">
    <div class="row">
  <?
    if($_COOKIE['uploadst']==700)
    {
  ?>
  <div class="col s12 chip red white-text">
    <center>ERROR: Invaild file! (Only .jpg, .png, .jpeg can be allowed)
    <i class="close material-icons">close</i></center>
  </div>
  <?
    }
    else if($_COOKIE['uploadst']==100)
    {
  ?>
  <div class="col s12 chip green white-text">
    <center>Success ;)
    <i class="close material-icons">close</i></center>
  </div>
  <?
    }
    else if($_COOKIE['uploadst']==701)
    {
  ?>
  <div class="col s12 chip red white-text">
    <center>ERROR: This is not an image
    <i class="close material-icons">close</i></center>
  </div>
  <?
    }
    else if($_COOKIE['uploadst']==702)
    {
  ?>
  <div class="col s12 chip red white-text">
    <center>ERROR: Your file is too large
    <i class="close material-icons">close</i></center>
  </div>
  <?
    }
  ?>
    </div>
  </div>
  <?
    setcookie("uploadst", null, time() - (86400 * 30), "/");
    }
  ?>
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
              <? //<a href="#" class="blue-text">SETTINGS</a> ?>
              <a class="dropdown-button blue-text" data-activates="more_pg_pc">LANGUAGE<i class="material-icons">arrow_drop_down</i></a>
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
              <li class="tab"><a class="active blue-text" href="#gallerypc">GALLERY</a></li>
              <li class="tab"><a class="blue-text" href="#scanpc">SCAN</a></li>
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
                for($i=$crr_page*6-5;$i<=$count;$i++) {
                ?>
                <div class="col l4 s6">
                  <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="<? echo $dat[$i][7]; ?>" alt="<? echo $dat[$i][7]; ?>">
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
              <div class="row">
                <div class="col s12">
                  <ul class="pagination center">
                    <?
                    if($crr_page-1<=0)
                    {
                    ?>
                    <li class="disabled"><a href="#"><i class="material-icons">chevron_left</i></a></li>
                    <?
                    }
                    else
                    {
                    ?>
                    <li class="waves-effect"><a href="/?p=<? echo $crr_page-1; ?>"><i class="material-icons">chevron_left</i></a></li>
                    <?
                    }
                    ?>
                    <?
                    for($j=1;$j<=$page_num;$j++)
                    {
                      if($j==$crr_page)
                      {
                    ?>
                    <li class="active"><a href="#"><? echo $j; ?></a></li>
                    <?
                      }
                      else
                      {
                    ?>
                    <li class="waves-effect"><a href="/?p=<? echo $j; ?>"><? echo $j; ?></a></li>
                    <?
                      }
                    }
                    ?>
                    <?
                    if($crr_page+1>$page_num)
                    {
                    ?>
                    <li class="disabled"><a href="#"><i class="material-icons">chevron_right</i></a></li>
                    <?
                    }
                    else
                    {
                    ?>
                    <li class="waves-effect"><a href="/?p=<? echo $crr_page+1; ?>"><i class="material-icons">chevron_right</i></a></li>
                    <?
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
            <div id="scanpc">
	      <form action="upload.php" method="POST" enctype="multipart/form-data">
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
	    </form>
          </div>
          <? /* <div class="card-action">
            <a href="#" class="blue-text">MORE</a>
          </div> */ ?>
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
              <li>Water your orchids every five to 12 days. Don't let them sit in water.</li>
              <li>Feed orchids monthly with fertilizers containing nitrogen, phosphorous, potassium, and trace elements.</li>
              <li>Plant orchids in smaller pots with drainage holes. Re-pot every 18 to 24 months.</li>
              <li>Cut the spike down to 1⁄2 inch (1.3 centimeters) above the foliage after the blooms fade.</li>
              <li>Keep orchids warm, around 18–30ºC, and ensure good air circulation.</li>
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
                <div class="determinate green" style="width: <? echo $dat[$i][6]; ?>%;"></div>
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
        "<? echo $dat[$i][1]; ?>": '#modal<? echo $dat[$i][0]; ?>'<? if($i!=$count){ echo ","; } ?>
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


<!-- Service Worker -->
<script type="text/javascript">
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/sw.js');
  });
}
</script>

<!-- FIREBASE -->
<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCaboaV5F421YAeNl3dN4WFB60tOXJIJG4",
    authDomain: "riffyorchid.firebaseapp.com",
    databaseURL: "https://riffyorchid.firebaseio.com",
    projectId: "riffyorchid",
    storageBucket: "riffyorchid.appspot.com",
    messagingSenderId: "384484096577"
  };
  firebase.initializeApp(config);
</script>
