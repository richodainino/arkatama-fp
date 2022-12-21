<?php
$session = session();
$error = $session->getFlashdata('error');
?>

<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
        <h1 class="text-center text-2xl font-bold text-brown sm:text-3xl">
            Register your new account
        </h1>

        <?php if ($error) { ?>
            <div class="absolute right-0 top-0 p-8 max-w-sm dark:bg-gray-900">
                <div id="successAlert" role="alert" class="bg-white rounded-xl border border-gray-100 p-4 shadow-xl">
                    <div class="flex items-center gap-4">
                        <img src="https://www.svgrepo.com/show/111218/error.svg" alt="" class="my-auto h-6">

                        <div class="flex-1">
                            <strong class="block font-medium text-gray-900"> Failed </strong>

                            <p class="mt-1 text-sm text-gray-700">
                                <?php
                                foreach ($error as $err) {
                                    echo $err . '<br>';
                                }
                                ?>
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
        <?php } ?>

        <form action="/valid_register" method="POST" class="mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl">
            <div>
                <label for="fullname" class="text-sm font-medium">Full name</label>

                <div class="relative mt-1">
                    <input type="text" id="fullname" name="fullname" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter full name" required />

                    <img src="https://img.icons8.com/tiny-glyph/512/user.png" alt="" class="absolute my-auto inset-y-0 right-4 inline-flex items-center h-5 opacity-40">
                </div>
            </div>

            <div>
                <label for="username" class="text-sm font-medium">Username</label>

                <div class="relative mt-1">
                    <input type="text" id="username" name="username" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter username" required />

                    <span class="absolute inset-y-0 right-4 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </span>
                </div>
            </div>

            <div>
                <label for="password" class="text-sm font-medium">Password</label>

                <div class="relative mt-1">
                    <input type="password" id="password" name="password" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter password" required />

                    <span class="absolute inset-y-0 right-4 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </span>
                </div>
            </div>

            <div>
                <label for="confirm" class="text-sm font-medium">Password Confirmation</label>

                <div class="relative mt-1">
                    <input type="password" id="confirm" name="confirm" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Enter password confirmation" required />

                    <span class="absolute inset-y-0 right-4 inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </span>
                </div>
            </div>

            <button type="submit" name="login" class="block w-full rounded-lg bg-brown-md px-5 py-3 text-sm font-medium text-white hover:bg-brown">
                Register
            </button>

            <p class="text-center text-sm text-gray-500">
                Already have an account?
                <a class="underline" href="/login">Login</a>
            </p>
        </form>
    </div>
</div>