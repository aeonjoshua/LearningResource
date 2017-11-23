<form method="POST" action="<?php echo base_url('Learning/search'); ?>">
<input type="text"  class="form-control" name="search">
<input type="submit" name="submit" class="btn btn-primary"></input>
</form>


<table class="table table-responsive">
<thead>
<tr>
<td>first</td>
<td>middle</td>
<td>last</td>
<tr>
</thead>
<tbody>

<?php
foreach($user as $s){
echo '  <tr>
		<td>'.$s['fname'].'</td>
		<td>'.$s['mname'].'</td>
		<td>'.$s['lname'].'</td>
		<td><a href="'.base_url('Learning/delete/?user='.$s['fname'].'').'">delete</a>
		</tr>';
	}
?>
</tbody>
</table>