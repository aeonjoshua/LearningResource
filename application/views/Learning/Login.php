<form method ="POST" action = "">


    <?php if(isset($_SESSION['Success'])){ ?>
      <div class ="alert alert-success"> <?php echo $_SESSION ['Success']; ?> </div>
      <?php
    } ?>

    <div class="login-container">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
      <div class="form-group">
        <label class="login-text" for="username" > Username: </label>
        <input class="form-control" type="text" id = "username" name = "username" placeholder="Username">
        <?php echo form_error('username','<div class ="alert alert-danger">', '</div>'); ?>
      </div>

      <div class="form-group">
         <label class="login-text" for="password" > Password: </label>
         <input class="form-control" type="password" id = "password" name = "password" placeholder="Password">
         <?php echo form_error('password','<div class ="alert alert-danger">', '</div>'); ?>
      </div>

      <div class = "text-center">
          <button class ="btn btn-primary login-button" name = "login"> Login </button>
      </div>
      </div>
      <div class="col-sm-3"></div>
      </div>
    </div>
  </div>
</form>
