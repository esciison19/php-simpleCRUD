<?php 
include 'db.php';
include 'header.php';
include 'functions.php';

if(isset($_POST['submit'])){
	deleteData();
}

 ?>
 <body>
 	<form method="POST">
		<div class="container">

			<div>
				<br><br>
				<h6>Choose an ID number of data you want to delete</h6>

				<select name="id" id="id">
					<?php 
					showData();
					 ?>
					<option value=""></option>
				</select>

			</div>
		<input class="btn btn-primary btn-x1" value="delete" type="submit" name="submit">
		</div>

	</form>
 
 </body>
 </html>