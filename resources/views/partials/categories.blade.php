<div class="bg-white rounded-xl shadow-sm p-0 border border-gray-100 overflow-hidden">
    <div class="px-4 py-3 border-b border-gray-100 flex justify-between items-center bg-gray-50">
        <h4 class="text-lg font-semibold text-gray-800">Catégories</h4>
        <button class="text-gray-400 hover:text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </button>
    </div>
    <div class="p-4">
        <ul>
            @foreach($categories as $categorie)
                <li class="mb-2 py-2 px-3 rounded-lg hover:bg-gray-50 transition-colors flex items-center">
                    <span class="w-3 h-3 rounded-full bg-{{strtolower($categorie->nom)}}-500 mr-2"></span>
                    <span>{{ $categorie->nom }}</span>
                    <span class="ml-auto text-gray-400 text-sm">{{ $categorie->publications_count ?? 0 }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
