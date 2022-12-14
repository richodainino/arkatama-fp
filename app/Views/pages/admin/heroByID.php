<?php if (!empty($hero)) : ?>
    <section class="col-span-3 bg-white px-4 py-8 sm:px-6 sm:py-12 lg:px-8 min-h-screen">
        <div class="w-2/3">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex place-content-between">
                    <header class="mb-6">
                        <h2 class="text-xl font-bold text-brown sm:text-3xl">
                            Edit Hero
                        </h2>
                    </header>

                    <div class="text-center flex flex-row gap-4">
                        <div>
                            <input <?php if ($hero['status'] === 'Approved') echo ('checked') ?> type="radio" name="status" value="Approved" id="approved" class="peer hidden" />

                            <label for="approved" class="block cursor-pointer rounded-lg border border-green-100 p-2 text-sm font-medium shadow-sm hover:border-green-200 peer-checked:border-green-500 peer-checked:ring-1 peer-checked:ring-green-500 peer-checked:bg-green-100">
                                <p class="text-green-700">Approved</p>
                            </label>
                        </div>

                        <div>
                            <input <?php if ($hero['status'] === 'Not Approved') echo ('checked') ?> type="radio" name="status" value="Not Approved" id="not-approved" class="peer hidden" />

                            <label for="not-approved" class="block cursor-pointer rounded-lg border border-red-100 p-2 text-sm font-medium shadow-sm hover:border-red-200 peer-checked:border-red-500 peer-checked:ring-1 peer-checked:ring-red-500 peer-checked:bg-red-100">
                                <p class="text-red-700">Not Approved</p>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg">
                    <!-- Title -->
                    <div class="mb-4">
                        <label class="sr-only" for="title"><?= esc($hero['title']) ?></label>
                        <input class="w-full rounded-lg border-gray-200 p-3 text-sm" name="title" placeholder="Hero Title" type="text" id="title" value="<?= esc($hero['title']) ?>">
                    </div>

                    <!-- Desc -->
                    <div class="mb-4">
                        <label class="sr-only" for="description"><?= esc($hero['desc']) ?></label>
                        <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" name="desc" placeholder="Description" rows="3" id="description"><?= esc($hero['desc']) ?></textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <!-- CTA Title -->
                        <div>
                            <label class="sr-only" for="cta-title">Hero CTA Title</label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" name="cta-title" placeholder="Hero CTA Title" type="text" id="cta-title" value="<?= esc($hero['cta_title']) ?>">
                        </div>

                        <!-- CTA Link -->
                        <div>
                            <label class="sr-only" for="cta-ref">Hero CTA Link</label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" name="cta-ref" placeholder="Hero CTA Link" type="text" id="cta-ref" value="<?= esc($hero['cta_ref']) ?>">
                        </div>
                    </div>

                    <!-- Image -->
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Hero Image</label>
                    <img src="<?= base_url("uploads/hero/" . esc($hero['image'])) ?>" alt="Image of a hero" class="h-48 object-cover transition duration-500 group-hover:scale-105" />

                    <label class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Change Hero Image</label>
                    <input name="image" aria-describedby="file_input_help" id="file_input" type="file" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Maximum image size is 4mb with file extension JPG, JPEG, PNG, GIF, or WEBP.</p>

                    <!-- Send Button -->
                    <div class="mt-6 flex gap-4">
                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-lg px-5 py-3 text-white sm:w-auto focus:outline-none bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <span class="font-medium text-sm"> Update Hero </span>
                        </button>

                        <a class="flex items-center justify-center rounded-lg border bg-gray-500 shadow-sm inline-block px-4 py-2 text-sm font-medium text-white hover:bg-gray-600 focus:relative" href="/admin/hero">
                            Go Back
                        </a>

                        <a class="flex items-center justify-center rounded-lg border bg-red-700 shadow-sm inline-block px-4 py-2 text-sm font-medium text-white hover:bg-red-800 focus:relative" href="/admin/hero/<?= esc($hero['id']) ?>/delete">
                            Delete Hero
                        </a>
                    </div>
            </form>
        </div>
        </div>
    </section>
<?php endif ?>

</section>