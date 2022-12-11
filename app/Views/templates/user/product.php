<section>
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
        <header>
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
                Product Collection
            </h2>

            <p class="max-w-md mt-4 text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
                praesentium cumque iure dicta incidunt est ipsam, officia dolor fugit
                natus?
            </p>
        </header>


        <!-- Filter and Sort -->
        <div class="mb-4 sm:flex sm:items-center sm:justify-between">
            <div class="block sm:hidden">
                <button class="flex items-center gap-2 pb-1 text-gray-900 transition border-b border-gray-400 cursor-pointer hover:border-gray-600">
                    <span class="text-sm font-medium"> Filters & Sorting </span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>

            <div class="hidden sm:flex sm:gap-4">
                <div class="relative">
                    <details class="group">
                        <summary class="flex items-center gap-2 pb-1 text-gray-900 transition border-b border-gray-400 cursor-pointer hover:border-gray-600">
                            <span class="text-sm font-medium"> Availability </span>

                            <span class="transition group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </summary>

                        <div class="z-50 group-open:absolute group-open:top-auto group-open:left-0 group-open:mt-2">
                            <div class="bg-white border border-gray-200 rounded w-96">
                                <header class="flex items-center justify-between p-4">
                                    <span class="text-sm text-gray-700"> 0 Selected </span>

                                    <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                                        Reset
                                    </button>
                                </header>

                                <ul class="p-4 space-y-1 border-t border-gray-200">
                                    <li>
                                        <label for="FilterInStock" class="inline-flex items-center gap-2">
                                            <input type="checkbox" id="FilterInStock" class="w-5 h-5 border-gray-300 rounded" />

                                            <span class="text-sm font-medium text-gray-700">
                                                In Stock (5+)
                                            </span>
                                        </label>
                                    </li>

                                    <li>
                                        <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                                            <input type="checkbox" id="FilterPreOrder" class="w-5 h-5 border-gray-300 rounded" />

                                            <span class="text-sm font-medium text-gray-700">
                                                Pre Order (3+)
                                            </span>
                                        </label>
                                    </li>

                                    <li>
                                        <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                                            <input type="checkbox" id="FilterOutOfStock" class="w-5 h-5 border-gray-300 rounded" />

                                            <span class="text-sm font-medium text-gray-700">
                                                Out of Stock (10+)
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </details>
                </div>

                <div class="relative">
                    <details class="group">
                        <summary class="flex items-center gap-2 pb-1 text-gray-900 transition border-b border-gray-400 cursor-pointer hover:border-gray-600">
                            <span class="text-sm font-medium"> Price </span>

                            <span class="transition group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </summary>

                        <div class="z-50 group-open:absolute group-open:top-auto group-open:left-0 group-open:mt-2">
                            <div class="bg-white border border-gray-200 rounded w-96">
                                <header class="flex items-center justify-between p-4">
                                    <span class="text-sm text-gray-700">
                                        The highest price is $600
                                    </span>

                                    <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                                        Reset
                                    </button>
                                </header>

                                <div class="p-4 border-t border-gray-200">
                                    <div class="flex justify-between gap-4">
                                        <label for="FilterPriceFrom" class="flex items-center gap-2">
                                            <span class="text-sm text-gray-600">$</span>

                                            <input type="number" id="FilterPriceFrom" placeholder="From" class="w-full border-gray-200 rounded-md shadow-sm sm:text-sm" />
                                        </label>

                                        <label for="FilterPriceTo" class="flex items-center gap-2">
                                            <span class="text-sm text-gray-600">$</span>

                                            <input type="number" id="FilterPriceTo" placeholder="To" class="w-full border-gray-200 rounded-md shadow-sm sm:text-sm" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </details>
                </div>

                <div class="relative">
                    <details class="group">
                        <summary class="flex items-center gap-2 pb-1 text-gray-900 transition border-b border-gray-400 cursor-pointer hover:border-gray-600">
                            <span class="text-sm font-medium"> Colors </span>

                            <span class="transition group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </summary>

                        <div class="z-50 group-open:absolute group-open:top-auto group-open:left-0 group-open:mt-2">
                            <div class="bg-white border border-gray-200 rounded w-96">
                                <header class="flex items-center justify-between p-4">
                                    <span class="text-sm text-gray-700"> 0 Selected </span>

                                    <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                                        Reset
                                    </button>
                                </header>

                                <ul class="p-4 space-y-1 border-t border-gray-200">
                                    <li>
                                        <label for="FilterRed" class="inline-flex items-center gap-2">
                                            <input type="checkbox" id="FilterRed" class="w-5 h-5 border-gray-300 rounded" />

                                            <span class="text-sm font-medium text-gray-700">
                                                Red
                                            </span>
                                        </label>
                                    </li>

                                    <li>
                                        <label for="FilterBlue" class="inline-flex items-center gap-2">
                                            <input type="checkbox" id="FilterBlue" class="w-5 h-5 border-gray-300 rounded" />

                                            <span class="text-sm font-medium text-gray-700">
                                                Blue
                                            </span>
                                        </label>
                                    </li>

                                    <li>
                                        <label for="FilterGreen" class="inline-flex items-center gap-2">
                                            <input type="checkbox" id="FilterGreen" class="w-5 h-5 border-gray-300 rounded" />

                                            <span class="text-sm font-medium text-gray-700">
                                                Green
                                            </span>
                                        </label>
                                    </li>

                                    <li>
                                        <label for="FilterOrange" class="inline-flex items-center gap-2">
                                            <input type="checkbox" id="FilterOrange" class="w-5 h-5 border-gray-300 rounded" />

                                            <span class="text-sm font-medium text-gray-700">
                                                Orange
                                            </span>
                                        </label>
                                    </li>

                                    <li>
                                        <label for="FilterPurple" class="inline-flex items-center gap-2">
                                            <input type="checkbox" id="FilterPurple" class="w-5 h-5 border-gray-300 rounded" />

                                            <span class="text-sm font-medium text-gray-700">
                                                Purple
                                            </span>
                                        </label>
                                    </li>

                                    <li>
                                        <label for="FilterTeal" class="inline-flex items-center gap-2">
                                            <input type="checkbox" id="FilterTeal" class="w-5 h-5 border-gray-300 rounded" />

                                            <span class="text-sm font-medium text-gray-700">
                                                Teal
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </details>
                </div>
            </div>

            <div class="flex">
                <div class="flex border border-gray-300 divide-x divide-gray-100 rounded mr-5">
                    <button class="inline-flex items-center justify-center w-10 h-10 text-gray-600 transition hover:bg-gray-50 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>
                    </button>

                    <button class="inline-flex items-center justify-center w-10 h-10 text-gray-600 transition hover:bg-gray-50 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </button>
                </div>

                <div class="hidden sm:block">
                    <label for="SortBy" class="sr-only">SortBy</label>

                    <select id="SortBy" class="h-10 text-sm border-gray-300 rounded">
                        <option>Sort By</option>
                        <option value="Title, DESC">Title, DESC</option>
                        <option value="Title, ASC">Title, ASC</option>
                        <option value="Price, DESC">Price, DESC</option>
                        <option value="Price, ASC">Price, ASC</option>
                    </select>
                </div>
            </div>
        </div>

        <?php if (!empty($product) && is_array($product)) : ?>
            <ul class="grid gap-4 mt-4 sm:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($product as $product_item) : ?>
                    <li>
                        <a href="#" class="block overflow-hidden group">
                            <img src="<?= esc($product_item['image']) ?>" alt="Image of a <?= esc($product_item['name']) ?>" class="w-full aspect-square object-cover transition duration-500 group-hover:scale-105" />

                            <div class="relative pt-3 bg-white">
                                <h3 class="text-lg font-medium tracking-tight text-brown dark:text-white">
                                    <?= esc($product_item['name']) ?>
                                </h3>

                                <p class="mb-3">
                                    <span class="sr-only"> Regular Price </span>

                                    <span class="font-normal text-base tracking-wider text-gray-900">Rp. <?= number_format($product_item['price'], 0, ',', '.') ?> </span>
                                </p>
                            </div>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </div>
</section>