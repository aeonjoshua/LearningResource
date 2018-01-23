<?php
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "learningplatform";

  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

//insert to table
/*$sql = "INSERT INTO projects (project_name, uploaders_name, document, date_time)
                      VALUES ('$projectname', '$uplname', '$target_file',NOW());";
mysqli_query($conn, $sql);*/

//SELECT * FROM projects ORDER BY project_id  DESC LIMIT 1(ibabawas),1(lalabas)

?>
