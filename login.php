<?php
	$con=mysqli_connect("localhost","root","","cds") or die(mysqli_error());

	// $sql="SELECT  FROM `tbl_users` ,`name` ,`pass` ,`email` ,`status` ,`random`)
	// VALUES (NULL ,'".$_POST['user_name']."','".$_POST['password']."','".$_POST['user_email']."','".$status."','".$random."')";
	// $sql="SELECT `id`','' `name`','' `pass`','' `email`',' `status` FROM `tbl_users` WHERE `status`==1 && `email`==$_POST['user_email' && `pass`==$_POST['password']]";
	// echo "$sql";
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql="SELECT `id`, `name`, `pass`, `email`, `status` FROM `tbl_users` WHERE `status`=1 && `email`='".$_POST['user_email']."' && `pass`='".$_POST['password']."'";
$true=0;

$query=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($query)) {
	# code...
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
	$true=1;
        echo "Login Successful"."<br>"."Hello".$row["email"]."<br>";
//     }
// } else {
//     echo "0 results";
// }
}
if($true==0){
echo "Not registered!!!!";
}


	// $query=mysqli_query($con,$sql);
?>