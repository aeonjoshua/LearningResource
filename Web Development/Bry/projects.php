<?php
  include_once "sqlconn.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


      <link href ="../assets/css/bootstrap.min.css"  rel="stylesheet"; >
      <link href ="../assets/css/main.css"  rel="stylesheet";  >


    <!-- Bootstrap CSS -->
  <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../main.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
   <div class="navbar-header">
     <a class="navbar-brand" href="#">Learning Resource Platform</a>
   </div>

  </div>
</nav>

    <?php

    $sqlselect = "SELECT document FROM projects ORDER BY index_1  DESC LIMIT 2;";
    $recentupload = mysqli_query($conn, $sqlselect);
    $x;
    $y=0;
    while ($row = mysqli_fetch_assoc($recentupload)) {
    $x[$y]=$row['document'];
    $y++;
}
    //SELECT * FROM projects ORDER BY project_id  DESC LIMIT 1(ibabawas),1(lalabas)
    //$disp = mysqli_fetch_row($recentupload);
    ?>

    <div style="text-align:center; margin-top:15px;">
      <p><strong>Recent uploads</strong></p>
      <object data="<?= $x[0];?>" type="application/pdf" width="400" height="600">
        alt : <a href="projects/lorem_ipsum.pdf">not found</a>
      </object>
      <object data="<?= $x[1];?>" type="application/pdf" width="400" height="600">
        alt : <a href="projects/lorem_ipsum.pdf">not found</a>
      </object>
    </div>

  </body>
</html>
