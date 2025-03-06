<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pixel-Postition</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400,500;&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="bg-black text-white font-hanken-grotesk pb-20">
            <div class="px-10">
                 <nav class="flex justify-between items-center  py-4 border-b border-white/10">
                    <div>
                        <a href="">
                            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
                        </a>
                    </div>
                    <div class="space-x-6 font-bold">
                        <a href="#">Job</a>
                        <a href="#">Careers</a>
                        <a href="#">Salaries</a>
                        <a href="#">Companies</a>
                    </div>
                    @auth
                        <div class="space-x-6 font-bold flex">
                            <a href="/jobs/create">Post a Job</a>

                            <form action="/login" method="POST">
                                @csrf
                                @method('DELETE')
                                <button>Log Out</button>
                            </form>
                        </div>
                    @endauth
                    @guest
                     <div class="space-x-6 font-bold">
                        <a href="/register">Sign Up</a>
                        <a href="/login">Login</a>
                     </div>
                       
                    @endguest
                    
                 </nav>

                 <main class="mt-10 max-w-[1200px] mx-auto">
                    {{ $slot }}
                 </main>
            </div>
    </body>
</html>
