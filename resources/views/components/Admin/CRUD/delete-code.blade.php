<!-- Modal -->
<div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-800 bg-opacity-50">
    <div class="relative p-4 w-full max-w-md bg-white rounded-lg shadow dark:bg-gray-800">
        <!-- Modal Content -->
        <div class="relative text-center sm:p-5">
            <!-- Close Button -->
            <button type="button" class="absolute top-2.5 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>

            <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>

            <!-- Modal Actions -->
            <div class="flex justify-center items-center space-x-4">
                <button data-modal-toggle="deleteModal" type="button" 
                    class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 dark:focus:ring-gray-600">
                    No, cancel
                </button>
                <form id="deleteForm" action="" method="POST">
                    @csrf
                    @method('DELETE') <!-- Method spoofing for DELETE -->
                    <button type="submit" 
                        class="py-2 px-3 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                        Yes, I'm sure
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
