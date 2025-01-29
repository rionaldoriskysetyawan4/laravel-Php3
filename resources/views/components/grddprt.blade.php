<!-- Modal -->
<div id="createGrddprt" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full h-full bg-black bg-opacity-50">
    <div class="relative p-4 w-full max-w-md">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create Department
                </h3>
                <button type="button" id="closecreateGrddprt" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4">
                <form action="{{ route('departments.store') }}" method="POST">
                    @csrf
                    
                    <!-- Department Name Field -->
                    <div id="departnamefield" class="hidden mb-4">
                        <label for="departname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department Name</label>
                        <input type="text" name="departname" id="departname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <!-- Description Field -->
                    <div id="descnamefield" class="hidden mb-4">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea name="description" id="description" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
                    </div>

                    <!-- Class Name Field -->
                    <div id="clasnamefield" class="hidden mb-4">
                        <label for="clasname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class Name</label>
                        <input type="text" name="clasname" id="clasname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    
                    <!-- Drop Down -->
                    <div>
                        <select id="department_id" name="department_id" class="mt-1 block w-full rounded-lg border-gray-300 p-2 dark:bg-gray-600 dark:border-gray-500 dark:text-white" required>
                            <option value="" disabled selected>Select Department</option>
                            <!-- Add dynamic options for departments -->
                            @foreach ($departments as $department)
                            <option value="{{ $department->id }}" data-department="{{ $department ? $department->name : 'N/A' }}">
                                {{$department ? $department->name : 'N/A' }} - {{ $department->id }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end space-x-3 mt-4">
                        <button type="button" data-modal-close="editModal" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">Update Department</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>