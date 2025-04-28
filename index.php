<?php include 'header.php'; 
$qrynotice = "SELECT * FROM notices ";
include 'admin/dbconnection.php';
$resultnotice = mysqli_query($conn,$qrynotice);
include 'admin/closeconnection.php';
?>
    <div class="px-20 py-10">

        <div class="flex mb-8 items-center">
            <p class="bg-red-400 text-white px-10 py-4 ">Notice</p>
            <marquee behavior="" direction="" scrollamount="10" class="bg-gray-100 font-semibold py-4"><?php while ($rownotice = mysqli_fetch_assoc($resultnotice)) {
                echo $rownotice['notice'];
                echo " | ";
            } ?></marquee>
            
        </div>

        <h1 class="text-2xl font-bold border-l-4 pl-2 border-blue-600">Latest News</h1>

        <div class="grid grid-cols-4 gap-4 mt-4">
            <div class="shadow-md rounded-lg hover:shadow-lg transition duration-300 cursor-pointer hover:-translate-y-1">
                <img src="https://picsum.photos/200/300" alt="" class="rounded-lg h-52 w-full object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Title1</h2>
                    <div class="text-justify text-sm mt-2">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, doloremque.
                    </div>
                </div>
            </div>

            <div class="shadow-md rounded-lg hover:shadow-lg transition duration-300 cursor-pointer hover:-translate-y-1">
                <img src="https://picsum.photos/200/300" alt="" class="rounded-lg h-52 w-full object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Title1</h2>
                    <div class="text-justify text-sm mt-2">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, doloremque.
                    </div>
                </div>
            </div>

            <div class="shadow-md rounded-lg hover:shadow-lg transition duration-300 cursor-pointer hover:-translate-y-1">
                <img src="https://picsum.photos/200/300" alt="" class="rounded-lg h-52 w-full object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Title1</h2>
                    <div class="text-justify text-sm mt-2">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, doloremque.
                    </div>
                </div>
            </div>

            <div class="shadow-md rounded-lg hover:shadow-lg transition duration-300 cursor-pointer hover:-translate-y-1">
                <img src="https://picsum.photos/200/300" alt="" class="rounded-lg h-52 w-full object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Title1</h2>
                    <div class="text-justify text-sm mt-2">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, doloremque.
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php include 'footer.php'; ?>