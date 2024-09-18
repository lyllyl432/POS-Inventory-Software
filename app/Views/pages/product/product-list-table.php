<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Product Code
            </th>
            <th scope="col" class="px-6 py-3">
                Product Name
            </th>
            <th scope="col" class="px-6 py-3">
                Category
            </th>
            <th scope="col" class="px-6 py-3">
                Brand
            </th>
            <th scope="col" class="px-6 py-3">
                Barcode Symbology
            </th>
            <th scope="col" class="px-6 py-3">
                Product Cost
            </th>
            <th scope="col" class="px-6 py-3">
                Product Price
            </th>
            <th scope="col" class="px-6 py-3">
                Product Unit
            </th>
            <th scope="col" class="px-6 py-3">
                Sales Unit
            </th>
            <th scope="col" class="px-6 py-3">
                Purchase Unit
            </th>
            <th scope="col" class="px-6 py-3">
                Stocks Alert
            </th>
            <th scope="col" class="px-6 py-3">
                Order Tax
            </th>
            <th scope="col" class="px-6 py-3">
                Tax type
            </th>
            <th scope="col" class="px-6 py-3">
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $product) : ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $product['product_code'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['product_name'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['category'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['brand'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['barcode_symbology'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['product_cost'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['product_price'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['product_unit'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['sales_unit'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['purchase_unit'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['stocks_alert'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['order_tax'] ?>
                </td>
                <td class="px-6 py-4">
                    <?= $product['tax_type'] ?>
                </td>
                <td class="px-6 py-4 flex gap-4">
                    <div>
                        <input type="hidden" name="hide_update_id" value="<?= $product['product_code'] ?>">
                        <button class="btn btn-update-product" type="submit">Edit</button>
                    </div>
                    <div>
                        <input type="hidden" name="hide_delete_id" class="delete-product-code" value="<?= $product['product_code'] ?>">
                        <button class="btn btn-error btn-delete-product" type="submit">Delete</button>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>