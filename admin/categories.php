<?php include 'header.php'; 
$qry = "SELECT * FROM categories ORDER BY priority ";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
include 'closeconnection.php';
?>
            <h2 class="text-3xl font-semibold py-4">Categories</h2>
            <hr class="mb-4 h-1 bg-red-600">
       <div class="flex mb-4">
        <a href="createcategory.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md">Add Category</a>
       </div>
       <table class="w-full">
            <tr class="bg-gray-200">
                <th class="p-2 border border-gray-300">Order</th>
                <th class="p-2 border border-gray-300">Category Name</th>
                <th class="p-2 border border-gray-300">Action</th>
            </tr>
            <?php
            
            while($row = mysqli_fetch_assoc($result)) {
             ?>
            <tr class="text-center">
                <th class="p-2 border"><?php echo $row['priority'] ?></th>
                <th class="p-2 border"><?php echo $row['name'] ?></th>
                <th class="p-2 border">
                    <a href="editcategory.php?id=<?php echo $row['id'] ?>" class="bg-stone-700 text-white px-4 py-1.5 rounded-lg">Edit</a>
                    <a href="actioncategory.php?deleteid=<?php echo $row['id']; ?>" class="bg-red-600 text-white px-4 py-1.5 rounded-lg" onclick="return confirm('Are you sure to delete')">Delete</a>
                </th>
            </tr>
       <?php } ?>

       </table>
<?php include 'footer.php'; ?>
