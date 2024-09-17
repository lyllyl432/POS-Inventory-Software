<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Unit Name
            </th>
            <th scope="col" class="px-6 py-3">
                Short Name
            </th>
            <!-- <th scope="col" class="px-6 py-3">
                Base Unit
            </th> -->
            <th scope="col" class="px-6 py-3">
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $unit) : ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $unit['unit_name'] ?>
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $unit['unit_short_name'] ?>
                </td>
                <td class="px-6 py-4 flex gap-4">
                    <form class="update-unit">
                        <input type="hidden" name="unit_id" value="<?= $unit['id'] ?>">
                        <button class="btn" type="submit">Edit</button>
                    </form>
                    <form class="delete-unit">
                        <input type="hidden" name="unit_id" value="<?= $unit['id'] ?>">
                        <button class="btn btn-error" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>