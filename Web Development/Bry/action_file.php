<?php

  include_once "sqlconn.php";

  $projectname = $_POST['projname'];
	$uplname = $_POST['upldrsname'];
	//$docu = $_POST['study'];


  $target_dir = "projects/";
  $target_file = $target_dir . basename($_FILES["study"]["name"]);
  $uploadOk = 1;
  $fileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
/*  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["study"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }*/
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "<script> alert('Sorry, file already exists.')</script>";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["study"]["size"] > 15000000) {
      echo "<script> alert('Sorry, your file is too large.')</script>";
      $uploadOk = 0;
  }
  // Allow certain file formats
  //if($fileType != "doc" && $fileType != "docx" && $fileType != "pdf") {
    //  echo "<script> alert('Sorry, only DOC & PDF files are allowed.')</script>";
      //$uploadOk = 0;
//  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "<script>alert('Sorry, your file was not uploaded.');
      window.location.href='./upload_project.php';</script>";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["study"]["tmp_name"], $target_file)) {
          echo "<script>alert('The file ". basename( $_FILES["study"]["name"]). " has been uploaded.');
          window.location.href='projects.php?upload=success';</script>";
          $sql = "INSERT INTO projects (project_name, uploaders_name, document, date_time)
                                VALUES ('$projectname', '$uplname', '$target_file',NOW());";
        	mysqli_query($conn, $sql);
      } else {
          echo "<script>alert('Sorry, there was an error uploading your file.');
          window.location.href='./upload_project.php';</script>";
      }
  }

?>
