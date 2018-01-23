<?php echo form_open_multipart('Upload/do_upload');?>

<div class="upload-container">
  <div class="row">
    <div class="col-sm-3"></div>
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
