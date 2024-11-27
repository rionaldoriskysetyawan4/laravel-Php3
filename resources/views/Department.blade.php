<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Departemen</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $dept)
                <tr>
                    <td class="py-3 px-4">{{ $dept->id }}</td>
                    <td class="py-3 px-4">{{ $dept->name }}</td>
                    <td class="py-3 px-4">{{ $dept->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
