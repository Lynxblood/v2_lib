<?php
include '../../config/db.php';
$title = "BASC LSMS | Users";
$cssPath = '../../assets/css/output.css';
$flowbiteJsPath = '../../assets/js/flowbite.min.js';
$iconPath = '../../assets/imgs/lib-logo-no-bg.png';

include '../../partials/__header.php';
include '../../middleware/verifyUser.php';
include '../../components/addUser.php';
// include '../../components/alerts.php';
verifyUser();

?>

    <!-- navbar -->
    <?php require '../../components/navbar.php'?>
    
    <!-- sidebar -->
    <?php require '../../components/sidebar.php'?>

    <main class="pt-20 px-6 pb-6 md:ml-64 h-auto bg-muted dark:bg-gray-900 min-h-screen">
        
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-6 mx-auto max-w-6xl dark:bg-gray-800 rounded-lg">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new admin</h2>

                <?php if(isset($_SESSION['error'])){?>
                        <div class="p-4 bg-red-200 text-red-600 rounded-lg border border-red-600">
                            <h1 class="flex gap-1 items-center">
                                <svg class="w-6 h-6 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z" clip-rule="evenodd"/>
                                </svg>
                                <span><?= $_SESSION['error']?></span>
                            </h1>
                        </div>
                    <?php }unset($_SESSION['error']);?>

                    <?php if(isset($_SESSION['success'])){?>
                        <div class="p-4 bg-green-200 text-green-600 rounded-lg border border-green-600">
                            <h1 class="flex gap-1 items-center">
                                <svg class="w-6 h-6 text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                                </svg>

                                <span><?= $_SESSION['success'] ?></span>
                            </h1>
                        </div>
                    <?php }unset($_SESSION['success']);?>
                <form action="../../api/adminApi.php" method="post">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-2">
                        <div class="sm:col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="John Doe" >
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="example@mail.com" >
                        </div>
                        <div class="w-full">
                            <label for="pass1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="pass1" id="pass1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="**********">
                        </div>
                        <div class="w-full">
                            <label for="pass2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                            <input type="password" name="pass2" id="pass2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="***********">
                        </div>
                       
                    </div>
                    <button type="submit" name="addUser" class="cursor-pointer inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-primary-800">
                        Add User
                    </button>
                </form>
            </div>
            </section>
    </main>


<?php
require '../../partials/__footer.php';
?>