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
          
        <div class="w-full p-6 bg-white dark:bg-gray-800  shadow-md rounded-lg">
          <div class="relative overflow-x-auto bg-neutral-primary-soft dark:bg-gray-800 shadow-xs rounded-base border border-default">
              <table class="w-full text-sm text-left rtl:text-right text-body">
                  <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
                      <tr>
                          <th scope="col" class="px-6 py-3 font-medium">
                              Catogory name
                          </th>
                          <th scope="col" class="px-6 py-3 font-medium">
                              Description
                          </th>
                          <th scope="col" class="px-6 py-3 font-medium">
                              Order
                          </th>
                          <th scope="col" class="px-6 py-3 font-medium">
                              Price
                          </th>
                          <th scope="col" class="px-6 py-3 font-medium">
                              <span class="sr-only">Actions</span>Actions
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium">
                          <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
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
                          <td class="px-6 py-4">
                            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                </svg>
                            </button>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>     
       </div>
        
        <!-- Dropdown menu -->
        <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
            </ul>
            <div class="py-2">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated link</a>
            </div>
        </div>
    </main>

<?php
require '../../partials/__footer.php';
?>