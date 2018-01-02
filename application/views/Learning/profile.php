


  <div class = "col-lg-8 col-lg-offset-2">

    <h1> Main Page </h1>



  <?php if(isset($_SESSION['Success'])){ ?>
    <div class ="alert alert-success"> <?php echo $_SESSION ['Success']; ?> </div>
      <?php
    } ?>
    
    Hello, <?php echo $_SESSION ['username'];  ?>

    <br><br>

    <a href ="<?php echo base_url(); ?>Learning/logout"> Logout </a>


</div>
