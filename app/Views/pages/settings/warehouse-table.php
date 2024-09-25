<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Phone
            </th>
            <th scope="col" class="px-6 py-3">
                Country
            </th>
            <th scope="col" class="px-6 py-3">
                City
            </th>
            <th scope="col" class="px-6 py-3">
                Email
            </th>
            <th scope="col" class="px-6 py-3">
                Zip Code
            </th>
            <th scope="col" class="px-6 py-3">
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $warehouse) : ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $warehouse['warehouse_name'] ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $warehouse['warehouse_phone'] ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $warehouse['warehouse_country'] ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $warehouse['warehouse_city'] ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $warehouse['warehouse_email'] ?>
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $warehouse['warehouse_zip_code'] ?>
                </td>
                <td class="px-6 py-4 flex gap-4">
                    <div>
                        <input type="hidden" name="hide_update_id" value="<?= $warehouse['id'] ?>">
                        <button class="btn btn-update-warehouse" type="submit">Edit</button>
                    </div>

                    <div>
                        <input type="hidden" name="hide_delete_id" class="delete-warehouse-id" value="<?= $warehouse['id'] ?>">
                        <button class="btn btn-error btn-delete-warehouse" type="submit">Delete</button>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>