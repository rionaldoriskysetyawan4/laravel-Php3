<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
        <div class="w-full md:w-1/2">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search" required="">
                </div>
            </form>
        </div>
        <div
        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
        <button type="button" id="opencreateGrddprt" data-this-depart="false"
            class="flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-700 dark:hover:bg-blue-800 focus:outline-none dark:focus:ring-blue-900">
            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
            </svg>
            Tambahkan
        </button>
    </div>
        <div class="flex items-center space-x-3 w-full md:w-auto">
            <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                type="button">
                <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
                Actions
            </button>
            <div id="actionsDropdown"
                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass
                            Edit</a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="#"
                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                        all</a>
                </div>
            </div>
            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400"
                    viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                        clip-rule="evenodd" />
                </svg>
                Filter
                <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
            </button>
            <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
                <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                    <li class="flex items-center">
                        <input id="apple" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Apple
                            (56)</label>
                    </li>
                    <li class="flex items-center">
                        <input id="fitbit" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="fitbit"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Microsoft
                            (16)</label>
                    </li>
                    <li class="flex items-center">
                        <input id="razor" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="razor" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Razor
                            (49)</label>
                    </li>
                    <li class="flex items-center">
                        <input id="nikon" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="nikon" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nikon
                            (12)</label>
                    </li>
                    <li class="flex items-center">
                        <input id="benq" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="benq" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">BenQ
                            (74)</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <table class="w-full text-sm text-left text-black dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">No</th>
                <th scope="col" class="px-4 py-3">Grade</th>
                <th scope="col" class="px-4 py-3">Department</th>
                <th scope="col" class="px-4 py-3">Student</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades as $grade)
                <tr class="border-b dark:border-gray-700">
                    <td class="px-4 py-3">{{ $grade->name }}</td>
                    <td class="px-4 py-3">{{ $grade->id }}</td>
                    <td class="px-4 py-3">{{ $grade->department ? $grade->department->name : 'N/A' }}</td>
                    <td class="px-4 py-3">
                        <ul>
                            @foreach ($grade->students as $student)
                                <li>{{ $student->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="px-4 py-3">
                        <button id="dropdown-button-{{ $grade->id }}"
                            data-dropdown-toggle="menu-{{ $grade->id }}"
                            class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                            type="button" aria-haspopup="true" aria-expanded="false">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </button>
                        <div id="menu-{{ $grade->id }}"
                            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdown-button-{{ $grade->id }}">
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                </li>
                                <li>
                                    <a data-modal-toggle="editGradesModal" data-id="{{ $grade->id }}"
                                        data-name="{{ $grade->name }}"
                                        data-department-id="{{ $grade->department_id }}"
                                        class="edit-button block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a data-modal-toggle="deleteModal" data-id="{{ $grade->id }}"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @component('components.grddprt', ['departments' => $grades])
    @endcomponent
    {{-- <x-grddprt :departments={{ $students }}></x-grddprt> --}}
    

    <x-updatecode></x-updatecode>
    <x-deletecode></x-deletecode>
    </x-layout>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    <script>
        //Edit
       // Function to show the edit modal and set the form action
function showEditModal(gradesId) {
    const editForm = document.getElementById('editForm');
    if (editForm) {
        editForm.action = `/admin/grades/${gradesId}`;
    }

    const editModal = document.getElementById('editModal');
    if (editModal) {
        editModal.classList.remove('hidden');
        editModal.classList.add('flex');
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const editButtons = document.querySelectorAll('.edit-button');
    const editForm = document.getElementById('editForm');
    const editModal = document.getElementById('editModal');

    // Close modal when clicking outside
    window.addEventListener('click', function (event) {
        if (event.target === editModal) {
            editModal.classList.add('hidden');
            editModal.classList.remove('flex');
        }
    });

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const gradesId = button.getAttribute('data-id');
            const thisEmail = button.getAttribute('data-this-email') === 'false';
            const emailField = document.getElementById('emailField');
            const descriptionField = document.getElementById('descriptionField');
            const gradesIdInput = document.getElementById('updatecodeId');
            const emailInput = document.getElementById('editEmail');
            const descriptionInput = document.getElementById('editDescription');

            if (editForm) {
                editForm.action = `/admin/grades/${gradesId}`;
            }

            if (gradesIdInput) {
                gradesIdInput.value = gradesId;
            }

            if (emailInput) {
                emailInput.value = '';
            }
            
            if (descriptionInput) {
                descriptionInput.value = '';
            }

            if (thisEmail) {
                emailField?.classList.remove('hidden');
                descriptionField?.classList.add('hidden');
            } else {
                emailField?.classList.add('hidden');
                //kalau ada tambahan waktu ganti remove
                descriptionField?.classList.add('hidden');
            }

            if (editModal) {
                editModal.classList.remove('hidden');
                editModal.classList.add('flex');
            }
        });
    });
});

        


        //DELETE
        function showDeleteModal(gradesId) {
            // Set the form action to delete the specific department by ID
            const deleteForm = document.getElementById('deleteForm');
            deleteForm.action = `/admin/grades/${gradesId}`; // Adjust route as needed

            // Show the delete modal
            const deleteModal = document.getElementById('deleteModal');
            deleteModal.classList.remove('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const modalButtons = document.querySelectorAll('[data-modal-toggle="deleteModal"]');

            modalButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const gradesId = button.getAttribute('data-id');
                    showDeleteModal(gradesId);

                    // Show the modal
                    const deleteModal = document.getElementById('deleteModal');
                    deleteModal.classList.remove('hidden');
                });
            });

            // Close modal on cancel
            const closeButtons = document.querySelectorAll('[data-modal-toggle="deleteModal"]');
            closeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const deleteModal = document.getElementById('deleteModal');
                    deleteModal.classList.add('hidden');
                });
            });
        });

        //Tambahkan 

        function showCreateModal() {
    const modal = document.getElementById('createGrddprt');
    if (modal) {
        modal.classList.remove('hidden');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('createGrddprt');
    const openButton = document.getElementById('opencreateGrddprt');
    const closeButton = document.getElementById('closecreateGrddprt');
    const departNameField = document.getElementById('departnamefield');
    const clasNameField = document.getElementById('clasnamefield');
    const descNameField = document.getElementById('descnamefield');
    const departmentId = document.getElementById('department_id');

    // Open modal
    openButton.addEventListener('click', function() {
        // Get data-this-depart attribute - true for department, false for class
        const thisDepart = openButton.getAttribute('data-this-depart') === 'true';
        
        // First hide all fields
        if (departNameField) departNameField.classList.add('hidden');
        if (clasNameField) clasNameField.classList.add('hidden');
        if (descNameField) descNameField.classList.add('hidden');
        if (departmentId) departmentId.classList.add('hidden');

        // Show appropriate fields based on thisDepart value
        if (thisDepart) {
            // For department creation
            if (departNameField) departNameField.classList.remove('hidden');
            if (descNameField) descNameField.classList.remove('hidden');
        } else {
            // For class creation
            if (clasNameField) clasNameField.classList.remove('hidden');
            if (departmentId) {
                departmentId.classList.remove('hidden');
            }
        }

        // Show modal
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    // Close modal
    closeButton.addEventListener('click', function() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    });

    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    });
});
    </script>
