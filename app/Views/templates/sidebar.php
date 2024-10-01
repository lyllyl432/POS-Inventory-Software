    <nav class="bg-secondary h-screen overflow-y-scroll  fixed transition-width  ease-out md:w-56 w-20 z-10" id="side-nav">
        <div class="flex items-center justify-between  bg-accent px-4 py-6">
            <img class="max-w-12" id="side-nav-logo" src="<?= base_url() ?>images/logo.png" alt="logo">
            <div id="side-nav-hamburger" class="hidden md:block">
                <svg class="cursor-pointer" width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1.67188H30M0 9.87187H20M0 18.3281H9.52381" stroke="white" stroke-width="1.5375" />
                </svg>
            </div>
        </div>
        <ul class="mt-4">
            <li class="px-4 py-6 border-b-2 cursor-pointer">
                <div class="relative block collapsed-icon md:hidden">
                    <div class="flex items-center justify-center"><svg class="m-1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_24_18)">
                                <path d="M11.9167 18.4167C11.9167 19.0125 12.4042 19.5 13 19.5C13.5958 19.5 14.0833 19.0125 14.0833 18.4167C14.0833 17.8208 13.5958 17.3333 13 17.3333C12.4042 17.3333 11.9167 17.8208 11.9167 18.4167ZM11.9167 3.25V7.58333H14.0833V5.50333C17.7558 6.03417 20.5833 9.17583 20.5833 13C20.5833 17.1925 17.1925 20.5833 13 20.5833C8.8075 20.5833 5.41667 17.1925 5.41667 13C5.41667 11.18 6.05583 9.51167 7.12833 8.21167L13 14.0833L14.5275 12.5558L7.16083 5.18917V5.21083C4.78833 6.9875 3.25 9.80417 3.25 13C3.25 18.3842 7.605 22.75 13 22.75C18.3842 22.75 22.75 18.3842 22.75 13C22.75 7.61583 18.3842 3.25 13 3.25H11.9167ZM19.5 13C19.5 12.4042 19.0125 11.9167 18.4167 11.9167C17.8208 11.9167 17.3333 12.4042 17.3333 13C17.3333 13.5958 17.8208 14.0833 18.4167 14.0833C19.0125 14.0833 19.5 13.5958 19.5 13ZM6.5 13C6.5 13.5958 6.9875 14.0833 7.58333 14.0833C8.17917 14.0833 8.66667 13.5958 8.66667 13C8.66667 12.4042 8.17917 11.9167 7.58333 11.9167C6.9875 11.9167 6.5 12.4042 6.5 13Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_24_18">
                                    <rect width="26" height="26" fill="white" />
                                </clipPath>
                            </defs>
                        </svg></div>
                </div>
                <div class="main-links hidden md:block">
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-primary flex items-center gap-2">
                            <svg class="inline-block align-middle m-1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_24_18)">
                                    <path d="M11.9167 18.4167C11.9167 19.0125 12.4042 19.5 13 19.5C13.5958 19.5 14.0833 19.0125 14.0833 18.4167C14.0833 17.8208 13.5958 17.3333 13 17.3333C12.4042 17.3333 11.9167 17.8208 11.9167 18.4167ZM11.9167 3.25V7.58333H14.0833V5.50333C17.7558 6.03417 20.5833 9.17583 20.5833 13C20.5833 17.1925 17.1925 20.5833 13 20.5833C8.8075 20.5833 5.41667 17.1925 5.41667 13C5.41667 11.18 6.05583 9.51167 7.12833 8.21167L13 14.0833L14.5275 12.5558L7.16083 5.18917V5.21083C4.78833 6.9875 3.25 9.80417 3.25 13C3.25 18.3842 7.605 22.75 13 22.75C18.3842 22.75 22.75 18.3842 22.75 13C22.75 7.61583 18.3842 3.25 13 3.25H11.9167ZM19.5 13C19.5 12.4042 19.0125 11.9167 18.4167 11.9167C17.8208 11.9167 17.3333 12.4042 17.3333 13C17.3333 13.5958 17.8208 14.0833 18.4167 14.0833C19.0125 14.0833 19.5 13.5958 19.5 13ZM6.5 13C6.5 13.5958 6.9875 14.0833 7.58333 14.0833C8.17917 14.0833 8.66667 13.5958 8.66667 13C8.66667 12.4042 8.17917 11.9167 7.58333 11.9167C6.9875 11.9167 6.5 12.4042 6.5 13Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_24_18">
                                        <rect width="26" height="26" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Dashboard</a>
                    </div>
                </div>
            </li>
            <li class="dropdown-list cursor-pointer">
                <div class="px-4 py-6 border-b-2 bg-secondary-variant">
                    <div class="relative block collapsed-icon md:hidden">
                        <div class="flex items-center justify-center">
                            <svg class="inline-block align-middle m-1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_24_25)">
                                    <path d="M12.597 0.106988C12.7197 0.036877 12.8586 0 13 0C13.1414 0 13.2803 0.036877 13.403 0.106988L19.4967 3.58936C19.6211 3.6604 19.7245 3.76304 19.7964 3.88689C19.8683 4.01074 19.9062 4.1514 19.9062 4.29461V10.7865L25.5905 14.0365C25.7144 14.1072 25.8174 14.2094 25.8893 14.3326C25.9612 14.4558 25.9994 14.5958 26 14.7385V21.7032C26 21.8465 25.9621 21.9871 25.8901 22.111C25.8182 22.2348 25.7149 22.3375 25.5905 22.4085L19.4967 25.8909C19.374 25.961 19.2351 25.9979 19.0938 25.9979C18.9524 25.9979 18.8135 25.961 18.6908 25.8909L13 22.6409L7.30925 25.8925C7.18651 25.9626 7.0476 25.9995 6.90625 25.9995C6.7649 25.9995 6.62599 25.9626 6.50325 25.8925L0.4095 22.4101C0.285144 22.3391 0.181772 22.2364 0.109859 22.1126C0.0379458 21.9887 4.61939e-05 21.8481 0 21.7049L0 14.7401C4.61939e-05 14.5969 0.0379458 14.4562 0.109859 14.3324C0.181772 14.2085 0.285144 14.1059 0.4095 14.0349L6.09375 10.7865V4.29461C6.0938 4.1514 6.1317 4.01074 6.20361 3.88689C6.27552 3.76304 6.37889 3.6604 6.50325 3.58936L12.597 0.106988ZM6.90625 12.1937L2.4505 14.7401L6.90625 17.2865L11.362 14.7401L6.90625 12.1937ZM12.1875 16.1409L7.71875 18.6937V23.7865L12.1875 21.2336V16.1409ZM13.8125 21.2336L18.2812 23.7865V18.6937L13.8125 16.1409V21.2336ZM14.638 14.7401L19.0938 17.2865L23.5495 14.7401L19.0938 12.1937L14.638 14.7401ZM18.2812 10.7865V5.69374L13.8125 8.24824V13.341L18.2812 10.7865ZM12.1875 13.341V8.24824L7.71875 5.69374V10.7865L12.1875 13.341ZM8.54425 4.29461L13 6.84099L17.4557 4.29461L13 1.74824L8.54425 4.29461ZM24.375 16.1409L19.9062 18.6937V23.7865L24.375 21.2336V16.1409ZM6.09375 23.7865V18.6937L1.625 16.1409V21.2336L6.09375 23.7865Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_24_25">
                                        <rect width="26" height="26" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <ul class="absolute  w-max -top-10 left-16 p-4 rounded-md bg-accent text-primary transition-all duration-200 ease-in-out invisible  shrink-sidebar-links grid gap-y-2">
                            <li>
                                <?= anchor('product/list', 'Product List', ['class' => 'hover:underline']) ?>
                            </li>
                            <li>
                                <?= anchor('product/list', 'Print Barcode', ['class' => 'hover:underline']) ?>
                            </li>
                        </ul>
                    </div>
                    <div class="main-links hidden md:block">
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-primary flex items-center gap-2">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_24_25)">
                                        <path d="M12.597 0.106988C12.7197 0.036877 12.8586 0 13 0C13.1414 0 13.2803 0.036877 13.403 0.106988L19.4967 3.58936C19.6211 3.6604 19.7245 3.76304 19.7964 3.88689C19.8683 4.01074 19.9062 4.1514 19.9062 4.29461V10.7865L25.5905 14.0365C25.7144 14.1072 25.8174 14.2094 25.8893 14.3326C25.9612 14.4558 25.9994 14.5958 26 14.7385V21.7032C26 21.8465 25.9621 21.9871 25.8901 22.111C25.8182 22.2348 25.7149 22.3375 25.5905 22.4085L19.4967 25.8909C19.374 25.961 19.2351 25.9979 19.0938 25.9979C18.9524 25.9979 18.8135 25.961 18.6908 25.8909L13 22.6409L7.30925 25.8925C7.18651 25.9626 7.0476 25.9995 6.90625 25.9995C6.7649 25.9995 6.62599 25.9626 6.50325 25.8925L0.4095 22.4101C0.285144 22.3391 0.181772 22.2364 0.109859 22.1126C0.0379458 21.9887 4.61939e-05 21.8481 0 21.7049L0 14.7401C4.61939e-05 14.5969 0.0379458 14.4562 0.109859 14.3324C0.181772 14.2085 0.285144 14.1059 0.4095 14.0349L6.09375 10.7865V4.29461C6.0938 4.1514 6.1317 4.01074 6.20361 3.88689C6.27552 3.76304 6.37889 3.6604 6.50325 3.58936L12.597 0.106988ZM6.90625 12.1937L2.4505 14.7401L6.90625 17.2865L11.362 14.7401L6.90625 12.1937ZM12.1875 16.1409L7.71875 18.6937V23.7865L12.1875 21.2336V16.1409ZM13.8125 21.2336L18.2812 23.7865V18.6937L13.8125 16.1409V21.2336ZM14.638 14.7401L19.0938 17.2865L23.5495 14.7401L19.0938 12.1937L14.638 14.7401ZM18.2812 10.7865V5.69374L13.8125 8.24824V13.341L18.2812 10.7865ZM12.1875 13.341V8.24824L7.71875 5.69374V10.7865L12.1875 13.341ZM8.54425 4.29461L13 6.84099L17.4557 4.29461L13 1.74824L8.54425 4.29461ZM24.375 16.1409L19.9062 18.6937V23.7865L24.375 21.2336V16.1409ZM6.09375 23.7865V18.6937L1.625 16.1409V21.2336L6.09375 23.7865Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_24_25">
                                            <rect width="26" height="26" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Products</a>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.41 8.59L12 13.17L16.59 8.59L18 10L12 16L6 10L7.41 8.59Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <ul class="dropdown-menu h-0 overflow-hidden transition-all duration-200 ease-linear">
                <li class="px-4 py-6 border-b-2">
                    <?= anchor('product', '<svg class="inline-block align-middle m-1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.75 5.41667L17.3333 13L9.75 20.5833" stroke="#0CCA4A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Create Products', ['class' => 'text-primary']) ?>
                </li>
                <li class="px-4 py-6 border-b-2">
                    <?= anchor('product/list', '<svg class="inline-block align-middle m-1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.75 5.41667L17.3333 13L9.75 20.5833" stroke="#0CCA4A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Product List', ['class' => 'text-primary']) ?>
                </li>
                <li class="px-4 py-6 border-b-2">
                    <a href="#" class="text-primary">
                        <svg class="inline-block align-middle m-1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 5.41667L17.3333 13L9.75 20.5833" stroke="#0CCA4A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Print Barcode</a>
                </li>
            </ul>
            <li class="dropdown-list cursor-pointer">
                <div class="px-4 py-6 border-b-2 bg-secondary-variant">
                    <div class="relative block collapsed-icon md:hidden">
                        <div class="flex items-center justify-center text-primary"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                        </div>
                        <ul class="absolute w-max -top-10 left-16 p-4 rounded-md bg-accent text-primary transition-all duration-200 ease-in-out  shrink-sidebar-links invisible grid gap-y-2">
                            <li>
                                <?= anchor('unit', 'Unit', ['class' => 'hover:underline']) ?>
                            </li>
                            <li>
                                <?= anchor('brand', 'Brand', ['class' => 'hover:underline']) ?>
                            </li>
                            <li>
                                <?= anchor('warehouse', 'Warehouse', ['class' => 'hover:underline']) ?>
                            </li>
                            <li>
                                <?= anchor('Category', 'Category', ['class' => 'hover:underline']) ?>
                            </li>
                        </ul>
                    </div>
                    <div class="main-links hidden md:block">
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-primary flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                Settings</a>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.41 8.59L12 13.17L16.59 8.59L18 10L12 16L6 10L7.41 8.59Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <ul class="dropdown-menu h-0 overflow-hidden transition-all duration-200 ease-linear">
                <li class="px-4 py-6 border-b-2">
                    <?= anchor('warehouse', '<svg class="inline-block align-middle m-1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.75 5.41667L17.3333 13L9.75 20.5833" stroke="#0CCA4A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Warehouse', ['class' => 'text-primary']) ?>
                </li>
                <li class="px-4 py-6 border-b-2">
                    <?= anchor('category', '<svg class="inline-block align-middle m-1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.75 5.41667L17.3333 13L9.75 20.5833" stroke="#0CCA4A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Category', ['class' => 'text-primary']) ?>
                </li>
                <li class="px-4 py-6 border-b-2">
                    <?= anchor('brand', '<svg class="inline-block align-middle m-1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.75 5.41667L17.3333 13L9.75 20.5833" stroke="#0CCA4A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Brand', ['class' => 'text-primary']) ?>
                </li>
                <li class="px-4 py-6 border-b-2">
                    <?= anchor('unit', '<svg class="inline-block align-middle m-1" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.75 5.41667L17.3333 13L9.75 20.5833" stroke="#0CCA4A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Unit', ['class' => 'text-primary']) ?>
                </li>
            </ul>
        </ul>
    </nav>