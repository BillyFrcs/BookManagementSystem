<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../../css/app.css">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    </head>

    <body>
        <form action="/Book/Update" method="POST" class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-lg">
                <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
                    Let's Update a Book
                </h1>

                <p class="mx-auto mt-3 max-w-md text-center text-gray-500">
                    I'm gonna put some dirt in your eye.
                </p>

                <div class="mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl">
                    <?= $this->renderSection('updateContent'); ?>
                </div>
            </div>
            </div>
        </form>

        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
    </body>

</html>
