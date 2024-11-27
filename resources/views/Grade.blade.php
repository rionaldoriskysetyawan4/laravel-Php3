<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h1>Tess</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Grade</th>
                <th>Department</th>
                <th>Students</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades as $grade)
                <tr>
                    <td class="py-3 px-4">{{ $grade->id }}</td>
                    <td class="py-3 px-4">{{ $grade->name }}</td>
                    <td class="py-3 px-4">{{ $grade->department ? $grade->department->name : 'N/A' }}</td>
                    <td class="py-3 px-4">
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
