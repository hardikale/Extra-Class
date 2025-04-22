
<?php include 'header.php';
$id = $_GET['id'];
$qry= "SELECT * FROM notices WHERE  id=$id";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($result);
include 'closeconnection.php';
?>
            <h2 class="text-3xl font-semibold py-4">Create Notice</h2>
            <hr class="mb-4 h-1 bg-red-600">
            <form action="actionnotice.php" method="POST">
                <input type="text" name="notice" id="notice" class="border border-gray-300 p-2 w-full mb-4 rounded-lg" placeholder="Enter notcie here" value="<?php echo $row['notice'] ?>">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <div class="flex justify-center">
                    <button type="submit" name="update" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md">Update Notices</button>
                    <a href="notice.php" class="bg-red-600 text-white px-4 py-2 rounded-lg shadow-md ml-4">Cancel</a>
                </div>
            </form>
            <?php include 'footer.php'; ?>