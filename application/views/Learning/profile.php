

  <div class = "container">

    <h1> Main Page </h1>



  <?php if(isset($_SESSION['Success'])){ ?>
    <div class ="alert alert-success"> <?php echo $_SESSION ['Success']; ?> </div>
      <?php
    } ?>

    Hello, <?php echo $_SESSION ['username'];  ?>

    <br><br>

    <a href ="<?php echo base_url(); ?>Learning/logout"> Logout </a>

    <br> <br>

    <a href ="<?php echo base_url(); ?>upload"> Upload </a>



</div>
<?php


foreach ($ms as $projects ) {
 echo '<h6>'.$projects['title'].' '.$projects['course'].'<a href=""><span class="glyphicon glyphicon-plus"></span></a></h6>'; 
}
?>





  <div id="sidemenu">

    <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>
  </div>
