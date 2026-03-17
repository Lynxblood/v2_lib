<?php
session_start();
$title = "BASC LSMS | Account Settings";
$cssPath = '../../assets/css/output.css';
$flowbiteJsPath = '../../assets/js/flowbite.min.js';
$iconPath = '../../assets/imgs/lib-logo-no-bg.png';


include '../../partials/__header.php';
include '../../middleware/verifyUser.php';
include '../../components/alerts.php';
verifyUser();

?>

    <!-- navbar -->
    <?php require '../../components/navbar.php'?>
    
    <!-- sidebar -->
    <?php require '../../components/sidebar.php'?>

    <main class="p-4 md:ml-64 h-auto pt-20 bg-muted dark:bg-gray-900 min-h-screen">
        <div class="w-full p-6 flex flex-col gap-6 text-gray-800 dark:text-gray-200 ">
            <h1 class=" font-semibold text-xl">Account Settings</h1>
            <div class="max-w-6xl min-h-80 rounded-lg bg-white dark:bg-gray-800 p-6 shadow-md">
                <h1 class="text-gray-800 dark:text-gray-200 text-lg">Profie Information</h1>
                <form action="../../api/adminApi.php" method="post" class="w-full mt-5">
                    <div class="mb-5">
                        <label for="name" class="block mb-2.5 text-sm font-medium">Your name</label>
                        <input type="name" id="name" name="name" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" value="<?= $name ?>" required />
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2.5 text-sm font-medium ">Your email</label>
                        <input type="email" id="email" name="email" class="bg-gray-400 border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" value="<?= $email ?>" disabled/>
                    </div>
                    <button type="submit" name="changeName" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Save Changes</button>
                </form>

            </div>

            <div class="max-w-6xl min-h-80 rounded-lg bg-white dark:bg-gray-800 p-6 shadow-md">
                <h1 class="text-gray-800 dark:text-gray-200 text-lg">Change Password</h1>
                <form action="../../api/adminApi.php" method="post" class="w-full mt-5">
                    <div class="mb-5">
                        <label for="opass" class="block mb-2.5 text-sm font-medium">Old Password</label>
                        <input type="password" id="opass" name="opass" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="**********" />
                    </div>
                    <div class="mb-5">
                        <label for="pass1" class="block mb-2.5 text-sm font-medium">New Password</label>
                        <input type="password" id="pass1" name="pass1" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="**********" />
                    </div>
                    <div class="mb-5">
                        <label for="pass2" class="block mb-2.5 text-sm font-medium">Confirm Password</label>
                        <input type="password" id="pass2" name="pass2" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="**********" />
                    </div>
                    
                    <button type="submit" name="changePass" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Save Changes</button>
                </form>

            </div>
        </div>
      
    </main>


<?php
require '../../partials/__footer.php';
?>