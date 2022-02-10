<x-layout>
    <div class="py-12"> 
        <div class="max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <div class="flex items-center px-6 py-3 bg-gray-900">
                <h1 class="mx-3 text-lg font-semibold text-white">{{ $issue->name }}</h1>
            </div>

            <div class="px-6 py-4">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Issue data</h2>

                <p class="py-1 pt-2 text-gray-700 dark:text-gray-400">Name: {{ $issue->name }}</p>
                <p class="py-1 text-gray-700 dark:text-gray-400">Published at: {{ \Carbon\Carbon::parse($issue->published_at)->format('Y-m-d'); }}</p>
                @if ($issue->cover_image)
                    <img src="{{ $issue->cover_image }}" alt="Cover of {{ $issue->name }}">
                @endif
            </div>

            <div class="px-6 py-4">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Issue stories</h2>
                @forelse ($issue->stories as $story)
                    <p class="py-1 pt-2 text-gray-700 dark:text-gray-400">{{ $story->name }}</p>
                @empty
                    <p>This issue doesn't have stories.</p>
                @endforelse
            </div>

            <div class="flex items-center justify-between px-6 py-4 bg-gray-100">
                <a href="{{ route('issues.index')}}" class="px-2 py-1 text-xs font-semibold text-gray-100 uppercase transition-colors duration-200 transform bg-gray-900 rounded hover:bg-gray-800 focus:bg-gray-400 focus:outline-none">Return to issues</a>
            </div>
        </div>
    </div>
</x-layout>