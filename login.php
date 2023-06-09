<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Login"; ?>
<?php require 'head.php'; ?>
<style>
  body{
    background-image: url('image/don.jpg');
    background-repeat: no-repeat;
      background-attachment: fixed;
  background-size: 100% 100%;
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
    color: #040404!important;
}
</style>
<body>
  <?php require 'header.php'; ?>

    <div class="container cont">
      
      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center " style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#hospitals" style="border: 1px solid black; font-weight:bold;text-decoration: none; color: black;">Hospitals</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#receivers" style="border: 1px solid black; font-weight:bold;text-decoration: none; color: black;">Receiver's</a>
     </li>
    </ul>

    <div class="tab-content">
       <div class="tab-pane container active" id="hospitals" style="color: black;">
        <form action="file/hospitalLogin.php" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Email</label>
          <input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Password</label>
          <input type="password" name="hpassword" placeholder="Hospital Password" class="form-control mb-4">
          <input type="submit" name="hlogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
       </div>


      <div class="tab-pane container fade" id="receivers">
         <form action="file/receiverLogin.php" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Email</label>
          <input type="email" name="remail" placeholder="Receiver Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Password</label>
          <input type="password" name="rpassword" placeholder="Receiver Password" class="form-control mb-4">
          <input type="submit" name="rlogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
      </div>

    </div>
    <a href="register.php" class="text-center mb-4" title="Click here" style="color: yellow; text-decoration: underline;">Don't have account?</a>
</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>