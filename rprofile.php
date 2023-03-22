<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['rid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['rid'])){
		$id=$_SESSION['rid'];
		$sql = "SELECT * FROM receivers WHERE id='$id'";
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
			<div class="col-lg-4 col-md-6 col-sm-8 mb-5">
				<div class="card" style="margin-top:-20px; margin-left: -50px; background:#bf473b; padding: 20px; border: 5px solid white; border-radius: 30px; padding-left: 30px; padding-right: 30px; width: 400px;">
					<div class="media justify-content-center mt-1">
						<img src="image/user.png" alt="profile" class="rounded-circle" width="60" height="60">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Name</label>
						<input type="text" name="rname" value="<?php echo $row['rname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Email</label>
						<input type="email" name="remail" value="<?php echo $row['remail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Password</label>
						<input type="text" name="rpassword" value="<?php echo $row['rpassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Phone Number</label>
						<input type="text" name="rphone" value="<?php echo $row['rphone']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver City</label>
						<input type="text" name="rcity" value="<?php echo $row['rcity']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Blood Group</label>
						<select class="form-control mb-3" name="bg" required>
                             <option selected><?php echo $row['rbg']; ?></option>
                             <option>A-</option>
                             <option>A+</option>
                             <option>B-</option>
                             <option>B+</option>
                             <option>AB-</option>
                             <option>AB+</option>
                             <option>O-</option>
                             <option>O+</option>
                        </select>
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