<?php
  if (!empty($_POST["accept_tou"])&&!empty($_POST["connect"])){
  echo $_POST["accept_tou"];
  echo "<br>";
  echo $_POST["connect"];
  }else{
  echo "Empty params!";
  }
?>