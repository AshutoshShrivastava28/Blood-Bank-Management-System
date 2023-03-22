<?php
session_start();
require 'file/connection.php';

?>

<!DOCTYPE html>
<html>
<?php $title = "Bloodbank | Available Blood Samples"; ?>
<?php require 'head.php'; ?>
<style type="text/css">
    .ml-5,
    .mx-5 {
        margin-left: 7rem !important;
    }

    .table {
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 40px;
        border: 2px solid balck;
    }

    .mydiv {
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-left: 150px;
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
        border-top: 1px solid #040404;
    }

    @media screen and (max-width: 600px) {
        .mydiv {
            margin-left: 0;
        }
    }
</style>

<body style="background-color: #e7d2b9; margin-right:0px;">
    <?php require 'header.php'; ?>
    <div class="container cont">

        <?php require 'message.php'; ?>

        <div class="row col-lg-12 mb-5 justify-content-center">
            <form method="get" action="" style="margin-top:-20px; background:#bf473b; padding: 20px; border: 5px solid white; border-radius: 30px; padding-left: 30px; padding-right: 30px;">
                <label class="font-weight-bolder mb-2" style="font-size: 20px;">Select Blood Group:</label>
                <select name="search" class="form-control">
                    <option><?php echo @$_GET['search']; ?></option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select><br>

                <label class="mb-2">Enter Quantity: </label>
                <input class="mb-2" width="200" type="int" name="quantity" placeholder="Enter quantity"><br>
                <br>

                <label>Enter Location: </label>
                <input type="text" name="location" placeholder="Hospital Location"><br>
                <br>

                <a href="abs.php" class="btn btn-info mr-4"> Reset</a>
                <input type="submit" name="submit" class="btn btn-info" value="search">
            </form>
        </div>



        <?php
        if (isset($_GET["submit"])) {

            $searchKey = $_GET['search'];
            $sql = "select bloodinfo.*, hospitals.* from bloodinfo, hospitals where bloodinfo.hid=hospitals.id && bg LIKE '%$searchKey%' && quantity>='$_GET[quantity]' && hcity = '$_GET[location]'";
            $result = mysqli_query($conn, $sql);

        ?>

            <div class="mydiv">
                <table class="table table-responsive table-striped rounded">
                    <tr>
                        <th colspan="7" class="title">Available Blood Samples</th>
                    </tr>

                    <tr>
                        <th>#</th>
                        <th>Hospital Name</th>
                        <th>Hospital City</th>
                        <th>Hospital Email</th>
                        <th>Hospital Phone</th>
                        <th>Blood Group</th>
                        <th>Action</th>
                    </tr>

                    <tbody>
                        <?php
                        $count = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            $count = $count + 1;
                        ?>
                            <tr>
                                <th scope="row"><?php echo $count; ?></th>
                                <td><?php echo $row["hname"]; ?></td>
                                <td><?php echo $row["hcity"]; ?></td>
                                <td><?php echo $row["hemail"]; ?></td>
                                <td><?php echo $row["hphone"]; ?></td>
                                <td><?php echo $row["bg"]; ?></td>



                                <?php $bid = $row['bid']; ?>
                                <?php $hid = $row['hid']; ?>
                                <?php $bg = $row['bg']; ?>
                                <?php $quantity = $_GET['quantity']; ?>

                                <form action="file/request.php" method="post">
                                    <input type="hidden" name="bid" value="<?php echo $bid; ?>">
                                    <input type="hidden" name="hid" value="<?php echo $hid; ?>">
                                    <input type="hidden" name="bg" value="<?php echo $bg; ?>">
                                    <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">

                                    <?php if (isset($_SESSION['hid'])) {
                                    ?>
                                        <td><a href="javascript:void(0);" class="btn btn-info hospital">Request Sample</a></td>
                                    <?php } else {
                                        (isset($_SESSION['rid']))  ?>
                                        <td><input type="submit" name="request" class="btn btn-info" value="Request Sample"></td>
                                    <?php } ?>
                                </form>
                            </tr>
                        <?php
                        }

                        ?>



                </table>
            </div>
        <?php
        }
        ?>









    </div>
    <!-- <?php require 'footer.php' ?> -->
</body>

<script type="text/javascript">
    $('.hospital').on('click', function() {
        alert("Hospital user can't request for blood.");
    });
</script>