<html lang="en" class="h-full bg-gray">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <title>Document</title>
</head>
<body class="h-full">

<div class="min-h-full">

    <?php require base_path('views/components/nav.php') ?>
    <main>
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in to your account</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <ul>
                    <?php if(isset($success['registered'])) :?>
                        <li class="text-green-500 text-xs mt-2"><?= $success['registered'] ?></li>
                    <?php endif ?>
                </ul>
                <form class="mt-8 space-y-6" action="/login" method="POST">
                    <div class="-space-y-px rounded-md shadow-sm">
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                            <div class="mt-2">
                                <input id="email"
                                       name="email"
                                       type="email"
                                       autocomplete="email"
                                       required
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                       placeholder="Email address"
                                       value="<?= old('email') ?>">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                            <div class="mt-2">
                                <input id="password"
                                       name="password"
                                       type="password"
                                       autocomplete="current-password"
                                       required
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                       placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                                class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            Log In
                        </button>
                    </div>

                    <ul>
                        <?php if (isset($errors['email'])) : ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></li>
                        <?php endif; ?>

                        <?php if (isset($errors['password'])) : ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
                        <?php endif; ?>
                    </ul>
                </form>
                <div class="flex justify-end items-center">
                    <p class="text-xs">New here ? <a href="/register" class="text-indigo-600">Create account</a></p>
                </div>
            </div>
        </div>

    </main>
</div>

</body>
</html>