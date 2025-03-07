<x-layout>

    <x-slot:title>
        Jobs Page
    </x-slot:title>

    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong class="text-blue-500 hover:underline">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
