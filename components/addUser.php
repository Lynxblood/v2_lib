
<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden absolute top-0 right-0 left-0 z-100 justify-center items-center w-full md:inset-0 min-h-screen">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
            <!-- Modal header -->
            <div class="flex items-center justify-between border-b border-default pb-4 md:pb-5">
                <h3 class="text-lg font-medium text-heading">
                    Sign in to our platform
                </h3>
                <button type="button" class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="../../api/adminApi.php" method="post" class="pt-4 md:pt-6">
                <div class="mb-4">
                    <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Name</label>
                    <input type="name" id="name" name="name" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" />
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Email</label>
                    <input type="email" id="email" name="email" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="example@company.com" />
                </div>
                <div>
                    <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Password</label>
                    <input type="password" id="password" name="password" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="•••••••••" />
                </div>
                <div class="flex items-start my-2">
                    
                </div>
                <button type="submit" name="addUser" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none w-full mb-3">Login to your account</button>
            </form>
        </div>
    </div>
</div> 
