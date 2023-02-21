<?php $this->extend('Layout/AddTemplate'); ?>
<?php $this->section('addContent'); ?>

<title>Add Book</title>

<div>
    <label for="bookName" class="text-sm font-medium">Name</label>

    <div class="relative mt-1">
        <input type="text" id="bookName" name="bookName"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Book Name" required />
    </div>
</div>

<div>
    <label for="bookAuthor" class="text-sm font-medium">Author</label>

    <div class="relative mt-1">
        <input type="text" id="bookAuthor" name="bookAuthor"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Book Author" required />
    </div>
</div>

<div>
    <label for="bookISBN" class="text-sm font-medium">ISBN</label>

    <div class="relative mt-1">
        <input type="text" id="bookISBN" name="bookISBN"
            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="Book ISBN" required />
    </div>
</div>

<div>
    <label for="dateOfPublishing" class="text-sm font-medium">Date Of Publishing</label>

    <div class="relative mt-1">
        <div class="relative">
            <input type="date"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 pr-14 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                placeholder="Select date" id="dateOfPublishing" name="dateOfPublishing" required>
        </div>
    </div>
</div>

<button type="submit"
    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 w-full">
    Add
</button>

<?php $this->endSection(); ?>
