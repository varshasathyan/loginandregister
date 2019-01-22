<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$gender = filter_input(INPUT_POST, 'gender');
$dob = filter_input(INPUT_POST, 'dob');
$mailid = filter_input(INPUT_POST, 'mailid');
$degree = filter_input(INPUT_POST, 'degree');
$contact = filter_input(INPUT_POST, 'contact');
$city = filter_input(INPUT_POST, 'city');
$password = filter_input(INPUT_POST, 'password');
$confirmpassword = filter_input(INPUT_POST, 'confirmpassword');
$db_name = "loginandregister";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
if (mysqli_connect_error() || $password!=$confirmpassword){
	echo "LOGIN FAILED";
die('Connect Error ('.mysqli_connect_error() .')' . mysqli_connect_error());
}
else
{
$sql = "INSERT INTO register (firstname, lastname, gender, dob, mailid, degree, contact, city, password, confirmpassword) values ('$firstname','$lastname','$gender','$dob','$mailid','$degree','$contact','$city','$password','$confirmpassword');";
if($conn->query($sql))
{
echo "REGISTER SUCCESS";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>