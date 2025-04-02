<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PubDash - Publication Dashboard</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                </svg>
                <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-teal-500">PubDash</span>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="text-blue-600 font-medium hover:text-blue-800">Accueil</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Publications</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Auteurs</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Catégories</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-6">
            <div class="w-full md:w-2/3">
                @include('partials.publications', ['publications' => $publications])
            </div>
            <div class="w-full md:w-1/3">
                @include('partials.auteurs', ['auteurs' => $auteurs])
                <div class="mt-6"></div>
                @include('partials.categories', ['categories' => $categories])
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="container mx-auto px-4 py-6">
            <p class="text-center text-gray-500">© 2025 PubDash by SALAH AZ. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
