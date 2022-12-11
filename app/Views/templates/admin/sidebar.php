<section class="grid grid-cols-4 gap-0">
    <!-- Sidebar -->
    <div class="flex flex-col justify-between border-r bg-white">
        <div class="sticky top-0 px-4">
            <div class="flex justify-center text-brown">
                <a href="/admin/dashboard"><img class="h-36" src="<?= base_url("images/caribu coklat.png") ?>"></a>
            </div>

            <nav aria-label="Main Nav" class="flex flex-col space-y-1">
                <a href="/admin/product" class="flex items-center rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700 <?php if (!empty($selected) && $selected === 'product') echo ('text-gray-700 bg-gray-100') ?>">
                    <img class="h-5 w-5 opacity-75" src="<?= base_url("icon/fast-food.png") ?>">

                    <span class="ml-3 text-sm font-medium"> Products </span>
                </a>

                <a href="/admin/hero" class="flex items-center rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700 <?php if (!empty($selected) && $selected === 'hero') echo ('text-gray-700 bg-gray-100') ?>">
                    <img class="h-5 w-5 opacity-75" src="<?= base_url("icon/slider.png") ?>">

                    <span class="ml-3 text-sm font-medium"> Hero / Banner </span>
                </a>
            </nav>
        </div>

        <div class="sticky bottom-0 border-t border-gray-100">
            <a href="#" class="flex shrink-0 items-center bg-white p-4 hover:bg-gray-50">
                <img alt="Man" src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" class="h-10 w-10 rounded-full object-cover" />

                <div class="ml-1.5">
                    <p class="text-xs">
                        <strong class="block font-medium">Eric Frusciante</strong>

                        <span> eric@frusciante.com </span>
                    </p>
                </div>
            </a>
        </div>
    </div>