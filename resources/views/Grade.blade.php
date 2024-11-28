<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

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
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
