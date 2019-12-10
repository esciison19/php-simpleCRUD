<?php 
include 'db.php';
include 'header.php';
include 'functions.php';

if(isset($_POST['submit'])){
	updateData();
}

 ?>

 <body>

 	<form method="POST">

		<div class="container">
		Username: <input class="form-control" type="text" name="username"><br>
		Password: <input class="form-control" type="password" name="password"><br>
			<div>

				<select name="id" id="id">
					<?php 
					showData();
					 ?>
					<option value=""></option>
				</select>

			</div>
		<input class="btn btn-primary btn-x1" value="update" type="submit" name="submit">
		</div>

	</form>
 
 </body>
 </html>