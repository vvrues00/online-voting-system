<?php
ob_start();
$user='root';
$pass='';
$db='registration';
$data=new mysqli('localhost',$user,$pass,$db) ;
if($data)
{
$name1=  mysqli_real_escape_string($data,$_POST["name"]);
$reg1=  mysqli_real_escape_string($data,$_POST["reg"]);
$email1=  mysqli_real_escape_string($data,$_POST["email"]);
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$branch=$_POST["branch"];

$name=  htmlentities($name1);
$reg=  htmlentities($reg1);
$email=  htmlentities($email1);
$query="insert into details(name,reg_no,ema,branch,gender,dob) values('$name','$reg','$email','$branch','$gender.','$dob')";
$result= mysqli_query($data,$query);
if($result)
{echo '<script>alert("executed");</script>';

}
else
{die("not workng");}

}

$a='http://localhost/resposive/reg.php';
header('location:'.$a);
?>
