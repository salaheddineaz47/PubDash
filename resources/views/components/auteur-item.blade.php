@props(['auteur'])

<div class="flex items-center mb-4 hover:bg-gray-50 p-2 rounded-lg transition-colors">
    <div class="bg-blue-100 rounded-full h-10 w-10 flex items-center justify-center text-blue-700 font-bold">
        {{ substr($auteur->nom, 0, 1) }}{{ substr($auteur->nom, strpos($auteur->nom, ' ') + 1, 1) }}
    </div>
    <div class="ml-3">
        <div class="font-medium text-gray-800">{{ $auteur->nom }}</div>
        <div class="text-gray-500 text-sm flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
            Nombre des posts {{ $auteur->publications_count }} Posts
        </div>
    </div>
    <div class="ml-auto">
        <button class="text-gray-400 hover:text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
            </svg>
        </button>
    </div>
</div>
