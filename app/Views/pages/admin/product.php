<!-- Content -->
<div class="bg-white col-span-3 min-h-screen">
    <div class="grid px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <header class="mb-6">
            <h2 class="text-xl font-bold text-brown sm:text-3xl">
                Products
            </h2>
        </header>

        <span class="inline-flex">
            <a class="rounded-md border bg-white shadow-sm mb-4 inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:relative" href="/admin/product/new">
                Create New Product
            </a>
        </span>

        <!-- Product Table -->
        <div class="overflow-hidden overflow-x-auto rounded-lg border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                            <div class="flex items-center gap-2">
                                ID

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                            <div class="flex items-center gap-2">
                                Name

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                            <div class="flex items-center gap-2">
                                Category

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                            <div class="flex items-center gap-2">
                                Price

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                            Status
                        </th>
                        <th class="whitespace-nowrap"></th>
                    </tr>
                </thead>

                <?php if (!empty($product) && is_array($product)) : ?>
                    <tbody class="divide-y divide-gray-200">
                        <?php foreach ($product as $idx => $product_item) : ?>
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    <?= esc($product_item['id']) ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <?= esc($product_item['name']) ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?= esc($product_item['category']) ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">Rp. <?= number_format($product_item['price'], 0, ',', '.') ?></td>
                                <td class="whitespace-nowrap px-4 py-2">
                                    <?php if ($product_item['status'] === 'Out of Stock') : ?>
                                        <strong class="rounded bg-red-100 px-3 py-1.5 text-xs font-medium text-red-700">
                                            Out of Stock
                                        </strong>
                                    <?php elseif ($product_item['status'] === 'Available') : ?>
                                        <strong class="rounded bg-green-100 px-3 py-1.5 text-xs font-medium text-green-700">
                                            Available
                                        </strong>
                                    <?php endif ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2">
                                    <span class="inline-flex divide-x overflow-hidden rounded-md border bg-white shadow-sm">
                                        <a class="inline-block p-3 text-gray-700 hover:bg-gray-100 focus:relative" title="Edit Product" href="/admin/product/<?= esc($product_item['id']) ?>/update">
                                            Edit Product
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                <?php endif ?>
            </table>
        </div>

    </div>
</div>
</section>