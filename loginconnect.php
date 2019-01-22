<?php
$mailid = filter_input(INPUT_POST, 'mailid');
$password = filter_input(INPUT_POST, 'password');
$db_name = "loginandregister";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
if (mysqli_connect_error()){
	echo "LOGIN FAILED";
die('Connect Error ('.mysqli_connect_error() .')' . mysqli_connect_error());
}
else
{
$sql = "select * from register where mailid='$mailid' AND password='$password';";
if($conn->query($sql))
{
echo "LOGIN SUCCESS";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>