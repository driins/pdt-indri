<!DOCTYPE html>
<html>
  <head>
    <title>Indri-Test</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <form method='POST'>
       <h2>Silahkan Input Nama Anda: </h2>
       <input type="text" name="nama">
       <input type="submit" value="Submit">
    </form>
<?php

$nama =  $_POST['name']
echo "<h3>Hello, $nama</h3>";

?>
  </body>
</html>

