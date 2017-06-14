<?
  function sql_connect() {
    $conn = mysql_connect('#','#','#') or die('ERR: Could not connect to sql');
    return $conn;
  }

?>
