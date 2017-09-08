<?
  function sql_connect() {
    $conn = mysql_connect('vps.rayriffy.com','orchidgazer','riffy007') or die('ERR: Could not connect to sql');
    return $conn;
  }

?>
