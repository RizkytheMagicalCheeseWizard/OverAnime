@vite('resources/css/app.css')
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold mb-8">Top Anime</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($anime as $item)
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                <img src="{{ $item['images']['jpg']['image_url'] }}" alt="{{ $item['title'] }}" class="rounded-md mb-4 w-full h-64 object-cover">
                <h2 class="text-xl font-semibold">{{ $item['title'] }}</h2>
                <p class="mt-2">Score: {{ $item['score'] }}</p>
                <p>Episodes: {{ $item['episodes'] ?? 'N/A' }}</p>
            </div>
        @endforeach
    </div>
</div>