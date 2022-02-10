<x-layout>
    <div class="mt-8 ml-4">
        <h1 class="text-4xl font-bold">List of Issues</h1>
    
        <ul>
            @forelse ($issues as $issue)
                <li>
                    <a href="{{ route('issues.show', $issue) }}">{{ $issue->name }}</a>
                </li>
            @empty
                <li>There are currently no issues stored on the database</li>
            @endforelse
        </ul>
    </div>
</x-layout>