<?php echo form_open_multipart('Upload/do_upload');?>

<div class="upload-container">

  <div class="row">
    <div class="col-sm-3">   <a href ="<?php echo base_url(); ?>user/profile"> Back to Profile </a> </div>
    <div class="col-sm-6 text-center">
      <input class="upload-project" type="text" name="projtitle" placeholder="Title of the project/study" required>
      <br />
      <br />
      <input class="upload-file" type="file" name="userfile" size="20"  required>
      <br />
      <br />
        <div class="upload-dropdown"><?php
        echo 'Course: ';
        $options = array(
          'BSCS'    => 'BS Computer Science',
          'BSIS'    => 'BS Information Systems',
          'BSIT'    => 'BS Information Technology');

        echo form_dropdown('course', $options, 'BSCS'); ?>
      </div>
      <br />
      <br />
      <input class="btn btn-primary upload-button" type="submit" value="Upload" />
    </div>
    <div class="col-sm-3"></div>


  </div>
</div>


<?php echo form_close(); ?>



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
