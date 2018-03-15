<?
  function sql_connect() {
    $conn = mysql_connect('localhost','orchidgazer','Fj87swkft1') or die('ERR: Could not connect to sql');
    return $conn;
  }

?>
