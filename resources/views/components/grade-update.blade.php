<div id="editGradesModal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 items-center justify-center overflow-y-auto overflow-x-hidden bg-black bg-opacity-50">
    <div class="relative p-4 w-full max-w-2xl h-auto md:h-auto">
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800">
            <div class="flex justify-between items-center pb-4 mb-4 border-b dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Grade</h3>
                <button type="button" class="text-gray-400 hover:text-gray-900 rounded-lg p-1.5 inline-flex items-center" data-modal-close="editGradesModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form id="editGradesForm" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <input type="hidden" id="updatecodeId" name="id">
                <div>
                    <label for="editName" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="editName" name="name" class="mt-1 block w-full rounded-lg border-gray-300 p-2" required>
                </div>
            
                <div>
                    <label for="department_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Department</label>
                    <select id="department_id" name="department_id" class="mt-1 block w-full rounded-lg border-gray-300 p-2 dark:bg-gray-600 dark:border-gray-500 dark:text-white" required>
                        <option value="" disabled>Select department</option>
                        @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>
            
                <div class="flex justify-end space-x-3 mt-4">
                    <button type="button" data-modal-close="editGradesModal" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>