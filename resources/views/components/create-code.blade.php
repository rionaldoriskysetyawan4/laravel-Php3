<!-- Modal -->
<div id="createModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah Student
                </h3>
                <button type="button" id="closeModalButton" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="p-6 space-y-6">
                <form id="createForm" method="POST" action="{{ route('students.store') }}" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full rounded-lg border-gray-300 p-2 dark:bg-gray-600 dark:border-gray-500 dark:text-white" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full rounded-lg border-gray-300 p-2 dark:bg-gray-600 dark:border-gray-500 dark:text-white" required>
                    </div>


                    <div>
                        <label for="grade_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Grade</label>
                        <select id="grade_id" name="grade_id" class="mt-1 block w-full rounded-lg border-gray-300 p-2 dark:bg-gray-600 dark:border-gray-500 dark:text-white" required>
                            <option value="" disabled selected>Select Grade</option>
                            <!-- Add dynamic options for departments -->
                            @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}" data-grade="{{ $grade ? $grade->name : 'N/A' }}">
                                {{ $grade ? $grade->name : 'N/A' }} - {{ $grade->id }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="department_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Department</label>
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
                    
                    

                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Address</label>
                        <textarea id="address" name="address" class="mt-1 block w-full rounded-lg border-gray-300 p-2 dark:bg-gray-600 dark:border-gray-500 dark:text-white"></textarea>
                    </div>
                    <div class="flex justify-end space-x-3 mt-4">
                        <button type="button" id="closeModalButton" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Save</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
