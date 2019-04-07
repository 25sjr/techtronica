<?php

$conn = mysqli_connect('localhost','root','','techtronica');



if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql1 = "SELECT username FROM signup WHERE username='".$username."' AND password='".$password."' ";

$result = mysqli_query($conn, $sql1);

$no_rows= mysqli_num_rows($result);

if($no_rows==0)
{
echo '<script type="text/javascript">'; 
echo 'alert("Your username or password is incorrect");'; 
echo 'window.location.href = "signin_page.html";';
echo '</script>';
}
else 
{
header('Location: main.php?username='.$username);
}
?>