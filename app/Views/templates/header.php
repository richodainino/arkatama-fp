<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="image/png" href="<?= base_url("images/caribu lingkaran.png") ?>" />
	<title>Caribu Coffee & Friends</title>

	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
	<script src="https://cdn.tailwindcss.com/?plugins=forms"></script>
	<script>
		tailwind.config = {
			darkMode: 'class',
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

<body>