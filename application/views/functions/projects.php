<p>Projects</p>

<?php
  foreach ($files as $study) {
    echo '<p><strong>'.
    $study['title'].
    '</strong></p><iframe src="'.
    $study['path'].
    '" type="application/pdf" width="400" height="600"</iframe>';
  }
 ?>