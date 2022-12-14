<!-- Hero -->
<?php if (!empty($hero) && is_array($hero)) : ?>
	<section id="default-carousel" class="relative" data-carousel="static">
		<!-- Carousel wrapper -->
		<div class="relative h-56 overflow-hidden md:h-screen">
			<?php foreach ($hero as $hero_item) : ?>
				<div class="hidden duration-1000 ease-in-out" data-carousel-item>
					<div class="relative bg-[url(<?= base_url("uploads/product/" . esc($hero_item['image'])) ?>)] bg-cover bg-center bg-no-repeat">
						<div class="absolute inset-0 bg-white/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/95 sm:to-white/5"></div>

						<div class="relative mx-auto max-w-screen-xl px-8 py-32 sm:px-12 lg:flex lg:h-screen lg:items-center lg:px-16">
							<div class="max-w-xl text-center sm:text-left">
								<h1 class="text-3xl font-extrabold sm:text-5xl">
									<?= $hero_item['title'] ?>
								</h1>

								<p class="mt-4 max-w-lg sm:text-xl sm:leading-relaxed">
									<?= esc($hero_item['desc']) ?>
								</p>

								<!-- Button -->
								<div class="mt-8 flex flex-wrap gap-4 text-center">
									<a href="<?= esc($hero_item['cta_ref']) ?>" class="block w-full rounded-full bg-brown-md px-12 py-3 text-sm font-md text-white shadow hover:bg-brown focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto font-semibold text-base">
										<?= esc($hero_item['cta_title']) ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>

		<!-- Slider indicators -->
		<div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
			<?php foreach ($hero as $key => $hero_item) : ?>
				<button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide <?= $key + 1 ?>" data-carousel-slide-to="<?= $key ?>"></button>
			<?php endforeach ?>
		</div>

		<!-- Slider controls -->
		<button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
			<span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-1 group-focus:ring-black dark:group-focus:ring-gray-800/70 group-focus:outline-none">
				<svg aria-hidden="true" class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
				</svg>
				<span class="sr-only">Previous</span>
			</span>
		</button>
		<button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
			<span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-1 group-focus:ring-black dark:group-focus:ring-gray-800/70 group-focus:outline-none">
				<svg aria-hidden="true" class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
				</svg>
				<span class="sr-only">Next</span>
			</span>
		</button>
	</section>
<?php endif ?>

<!-- Menu -->
<?php if (!empty($product) && is_array($product)) : ?>
	<section class="bg-white">
		<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 smax-w-lg m:py-12 lg:px-8">
			<div class="grid grid-cols-6 gap-4 h-12">
				<h2 class="text-2xl font-bold text-brown md:text-3xl col-span-5 inline-flex items-center">
					Take a Look at Our Menu
				</h2>
				<a href="/menu" class="inline-flex items-center justify-center px-3 py-2 text-md font-medium text-white bg-brown-md rounded-lg hover:bg-brown focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
					View more
					<svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</a>
			</div>

			<ul class="grid gap-4 mt-8 sm:grid-cols-1 lg:grid-cols-4 lg:grid-rows-2">
				<?php foreach ($product as $product_item) : ?>
					<li>
						<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
							<a href="/menu/<?= esc($product_item['id']) ?>">
								<img class="rounded-t-lg" src="<?= base_url("uploads/product/" . esc($product_item['image'])) ?>" alt="Image of a <?= esc($product_item['name']) ?>" />
							</a>
							<div class="p-5">
								<a href="/menu/<?= esc($product_item['id']) ?>">
									<h5 class="mb-2 text-2xl font-bold tracking-tight text-brown dark:text-white"><?= esc($product_item['name']) ?></h5>
								</a>
								<p class="mb-3 font-normal text-xl">Rp. <?= number_format($product_item['price'], 0, ',', '.') ?></p>
							</div>
						</div>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	</section>
<?php endif ?>

<!-- Reservation -->
<section class="bg-white">
	<div class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
			<div class="relative z-10 lg:py-16">
				<div class="relative h-64 sm:h-80 lg:h-full">
					<img alt="House" src="https://lh3.googleusercontent.com/p/AF1QipN8a81v7JBYyD11uKAfHeUqLvFrjnR_o2QHrmjG=s1360-w1360-h1020" class="absolute inset-0 h-full w-full object-cover" />
				</div>
			</div>

			<div class="relative flex items-center bg-gray-100">
				<span class="hidden lg:absolute lg:inset-y-0 lg:-left-16 lg:block lg:w-16 lg:bg-gray-100"></span>

				<div class="p-8 sm:p-16 lg:p-24">
					<h2 class="text-2xl font-bold sm:text-3xl text-brown">
						Caribu Coffee & Friends
					</h2>

					<p class="mt-4 text-gray-600 font-medium">
						We serve reservations for events such as birthdays, farewells, graduations, and other celebrations!
					</p>

					<a href="https://wa.me/62811385155" class="mt-8 inline-block rounded-lg bg-brown-md px-12 py-3 text-sm font-medium text-white hover:bg-brown focus:outline-none focus:ring-4 focus:ring-blue-300">
						Get in touch
					</a>
				</div>
			</div>
		</div>
	</div>
</section>