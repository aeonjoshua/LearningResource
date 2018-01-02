
<form method="post" action="<?php echo base_url('Learning/register'); ?>">

  <div class = "col-lg-8 col-lg-offset-2">


    <?php if(isset($_SESSION['Success'])){ ?>
      <div class ="alert alert-success"> <?php echo $_SESSION ['Success']; ?> </div>
      <?php
    } ?>
    <?php echo validation_errors('<div class ="alert alert-danger">', '</div>'); ?>

    <div class="form-group">
        <label for="username" > Username: </label>
        <input class="form-control" type="text" id = "username" name = "username" placeholder="Username">
      </div>

      <div class="form-group">
          <label for="email" > Email: </label>
          <input class="form-control" type="text" id = "email" name = "email" placeholder="email">
        </div>

        <div class="form-group">
            <label for="password" > Password: </label>
            <input class="form-control" type="password" id = "password" name = "password" placeholder="password">
          </div>

          <div class="form-group">
              <label for="password"> Confirm Password: </label>
              <input class="form-control" type="password" id = "password" name = "password2" placeholder="Confirm Password">
            </div>

            <div class = "text-center">
              <button class ="btn btn-primary" name = "register"> Register </button>
            </div>
</form>
