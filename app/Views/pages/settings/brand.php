<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="flex items-center gap-4 border-b-2">
    <h1 class="text-5xl  pb-6">Brand</h1>
    <p class="text-base text-dark-variant relative bottom-2">Settings | Brand</p>
</div>


<!-- form message cell  -->
<?= view_cell('UpdateSuccessCell', 'type=Brand,') ?>
<?= view_cell('CreateSuccessCell', 'type=Brand') ?>
<?= view_cell('FormErrorCell') ?>
<!-- delete message cell  -->
<?= view_cell('DeleteSuccessCell', 'type=Brand') ?>
<div class="mt-24">
    <div class="flex justify-between">
        <div class="flex gap-2 items-center">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_66_172)">
                    <path d="M17.6122 15.5176C19.0646 13.5354 19.7151 11.0779 19.4336 8.63661C19.1521 6.19535 17.9593 3.95041 16.0939 2.35094C14.2285 0.751457 11.8281 -0.0846055 9.37278 0.010014C6.91751 0.104633 4.58849 1.12296 2.85168 2.86125C1.11487 4.59955 0.0983539 6.92963 0.00550469 9.38532C-0.0873446 11.841 0.750318 14.2412 2.35091 16.1057C3.95149 17.9702 6.19697 19.1616 8.63809 19.4414C11.0792 19.7212 13.5359 19.0688 15.5168 17.6148H15.5153C15.5593 17.6748 15.6083 17.7323 15.6623 17.7873L21.4371 23.5629C21.7183 23.8444 22.0999 24.0026 22.4978 24.0028C22.8956 24.0029 23.2773 23.845 23.5587 23.5637C23.8402 23.2824 23.9984 22.9008 23.9985 22.5028C23.9987 22.1049 23.8407 21.7232 23.5595 21.4417L17.7847 15.6661C17.7311 15.6118 17.6734 15.5631 17.6122 15.5176ZM17.9992 9.751C17.9992 10.8345 17.7858 11.9074 17.3712 12.9085C16.9566 13.9095 16.349 14.8191 15.5829 15.5852C14.8169 16.3514 13.9074 16.9592 12.9065 17.3738C11.9056 17.7884 10.8329 18.0019 9.74952 18.0019C8.66615 18.0019 7.5934 17.7884 6.5925 17.3738C5.5916 16.9592 4.68216 16.3514 3.9161 15.5852C3.15005 14.8191 2.54238 13.9095 2.1278 12.9085C1.71321 11.9074 1.49983 10.8345 1.49983 9.751C1.49983 7.56274 2.36899 5.46411 3.9161 3.91677C5.46322 2.36944 7.56156 1.50015 9.74952 1.50015C11.9375 1.50015 14.0358 2.36944 15.5829 3.91677C17.13 5.46411 17.9992 7.56274 17.9992 9.751Z" fill="black" />
                </g>
                <defs>
                    <clipPath id="clip0_66_172">
                        <rect width="24" height="24" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <input class="px-4 py-2 border border-current outline-none rounded-md" type="text" id="search-table" placeholder="Search this table">
        </div>
        <div class="relative group">
            <button type="submit" class="btn !pl-8 create">Create</button>
            <div class="absolute top-1/2 -translate-y-1/2 left-3"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_73_161)">
                        <path d="M8 15C6.14348 15 4.36301 14.2625 3.05025 12.9497C1.7375 11.637 1 9.85652 1 8C1 6.14348 1.7375 4.36301 3.05025 3.05025C4.36301 1.7375 6.14348 1 8 1C9.85652 1 11.637 1.7375 12.9497 3.05025C14.2625 4.36301 15 6.14348 15 8C15 9.85652 14.2625 11.637 12.9497 12.9497C11.637 14.2625 9.85652 15 8 15ZM8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16Z" fill="white" />
                        <path d="M8 4C8.13261 4 8.25979 4.05268 8.35355 4.14645C8.44732 4.24021 8.5 4.36739 8.5 4.5V7.5H11.5C11.6326 7.5 11.7598 7.55268 11.8536 7.64645C11.9473 7.74021 12 7.86739 12 8C12 8.13261 11.9473 8.25979 11.8536 8.35355C11.7598 8.44732 11.6326 8.5 11.5 8.5H8.5V11.5C8.5 11.6326 8.44732 11.7598 8.35355 11.8536C8.25979 11.9473 8.13261 12 8 12C7.86739 12 7.74021 11.9473 7.64645 11.8536C7.55268 11.7598 7.5 11.6326 7.5 11.5V8.5H4.5C4.36739 8.5 4.24021 8.44732 4.14645 8.35355C4.05268 8.25979 4 8.13261 4 8C4 7.86739 4.05268 7.74021 4.14645 7.64645C4.24021 7.55268 4.36739 7.5 4.5 7.5H7.5V4.5C7.5 4.36739 7.55268 4.24021 7.64645 4.14645C7.74021 4.05268 7.86739 4 8 4Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_73_161">
                            <rect width="16" height="16" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
    <div class="relative overflow-x-auto brand-list mt-10 min-h-4">
        <img class="w-12 absolute left-1/2 -translate-x-1/2" src="<?= base_url() ?>icons/loader.gif">
    </div>
</div>

<!-- edit modal  -->
<!-- edit modal  -->
<div id="update" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem) before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] max-h-full update-modal hidden">
    <div class="absolute p-4 w-full max-w-md max-h-full left-1/2 -translate-x-1/2">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Update Brand
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="update" id="update-close-mark">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <?= form_open_multipart('update-brand', ['class' => 'mt-4', 'id' => 'update-brand']) ?>
                <input type="hidden" name="recent_image_src" id="recent_image_src">
                <input type="hidden" name="brand_id" id="brand-id">
                <div class="grid gap-y-2 mt-4">
                    <label for="name">Brand Name</label>
                    <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" id="update-brand-name" name="brand_name">
                </div>
                <div class="grid gap-y-2 mt-4">
                    <label for="name">Brand Description</label>
                    <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text"
                        id="update-brand-description" name="brand_description">
                </div>
                <div class="grid gap-y-2 mt-4">
                    <label for="name">Brand Image</label>
                    <input type="file" name="userfile" size="20" id="update-brand-image">
                </div>
                <button type="submit" class="btn mt-4">Submit</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>


<!-- create modal -->
<div id="create-modal" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem) before:fixed before:inset-0 before:w-full before:h-full before:bg-[rgba(0,0,0,0.5)] max-h-full create-modal hidden">
    <div class="absolute p-4 w-full max-w-md max-h-full left-1/2 -translate-x-1/2">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create Brand
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="create-modal " id="create-close-mark">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <?= form_open_multipart('create-brand', ['class' => 'mt-4', 'id' => 'create-brand']) ?>
                <input type="hidden" name="no_image" value="<?= base_url() ?>images/no-image.png">
                <div class="grid gap-y-2 mt-4">
                    <label for="name">Brand Name</label>
                    <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="brand_name">
                </div>
                <div class="grid gap-y-2 mt-4">
                    <label for="name">Brand Description</label>
                    <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="brand_description">
                </div>
                <div class="grid gap-y-2 mt-4">
                    <label for="name">Brand Image</label>
                    <input type="file" name="userfile" id="create-brand-image" size="20">
                </div>
                <button type="submit" class="btn mt-4">Submit</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<?= view_cell('ModalDeleteCell', 'type=brand') ?>
<script src="<?= base_url() ?>js/settings/brand.js"></script>
<?= $this->endSection() ?>