<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3 ">
                <p class="flex items-center justify-between">
                    Unit Name
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 inline-block ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                    </svg>
                </p>

            </th>
            <th scope="col" class="px-6 py-3">
                <p class="flex items-center justify-between">
                    Short Name
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                    </svg>
                </p>

            </th>
            <!-- <th scope="col" class="px-6 py-3">
                Base Unit
            </th> -->
            <th scope="col" class="px-6 py-3">
                <p class="flex items-center justify-between">
                    Actions
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                    </svg>
                </p>

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
                <td class="px-6 py-4 flex gap-4 ">
                    <div>
                        <input type="hidden" name="hide_update_id" value="<?= $unit['id'] ?>">
                        <button class="btn btn-update-unit" type="submit">Edit</button>
                    </div>

                    <div>
                        <input type="hidden" name="hide_delete_id" class="delete-unit-id" value="<?= $unit['id'] ?>">
                        <button class="btn btn-error btn-delete-unit" type="submit">Delete</button>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>