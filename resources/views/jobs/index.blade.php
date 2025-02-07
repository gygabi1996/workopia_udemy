<x-layout>
    <h1>Jobs available</h1>
    <ul>
        @forelse($jobs as $job)
            <li>
                <a href="{{route('jobs.show', $job->id)}}">{{ $job->title }} - {{ $job->description }}</a>
            </li>
        @empty
            <li>No jobs available</li>
        @endforelse
    </ul>
</x-layout>
