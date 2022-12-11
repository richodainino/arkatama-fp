<div class="bg-white col-span-3 min-h-screen flex flex-col items-center justify-center">
    <header aria-label="Page Header">
        <div class="mx-auto max-w-screen-xl px-4 pb-8 sm:pb-12 sm:px-6 lg:pb-8">
            <div class="sm:flex sm:items-center sm:justify-center">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-brown sm:text-3xl">
                        Welcome Admin!
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <div class="flex items-center px-16 mx-auto">
        <a class="flex items-center justify-center rounded-xl border border-gray-100 p-8 shadow-xl w-60 h-60 mx-8" href="/admin/product">
            <div class="text-brown">
                <img class="h-20 w-20 mx-auto" src="<?= base_url("icon/fast-food.png") ?>" style="filter: invert(17%) sepia(45%) saturate(1490%) hue-rotate(343deg) brightness(92%) contrast(93%);">

                <h3 class="mt-4 text-2xl font-bold text-brown">Products</h3>
            </div>
        </a>

        <a class="flex items-center justify-center rounded-xl border border-gray-100 p-8 shadow-xl w-60 h-60 mx-8" href="/admin/hero">
            <div class="text-brown">
                <img class="h-20 w-20 mx-auto" src="<?= base_url("icon/slider.png") ?>" style="filter: invert(17%) sepia(45%) saturate(1490%) hue-rotate(343deg) brightness(92%) contrast(93%);">

                <h3 class="mt-4 text-2xl font-bold text-brown">Hero / Banner</h3>
            </div>
        </a>
    </div>
</div>