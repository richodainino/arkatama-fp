<section class="grid grid-cols-4 gap-0">
    <!-- Sidebar -->
    <div class="flex flex-col justify-between border-r bg-white">
        <div class="sticky top-0 px-4">
            <div class="flex justify-center text-brown">
                <a href="/"><img class="h-36" src="<?= base_url("images/caribu coklat.png") ?>"></a>
            </div>

            <nav aria-label="Main Nav" class="flex flex-col space-y-1">
                <a href="/admin/product" class="flex items-center rounded-lg px-4 py-2 text-brown-md hover:bg-gray-100 hover:text-brown <?php if (!empty($selected) && $selected === 'product') echo ('text-brown bg-gray-100') ?>">
                    <img class="h-5 w-5 opacity-75" src="<?= base_url("icon/fast-food.png") ?>" style="filter: invert(17%) sepia(45%) saturate(1490%) hue-rotate(343deg) brightness(92%) contrast(93%);">

                    <span class="ml-3 text-sm font-medium"> Products </span>
                </a>

                <a href="/admin/hero" class="flex items-center rounded-lg px-4 py-2 text-brown-md hover:bg-gray-100 hover:text-brown <?php if (!empty($selected) && $selected === 'hero') echo ('text-brown bg-gray-100') ?>">
                    <img class="h-5 w-5 opacity-75" src="<?= base_url("icon/slider.png") ?>" style="filter: invert(17%) sepia(45%) saturate(1490%) hue-rotate(343deg) brightness(92%) contrast(93%);">

                    <span class="ml-3 text-sm font-medium"> Hero / Banner </span>
                </a>
            </nav>
        </div>

        <div class="sticky bottom-0 border-t border-gray-100">
            <a href="#" class="flex shrink-0 items-center bg-white p-4 hover:bg-gray-50">
                <img alt="Man" src="<?= base_url('/images/foto richo.jpeg') ?>" class="h-10 w-10 rounded-full object-cover" />

                <div class="ml-1.5">
                    <p class="text-xs">
                        <strong class="block font-medium">Richo Dainino</strong>

                        <span>daininoricho@yahoo.com</span>
                    </p>
                </div>
            </a>
        </div>
    </div>