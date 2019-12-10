<?php 
include 'db.php';
include 'header.php';
include 'functions.php';

$valid = false;
$msg = "";
if(isset($_POST['submit'])){
	$msg = addUser();
	if(strlen($msg) > 0){
		$valid = true;
	}else{
		$valid = false;
	}
}
?>


<body>

	<form method="POST">
		<div class="container">
		Username: <input class="form-control" type="text" name="username"><br>
		Password: <input class="form-control" type="password" name="password"><br>

		<?php 
		$typeOfError = "success";
		if($msg == "Invalid Username/Password") {
			$typeOfError = "danger";
		}

		if($valid) echo "<div class='alert alert-$typeOfError'>$msg</div>";
		?>

		<input class="btn btn-primary btn-x1" value="create" type="submit" name="submit">
		</div>
	</form>

</body>
</html>