<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Xuly login</title>
</head>
<body>
<?php
include('connect.php');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from user";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
	if($row['username'] == $username & $row['password'] == $password & $row['role'] = 1){
		header('location: http://localhost/hexashop-1.0%20(1)%20(1).0/admin.html');
		}
	else{
		header('location: http://localhost/hexashop-1.0%20(1)%20(1).0/index.html');
		}	
}
?>
</body>
</html>