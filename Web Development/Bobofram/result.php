<?PHP
	$conn = mysqli_connect("localhost","root","","learning");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Learnning Resource Platform</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/result.css">

	<script type="text/javascript">
		function active(){
			var sb = document.getElementById('searchBox');
			if (sb.value == 'Search...') {
				sb.value = ''
				sb.placeholder = 'Search...'
			}
		}
		function inactive(){
			var sb = document.getElementById('searchBox');
			if (sb.value == '') {
				sb.placeholder = ''
				sb.value = 'Search...'
			}
		}
	</script>

</head>
<body>
	<div class="container">
		<form action="result.php" method="POST" id="searchForm">
			<p class="title">Learning Resource Platform</p>
			<input type="text" name="searchq" id="searchBox" placeholder="Search..." maxlength="30">
			<input type="submit" id="searchButton" value="Search">
		</form>
	</div>

		<?PHP
		if(!isset($_POST['searchq'])){
			echo '';
		} else {
			$searchq = $_POST['searchq'];
			$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

			$query = mysqli_query($conn, "SELECT * FROM fruits WHERE name LIKE '%$searchq%' OR description LIKE '%$searchq%'");
			$num_rows = mysqli_num_rows($query);
			?>
			<p><strong><?PHP echo $num_rows; ?></strong> results for "<?PHP echo $searchq; ?>"</p>
			<?PHP
			while($row = mysqli_fetch_array($query)){
				$id = $row['id'];
				$name = $row['name'];
				$desc = $row['description'];

				echo '<h3><a href="links/'.$name.'.PHP">' . $name . '</a></h3><p>' . $desc . '</p><br />';
			}
		}
		?>

</body>
</html>
