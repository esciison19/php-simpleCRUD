<?php 
include 'db.php';

//add data
function addUser(){
	global $dbconnection;
	$username =	$_POST['username'];
	$password =	$_POST['password'];

	if(isset($_POST['submit']))
	if(trim($username) == "" || trim($password) == "") return "Invalid Username/Password";

	$query = "INSERT INTO users(username,password) VALUES ('$username', '$password')";

	$result = mysqli_query($dbconnection, $query);

	if (!$result){
	return "Failed to create user";}
	else{
		return "Successfully created User";}
								}
// fetch data from database for updating or deleting
function showData(){
	global $dbconnection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($dbconnection,$query);

	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['ID'];
		echo "<option value = '$id'>$id</option>";
	}}
// update the data
function updateData(){

	global $dbconnection;
	$id       = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "UPDATE users SET username = '$username', ";
	$query .= "password = '$password' ";
	$query .= "WHERE id = '$id' ";

	$result = mysqli_query($dbconnection, $query);
	}
// deletion of data
function deleteData(){
	global $dbconnection;

	$id       = $_POST['id'];

	$query = "DELETE FROM users WHERE ID = $id";


	$result = mysqli_query($dbconnection, $query);

	if(!$result){
		die('Query Failed' . mysqli_error($dbconnection));
	}}



 ?>