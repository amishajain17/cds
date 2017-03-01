<!DOCTYPE html>
<html>
<head>
	<title>mail verification</title>
</head>
<body>


<?php
	$con=mysqli_connect("localhost","root","","cds") or die(mysqli_error());
	// echo "connected";
	$random=rand(1000000,9999999);
	$status=0;
	$sql="INSERT INTO `tbl_users` (	`id` ,`name` ,`pass` ,`email` ,`status` ,`random`) VALUES (NULL ,'".$_POST['user_name']."','".$_POST['password']."','".$_POST['user_email']."',b'".$status."','".$random."')";
	//echo "$sql";
	mysqli_query($con,$sql);

	// if(!empty($_POST['user_email']) && isset($_POST['user_email']) && !empty($_POST['user_name']) && isset($_POST['user_name']) &&  !empty($_POST['password']) &&  isset($_POST['password']) &&  !empty($_POST['confirm_password']) &&  isset($_POST['confirm_password']) )
	// {
	// 	$regex = '/^[A-Za-z-]+( [A-Za-z-]+)$/';
	// 	if(!preg_match($regex, $_POST['user_name']))
	// {
	// 	echo "Incorrect username";
	// }else
	// {
	// $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
	// if(!preg_match($regex, $_POST['user_email']))
	// {
	// 	echo "Incorrect email";
	// }
	// else
	// {
	// if(isset($_POST['user_email']))
	// {

	// $sql="select * from tbl_users where email=".$_POST['user_email'];
	// echo $sql;
	// $row=mysqli_query($con,$sql);
	// $exist=0;
	// if ($row) {	
	// $exist=mysqli_num_rows($row);
	// }
	// if($exist>0)
	// {
	// 	echo "nhp";
	// }
	// else
	// {
	

	// echo $query;
// }
// $con = mysqli_connect('localhost', 'root', '','cds') or die('Could not connect: ' . mysqli_error());
// echo 'Connected successfully';

// $random= rand(1000000,9999999);
// $status='pending';
// echo $random;


// 		 $sqli="INSERT INTO `tbl_users` (
// `id` ,`name` ,`pass` ,`email` ,`status` ,`random`)
// VALUES (NULL ,'".$_POST['user_name']."','".$_POST['password']."','".$_POST['user_email']."','".$status."','".$random."')";
// 		//$sqli="INSERT INTO `tbl_users`(`id`, `name`, `pass`, `email`, `status`,`random`) VALUES ('',".$_POST['user_name'].",".$_POST['password'].",".$_POST['user_email'].",'pending',".$random.")";
// 		echo $sqli;
// 		$query=mysqli_query($con,$sqli) ;//or die(mysqli_error());
// 		echo $query;
// 		echo "insert successfully";
		
// 	}

// 	echo $_POST['user_name'];
// 	echo  $_POST['user_email'];
// 	echo $_POST['password'];
// 	$link="localhost/CDS/verifyemail.php?user_email=".$_POST['user_email']."&key=".$random;
// 	echo $link;

// }
// $email=$_POST['user_email']

require 'C:\wamp64\www\diningware\PHPMailer-master\class.phpmailer.php';
require 'C:\wamp64\www\diningware\PHPMailer-master\PHPMailerAutoload.php';
require 'C:\wamp64\www\diningware\PHPMailer-master\class.smtp.php';


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';


$mail->Username = "cds202350@gmail.com";
$mail->Password = "cdsminor";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "cds202350@gmail.com";
$mail->FromName = "CDS";


$mail->addAddress($_POST['user_email'],"User");

$link="localhost/diningware/verifyemail.php?user_email=".$_POST['user_email']."&key=".$random;
$link2="Hello ".$_POST['user_name']."!!!"."<br />"."click here to verify your email account:";
$link1= "<a href='verifyemail.php'>".$link."</a>";

$mail->Subject = "Testing PHPMailer with localhost";
$mail->Body = $link2.$link1;

if(!$mail->Send())
    echo "Message was not sent"."<br/>"."PHPMailer Error: ".$mail->ErrorInfo;

else{
    echo "<h2>"."Thankyou for registering on CDS!!!"."<br />"."Message has been sent to your email account.Please verify your account."."</h2>";
}
// }
// }
// }
// else{
// 	echo "fill the fields in the form correctly";
// }
?>
</body>
</html>