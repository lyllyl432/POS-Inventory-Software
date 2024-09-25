<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Category Code
            </th>
            <th scope="col" class="px-6 py-3">
                Category Name
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $category) : ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $category['category_code'] ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $category['category_name'] ?>
                </td>
                <td class="px-6 py-4 flex gap-4 ">
                    <div>
                        <input type="hidden" name="hide_update_id" value="<?= $category['id'] ?>">
                        <button class="btn btn-update-category" type="submit">Edit</button>
                    </div>

                    <div>
                        <input type="hidden" name="hide_delete_id" class="delete-unit-id" value="<?= $category['id'] ?>">
                        <button class="btn btn-error btn-delete-category" type="submit">Delete</button>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>