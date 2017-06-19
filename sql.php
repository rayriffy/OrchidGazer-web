<?
  function sql_connect() {
    $conn = mysql_connect('localhost','orchidgazer','riffy007') or die('ERR: Could not connect to sql');
    return $conn;
  }

?>
