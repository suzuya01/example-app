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
    <title>magiatrav</title>
</head>
<body>
    <header class="bg-white w-full fixed shadow-sm z-20">
        <div class="container mx-auto flex items-center justify-between w-[1200px]">
            <div class="">
                <a href="{{route('home')}}" class="text-2xl font-semibold uppercase">magiatrav</a>
            </div>
            <ul class="flex items-center gap-6 p-6">
                <li class="text-sm font-medium uppercase hover:text-[#00a8e8] transition duration-200 @if (Route::currentRouteName() == 'home') text-[#00a8e8] @endif "><a href="{{route('home')}}">главная</a></li>
                <li class="text-sm font-medium uppercase hover:text-[#00a8e8] transition duration-200"><a href="{{route('home')}}#about">о нас</a></li>
                <li class="text-sm font-medium uppercase hover:text-[#00a8e8] transition duration-200 @if (Route::currentRouteName() == 'catalog') text-[#00a8e8] @endif "><a href="{{route('catalog',['category'=>'all'])}}">каталог</a></li>
                <li class="text-sm font-medium uppercase hover:text-[#00a8e8] transition duration-200"><a href="{{route('home')}}#contact">контакты</a></li>
            </ul>
        </div>
    </header>
    <main class="w-full min-h-screen">
        @yield('content')
    </main>
    <footer class="bg-zinc-800">
        <div class="container mx-auto w-[1200px] flex justify-between items-center py-10">
            <p class="text-2xl font-semibold uppercase text-white">magiatrav</p>
            <p class="text-white font-thin">Copyright © 2023 <a target="_blank" href="https://vk.com/ilililililililililililililililqp" class="text-gray-500 uppercase hover:underline">magiatrav</a>. All rights reserved</p>
            {{-- <div class="flex gap-2">
                <a href="" class="grayscale opacity-40 hover:scale-110 hover:rotate-[360deg] hover:grayscale-0 hover:opacity-100 transition duration-200"><img src="src/images/telegram (1).png" alt="" width="32px"></a>
                <a href="" class="grayscale opacity-40 hover:scale-110 hover:rotate-[360deg] hover:grayscale-0 hover:opacity-100 transition duration-200"><img src="src/images/discord (1).png" alt="" width="32px"></a>
                <a href="" class="grayscale opacity-40 hover:scale-110 hover:rotate-[360deg] hover:grayscale-0 hover:opacity-100 transition duration-200"><img src="src/images/vk (1).png" alt="" width="32px"></a>
            </div> --}}
        </div>
    </footer>
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Clamp.js/0.5.1/clamp.min.js"></script>
</body>
</html>
