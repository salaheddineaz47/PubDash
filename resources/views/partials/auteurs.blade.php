<div class="bg-white rounded-xl shadow-sm p-0 border border-gray-100 overflow-hidden">
    <div class="px-4 py-3 border-b border-gray-100 flex justify-between items-center bg-gray-50">
        <h4 class="text-lg font-semibold text-gray-800">Auteurs</h4>
        <button class="text-gray-400 hover:text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </button>
    </div>
    <div class="p-4">
        @foreach($auteurs as $auteur)
            <x-auteur-item :auteur="$auteur" />
        @endforeach
    </div>
</div>
