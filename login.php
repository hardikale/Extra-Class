<?php include 'header.php'; ?>

   <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500">
                </div>
                <div class="mb-4"> 
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700" name = "login">Login</button>
            </form>
            <p class="mt-4 text-center text-sm text-gray-600">Don't have an account? <a href="#" class="text-blue-600 hover:underline">Sign up</a></p>
        </div>
</div>   
   <?php include 'footer.php'; ?>

<?php
 if (isset($_POST['login'])){
    header ('location: admin/dashboard.php');
 }
?>