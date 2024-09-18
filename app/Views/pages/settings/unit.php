<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>

<div class="flex items-center gap-4 border-b-2">
    <h1 class="text-5xl  pb-6 jus">Unit</h1>
    <p class="text-base text-dark-variant relative bottom-2">Settings | Unit</p>
</div>
<!-- form message cell  -->
<?= view_cell('FormSuccessCell', 'type=Unit') ?>
<?= view_cell('FormErrorCell') ?>
<!-- delete message cell  -->
<?= view_cell('DeleteSuccessCell', 'type=Unit') ?>
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
    <div class="relative overflow-x-auto unit-list mt-10 min-h-4">
        <img class="w-12 absolute left-1/2 -translate-x-1/2" src="<?= base_url() ?>icons/loader.gif">
    </div>
</div>
<!-- create modal -->
<div class="create-modal absolute top-10 left-1/2 -translate-x-1/2 z-10 w-2/5 bg-primary shadow-md px-6 py-4 hidden">
    <h2 class="text-2xl">Create</h2>
    <form action="create-unit" id="create-unit" method="post">
        <div class="grid gap-y-2">
            <label for="unit_name">Name</label>
            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="unit_name">
        </div>
        <div class="grid mt-2 gap-y-2">
            <label for="unit_short-name">Short Name</label>
            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="unit_short_name">
        </div>
        <!-- <div class="grid mt-2 gap-y-2">
            <label for="base-unit">Base Unit</label>
            <select class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" name="base-unit" id="">
                <option value="" disabled selected>Choose base unit</option>
                <option value="Hello">Hello</option>
            </select>
        </div> -->
        <button type="submit" class="btn mt-4">Submit</button>
    </form>
</div>
<!-- edit modal  -->
<div class="update-modal absolute top-10 left-1/2 -translate-x-1/2 z-10 w-2/5 bg-primary shadow-md px-6 py-4 hidden">
    <h2 class="text-2xl">Edit Unit</h2>
    <form id="update-modal" method="post">
        <input type="hidden" id="unit-id" name="unit_id">
        <div class="grid gap-y-2">
            <label for="unit_name">Name</label>
            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" id="update-unit-name" type="text" name="unit_name">
        </div>
        <div class="grid mt-2 gap-y-2">
            <label for="unit_short-name">Short Name</label>
            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" id="update-short-name" type="text" name="unit_short_name">
        </div>
        <!-- <div class="grid mt-2 gap-y-2">
            <label for="base-unit">Base Unit</label>
            <select class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" name="base-unit" id="">
                <option value="" disabled selected>Choose base unit</option>
                <option value="Hello">Hello</option>
            </select>
        </div> -->
        <button type="submit" class="btn mt-4">Submit</button>
    </form>
</div>
<!-- delete modal  -->
<?= view_cell('ModalDeleteCell', 'type=unit') ?>

<script src="<?= base_url() ?>js/settings/unit.js"></script>
<?= $this->endSection('content') ?>