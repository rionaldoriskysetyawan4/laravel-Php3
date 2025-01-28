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

                    <!-- Submit Button -->
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>