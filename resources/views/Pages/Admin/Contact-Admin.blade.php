
<x-Layout-admin>
    <x-slot:title>{{$title}}</x-slot:title>
    <p>Nama: {{ $name }}</p>
    <p>Kelas: {{ $class }}</p>
    <p>LinkedIn: <a href="{{ $linkedin }}" target="_blank">Visit my LinkedIn</a></p>
    <p>GitHub: <a href="{{ $github }}" target="_blank">Visit my GitHub</a></p>
</x-Layout-admin>