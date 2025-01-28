<!-- Edit Modal -->
<div id="editModal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 items-center justify-center overflow-y-auto overflow-x-hidden bg-black bg-opacity-50">
    <div class="relative p-4 w-full max-w-2xl h-auto md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 border-b dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Data</h3>
                <button type="button" class="text-gray-400 hover:text-gray-900 rounded-lg p-1.5 inline-flex items-center" data-modal-close="editModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <!-- Modal body -->
            <form id="editForm"  method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <input type="hidden" id="updatecodeId" name="updatecode_id">
                <div>
                    <label for="editName" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="editName" name="name" class="mt-1 block w-full rounded-lg border-gray-300 p-2" required>
                </div>

                <div id="emailField" class="hidden">
                    <label for="editEmail" class="block text-sm font-medium text-gray-700">Email</label>
                    <textarea id="editEmail" name="email" rows="3" class="mt-1 block w-full rounded-lg border-gray-300 p-2"></textarea>
                </div>
                
                <div id="descriptionField" class="hidden">
                    <label for="editDescription" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="editDescription" name="description" rows="3" class="mt-1 block w-full rounded-lg border-gray-300 p-2"></textarea>
                </div>

                <div class="flex justify-end space-x-3 mt-4">
                    <button type="button" data-modal-close="editModal" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">Update Department</button>
                </div>
            </form>
        </div>
    </div>
</div>