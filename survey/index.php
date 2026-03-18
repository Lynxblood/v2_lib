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
                        <svg class="w-6 h-6 text-[#00a63e] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                            <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small select</label>
                            <select id="small" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="likert-scale" class="block mb-2.5 text-sm font-medium text-heading">Overall library satisfaction <span class="text-red-600 font-bold">*</span></label>    
                            <div class="likert-scale flex items-center justify-start gap-3" id="likert-scale">
                                <div>
                                    <input type="radio" name="likertscale" id="option-1" value="" class="hidden peer" required="">
                                    <label for="option-1" class="flex items-center justify-center w-[40px] h-[40px] p-3 text-body text-sm bg-neutral-primary-soft border-1 border-default rounded-md cursor-pointer peer-checked:hover:bg-brand-softer peer-checked:border-brand-subtle peer-checked:bg-brand-softer hover:bg-neutral-secondary-medium peer-checked:text-fg-brand-strong">                           
                                        1
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="likertscale" id="option-2" value="" class="hidden peer" required="">
                                    <label for="option-2" class="flex items-center justify-center w-[40px] h-[40px] p-3 text-body text-sm bg-neutral-primary-soft border-1 border-default rounded-md cursor-pointer peer-checked:hover:bg-brand-softer peer-checked:border-brand-subtle peer-checked:bg-brand-softer hover:bg-neutral-secondary-medium peer-checked:text-fg-brand-strong">                           
                                        2
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="likertscale" id="option-3" value="" class="hidden peer" required="">
                                    <label for="option-3" class="flex items-center justify-center w-[40px] h-[40px] p-3 text-body text-sm bg-neutral-primary-soft border-1 border-default rounded-md cursor-pointer peer-checked:hover:bg-brand-softer peer-checked:border-brand-subtle peer-checked:bg-brand-softer hover:bg-neutral-secondary-medium peer-checked:text-fg-brand-strong">                           
                                        3
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="likertscale" id="option-4" value="" class="hidden peer" required="">
                                    <label for="option-4" class="flex items-center justify-center w-[40px] h-[40px] p-3 text-body text-sm bg-neutral-primary-soft border-1 border-default rounded-md cursor-pointer peer-checked:hover:bg-brand-softer peer-checked:border-brand-subtle peer-checked:bg-brand-softer hover:bg-neutral-secondary-medium peer-checked:text-fg-brand-strong">                           
                                        4
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="likertscale" id="option-5" value="" class="hidden peer" required="">
                                    <label for="option-5" class="flex items-center justify-center w-[40px] h-[40px] p-3 text-body text-sm bg-neutral-primary-soft border-1 border-default rounded-md cursor-pointer peer-checked:hover:bg-brand-softer peer-checked:border-brand-subtle peer-checked:bg-brand-softer hover:bg-neutral-secondary-medium peer-checked:text-fg-brand-strong">                           
                                        5
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
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