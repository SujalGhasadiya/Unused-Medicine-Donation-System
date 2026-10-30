<?php include('../dbconnect.php');

session_start();
if (isset($_SESSION['is_ngologin'])) {
    $ngoEmail = $_SESSION['ngoEmail'];
    // $ngoPassword = $_SESSION['ngoPassword'];
} else {
    echo "<script> location.href='NgoLogin.php'; </script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <?php include('../headerfooter/header.php'); ?>
    <title>Individual Donation List</title>

    <link rel="stylesheet" type="text/css" href="../style.css">
    <style type="text/css">
        .table {
            width: 1290px;
            margin-left: auto;
            margin-right: auto;
        }

        #assignbox {
            height: 600px;
            border-radius: 20px;
            overflow: hidden;
            background: #ecf0f3;
            box-shadow: inset 5px 5px 3px gray,
                inset -5px -5px 3px white;
        }

        .scroll_down {
            margin-left: auto;
            margin-right: auto;

        }
    </style>
    <script>
        function ConfirmDelete() {
            return confirm("Are you sure you want to delete?");
        }
        function Confirmassign(){
        
            return alert('Successfully Assigned To Executive');
         
        }
    </script>
</head>

<body>

    <?php include('NgoNav.php'); ?>

    <?php
    $sql = "SELECT ngo_email,ngo_name,ngo_pass FROM ngologin_tb WHERE ngo_email='" . $ngoEmail . "' limit 1";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            //	echo '<p>Individual Donoations:<b> '.$row['ngo_name'].'</b></p>';
            $n = $row['ngo_name'];
        }
    }
    ?>


    <h3 class="text-center text-secondary mt-5">Individual Donoation Proposals: <b> <?php echo $n ?></b></h3>
    <div class="text-center"><a href="#scroll_down" class="btn btn-warning scroll_down"><i class="fas fa-sort-down"></i>Active Scroll Down</a>
    </div>
    <table class="table table-bordered table-striped mt-5">
        <thead class="text-light bg-success text-center">
            <tr>
                <th>ID</th>
                <th>Donor Name</th>
                <th>Medicine</th>
                <th>Quantity</th>
                <th>Address</th>
                <th>Upzilla</th>
                <th>District</th>
               
                <th>Phone</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="text-center">

            <?php
            $sql = "SELECT ngo_email,ngo_name,ngo_pass FROM ngologin_tb WHERE ngo_email='" . $ngoEmail . "' limit 1";
            $query = mysqli_query($conn, $sql);
            while ($rs = mysqli_fetch_assoc($query)) {
                $ngoname = $rs['ngo_name'];
            }
            $sql = "SELECT count(donorID) AS total FROM individualdonation  ";

            $sql = "SELECT * FROM individualdonation  ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // code...
                    echo '<tr><td>' . $row["donorID"] . '</td><td>';
                    echo $row["donorName"] . '</td><td>';
                    echo $row["medicine"] . '</td><td>';
                    echo $row["quantity"] . '</td><td>';
                    echo $row["address"] . '</td><td>';
                    echo $row["upzilla"] . '</td><td>';
                    echo $row["district"] . '</td><td>';
                   
                    echo $row["phone"] . '</td><td>';
                    echo $row["daate"] . '</td><td>';
                    echo $row["status"] . '</td><td>';



                    echo '<form method="POST" >';
                    echo '<input type="hidden" name="donorID" value=' . $row["donorID"] . '>';
                    echo '<input type="hidden" name="donor" value=' . $row["donorName"] . '>';
                    echo '<input type="hidden" name="medicine" value=' . $row["medicine"] . '>';

                    echo '<input type="hidden" name="quantity" value=' . $row["quantity"] . '>';
                    echo '<input type="hidden" name="address" value=' . $row["address"] . '>';
                    echo '<input type="hidden" name="upzilla" value=' . $row["upzilla"] . '>';
                    echo '<input type="hidden" name="district" value=' . $row["district"] . '>';
                    echo '<input type="hidden" name="phone" value=' . $row["phone"] . '>';


                    echo '<input type="submit" name="view" class="btn btn-success" value="Assign" OnClick="return Confirmassign()"></td><td>';
                    echo '<input type="submit" name="close" class="btn btn-dark ml-2" value="Close" Onclick="return ConfirmDelete()"></input></td></tr>';
                    echo '</form>';
                }
            }
            ?>
        </tbody>
    </table>

    <?php

    if (isset($_REQUEST['view'])) //click view button then show details in assign form 
    {
        // code...
        $sql = "SELECT donorID,donorName,medicine,quantity,address,upzilla,district,phone,daate FROM individualdonation WHERE donorID={$_REQUEST['donorID']}";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();
    }


    //DELETE 

    if (isset($_REQUEST['close'])) {
        $sql = "DELETE FROM individualdonation WHERE donorID = {$_REQUEST['donorID']}";
        if ($conn->query($sql) === TRUE) {
            // echo "Record Deleted Successfully";
            // below code will refresh the page after deleting the record
            echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
        } else {
            echo "Unable to Delete Data";
        }
    }

    if (isset($_REQUEST['assign'])) {
        $sql = "SELECT donorID,donorName,medicine,quantity,address,upzilla,district,phone,daate FROM individualdonation WHERE donorID={$_REQUEST['donorID']}";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();

        $id = $_REQUEST['donorID'];
        $donor = $_REQUEST['donorName'];
        $medicine = $_REQUEST['medicine'];

        $quantity = $_REQUEST['quantity'];
        $address = $_REQUEST['address'];
        $upzilla = $_REQUEST['upzilla'];

        $district = $_REQUEST['district'];
        $executive = $_REQUEST['executive'];
        $phone = $_REQUEST['phone'];
        $date = $_REQUEST['date'];

        //insertion....
        $sql = "INSERT INTO executive_assign_indi(donorID,donor,medicine,quantity,address,upzilla,district,executive,phone,daate) VALUES('$id','$donor','$medicine','$quantity','$address','$upzilla','$district','$executive','$phone','$date')";
        $result = $conn->query($sql);
        if ($result == true) {

    ?>

            <script>
                alert('Successfully Assigned To Executive');
            </script>
        <?php
        } else {
        ?>

            <script>
                alert('Failes to Assign');
            </script>
        <?php
        }
        ?>
        <?php
        $sql = "UPDATE assign_indi SET status = 'Assigned To Executive' WHERE donorID={$_REQUEST['donorID']}";
        $res = $conn->query($sql);
        $sql = "UPDATE individualdonation SET status = 'Assigned To Executive' WHERE donorID={$_REQUEST['donorID']}";
        $res = $conn->query($sql);
        ?>

        <script>
            window.location.href = 'NgoIndividual.php';
        </script>

    <?php

    }
    ?>

    
    </div>
    </div>

    
</body>

</html>