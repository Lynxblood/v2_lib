<?php
$title = "BASC LSMS | Survey";
$cssPath = '../assets/css/output.css';
$flowbiteJsPath = '../assets/js/flowbite.min.js';

include '../partials/__header.php';
?>

<main class="h-auto bg-muted dark:bg-gray-900">
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <img class="w-16 h-16 mr-2" src="../assets/imgs/lib-logo-no-bg.png" alt="logo">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                BASC Library Survey    
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-2xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="flex text-md leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        <svg class="w-8 h-8 text-[#00a63e] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
                        </svg>
                        About You
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                         <div>
                            <label for="first_name" class="block mb-2.5 text-sm font-medium text-heading">Full name <span class="text-red-600 font-bold">*</span></label>
                            <input type="text" id="first_name" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="John" required />
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2.5 text-sm font-medium text-heading">Last name</label>
                            <input type="text" id="last_name" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Doe" required />
                        </div>
                        <div>
                            <label for="company" class="block mb-2.5 text-sm font-medium text-heading">Company</label>
                            <input type="text" id="company" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Flowbite" required />
                        </div>
                        <div class="container flex items-center justify-end">
                            <button type="button" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Default</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </section>
</main>

<?php
include '../partials/__footer.php';
?>