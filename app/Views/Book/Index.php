<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book Data System</title>

        <link rel="stylesheet" href="../../css/app.css">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    </head>

    <body>
        <div class="bg-white p-8 rounded-md w-full text-medium">
            <div class=" flex items-center justify-between pb-6 text-medium">
                <div class="text-medium">
                    <h2 class="text-gray-600 font-semibold text-medium">Book Data</h2>
                    <span class="text-xs">All Book Data</span>
                </div>
                <form action="" method="POST">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="keyword" name="keyword"
                            class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search..." required>
                        <button type="submit" id="search" name="search"
                            class="text-white absolute right-2.5 bottom-2.5 bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-r focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Search</button>
                    </div>
                </form>

                <div class="flex items-center justify-between mb-5">
                    <div class="lg:ml-4 ml-1 space-x-8">
                        <a href="/Book/Add"> <button
                                class="block text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-ro-r focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800"
                                type="button">Add Data</button></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        No
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        scope="row">
                                        Name
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        scope="row">
                                        Author
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        scope="row">
                                        ISBN
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        scope="row">
                                        Date Of Publishing
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        scope="row">
                                        Actions
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                $no = 0;
                                
                                foreach ($BookData as $data => $value): 
                                
                                    $no++;
                                ?>

                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                        <p class="text-gray-900 whitespace-no-wrap"><?= $no; ?></p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                        <p class="text-gray-900 whitespace-no-wrap"><?= $value['Name']; ?></p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                        <p class="text-gray-900 whitespace-no-wrap"><?= $value['Author']; ?></p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                        <p class="text-gray-900 whitespace-no-wrap"><?= $value['ISBN']; ?></p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-medium">
                                        <p class="text-gray-900 whitespace-no-wrap"><?= $value['DateOfPublishing']; ?>
                                        </p>
                                    </td>
                                    <td class="px-5 py-5">
                                        <!-- Edit-->
                                        <a href="<?= base_url('Book/Edit/' . $value['ID']); ?>"> <button
                                                class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                                type="button">Edit</button></a>

                                        <!-- Delete -->
                                        <button
                                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                                            type="button" onclick="Delete('<?= $value['ID']; ?>')">Delete</button>
                                    </td>
                                </tr>

                                <?php endforeach; ?>

                                <!-- <tr>
                                    <td colspan="7"
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-medium content-center">
                                        <p class="text-gray-900 whitespace-no-wrap items-center">Data not found!</p>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
        <script src="../../js/script.js">

        </script>
    </body>

</html>
