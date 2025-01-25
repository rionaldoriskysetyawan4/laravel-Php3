<!-- Modal Actions -->
<div class="flex justify-center items-center space-x-4">
    <button data-modal-toggle="deleteModal" type="button" 
        class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
        No, cancel
    </button>
    <form action="{{ route('delete.student', $student->id) }}" method="POST" class="inline">
        @csrf
        @method('DELETE') <!-- Use DELETE method instead of POST -->
        <button type="submit" 
            class="py-2 px-3 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
            Yes, I'm sure
        </button>
    </form>
</div>
