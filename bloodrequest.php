<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
    $hid = $_SESSION['hid'];
    $sql = "select bloodrequest.*, receivers.* from bloodrequest, receivers where hid='$hid' && bloodrequest.rid=receivers.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Blood Requests"; ?>
<?php require 'head.php'; ?>
<style>

.footer{
	position: absolute;
	margin-top: 40px;
}
	tr, th, td {
    border: 0.1px solid #040404;
    text-align: center;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #040404;
}
</style>
<body style="background-color: #e7d2b9;">
	<?php require 'header.php'; ?>
	<div class="container cont">

		<?php require 'message.php'; ?>

	<table class="table table-responsive table-striped rounded mb-4">
		<tr><th colspan="10" class="title">Blood requests</th></tr>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>City</th>
			<th>Phone</th>
			<th>Blood Group</th>
			<th>Quantity</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		</tr>

		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">No one has requested yet. </b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo ++$counter;?></td>
			<td><?php echo $row['rname'];?></td>
			<td><?php echo $row['remail'];?></td>
			<td><?php echo $row['rcity'];?></td>
			<td><?php echo $row['rphone'];?></td>
			<td><?php echo $row['bg'];?></td>
			<td><?php echo $row['quantity'];?></td>



        <?php $bg= $row['bg'];?>
        <?php $quantity= $row['quantity'];?>	
        <?php $reqid= $row['reqid'];?>
        <?php $remail= $row['remail'];?>

      <form action="file/accept.php" method="post">
      <input type="hidden" name="hid" value="<?php echo $hid; ?>">
      <input type="hidden" name="bg" value="<?php echo $bg; ?>">
      <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
      <input type="hidden" name="remail" value="<?php echo $remail; ?>">
      <input type="hidden" name="reqid" value="<?php echo $reqid; ?>">




			<td><?php echo 'You have '.$row['status'];?></td>



			<td>
				<?php 
				if($row['status'] == 'Accepted')

					{ 
						?> 
						<a href="" class="btn btn-success disabled">Accepted</a>
						<a href="" class="btn btn-danger disabled">Rejected</a>
						 <?php 
					}

					elseif ($row['status'] == 'Rejected') {
						?> 
						<a href="" class="btn btn-success disabled">Accepted</a>
						<a href="" class="btn btn-danger disabled">Rejected</a>
						 <?php 
					}
			  else
			  	{ 
			  		?>

				<input type="submit" name="accept" class="btn btn-success" value="Accept">
				<a href="file/reject.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-danger">Reject</a>
					<?php 
					} 
					?>
			</td>

			</form>







		</tr>
		<?php } ?>
	</table>
</div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php } ?>