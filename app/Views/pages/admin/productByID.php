<?php if (!empty($product)) : ?>
    <section class="col-span-3 bg-white px-4 py-8 sm:px-6 sm:py-12 lg:px-8 h-full">
        <div class="w-2/3">
            <header class="mb-6 flex place-content-between">
                <h2 class="text-xl font-bold text-brown sm:text-3xl">
                    Edit Product
                </h2>

                <a class="rounded-md border bg-red-700 shadow-sm inline-block px-4 py-2 text-sm font-medium text-white hover:bg-red-800 focus:relative" href="/admin/product/new">
                    Delete Product
                </a>
            </header>

            <div class="rounded-lg">
                <form action="PUT">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-5 mb-4">
                        <!-- Category -->
                        <div>
                            <button id="category" data-dropdown-toggle="categoryDropdown" class="text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 font-base rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center h-full" type="button">Category
                                <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="categoryDropdown" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="category">
                                    <li>
                                        <div class="flex items-center">
                                            <input <?php if ($product['category'] === 'Main Course') echo ('checked') ?> id="main-course" type="radio" value="Main Course" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="main-course" class="ml-2 text-sm font-base text-gray-900 dark:text-gray-300">Main Course</label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="flex items-center">
                                            <input <?php if ($product['category'] === 'Dessert') echo ('checked') ?> id="dessert" type="radio" value="Dessert" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="dessert" class="ml-2 text-sm font-base text-gray-900 dark:text-gray-300">Dessert</label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="flex items-center">
                                            <input <?php if ($product['category'] === 'Snack') echo ('checked') ?> id="snack" type="radio" value="Snack" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="snack" class="ml-2 text-sm font-base text-gray-900 dark:text-gray-300">Snack</label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="flex items-center">
                                            <input <?php if ($product['category'] === 'Coffee') echo ('checked') ?> id="coffee" type="radio" value="Coffee" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="coffee" class="ml-2 text-sm font-base text-gray-900 dark:text-gray-300">Coffee</label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="flex items-center">
                                            <input <?php if ($product['category'] === 'Non-Coffee') echo ('checked') ?> id="non-coffee" type="radio" value="Non-Coffee" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="non-coffee" class="ml-2 text-sm font-base text-gray-900 dark:text-gray-300">Non-Coffee</label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="flex items-center">
                                            <input <?php if ($product['category'] === 'Flavored Tea') echo ('checked') ?> id="flavored-tea" type="radio" value="Flavored Tea" name="category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="flavored-tea" class="ml-2 text-sm font-base text-gray-900 dark:text-gray-300">Flavored Tea</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Name -->
                        <div class="col-span-2">
                            <label class="sr-only" for="name"><?= esc($product['name']) ?></label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Product Name" type="text" id="name" value="<?= esc($product['name']) ?>">
                        </div>

                        <!-- Price -->
                        <div class="col-span-2">
                            <label class="sr-only" for="price"><?= esc($product['price']) ?></label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Price" type="number" id="price" step="500" value="<?= esc($product['price']) ?>">
                        </div>
                    </div>

                    <!-- Desc -->
                    <div class="mb-4">
                        <label class="sr-only" for="description"><?= esc($product['desc']) ?></label>
                        <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Description" rows="3" id="description"><?= esc($product['desc']) ?></textarea>
                    </div>

                    <!-- Status -->
                    <fieldset class="text-center flex flex-row gap-4 mb-6">
                        <legend class="sr-only">Status</legend>

                        <div>
                            <input <?php if ($product['status'] === 'Available') echo ('checked') ?> type="radio" name="status" value="Available" id="available" class="peer hidden" />

                            <label for="available" class="block cursor-pointer rounded-lg border border-gray-100 p-4 text-sm font-medium shadow-sm hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500">
                                <p class="text-gray-700">Available</p>
                            </label>
                        </div>

                        <div>
                            <input <?php if ($product['status'] === 'Out of Stock') echo ('checked') ?> type="radio" name="status" value="Out of Stock" id="out-of-stock" class="peer hidden" />

                            <label for="out-of-stock" class="block cursor-pointer rounded-lg border border-gray-100 p-4 text-sm font-medium shadow-sm hover:border-gray-200 peer-checked:border-blue-500 peer-checked:ring-1 peer-checked:ring-blue-500">
                                <p class="text-gray-700">Out of Stock</p>
                            </label>
                        </div>
                    </fieldset>

                    <!-- Image -->
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Previous Product Image</label>
                    <img src="<?= esc($product['image']) ?>" alt="Image of a <?= esc($product['name']) ?>" class="w-48 aspect-square object-cover transition duration-500 group-hover:scale-105" />

                    <label class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Re-Upload Product Image</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" accept="image/*">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, or JPG.</p>

                    <!-- Send Button -->
                    <div class="mt-6">
                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-lg px-5 py-3 text-white sm:w-auto focus:outline-none bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <span class="font-medium"> Update Product </span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php endif ?>

</section>