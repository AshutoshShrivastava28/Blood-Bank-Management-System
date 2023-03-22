<?php
require 'file/connection.php';
session_start();
if (!isset($_SESSION['hid'])) {
  header('location:login.php');
} else {
?>
  <!DOCTYPE html>
  <html>
  <?php $title = "Bloodbank | Add blood samples"; ?>
  <?php require 'head.php'; ?>
  <style type="text/css">
    .footer {
      position: static;
    }

    .table {
      margin-bottom: 40px;
      border: 2px solid balck;
    }

    tr,
    th,
    td {
      border: 0.1px solid #040404;
      text-align: center;
    }


    .table td,
    .table th {
      padding: .75rem;
      vertical-align: top;
      border-top: 1px solid #0e0e0e;
    }

    .table td,
    .table th {
      padding: .75rem;
      vertical-align: top;
      border-top: 1px solid #040404;
    }

    .card {
      background-color: #bf473b;
    }

    .nav-link:hover {
      background-color: #e7d2b9;
    }

    .in:hover {
      border: 3px solid black;
    }

    .btn:hover {
      background-color: green;
    }

    @media screen and (max-width: 600px) {
      .mydiv {
        margin-left: 40px;
      }
    }
  </style>

  <body style="background-color: #e7d2b9;">
    <?php require 'header.php'; ?>

    <div class="container cont">

      <?php require 'message.php'; ?>

      <div class="row justify-content-center">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7 mb-5">
          <div class="mydiv">
            <div class="card" style="margin-top:-20px; margin-left: -50px; background:#bf473b; padding: 20px; border: 5px solid white; border-radius: 30px; padding-left: 30px; padding-right: 30px; width: 400px;">

              <div class="card-header title">Add blood group available in your hospital</div>
              <div class="card-body">



                <form method="post">

                  <label>Enter Name</label>
                  <input type="text" name="name" class="in form-control" placeholder="Donors Name"><br>

                  <label>Enter Email</label>
                  <input type="text" name="email" class="in form-control" placeholder="Donors Email"><br>

                  <label>Enter Phone No</label>
                  <input type="text" name="phone" class="in form-control" placeholder="Donors Phone No"><br>
                  <label>select blood group</label>
                  <select class="form-control" name="bg" required="">
                    <option disabled selected>Blood Group</option>
                    <option>A-</option>
                    <option>A+</option>
                    <option>B-</option>
                    <option>B+</option>
                    <option>AB-</option>
                    <option>AB+</option>
                    <option>O-</option>
                    <option>O+</option>
                  </select><br>


                  <label>Enter Quantity</label>
                  <input type="int" name="quantity" class="in form-control" placeholder="Quantity"><br>


                  <input type="submit" name="add" value="Add" class="btn btn-primary btn-block"><br>

                  <a href="index.php" class="float-right" title="click here" style="color: yellow;">Cancel</a>
                </form>
              </div>
            </div>
          </div>
        </div>

        <?php
        if (isset($_POST["add"])) {
          $hid = $_SESSION['hid'];


          mysqli_query($conn, "insert into donor (id,name,email,phone,blood_grp,quantity) 
                  values(null,'$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[bg]','$_POST[quantity]')");

          mysqli_query($conn, "UPDATE bloodinfo set quantity ='$_POST[quantity]'+ quantity where bg='$_POST[bg]' && hid='$hid'");
        }

        ?>






        <!-- // Table to show details -->


        <?php
        if (isset($_SESSION['hid'])) {
          $hid = $_SESSION['hid'];
          $sql = "select * from bloodinfo where hid='$hid'";
          $result = mysqli_query($conn, $sql);
        }
        ?>


        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <table class="table table-striped table-responsive" style="padding: 10px;">
            <th colspan="4" class="title">Blood Bank</th>
            <tr>
              <th>#</th>

              <th>Blood Samples</th>
              <th>Quantity Available</th>
            </tr>
            <div>
              <?php
              if ($result) {
                $row = mysqli_num_rows($result);
                if ($row) { //echo "<b> Total ".$row." </b>";
                } else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
              }
              ?>
            </div>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
              <tr>
                <td><?php echo ++$counter; ?></td>

                <td><?php echo $row['bg']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
              </tr>
            <?php } ?>
          </table>
        </div>

      </div>
    </div>
    <?php require 'footer.php' ?>
  </body>
<?php } ?>