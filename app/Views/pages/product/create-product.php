<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="flex">
    <?= $this->include('templates/sidebar') ?>
    <main class="mx-16 pt-6 flex-1">
        <h1 class="text-5xl border-b-2 pb-6">Create Product</h1>
        <!-- MULTIPLE IMAGE  -->
        <div class="mt-20 flex justify-center">
            <div class="max-w-lg bg-primary shadow-xl p-4">
                <h3 class="px-4 pt-4 pb-6 bg-dark-variant-2 text-2xl">Multiple Image</h3>
                <img class="mt-4 object-cover" src="<?= base_url() ?>images/image-big.png" alt="Highlighted Product">
                <div class="mt-4 flex justify-center gap-2">
                    <img src="<?= base_url() ?>images/image-small1.png" alt="To hightlight Product">
                    <img src="<?= base_url() ?>images/image-small2.png" alt="To hightlight Product">
                </div>
                <div class="flex justify-end gap-4">
                    <svg class="cursor-pointer" width="34" height="30" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8571 16.3333H22.1429M17 12.3333V20.3333M25.5714 27H8.42857C7.51926 27 6.64719 26.719 6.00421 26.219C5.36122 25.7189 5 25.0406 5 24.3333V5.66667C5 4.95942 5.36122 4.28115 6.00421 3.78105C6.64719 3.28095 7.51926 3 8.42857 3H18.0046C18.4592 3.00008 18.8952 3.1406 19.2166 3.39067L28.4977 10.6093C28.8192 10.8593 28.9999 11.1984 29 11.552V24.3333C29 25.0406 28.6388 25.7189 27.9958 26.219C27.3528 26.719 26.4807 27 25.5714 27Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="cursor-pointer" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.3333 9.33333L24.1773 25.5227C24.1294 26.1954 23.8283 26.8251 23.3347 27.2848C22.8412 27.7444 22.1917 28 21.5173 28H10.4826C9.80811 28 9.15867 27.7444 8.6651 27.2848C8.17152 26.8251 7.87047 26.1954 7.82259 25.5227L6.66659 9.33333M13.3333 14.6667V22.6667M18.6666 14.6667V22.6667M19.9999 9.33333V5.33333C19.9999 4.97971 19.8594 4.64057 19.6094 4.39052C19.3593 4.14048 19.0202 4 18.6666 4H13.3333C12.9796 4 12.6405 4.14048 12.3904 4.39052C12.1404 4.64057 11.9999 4.97971 11.9999 5.33333V9.33333M5.33325 9.33333H26.6666" stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- MULTIPLE IMAGE  -->
        <!-- FORM  -->
        <section class="mt-16 min-h-screen pb-6">
            <form action="">
                <div class="px-4 py-8 shadow-md rounded-xl">
                    <div class="flex gap-10">
                        <div class="grid flex-1">
                            <label for="product-name">Product Name</label>
                            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="product-name">
                        </div>
                        <div class="grid flex-1">
                            <label for="product-code">Product Code</label>
                            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="product-code">
                        </div>
                    </div>
                    <div class="flex gap-10 mt-12">
                        <div class="grid flex-1">
                            <label for="category">Category</label>
                            <select class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" name="category" id="category">
                                <option value=""></option>
                                <option value="Hello">Hello</option>
                            </select>
                        </div>
                        <div class="grid flex-1">
                            <label for="brand">Brand</label>
                            <select class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" name="brand" id="brand">
                                <option value=""></option>
                                <option value="Hello">Hello</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-10 mt-12">
                        <div class="grid flex-1">
                            <label for="barcode-symbology">Barcode Symbology</label>
                            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="barcode-symbology">
                        </div>
                        <div class="grid flex-1">
                            <label for="product-cost">Product Cost</label>
                            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="product-cost">
                        </div>
                    </div>
                    <div class="flex gap-10 mt-12">
                        <div class="grid flex-1">
                            <label for="product-price">Product Price</label>
                            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="product-price">
                        </div>
                        <div class="grid flex-1">
                            <label for="product-unit">Product Unit</label>
                            <select class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" name="product-unit" id="product-unit">
                                <option value=""></option>
                                <option value="Hello">Hello</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-10 mt-12">
                        <div class="grid flex-1">
                            <label for="sales-unit">Sales Unit</label>
                            <select class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" name="sales-unit" id="sales-unit">
                                <option value=""></option>
                                <option value="Hello">Hello</option>
                            </select>
                        </div>
                        <div class="grid flex-1">
                            <label for="purchase-unit">Purchase Unit</label>
                            <select class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" name="purchase-unit" id="purchase-unit">
                                <option value=""></option>
                                <option value="Hello">Hello</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-10 mt-12">
                        <div class="grid flex-1">
                            <label for="stocks-alert">Stocks Alert</label>
                            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="stocks-alert">
                        </div>
                        <div class="grid flex-1">
                            <label for="order-tax">Order Tax</label>
                            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="number" name="order-tax">
                        </div>
                    </div>
                    <div class="flex gap-10 mt-12">
                        <div class="grid flex-1">
                            <label for="tax-type">Tax type</label>
                            <select class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" name="tax-type" id="tax-type">
                                <option value=""></option>
                                <option value="Hello">Hello</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex gap-10 mt-12">
                        <div class="grid flex-1">
                            <label for="notes">Notes</label>
                            <textarea class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent resize-none" name="notes" id="notes" rows="6" placeholder="A few words..."></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn mt-4">Submit</button>
            </form>
        </section>
        <!-- FORM  -->
    </main>
</div>
<?= $this->endSection('content') ?>