<x-layout>
    <h1>Jobs available</h1>
    <ul>
        @forelse($jobs as $job)
            <li>
                {{ $job }}
            </li>
        @empty
            <li>No jobs available</li>
        @endforelse
    </ul>
</x-layout>
