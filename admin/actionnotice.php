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

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $notice = $_POST['notice'];
    $qry = "UPDATE notices SET notice='$notice' WHERE id=$id";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    if ($result) {
        echo "<script>alert('notice updated successfully');</script>";
        echo "<script>window.location.href='notice.php';</script>";
    } else {
        echo "Failed to update Notcie.";
    }

    include 'closeconnection.php';
}

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $qry = "DELETE FROM notices WHERE id=$id";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    if ($result) {
        echo "<script>alert('notice deleted successfully');</script>";
        echo "<script>window.location.href='notice.php';</script>";
    } else {
        echo "Failed to delete Notcie.";
    }

    include 'closeconnection.php';
}