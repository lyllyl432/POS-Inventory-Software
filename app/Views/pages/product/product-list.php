<?= $this->extend('templates/default') ?>
<?= $this->section('content') ?>

<div class="flex items-center gap-4 border-b-2">
    <h1 class="text-5xl  pb-6">Product List</h1>
    <p class="text-base text-dark-variant relative bottom-2">Products | Product List</p>
</div>
<div class="mt-8 flex justify-end">
    <form action="/product" method="get">
        <button class="btn">Create</button>
    </form>
</div>

<div class="relative overflow-x-auto product-list mt-4 min-h-4">
    <img class="w-12 absolute left-1/2 -translate-x-1/2" src="<?= base_url() ?>icons/loader.gif">

</div>
<!-- edit modal  -->
<div class="modal absolute top-10 left-1/2 -translate-x-1/2 z-10 w-2/5 bg-primary shadow-md px-6 py-4 hidden">
    <h2 class="text-2xl">Edit Product</h2>
    <form method="post" id="update-modal">
        <input type="hidden" id="edit-product-code" name="edit_product_code">
        <div class="grid gap-y-2">
            <label for="name">Name</label>
            <input class="px-4 py-2 bg-dark-variant-2 rounded-xl outline-accent" type="text" name="product_name">
        </div>

        <button type="submit" class="btn mt-4">Submit</button>
    </form>
</div>
<script src="<?= base_url() ?>js/product/product.js"></script>

<?= $this->endSection() ?>