<section class="bg-white">
    <div class="max-w-screen-xl px-4 pb-8 pt-4 mx-auto sm:px-6 sm:pb-12 sm:pt-8 lg:px-8">
        <div class="block mt-8 lg:hidden">
            <button class="flex items-center gap-2 pb-1 text-gray-900 transition border-b border-gray-400 cursor-pointer hover:border-gray-600">
                <span class="text-sm font-medium"> Filters & Sorting </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>

        <div class="lg:grid lg:grid-cols-4 lg:items-start lg:gap-8">
            <div class="hidden space-y-4 lg:block">
                <h2 class="text-xl font-bold text-brown sm:text-3xl">
                    Menu
                </h2>

                <!-- Sort -->
                <div>
                    <label for="SortBy" class="block text-xs font-medium text-gray-700">
                        Sort By
                    </label>

                    <select id="SortBy" onchange="setSortBy(this)" class="mt-1 text-sm border-gray-300 rounded">
                        <option value="0">Default</option>
                        <option value="1">Title, DESC</option>
                        <option value="2">Title, ASC</option>
                        <option value="3">Price, DESC</option>
                        <option value="4">Price, ASC</option>
                    </select>
                </div>

                <!-- Filter -->
                <div>
                    <p class="block text-xs font-medium text-gray-700">Filters</p>

                    <div class="mt-1 space-y-2">
                        <details class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                            <summary class="flex items-center justify-between gap-2 p-4 text-gray-900 transition cursor-pointer">
                                <span class="text-sm font-medium"> Availability </span>

                                <span class="transition group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </summary>

                            <div class="bg-white border-t border-gray-200">
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
                        </details>

                        <details class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                            <summary class="flex items-center justify-between gap-2 p-4 text-gray-900 transition cursor-pointer">
                                <span class="text-sm font-medium"> Price </span>

                                <span class="transition group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </summary>

                            <div class="bg-white border-t border-gray-200">
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
                        </details>

                        <details class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                            <summary class="flex items-center justify-between gap-2 p-4 text-gray-900 transition cursor-pointer">
                                <span class="text-sm font-medium"> Colors </span>

                                <span class="transition group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </summary>

                            <div class="bg-white border-t border-gray-200">
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
                        </details>
                    </div>
                </div>
            </div>

            <div id="productContainer" class="grid col-span-3"></div>
        </div>
    </div>
</section>

<script>
    const rupiah = (number) => {
        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR"
        }).format(number);
    }

    const productUrl = "<?= base_url("uploads/product") ?>/";
    const product = <?= json_encode($product) ?>;
    var sortedProduct = product;

    function setSortBy(option) {
        var value = option.value;
        switch (value) {
            case 1:
                
                break;

            default:
                sortedProduct = product;
                break;
        }
    }

    var processedProduct = sortedProduct;
    console.log(processedProduct);

    var productContainer = document.getElementById("productContainer");
    var ul = document.createElement("ul");
    ul.className = "grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-3"
    productContainer.appendChild(ul);

    for (var key in processedProduct) {
        var li = document.createElement("li");

        var card = document.createElement("div");
        card.className = "max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700";

        var cardImage = document.createElement("a");
        cardImage.href = `/menu/${processedProduct[key].id}`;

        var image = document.createElement("img");
        image.className = "rounded-t-lg";
        image.src = productUrl + processedProduct[key].image;

        cardImage.appendChild(image);

        var cardText = document.createElement("div");
        cardText.className = "px-5 pb-4 pt-2";

        var cardA = document.createElement("a");
        cardA.href = `/menu/${processedProduct[key].id}`;

        var h5 = document.createElement("h5");
        h5.className = "mb-1 text-xl font-bold tracking-tight text-brown dark:text-white"
        h5.innerHTML = processedProduct[key].name;

        cardA.appendChild(h5);

        var p = document.createElement("p");
        p.className = "font-normal text-base";
        p.innerHTML = rupiah(processedProduct[key].price);

        cardText.append(cardA, p);
        card.append(cardImage, cardText);
        li.appendChild(card);
        ul.appendChild(li);
    }
</script>