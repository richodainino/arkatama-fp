<section>
    <div class="relative mx-auto max-w-screen-xl py-8 px-64">
        <h1 class="text-2xl font-bold lg:text-3xl text-brown"><?= esc($product['name']) ?></h1>

        <div class="grid gap-8 lg:grid-cols-8 lg:items-start">
            <div class="col-span-5">
                <div class="relative mt-4">
                    <img alt="Menu" src="<?= base_url("uploads/product/" . esc($product['image'])) ?>" class="h-72 rounded-xl object-cover object-center" />
                </div>
            </div>

            <div class="lg:sticky lg:top-16 col-span-3">
                <div class="space-y-4 lg:pt-8">
                    <p class="text-lg font-bold text-brown w-fit">Category: <span class="text-black"><?= esc($product['category']) ?></span></p>

                    <span class="block w-fit rounded-full border border-gray-200 px-3 py-1 text-sm text-white font-normal <?php if ($product['stock'] === 'Available') echo 'bg-green-600'; else echo 'bg-red-600'; ?>">
                        <?= esc($product['stock']) ?>
                    </span>

                    <div>
                        <p class="text-xl font-bold">Rp. <?= number_format($product['price'], 0, ',', '.') ?></p>
                    </div>

                    <!-- <button type="submit" class="w-full rounded bg-brown px-6 py-3 text-sm font-bold uppercase tracking-wide text-white">
                        Add to cart
                    </button> -->
                </div>
            </div>

            <div class="col-span-5 mb-6">
                <div class="prose max-w-none [&>iframe]:mt-6 [&>iframe]:aspect-video [&>iframe]:w-full [&>iframe]:rounded-xl">
                    <p>
                        <?= esc($product['desc']) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>