<?php
session_start();
$title = "BASC LSMS | Categories";
$cssPath = '../../assets/css/output.css';
$flowbiteJsPath = '../../assets/js/flowbite.min.js';
$iconPath = '../../assets/imgs/lib-logo-no-bg.png';

include '../../partials/__header.php';
include '../../middleware/verifyUser.php';
include '../../components/alerts.php';
include '../../components/addCat.php';
verifyUser();

?>

    <!-- navbar -->
    <?php require '../../components/navbar.php'?>
    
    <!-- sidebar -->
    <?php require '../../components/sidebar.php'?>

    <main class="p-4 md:ml-64 h-auto pt-20 bg-muted dark:bg-gray-900 min-h-screen">
      <div class="w-full p-6 flex flex-col gap-6 text-gray-800 dark:text-gray-200 ">
        <div class="flex w-full items-center justify-between">
          <h1 class=" font-semibold text-xl">Manage Question Categories</h1>
          <button type="button"  data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-white bg-success box-border border border-transparent hover:bg-success-strong focus:ring-4 focus:ring-success-medium shadow-xs font-medium leading-5 rounded-base text-sm px-2 py-1 focus:outline-none cursor-pointer">
           <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z"/>
          </svg>

          </button>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        
    </main>

<?php
require '../../partials/__footer.php';
?>