<p>Individual Project</p>

<?php
  foreach ($showproj as $project) {
    echo '<h2>'.
    $project['title'].
    '</h2><p><small>Uploaded by: </small><a href="#">'.
    $project['uploader'].
    '</a><br><small><i><a href="#">'.
    $project['course'].'</a></i></small> | <small><i>'.
    date('F d, Y (h:i A)', strtotime($project['dateuploaded'])).
    '</i></small></p><div>'.
    '<embed src="'.
    $project['path'].
    '" width="600" height="800"></embed></div>';
  }


?>
