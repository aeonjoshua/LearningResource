
<?php defined ('BASEPATH') OR exit ('No direct script access allowed'); ?>


  <div class = "container">


  <?php if(isset($_SESSION['Success'])){ ?>
    <div class ="alert alert-success"> <?php echo $_SESSION ['Success']; ?> </div>
      <?php
    } ?>


    <div class="profile-container">
      <div>
            Hello, <?php echo $_SESSION ['username'];  ?>
      </div>

<br>

    <a href ="<?php echo base_url(); ?>learning/logout"> Logout </a>

    <br> <br>

    <a href ="<?php echo base_url(); ?>upload"> Upload </a>



</div>
<!-- <?php


//foreach ($ms as $projects ) {
// echo '<h6>'.$projects['title'].' '.$projects['course'].'<a href=""><span class="glyphicon glyphicon-plus"></span></a></h6>';
//}
?>
!-->



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



  <div align = "center" id = "container">


      <h1> Search </h1>

      <form class = "form-inline" role = "form" action="<?php echo base_url().'Learning/search_title'; ?> " method= "post">
        <div class = "form-group">
            <input type = "text" class="form-control" name = "search" id = "firstname" placeholder = "Search here.">
        </div>
        <button type ="submit" class = "btn btn-info" name = "submit">Search </button>
      </form> <br/>

      <table style = "width: 978px;" class = "table table-striped">
          <thead style ="background-color: #2aabd2;" >
            <tr>
              <th> Title </th>
              <th> Course </th>
              <th> Date Uploaded </th>
              <th> Actions </th>
            </tr>
          </thead>
      <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
      </tbody>
  </table>


    <table style = "width: 978px;" class = "table table-striped">


    <?php
      foreach ($ms as $projects ) {

       echo '<tr><td>'.$projects['title'].'</td><td>'.$projects['course'].'</td><td>'.$projects['dateuploaded'].'</td>'.'<td><button type ="button" name="View" class = "btn btn-info"> View </button></tr>';
    }

    ?>
  </table>
    </div>
