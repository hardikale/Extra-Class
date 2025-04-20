<?php
if(isset($_POST['store']))
{
    $notice = $_POST['notice'];
    $qry = "INSERT INTO notices (notice) VALUES ('$notice')";
    include 'dbconnection.php';
    $result = mysqli_query($conn,$qry);
    if ($result) {
        echo "<script>alert('notice created successfully');</script>";
        echo "<script>window.location.href='notice.php';</script>";
    } else {
        echo "Failed to create Notcie.";
    }

    include 'closeconnection.php';
}
?>