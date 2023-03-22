<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['hid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['hid'])){
		$id=$_SESSION['hid'];
		$sql = "SELECT * FROM hospitals WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Receiver Profile"; ?>
<?php require 'head.php';?>
<style type="text/css">

.footer{
position: static;
}
.table{
    margin-bottom: 40px;
    border: 2px solid balck;
}
  tr, th, td {
    border: 0.1px solid #040404;
    text-align: center;
}
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #0e0e0e;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #040404;
}
 .card{
    background-color: #bf473b;
  }
  .nav-link:hover{
    background-color: #e7d2b9;
  }
  .form-control:hover{
    border: 3px solid black;
  }
  .btn:hover{
    background-color: green;
  }
  .text-muted {
    color: black !important;
}

</style>
<body style="background-color: #e7d2b9;">
	<?php require 'header.php'; ?>

	<div class="container cont">

		<?php require 'message.php'; ?>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4 col-sm-6 mb-5">
				<div class="card" style="margin-top:-20px; margin-left: -50px; background:#bf473b; padding: 20px; border: 5px solid white; border-radius: 30px; padding-left: 30px; padding-right: 30px; width: 400px;">
					<div class="media justify-content-center mt-1">
						<img src="image/hospital.png" alt="profile" class="rounded-circle" width="70" height="60">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post" style="color: black;">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Name</label>
						<input type="text" name="hname" value="<?php echo $row['hname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital Email</label>
						<input type="email" name="hemail" value="<?php echo $row['hemail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital Password</label>
						<input type="text" name="hpassword" value="<?php echo $row['hpassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital Phone Number</label>
						<input type="text" name="hphone" value="<?php echo $row['hphone']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Hospital City</label>
						<input type="text" name="hcity" value="<?php echo $row['hcity']; ?>" class="form-control mb-3">
						<input type="submit" name="update" class="btn btn-block btn-primary" value="Update">
					   </form>
					</div>
					<a href="index.php" class="text-center" style="color: yellow;">Cancel</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>