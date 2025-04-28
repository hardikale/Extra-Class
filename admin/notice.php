<?php include 'header.php'; 
$qry = "SELECT * FROM notices";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
include 'closeconnection.php';
?>
            <h2 class="text-3xl font-semibold py-4">Notices</h2>
            <hr class="mb-4 h-1 bg-red-600">
       <div class="flex mb-4">
        <a href="createnotice.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md">Add Notices</a>
       </div>
       <table class="w-full">
            <tr class="bg-gray-200">
                <th class="p-2 border border-gray-300">S.N.</th>
                <th class="p-2 border border-gray-300">Notice</th>
                <th class="p-2 border border-gray-300">Action</th>
            </tr>
            <?php
            $i=0;
            while($row = mysqli_fetch_assoc($result)) {
             ?>
            <tr class="text-center">
                <th class="p-2 border"><?php echo ++$i; ?></th>
                <th class="p-2 border"><?php echo $row['notice'] ?></th>
                <th class="p-2 border">
                    <a href="editnotice.php?id=<?php echo $row['id'] ?>" class="bg-stone-700 text-white px-4 py-1.5 rounded-lg">Edit</a>
                    <a href="actionnotice.php?deleteid=<?php echo $row['id']; ?>" class="bg-red-600 text-white px-4 py-1.5 rounded-lg" onclick="return confirm('Are you sure to delete')">Delete</a>
                </th>
            </tr>
       <?php } ?>

       </table>
<?php include 'footer.php'; ?>
