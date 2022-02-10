<x-layout>
    <div class="mt-8 ml-4">
        <h1 class="text-4xl font-bold">List of Titles</h1>
    
        <ul>
            @forelse ($titles as $title)
                <li>
                    <a href="{{ route('titles.show', $title) }}">{{ $title->name }}</a>
                </li>
            @empty
                <li>There are currently no titles stored on the database</li>
            @endforelse
        </ul>
    </div>
</x-layout>