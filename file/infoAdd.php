<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['hid']))
{
	header('location:login.php');
}
else {
	if(isset($_POST['add'])){
		$hid=$_SESSION['hid'];
		$bg=$_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT hid FROM bloodinfo where hid='$hid' && bg='$bg'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'You have already added this blood sample.';
			header( "location:../bloodinfo.php?error=".$error );
}else{





		$res = mysqli_query("select * from donor where bg = '$bg'");
		while ($row = mysqli_fetch_array($res)) 
		{
        $quantity = $row["quantity"];
    	}

    	$res1 = mysqli_query("select * from bloodinfo where hid = '$hid' && bg = '$bg'");
		while ($row1 = mysqli_fetch_array($res1)) 
		{
        $quantity1 = $row["quantity"];
    	}

    	$final_quantity = $quantity + $quantity1;







		$sql = "UPDATE bloodinfo set values 'quantity'='$final_quantity' where  bg='$bg' && hid='$hid'";
		if ($conn->query($sql) === TRUE) {
			$msg = "You have added record successfully.";
			header( "location:../bloodinfo.php?msg=".$msg );
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../bloodinfo.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>