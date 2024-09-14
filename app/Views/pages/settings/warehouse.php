<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>
<div class="flex items-center gap-4 border-b-2">
    <h1 class="text-5xl  pb-6">Warehouse</h1>
    <p class="text-base text-dark-variant relative bottom-2">Settings | Warehouse</p>
</div>
<div class="mt-8 flex justify-end">
    <button class="btn create">Create</button>
</div>

<div class="relative overflow-x-auto product-list mt-4 min-h-4">
    <img class="w-12 absolute left-1/2 -translate-x-1/2" src="<?= base_url() ?>icons/loader.gif">

</div>
<!-- edit modal  -->
<div class="edit-modal absolute top-10 left-1/2 -translate-x-1/2 z-10 w-2/5 bg-primary shadow-md px-6 py-4 hidden">
    <h2 class="text-2xl">Edit Warehouse</h2>
    <form method="post" id="edit-modal">
        <input type="hidden" id="edit-product-code" name="edit_product_code">
        <div class="grid gap-y-2">
            <label for="name">Name</label>
            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="product_name">
        </div>

        <button type="submit" class="btn mt-4">Submit</button>
    </form>
</div>
<!-- create modal  -->
<div class="create-modal absolute top-10 left-1/2 -translate-x-1/2 z-10 w-2/4 bg-primary shadow-md px-6 py-4 hidden">
    <h2 class="text-2xl">Create Warehouse</h2>
    <form method="post" id="create-modal">
        <div class="flex gap-4">
            <div class="grid gap-y-2 flex-1">
                <label for="name">Name</label>
                <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="warehouse_name">
            </div>
            <div class="grid gap-y-2 flex-1">
                <label for="name">Phone</label>
                <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="warehouse_phone_num">
            </div>
        </div>
        <div class="flex gap-4 mt-4">
            <div class="grid gap-y-2 flex-1">
                <label for="name">Country</label>
                <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="warehouse_country">
            </div>
            <div class="grid gap-y-2 flex-1">
                <label for="name">City</label>
                <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="warehouse_city">
            </div>
        </div>
        <div class="flex gap-4 mt-4">
            <div class="grid gap-y-2 flex-1">
                <label for="name">Email</label>
                <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="warehouse_email">
            </div>
            <div class="grid gap-y-2 flex-1">
                <label for="name">Zipcode</label>
                <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="warehouse_zip_code">
            </div>
        </div>
        <button type="submit" class="btn mt-4">Submit</button>
    </form>
</div>
<script src="<?= base_url() ?>js/settings/warehouse.js"></script>
<?= $this->endSection() ?>