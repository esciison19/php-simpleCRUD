<?php
include 'db.php';
include 'header.php';

$query = "SELECT * FROM users";

$result = mysqli_query($dbconnection, $query);

if(!$result){
	die(mysql_error($dbconnection));
}


  ?>


<body>

	<div class="container">

		<?php 
			while ($row = mysqli_fetch_assoc($result)) {

		?>
		<pre>
		<?php
				print_r($row);
														}
		?>
		</pre>
	</div>

</body>
</html>