<?php

$conn = mysqli_connect('localhost','root','','techtronica');



if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$permanent_address = $_POST['permanent_address'];
$shipping_address = $_POST['shipping_address'];

$sql = "INSERT INTO signup(firstname ,lastname , mobile ,password ,permanent_address ,shipping_address) VALUES('$firstname', '$lastname',
 '$mobile','$password' ,'$permanent_address' ,'$shipping_address')";

if(mysqli_query($conn,$sql))
{
	echo "YOUR ORDER IS PLACED SUCCESSFULLY AT ";
	echo $shipping_address;
	echo ".";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<input type=\"button\" value=\"HOME\" onclick=\"window.location = 'main.html';\" >" ;
}
else
{
	echo mysqli_error($conn);
}

?>
