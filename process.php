<?php

if(empty($_POST['submit']))
{
	echo "Form is not submitted!";
	exit;
}
if(empty($_POST["fullname"]) ||
	empty($_POST["email"]))
	{
		echo "Please fill the form";
		exit;
	}
	
$name = $_POST["fullname"];
$email = $_POST["email"];

mail( '1710manish2000@gmail.com' , 'New form submission' , 
"New form submission: Name: $name, Email: $email"  );

header('Location: thank_you.html');

$conn = new mysqli('localhost','root','','form');
if($conn->connect_error){
	die("connection failed :",$conn->connect_error);
}
?>
