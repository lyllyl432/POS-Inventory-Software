<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Brand Image
            </th>
            <th scope="col" class="px-6 py-3">
                Brand Name
            </th>
            <th scope="col" class="px-6 py-3">
                Brand Description
            </th>
            <th scope="col" class="px-6 py-3">
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $category) : ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $brand['brand_image'] ?>
                </td>
                <td class="px-6 py-4 flex gap-4">
                    <form class="edit-product">
                        <input type="hidden" name="brand_id" value="<?= $brand['id'] ?>">
                        <button class="btn" type="submit">Edit</button>
                    </form>
                    <form class="delete-product">
                        <input type="hidden" name="brand_id" value="<?= $brand['id'] ?>">
                        <button class="btn btn-error" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>