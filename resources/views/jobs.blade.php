<x-layout>
<x-slot:heading>Jobs</x-slot:heading>
    Hello this Jobs page.
    <ul>
        @foreach($jobs as $job)
            <li><a href="{{ $job['id'] }}">{{ $job['job'] }}</a> </li>
        @endforeach
    </ul>
</x-layout>