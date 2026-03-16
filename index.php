<?php
$title = "BASC LSMS | Dashboard";
include './partials/__header.php';
?>

    
<section class="bg-white dark:bg-gray-900 px-20">
    <div class="grid min-h-screen px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
             <h1 class=" mb-4 text-4xl font-extrabold tracking-tight  md:text-5xl xl:text-6xl dark:text-white">BASC Library Survey Management System</h1>

            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Empowering data-driven decisions through efficient library feedback and survey management.</p>

            <a href="survey/" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                View Survey
            </a>
            <a href="pages/login.php" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Login
            </a> 
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="assets/imgs/lib-logo-no-bg.png" alt="mockup">
        </div>                
    </div>
</section>

<?php
include './partials/__footer.php';
?>