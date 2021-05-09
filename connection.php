<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
 $inputFname= $_POST['inputFname'];
 $inputLname= $_POST['inputLname'];
 $inputDate= $_POST['inputDate'];
 $inputTel=$_POST['inputTel'];
 $inputEmail4= $_POST['inputEmail4'];
 $inputPassword4= $_POST['inputPassword4'];
 $inputConfirm4= $_POST['inputConfirm4'];
 $inputAddress= $_POST['inputAddress'];
 $inputAddress2= $_POST['inputAddress2'];
 $inputCity= $_POST['inputCity'];
 $inputState= $_POST['inputState'];
 $inputZip= $_POST['inputZip'];
//DATABASE CONNECTION

$conn=new mysqli('localhost','root','','Bloghub');
if ($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}
else
{
	$stmt= $conn-> prepare("insert into register(inputFname,inputLname,inputDate,inputTel,inputEmail4,inputPassword4,inputConfirm4,inputAddress,inputAddress2,inputCity,inputState,inputZip)
		values(?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssissssssssi",$inputFname,$inputLname,$inputDate,$inputTel,$inputEmail4,$inputPassword4,$inputConfirm4,$inputAddress,$inputAddress2,$inputCity,$inputState,$inputZip);
	if(!$stmt->execute()){trigger_error("there was an error....".$conn->error, E_USER_WARNING);}	

	echo "registration successful..";
	echo $inputFname,$inputLname,$inputDate,$inputTel,$inputEmail4,$inputPassword4,$inputConfirm4,$inputAddress,$inputAddress2,$inputCity,$inputState,$inputZip;
	$stmt->close();
	$conn->close();
}


 ?>