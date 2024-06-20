<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('storage/default/biglogo.png')}}" type="image/png">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/panzoom/panzoom.css"/>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/panzoom/panzoom.umd.js"></script>
    <title>{{config('app.name')}}</title>
</head>
<body>
    {{-- Шапка --}}
    <header class="bg-white w-full fixed shadow-sm z-20 max-lg:w-[414px]">
        <div class="container mx-auto flex items-center justify-between w-[1200px] max-lg:flex-col max-lg:w-[400px] max-lg:mx-2">
            <div class="">
                <a href="{{route('home')}}" class="text-2xl font-semibold uppercase">бальзамы алтая</a>
            </div>
            <ul class="flex items-center gap-6 p-6 max-lg:flex-wrap">
                <li class="text-sm font-medium uppercase hover:text-[#00a8e8] transition duration-200 @if (Route::currentRouteName() == 'home') text-[#00a8e8] @endif "><a href="{{route('home')}}">главная</a></li>
                <li class="text-sm font-medium uppercase hover:text-[#00a8e8] transition duration-200"><a href="{{route('home')}}#about">о нас</a></li>
                <li class="text-sm font-medium uppercase hover:text-[#00a8e8] transition duration-200 @if (Route::currentRouteName() == 'catalog') text-[#00a8e8] @endif "><a href="{{route('catalog',['category'=>'all'])}}">каталог</a></li>
                <li class="text-sm font-medium uppercase hover:text-[#00a8e8] transition duration-200"><a href="{{route('home')}}#contact">контакты</a></li>
            </ul>
        </div>
    </header>

    {{-- Секция для основной информации --}}
    <main class="w-full min-h-screen">
        @yield('content')
    </main>

    {{-- Подвал --}}
    <footer class="bg-zinc-800">
        <div class="container mx-auto w-[1200px] flex justify-between items-center py-10 max-lg:flex-col max-lg:w-full">
            <p class="text-2xl font-semibold uppercase text-white">бальзамы алтая</p>
            <p class="text-white font-thin">Copyright © 2023 <a target="_blank" href="https://vk.com/ilililililililililililililililqp" class="text-gray-500 uppercase hover:underline">бальзамы алтая</a>. All rights reserved</p>
        </div>
    </footer>
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Clamp.js/0.5.1/clamp.min.js"></script>
</body>
</html>
