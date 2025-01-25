<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Grade</th>
                <th>Department</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td class="py-3 px-4">{{ $loop->iteration }}</td>
                    <td class="py-3 px-4">{{ $student->name }}</td>
                    <td class="py-3 px-4">{{ $student->grade ? $student->grade->name : 'N/A' }}</td>
                    <td class="py-3 px-4">{{ $student->department ? $student->department->name : 'N/A' }}</td>
                    <td class="py-3 px-4">{{ $student->email }}</td>
                    <td class="py-3 px-4">{{ $student->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
