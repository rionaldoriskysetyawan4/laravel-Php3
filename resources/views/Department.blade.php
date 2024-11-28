<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <table class="w-full text-sm text-left text-black dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">NO</th>
                <th scope="col" class="px-4 py-3">Department</th>
                <th scope="col" class="px-4 py-3">Description</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $dept)
            <tr class="border-b dark:border-gray-700">
                <td class="px-4 py-3">{{ $dept->id }}</td>
                <td class="px-4 py-3">{{  $dept->name }}</td>
                <td class="px-4 py-3">{{ $dept->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>

