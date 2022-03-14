<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lara Video Games</title>
</head>
<body class="bg-orange-900 text-white">

    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex flex-col lg:flex-row items-center">
                <a href="/">
                    <img src="images/wall.jpg" alt="logo" class="w-32 flex-none rounded-3xl">
                </a>
                <ul class="flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Comming soon</a></li>
                </ul>
            </div>

            <div class="flex items-center mt-6 lg:mt-0">

                <div class="relative">

                    <input type="text" class=" text-center bg-orange-100 text-black text-sm rounded-full px-3 py-1 w-64 focus:outline-none focus:shadow-outline" placeholder="Search...">
                
                    <div class="absolute top-0">
                        <img src="images/search.png" alt="search_logo" class="w-7 flex-none rounded-3xl">
                    </div>

                </div>

                <div class="ml-3">
                    <a href=""><img src="images/wall_cyberpunk.jpg" alt="avatar" class="rounded-full w-8 h-8"></a>
                </div>
                
            </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    

        @include('layouts.footer')
        
    </main>

    @livewireScripts
    
</body>
</html>