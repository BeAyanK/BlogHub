<?php  
$host="localhost";
$user="root";
$password="";
$db="Bloghub";

$conn=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['fname']))
{
	$uname=$_POST['fname'];
	$password=$_POST['fpass'];

	$sql="select * from register where inputEmail4='".$uname."'AND inputPassword4='".$password."' limit 1";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)==1){
		echo "you have successfully logged in";
		exit();

	}
	else{
		echo "you have entered incorrect password";
		exit();
	}
}
?>