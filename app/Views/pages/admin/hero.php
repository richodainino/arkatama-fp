<!-- Content -->
<div class="bg-white col-span-3 min-h-screen">
    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="absolute right-0 top-0 p-8 max-w-sm dark:bg-gray-900">
            <div id="successAlert" role="alert" class="bg-white rounded-xl border border-gray-100 p-4 shadow-xl">
                <div class="flex items-center gap-4">
                    <span class="text-green-600 my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>

                    <div class="flex-1">
                        <strong class="block font-medium text-gray-900"> Success </strong>

                        <p class="mt-1 text-sm text-gray-700">
                            <?php echo session()->getFlashdata('success'); ?>
                        </p>
                    </div>

                    <button class="text-gray-500 transition hover:text-gray-600" data-dismiss-target="#successAlert" aria-label="Close">
                        <span class="sr-only">Dismiss popup</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    <?php endif ?>

    <div class="grid px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <header class="mb-6">
            <h2 class="text-xl font-bold text-brown sm:text-3xl">
                Hero
            </h2>
        </header>

        <span class="inline-flex">
            <a class="rounded-md border bg-brown-md shadow-sm mb-4 px-4 py-3 text-sm font-medium text-white hover:bg-brown" href="/admin/hero/new">
                Create New Hero
            </a>
        </span>

        <!-- Hero Table -->
        <div class="overflow-hidden overflow-x-auto rounded-lg border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200 text-sm table-fixed w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 w-16">
                            <div class="flex items-center gap-2">
                                ID

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                            <div class="flex items-center gap-2">
                                Image

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 w-64">
                            <div class="flex items-center gap-2">
                                Title

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 w-28">
                            <div class="flex items-center gap-2">
                                CTA Tittle

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 w-28">
                            <div class="flex items-center gap-2">
                                CTA Link

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </th>
                        <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900 w-28">
                            Status
                        </th>
                        <th class="whitespace-nowrap"></th>
                    </tr>
                </thead>

                <?php if (!empty($hero) && is_array($hero)) : ?>
                    <tbody class="divide-y divide-gray-200">
                        <?php foreach ($hero as $idx => $hero_item) : ?>
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    <?php printf("%02d", esc($hero_item['id'])) ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <img src="<?= base_url("public/uploads/hero/" . esc($hero_item['image'])) ?>" alt="Image of a hero" class="h-16 object-cover transition duration-500 group-hover:scale-105" />
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700 truncate">
                                    <?= esc($hero_item['title']) ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?= esc($hero_item['cta_title']) ?></td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?= esc($hero_item['cta_ref']) ?></td>
                                <td class="whitespace-nowrap px-4 py-2">
                                    <?php if ($hero_item['status'] === 'Not Approved') : ?>
                                        <strong class="rounded bg-red-100 px-3 py-1.5 text-xs font-medium text-red-700">
                                            Not Approved
                                        </strong>
                                    <?php elseif ($hero_item['status'] === 'Approved') : ?>
                                        <strong class="rounded bg-green-100 px-3 py-1.5 text-xs font-medium text-green-700">
                                            Approved
                                        </strong>
                                    <?php else : ?>
                                        <strong class="rounded bg-gray-200 px-3 py-1.5 text-xs font-medium text-gray-700">
                                            Waiting
                                        </strong>
                                    <?php endif ?>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2">
                                    <span class="inline-flex divide-x overflow-hidden rounded-md border bg-white shadow-sm">
                                        <a class="inline-block p-3 text-gray-700 hover:bg-gray-100 focus:relative" title="Edit Hero" href="/admin/hero/<?= esc($hero_item['id']) ?>/update">
                                            Edit Hero
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