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
        <?php foreach ($list as $brand) : ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4 flex gap-4">
                    <img class="w-28" data-image="<?= $brand['brand_image'] ?>" src="<?= base_url($brand['brand_image']) ?>" alt="<?= $brand['brand_name'] ?>">
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $brand['brand_name'] ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $brand['brand_description'] ?>
                </td>
                <td class="px-6 py-4 flex gap-4 ">
                    <div>
                        <input type="hidden" name="hide_update_id" value="<?= $brand['id'] ?>">
                        <button class="btn btn-update-brand" type="submit">Edit</button>
                    </div>

                    <div>
                        <input type="hidden" name="hide_delete_id" value="<?= $brand['id'] ?>">
                        <button class="btn btn-error btn-delete-brand" type="submit">Delete</button>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>