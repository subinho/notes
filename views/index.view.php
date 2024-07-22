<html lang="en" class="h-full bg-gray">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="h-full">

<div class="min-h-full">

    <?php require base_path('views/components/nav.php') ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 text-center">My Notes</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center">
                <a href="<?= $user ? '/create' : '/login' ?>" class="bg-gray-900 rounded-3xl">
                    <svg width="48px" height="48px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<!--                    <rect width="24" height="24" fill="white"/>-->
                        <path d="M12 6V18" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 12H18" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <ul role="list" class="divide-y divide-gray-100 mt-4">
                <?php foreach($notes as $note) : ?>
                    <li class="flex justify-between gap-x-6 py-2">
                        <div class="flex min-w-0 gap-x-4">
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900"><?= htmlspecialchars($note['body'])?></p>
                            </div>
                        </div>
                        <div class="shrink-0 sm:flex sm:flex-col sm:items-end">
                            <form action="/" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                                <button type="submit" class="text-red-500 text-sm leading-6 text-gray-900">delete</button>
                            </form>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</div>

</body>
</html>