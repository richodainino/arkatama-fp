<?php if (!empty($product)) : ?>
    <section class="col-span-3 bg-white px-4 py-8 sm:px-6 sm:py-12 lg:px-8 h-full">
        <div class="w-2/3">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex place-content-between">
                    <header class="mb-6">
                        <h2 class="text-xl font-bold text-brown sm:text-3xl">
                            Edit Product
                        </h2>
                    </header>

                    <div class="text-center flex flex-row gap-4">
                        <div>
                            <input <?php if ($product['status'] === 'Approved') echo ('checked') ?> type="radio" name="status" value="Approved" id="approved" class="peer hidden" />

                            <label for="approved" class="block cursor-pointer rounded-lg border border-green-100 p-2 text-sm font-medium shadow-sm hover:border-green-200 peer-checked:border-green-500 peer-checked:ring-1 peer-checked:ring-green-500 peer-checked:bg-green-100">
                                <p class="text-green-700">Approved</p>
                            </label>
                        </div>

                        <div>
                            <input <?php if ($product['status'] === 'Not Approved') echo ('checked') ?> type="radio" name="status" value="Not Approved" id="not-approved" class="peer hidden" />

                            <label for="not-approved" class="block cursor-pointer rounded-lg border border-red-100 p-2 text-sm font-medium shadow-sm hover:border-red-200 peer-checked:border-red-500 peer-checked:ring-1 peer-checked:ring-red-500 peer-checked:bg-red-100">
                                <p class="text-red-700">Not Approved</p>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg">
                    <div class="grid grid-cols-5 gap-4 mb-4">
                        <!-- Category -->
                        <div class="w-full">
                            <select name="category" class="w-full h-full appearance-none bg-white rounded-lg border-gray-200 p-3 text-sm px-4 py-2 pr-8">
                                <option <?php if ($product['category'] === 'Main Course') echo ('selected') ?>>Main Course</option>
                                <option <?php if ($product['category'] === 'Dessert') echo ('selected') ?>>Dessert</option>
                                <option <?php if ($product['category'] === 'Snack') echo ('selected') ?>>Snack</option>
                                <option <?php if ($product['category'] === 'Coffee') echo ('selected') ?>>Coffee</option>
                                <option <?php if ($product['category'] === 'Non-Coffee') echo ('selected') ?>>Non-Coffee</option>
                                <option <?php if ($product['category'] === 'Flavored Tea') echo ('selected') ?>>Flavored Tea</option>
                            </select>
                        </div>

                        <!-- Name -->
                        <div class="col-span-2">
                            <label class="sr-only" for="name"><?= esc($product['name']) ?></label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" name="name" placeholder="Product Name" type="text" id="name" value="<?= esc($product['name']) ?>">
                        </div>

                        <!-- Price -->
                        <div class="col-span-2">
                            <label class="sr-only" for="price"><?= esc($product['price']) ?></label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" name="price" placeholder="Price" type="number" id="price" step="500" value="<?= esc($product['price']) ?>">
                        </div>
                    </div>

                    <!-- Desc -->
                    <div class="mb-4">
                        <label class="sr-only" for="description"><?= esc($product['desc']) ?></label>
                        <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" name="desc" placeholder="Description" rows="3" id="description"><?= esc($product['desc']) ?></textarea>
                    </div>

                    <!-- Stock -->
                    <div class="text-center flex flex-row gap-4 mb-6">
                        <div>
                            <input <?php if ($product['stock'] === 'Available') echo ('checked') ?> type="radio" name="stock" value="Available" id="available" class="peer hidden" />

                            <label for="available" class="block cursor-pointer rounded-lg border border-gray-100 p-4 text-sm font-medium shadow-sm hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500">
                                <p class="text-gray-700">Available</p>
                            </label>
                        </div>

                        <div>
                            <input <?php if ($product['stock'] === 'Out of Stock') echo ('checked') ?> type="radio" name="stock" value="Out of Stock" id="out-of-stock" class="peer hidden" />

                            <label for="out-of-stock" class="block cursor-pointer rounded-lg border border-gray-100 p-4 text-sm font-medium shadow-sm hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500">
                                <p class="text-gray-700">Out of Stock</p>
                            </label>
                        </div>
                    </div>

                    <!-- Image -->
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Product Image</label>
                    <img src="<?= base_url("images/uploads/" . esc($product['image'])) ?>" alt="Image of a <?= esc($product['name']) ?>" class="h-48 object-cover transition duration-500 group-hover:scale-105" />

                    <label class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Change Product Image</label>
                    <input name="image" aria-describedby="file_input_help" id="file_input" type="file" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, or JPG.</p>

                    <!-- Send Button -->
                    <div class="mt-6 flex gap-4">
                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-lg px-5 py-3 text-white sm:w-auto focus:outline-none bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <span class="font-medium text-sm"> Update Product </span>
                        </button>

                        <a class="flex items-center justify-center rounded-lg border bg-gray-500 shadow-sm inline-block px-4 py-2 text-sm font-medium text-white hover:bg-gray-600 focus:relative" href="/admin/product">
                            Go Back
                        </a>

                        <a class="flex items-center justify-center rounded-lg border bg-red-700 shadow-sm inline-block px-4 py-2 text-sm font-medium text-white hover:bg-red-800 focus:relative" href="/admin/product/<?= esc($product['id']) ?>/delete">
                            Delete Product
                        </a>
                    </div>
            </form>
        </div>
        </div>
    </section>
<?php endif ?>

</section>