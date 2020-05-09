<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $Imie  = htmlspecialchars($_POST['Imie']);

  echo  'Dziękujemy Ci',$Imie,'za zapisanie się na kurs';
?>