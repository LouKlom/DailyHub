<!DOCTYPE html>
<html lang="fr" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Ma Todo List' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full antialiased text-gray-900">

    <div class="flex h-full min-h-screen">
        
        <aside class="w-64 bg-slate-800 text-white flex flex-col justify-between fixed h-full">
            <div>
                <div class="p-6 text-xl font-bold tracking-wider border-b border-slate-700">
                    ☼ DailyHub
                </div>
                
                <nav class="mt-6 px-4 space-y-2">
                    <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg bg-slate-900 text-white transition">
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                        My Tasks
                    </a>
                    <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-slate-300 hover:bg-slate-700 hover:text-white transition">
                        Testing
                    </a>
                </nav>
            </div>

            <div class="p-4 border-t border-slate-700 text-sm text-slate-400">
                LouKlom @2026
            </div>
        </aside>

        <div class="flex-1 pl-64 flex flex-col">
            
            <header class="bg-white border-b border-gray-200 h-16 flex items-center px-8 sticky top-0 z-10">
                <h1 class="text-lg font-semibold text-gray-800">
                    {{ $header ?? 'Tableau de bord' }}
                </h1>
            </header>

            <main class="p-8 flex-1">
                {{ $slot }}
            </main>
            
        </div>
    </div>

</body>
</html>