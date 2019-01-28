<?php 
include('config.php');

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$age =$_POST['age'];
	$sports = implode(",",$_POST['sports']);
	$pass1 = $_POST['pass'];
	$pass2 = $_POST['cpass'];

	$query = mysqli_query($conn, "INSERT INTO form1(name, email, dob, gender, age, sports, pass, cpass)VALUES('".$name."', '".$email."', '".$dob."', '".$gender."', '".$age."', '".$sports."', '".$pass1."', '".$pass2."') ");

	if($query) {
		echo "Insert";
	} else {
		echo "Fail";
	}
}

 ?>