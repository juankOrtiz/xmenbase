<x-layout>
    <div class="py-12"> 
        <h1>{{ $title->name }}</h1>
        <p>{{ $title->description }}</p>
        <p>Volume N° {{ $title->volume }}</p>
        <p>Category: {{ $title->category }}</p>
        <p>Published from {{ \Carbon\Carbon::parse($title->from)->format('m Y'); }} to {{ \Carbon\Carbon::parse($title->to)->format('m Y'); }}</p>
    </div>

    <ul>
        @forelse ($title->issues as $issue)
            <li>
                <a href="{{ route('issues.show', $issue) }}">{{ $issue->name }}</a>
            </li>
        @empty
            <li>There are currently no issues from this title.</li>
        @endforelse
    </ul>
</x-layout>