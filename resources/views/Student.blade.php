<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <table class="w-full text-sm text-left text-black dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">No</th>
                <th scope="col" class="px-4 py-3">Nama</th>
                <th scope="col" class="px-4 py-3">Grade</th>
                <th scope="col" class="px-4 py-3">Department</th>
                <th scope="col" class="px-4 py-3">Email</th>
                <th scope="col" class="px-4 py-3">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr class="border-b dark:border-gray-700">
                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                <td class="px-4 py-3">{{ $student->name }}</td>
                <td class="px-4 py-3">{{ $student->grade ? $student->grade->name : 'N/A' }}</td>
                <td class="px-4 py-3">{{ $student->department ? $student->department->name : 'N/A' }}</td>
                <td class="px-4 py-3">{{ $student->email }}</td>
                <td class="px-4 py-3">{{ $student->address }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>

{{--  --}}
