<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="image/png" href="<?= base_url("images/caribu lingkaran.png") ?>" />
	<title>Caribu Coffee & Friends</title>

	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						brown: {
							light: '#b49283',
							md: '#70442c',
							DEFAULT: '#5f2814',
						},
					},
					backgroundSize: {
						'110%': '110%',
					},
					dropShadow: {
						'3xl': '0 0 25px rgba(0, 0, 0, 0.5)',
						'4xl': '0 0 45px rgba(0, 0, 0, 0.75)',
					},
				},
			},
		}
	</script>
</head>

<body class="bg-brown">
	<header aria-label="Site Header" class="bg-brown sticky top-0 z-50">
		<div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
			<div class="flex h-20 items-center justify-between">
				<div class="flex-1 md:flex md:items-center md:gap-12">
					<a class="block text-brown" href="/">
						<span class="sr-only">Home</span>
						<img class="h-28 drop-shadow-3xl" src="<?= base_url("images/caribu lingkaran.png") ?>">
					</a>
				</div>

				<div class="md:flex md:items-center md:gap-7">
					<nav aria-label="Site Nav" class="hidden md:block">
						<ul class="flex items-center gap-6 text-sm">
							<li>
								<a class="text-white transition hover:text-white/75" href="/menu">
									Menu
								</a>
							</li>

							<li>
								<a class="text-white transition hover:text-white/75" href="/about">
									About
								</a>
							</li>

							<li>
								<a class="text-white transition hover:text-white/75" href="/about#location">
									Location
								</a>
							</li>
						</ul>
					</nav>

					<div class="flex items-center gap-4">
						<div class="sm:flex sm:gap-4">
							<a class="rounded-md bg-white px-5 py-2.5 text-sm font-md text-brown shadow active:bg-brown-light font-semibold hover:bg-gray-200 text-center" href="/login">
								Login
							</a>

							<div class="hidden sm:flex">
								<a class="rounded-md bg-brown px-5 py-2.5 text-sm font-md text-white border-white border active:bg-brown-light hover:bg-brown-md" href="/register">
									Register
								</a>
							</div>
						</div>

						<div class="block md:hidden">
							<button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>