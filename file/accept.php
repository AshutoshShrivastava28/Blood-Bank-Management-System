<?php
include "connection.php";

if(isset($_POST['accept']))
{


    $hid = $_POST['hid'];
    $bg = $_POST['bg'];
    $quantity = $_POST['quantity'];
    $reqid=$_POST['reqid'];
    $remail=$_POST['remail'];
    $status = "Accepted";


    $sql = "update bloodrequest SET status = '$status' WHERE reqid = '$reqid'";

   mysqli_query($conn,"UPDATE bloodinfo set quantity =quantity-'$quantity' where bg='$bg' && hid='$hid'");


            $subject = "Blood Bank Acceptance";
            $message = "Your blood request for $bg is accepted";
            $sender = "From: codinggeeks0@gmail.com";
            mail($remail, $subject, $message, $sender);



    if (mysqli_query($conn, $sql)) {
    $msg="You have accepted the request.";
    header("location:../bloodrequest.php?msg=".$msg );
    } else {
    $error= "Error changing status: " . mysqli_error($conn);
    header("location:../bloodrequest.php?error=".$error );
    }
    mysqli_close($conn);
}
?>