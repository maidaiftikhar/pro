<?php

// echo $_GET['open'];
// echo "<br>";
// echo $_GET['id2'];
if (isset($_GET['open'])) {
    $filename = $_GET['open'];
    header("Content-type: application/pdf");
    header("Content-Length: " . filesize($filename));
    readfile($filename);
  }

?>
