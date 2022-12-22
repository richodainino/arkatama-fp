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
                        <option value="6">Stock, ASC</option>
                        <option value="5">Stock, DESC</option>
                        <option value="2">Title, ASC</option>
                        <option value="1">Title, DESC</option>
                        <option value="4">Price, ASC</option>
                        <option value="3">Price, DESC</option>
                    </select>
                </div>

                <!-- Search -->
                <div>
                    <label for="search" class="block text-xs font-medium text-gray-700">
                        Search
                    </label>

                    <input type="text" id="search" placeholder="Type here" class="rounded border w-full border-gray-300 sm:text-sm bg-white" />
                </div>

                <!-- Filter -->
                <div>
                    <p class="block text-xs font-medium text-gray-700">Filters</p>

                    <div class="mt-1 space-y-2">
                        <!-- Jenis -->
                        <details class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                            <summary class="flex items-center justify-between gap-2 p-4 text-gray-900 transition cursor-pointer">
                                <span class="text-sm font-medium"> Category </span>

                                <span class="transition group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </summary>

                            <div class="bg-white border-t border-gray-200">
                                <header class="flex items-center justify-between p-4">
                                    <button type="button" class="text-sm text-gray-900 underline underline-offset-4" onclick="resetCategory()">
                                        Reset
                                    </button>
                                </header>

                                <ul class="p-4 space-y-1 border-t border-gray-200">
                                    <li>
                                        <input onclick="setFilterBy(1)" id="default-radio-category-1" type="radio" value="" name="default-radio-category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-category-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Main Course</label>
                                    </li>

                                    <li>
                                        <input onclick="setFilterBy(2)" id="default-radio-category-2" type="radio" value="" name="default-radio-category" class="w-4 h-4 text-blue-600 bg-gray-200 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-category-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Dessert</label>
                                    </li>

                                    <li>
                                        <input onclick="setFilterBy(3)" id="default-radio-category-3" type="radio" value="" name="default-radio-category" class="w-4 h-4 text-blue-600 bg-gray-200 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-category-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Snack</label>
                                    </li>

                                    <li>
                                        <input onclick="setFilterBy(4)" id="default-radio-category-4" type="radio" value="" name="default-radio-category" class="w-4 h-4 text-blue-600 bg-gray-200 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-category-4" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Coffee</label>
                                    </li>

                                    <li>
                                        <input onclick="setFilterBy(5)" id="default-radio-category-5" type="radio" value="" name="default-radio-category" class="w-4 h-4 text-blue-600 bg-gray-200 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-category-5" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Non-Coffee</label>
                                    </li>

                                    <li>
                                        <input onclick="setFilterBy(6)" id="default-radio-category-6" type="radio" value="" name="default-radio-category" class="w-4 h-4 text-blue-600 bg-gray-200 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-category-6" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Flavored Tea</label>
                                    </li>
                                </ul>
                            </div>
                        </details>

                        <!-- Price -->
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
                                    <button type="button" onclick="resetPrice()" class="text-sm text-gray-900 underline underline-offset-4">
                                        Reset
                                    </button>
                                </header>

                                <div class="p-4 border-t border-gray-200">
                                    <div class="flex justify-between gap-4">
                                        <label for="FilterPriceFrom" class="flex items-center gap-2">
                                            <span class="text-sm text-gray-600">Rp</span>

                                            <input type="number" id="FilterPriceFromMin" value="<?= min(array_column($product, "price")) ?>" step="500" placeholder="From" class="w-full border-gray-200 rounded-md shadow-sm sm:text-sm" />
                                        </label>

                                        <label for="FilterPriceTo" class="flex items-center gap-2">
                                            <span class="text-sm text-gray-600">Rp</span>

                                            <input type="number" id="FilterPriceFromMax" value="<?= max(array_column($product, "price")) ?>" step="500" placeholder="To" class="w-full border-gray-200 rounded-md shadow-sm sm:text-sm" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>
                </div>
            </div>

            <div id="productContainer" class="grid col-span-3">
                <ul id="productList" class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-3">

                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    function resetCategory() {
        var category = document.getElementsByName("default-radio-category");
        for (var i = 0; i < category.length; i++) {
            category[i].checked = false;
        }
        setFilterBy(0);
    }

    function resetPrice() {
        document.getElementById("FilterPriceFromMin").value = <?= min(array_column($product, "price")) ?>;
        document.getElementById("FilterPriceFromMax").value = <?= max(array_column($product, "price")) ?>;
        setPriceBy();
    }

    const rupiah = (number) => {
        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR"
        }).format(number);
    }

    const productUrl = "<?= base_url("uploads/product") ?>/";
    const product = <?= json_encode($product) ?>;
    const approvedProduct = product.filter(el => {
        return el.status === "Approved"
    });
    var filteredProduct, sortedProduct, filteredPriceProduct = null;

    // Make product card
    function display(product = approvedProduct) {
        var productContainer = document.getElementById("productContainer");

        var ul = document.getElementById("productList");
        ul.innerHTML = "";
        for (var key in product) {
            var li = document.createElement("li");

            var card = document.createElement("div");
            card.className = "max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700";

            var cardImage = document.createElement("a");
            cardImage.href = `/menu/${product[key].id}`;

            var image = document.createElement("img");
            image.className = "rounded-t-lg";
            image.src = productUrl + product[key].image;

            cardImage.appendChild(image);

            var cardText = document.createElement("div");
            cardText.className = "px-5 pb-4 pt-2";

            var cardA = document.createElement("a");
            cardA.href = `/menu/${product[key].id}`;

            var h5 = document.createElement("h5");
            h5.className = "mb-1 text-xl font-bold tracking-tight text-brown dark:text-white"
            h5.innerHTML = product[key].name;

            cardA.appendChild(h5);

            var p = document.createElement("p");
            p.className = "font-normal text-base";
            p.innerHTML = rupiah(product[key].price);

            cardText.append(cardA, p);

            if (product[key].stock === "Out of Stock") {
                card.className = "relative max-w-sm bg-gray-200 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700";
                cardImage.className = "opacity-50";
                cardText.className = "px-5 pb-4 pt-2 opacity-50";

                var outOfStock = document.createElement("p");
                outOfStock.innerHTML = "Out of Stock";
                outOfStock.className = "absolute top-24 left-1/2 -translate-y-1/2 -translate-x-1/2 text-2xl font-bold text-black rounded-lg";
                card.append(cardImage, cardText, outOfStock);
            } else {
                card.append(cardImage, cardText);
            }

            li.appendChild(card);
            ul.appendChild(li);
        }

        productContainer.appendChild = ul;
    }

    function setSortBy(option) {
        if (!filteredProduct && !filteredPriceProduct) {
            sortedProduct = approvedProduct.slice();
        } else if (filteredPriceProduct) {
            sortedProduct = filteredPriceProduct.slice();
        } else {
            sortedProduct = filteredProduct.slice();
        }
        var value = parseInt(option.value);
        switch (value) {
            case 1:
                sortedProduct = sortedProduct.sort((a, b) => {
                    return b.name.localeCompare(a.name);
                });
                break;

            case 2:
                sortedProduct = sortedProduct.sort((a, b) => {
                    return a.name.localeCompare(b.name);
                });
                break;

            case 3:
                sortedProduct = sortedProduct.sort((a, b) => {
                    return b.price - a.price;
                });
                break;

            case 4:
                sortedProduct = sortedProduct.sort((a, b) => {
                    return a.price - b.price;
                });
                break;

            case 5:
                sortedProduct = sortedProduct.sort((a, b) => {
                    return b.stock.localeCompare(a.stock);
                });
                break;

            case 6:
                sortedProduct = sortedProduct.sort((a, b) => {
                    return a.stock.localeCompare(b.stock);
                });
                break;

            default:
                sortedProduct = null;
                break;
        }
        display(!sortedProduct ? approvedProduct : sortedProduct);
    }

    function setFilterBy(option) {
        if (!sortedProduct && !filteredPriceProduct) {
            filteredProduct = approvedProduct.slice();
        } else if (sortedProduct) {
            filteredProduct = sortedProduct.slice();
        } else {
            filteredProduct = filteredPriceProduct.slice();
        }
        switch (option) {
            case 1:
                filteredProduct = filteredProduct.filter(el => {
                    return el.category === "Main Course"
                });
                break;

            case 2:
                filteredProduct = filteredProduct.filter(el => {
                    return el.category === "Dessert"
                });
                break;

            case 3:
                filteredProduct = filteredProduct.filter(el => {
                    return el.category === "Snack"
                });
                break;

            case 4:
                filteredProduct = filteredProduct.filter(el => {
                    return el.category === "Coffee"
                });
                break;

            case 5:
                filteredProduct = filteredProduct.filter(el => {
                    return el.category === "Non-Coffee"
                });
                break;

            case 6:
                filteredProduct = filteredProduct.filter(el => {
                    return el.category === "Flavored Tea"
                });
                break;

            default:
                filteredProduct = null;
                break;
        }
        display(!filteredProduct ? approvedProduct : filteredProduct);
    }

    function setPriceBy(min = 0, max = 1000000) {
        if (!filteredProduct && !sortedProduct) {
            filteredPriceProduct = approvedProduct.slice();
        } else if (filteredProduct) {
            filteredPriceProduct = filteredProduct.slice();
        } else {
            filteredPriceProduct = sortedProduct.slice();
        }
        filteredPriceProduct = filteredPriceProduct.filter(el => {
            return el.price >= min && el.price <= max;
        });
        display(!filteredPriceProduct ? approvedProduct : filteredPriceProduct);
    }

    document.getElementById("FilterPriceFromMin").addEventListener("input", function() {
        setPriceBy(this.value, document.getElementById("FilterPriceFromMax").value);
    });

    document.getElementById("FilterPriceFromMax").addEventListener("input", function() {
        setPriceBy(document.getElementById("FilterPriceFromMin").value, this.value);
    });

    function searchProduct() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        ul = document.getElementById("productList");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("h5")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }

    document.getElementById("search").addEventListener("input", searchProduct);

    display();
</script>