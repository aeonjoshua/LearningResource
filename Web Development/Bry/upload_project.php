


<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

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


    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3  col-md-3 col-lg-3">
            <img src= "" alt= "TUP Logo" class="center-block"></img>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h2>'Upload'</h2> <br>
          </div>
    </div>
  </div>
    <div class = "container3 " >
      <div class ="row ">
    <div class="form-group ">
      <form method="POST" action="./action_file.php" id="upload-btn" style="text-align:center;" enctype="multipart/form-data">
        <input style="width:150%;" class="form-control" type="text" name="projname" placeholder="Project Name" required>
        <br>
        <input style="width:150%;" class="form-control" type="text" name="upldrsname" placeholder="Your Name" required>
        <br>
        <input class="inputstyle" type="file" accept=".doc,.docx,.pdf,.jpg,.png,.jpeg" name="study" required> <br />

        <button type="submit" name="button" class="btn btn btn-primary">
        Upload
        </button>
      </form>
    </div>
  </div>
</div>
</div>
  </body>
</html>
