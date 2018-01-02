
<link href ="<?php echo base_url('assets/css/bootstrap.min.css') ?>"  rel="stylesheet");  >
<link href ="<?php echo base_url('assets/css/main.css') ?>"  rel="stylesheet");  >


    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
   <div class="navbar-header">
     <a class="navbar-brand" href="">Learning Resource Platform</a>
   </div>

  </div>
</nav>


    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3  col-md-3 col-lg-3">
            <img src= "<?php echo base_url('assets/images/logo.png'); ?>" alt= "TUP Logo" class="center-block"></img>
          </div>
          <div class="col-xs-12 col-sm-5 col-md-6 col-lg-7">
            <h2>Technological University of The Philippines</h2>
          </div>
    </div>


<hr class="style-one"> </hr>

  <div class="container">
  <div class="row">
      <div class ="col-xs-12 col-sm-5 col-md-5 col-lg-5">

    <div class="maintext">

    <h1> Learning
    <br> Resource
    <br> Platform  </h1>
    </div>
  </div>
    <div class="main">



      <h3>Log In to your Account Using</h3>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-info btn-block ">Google</a>
        </div>
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>

      <form role="form" method="post">

        <?php if(isset($_SESSION['Success'])){ ?>
          <div class ="alert alert-success"> <?php echo $_SESSION ['Success']; ?> </div>
          <?php
        } ?>
          <?php echo validation_errors('<div class ="alert alert-danger">', '</div>'); ?>

        <div class="form-group">
          <label for="inputUsernameEmail">Username or email</label>
          <input type="text" class="form-control" id="username" name="username">

        </div>

        <div class="form-group">
          <a class="pull-right" href="#">Forgot password?</a>
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Remember me </label>
        </div>

          <button name="login" class="btn btn btn-primary">
            Log In
          </button>
      </form>

    </div>

  </div>
</div>
</div>
