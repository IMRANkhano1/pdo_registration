
<?php
$server="localhost";
$uname="root";
$psw="";
$db="phpregis";
try{
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$psw);
$name=$_POST['sname'];
$gender=$_POST['gen'];
$email=$_POST['email'];
$mobile=$_POST['phno'];
$lang=$_POST['lang'];
$city=$_POST['state'];
$detail=$_POST['about'];
$query="INSERT into registration(name,gender,email,phno,language,state,details)values(:nm,:gn,:em,:pn,:lg,:st,:dt)";
$stmt=$con->prepare($query);

if($stmt->execute([":nm"=>$name,":gn"=>$gender,":em"=>$email,":pn"=>$mobile,":lg"=>$lang,":st"=>$city,":dt"=>$detail]))
{
	$id=$con->lastinsertID();
	echo"id number:".$id."-inserted successfully";
}
else
{
	echo"<script>alert(' not inserted ')</script>";
}
}
catch(PDOExceptio $e)
{
	echo $e->getmessage();
}


?>
