<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-5">
        <div class="flex items-center space-x-2 mb-3">
            <span class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($publication->date)->format('d/m/Y') }}</span>
            <span class="h-1 w-1 rounded-full bg-gray-300"></span>
            @foreach($publication->categories as $categorie)
                <span class="px-2 py-1 text-xs font-medium rounded-full text-white bg-{{strtolower($categorie->nom)}}-500">
                    {{ $categorie->nom }}
                </span>
            @endforeach
        </div>
        <h3 class="text-xl font-semibold mb-2 text-gray-800">{{ $publication->titre }}</h3>
        <p class="text-gray-600 mb-4">{{ $publication->description }}</p>
        <div class="flex items-center mt-4">
            <div class="bg-blue-100 rounded-full h-10 w-10 flex items-center justify-center text-blue-700 font-bold">
                {{ substr($publication->auteur->nom, 0, 1) }}{{ substr($publication->auteur->nom, strpos($publication->auteur->nom, ' ') + 1, 1) }}
            </div>
            <div class="ml-3">
                <span class="font-medium text-gray-800">{{ $publication->auteur->titre ?? '' }} {{ $publication->auteur->nom }}</span>
                @if($publication->auteur->specialite)
                    <span class="px-2 py-1 text-xs font-medium rounded-full text-white bg-{{strtolower($publication->auteur->specialite)}}-500 ml-2">
                        {{ $publication->auteur->specialite }}
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="border-t border-gray-100 px-5 py-3 bg-gray-50 flex justify-between items-center">
        <div class="flex space-x-4">
            <button class="flex items-center text-gray-500 hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                <span class="text-sm">J'aime</span>
            </button>
            <button class="flex items-center text-gray-500 hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <span class="text-sm">Commenter</span>
            </button>
        </div>
        <button class="text-gray-500 hover:text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
            </svg>
        </button>
    </div>
</div>
