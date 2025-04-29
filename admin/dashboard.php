<?php include 'header.php'; 
$qrycat = "SELECT COUNT(id) as total_cat FROM categories";
$qrynotice = "SELECT COUNT(id) as total_notice FROM notices";
include 'dbconnection.php';
$resultcat = mysqli_query($conn, $qrycat);
$resultnotice = mysqli_query($conn, $qrynotice);
$rowcat = mysqli_fetch_assoc($resultcat);
$rownotice = mysqli_fetch_assoc($resultnotice);

?>
            <h2 class="text-3xl font-semibold py-4">Dashboard</h2>
            <hr class="mb-4 h-1 bg-red-600">
        <div class="grid grid-cols-3 gap-5">
            <div class="bg-blue-100 px-4 py-6 rounded-lg shadow-md">
             <h3 class="text-xl">Total News</h3>
             <p class="text-3xl font-semibold text-right">100</p>
            </div>
            <div class="bg-red-100 px-4 py-6 rounded-lg shadow-md">
             <h3 class="text-xl">Total Categories</h3>
             <p class="text-3xl font-semibold text-right"><?php echo $rowcat['total_cat']; ?></p>
            </div>
            <div class="bg-yellow-100 px-4 py-6 rounded-lg shadow-md">
             <h3 class="text-xl">Total Notices</h3>
             <p class="text-3xl font-semibold text-right"><?php echo $rownotice['total_notice']; ?></p>
            </div>
        </div>
<?php include 'footer.php'; ?>