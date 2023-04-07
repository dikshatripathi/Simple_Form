<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$roll=$_POST['roll'];
$dob=$_POST['dob'];

$conn =mysqli_connect("localhost","root","","tryform");

if($conn->connect_error)
{
	die('Connection Failed : '.$conn->connect_error);
}

else{

	$stmt=$conn->prepare("insert into student (fname,lname,roll,dob) values(?,?,?,?)");
	$stmt->bind_param("ssis", $fname,$lname,$roll,$dob);
	$stmt->execute();
	echo "you registered successfully";
	$stmt->close();
	$conn->close();

}

?>