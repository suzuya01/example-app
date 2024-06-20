@extends('layouts.app')
@section('content')
<div id="home" class="bg-slate-100 w-full pt-16 flex items-center max-lg:h-[300px] max-lg:overflow-hidden">
    <div class="f-carousel w-full" id="myCarousel">
        <div class="f-carousel__viewport">
        <div class="f-carousel__track">
            <div class="f-carousel__slide bg-cover flex items-center " data-lazy-src="{{asset('storage/default/slider1.jpg')}}">
                <p class="uppercase font-bold text-white text-6xl my-auto leading-relaxed pl-32 max-lg:hidden">Эко-продукция алтая <br>премиум качества</p>
            </div>
            <div class="f-carousel__slide bg-cover flex items-center" data-lazy-src="{{asset('storage/default/slider3.jpg')}}">
                <p class="uppercase font-bold text-white text-6xl my-auto leading-relaxed pl-32 max-lg:hidden">Лучшее семейное <br>предприятие россии 2021</p>
            </div>
        </div>
        </div>
    </div>
</div>
<div id="about" class="w-full py-[70px]">
    <div class="container mx-auto flex items-center justify-between w-[1200px] max-lg:px-[10px]">
        <div class="w-[550px] max-lg:w-[414px] max-lg:py-[20px]">
            <p class="text-md uppercase mb-6 tracking-wider">о компании</p>
            <p class="text-4xl uppercase font-semibold mb-8">«Бальзамы Алтая»</p>
            <p class="text-sm text-gray-500 mb-8 font-extralight max-lg:m-1">активно растущая научно-производственная компания. Главный приоритет в работе – высокое качество выпускаемой продукции. Залог успеха предприятия — коллектив увлеченных профессионалов, работающий на базе мощного научного потенциала. Наши специалисты в области фармацевтической технологии, фармакогнозии и химии занимаются разработкой оригинальных рецептур, практическими, научными исследованиями и испытанием выпускаемой продукции. </p>
            <a href="{{route('catalog',['category'=>'all'])}}"><button class="text-sm font-semibold uppercase bg-gradient-to-r from-[#06d6a0] to-[#00a8e8] px-6 py-3 text-white shadow-xl hover:shadow-[#00a6e873] transition duration-200">посмотреть продукцию</button></a>
        </div>
        <div class="w-[550px] max-lg:hidden">
            <img src="{{asset('storage/default/olen.png')}}" alt="" width="">
        </div>
    </div>
    <div class="py-20 text-center bg-slate-100">
        <p class="text-4xl font-semibold mb-3">Производим эко-продукцию для здоровья нации!</p>
        <p class="text-sm text-gray-500 mb-14 max-lg:m-1">Используем лекарственные травы Алтая, натуральные масла, мёд и другие дары природы. Развиваем собственное производство в столице Алтайского края.</p>
        <div class=" container mx-auto w-[1200px] flex gap-14 justify-center mb-10 flex-wrap max-lg:flex-col max-lg:w-full max-lg:items-center">
            <div id="ServBlock" class="z-10 w-[350px] h-[125px] flex items-center justify-center flex-col mb-4 bg-white rounded-3xl py-2 cursor-crosshair">
                <p class="text-3xl font-semibold mb-1">50 000+</p>
                <p class="text-m leading-6 font-extralight">заказов выполнили</p>
            </div>
            <div id="ServBlock" class="z-10 w-[350px] h-[125px] flex items-center justify-center flex-col mb-4 bg-white rounded-3xl py-2 cursor-crosshair">
                <p class="text-3xl font-semibold mb-1">10 лет</p>
                <p class="text-m leading-6 font-extralight">успешной работы</p>
            </div>
            <div id="ServBlock" class="z-10 w-[350px] h-[125px] flex items-center justify-center flex-col mb-4 bg-white rounded-3xl py-2 cursor-crosshair">
                <p class="text-3xl font-semibold mb-1">5 000+</p>
                <p class="text-m leading-6 font-extralight">довольных покупателей</p>
            </div>
            <div id="ServBlock" class="z-10 w-[350px] h-[125px] flex items-center justify-center flex-col mb-4 bg-white rounded-3xl py-2 cursor-crosshair">
                <p class="text-3xl font-semibold mb-1">Оригинальность</p>
                <p class="text-m leading-6 font-extralight">рецептуры бальзамов</p>
            </div>
            <div id="ServBlock" class="z-10 w-[350px] h-[125px] flex items-center justify-center flex-col mb-4 bg-white rounded-3xl py-2 cursor-crosshair">
                <p class="text-3xl font-semibold mb-1">Контракты</p>
                <p class="text-m leading-6 font-extralight">с аптечными сетями</p>
            </div>
        </div>
    </div>
    <div class="container mx-auto flex items-center justify-between w-[1200px] max-lg:my-[10px] max-lg:w-full">
        <div class="w-[550px] max-lg:hidden">
            <img src="{{asset('storage/default/travka.jpg')}}" alt="" width="">
        </div>
        <div class="w-[550px] max-lg:w-[414px] max-lg:py-[20px]">
            <p class="text-md uppercase mb-6 tracking-wider">о компании</p>
            <p class="text-4xl uppercase font-semibold mb-8">Что мы производим</p>
            <p class="text-sm text-gray-500 mb-8 font-extralight max-lg:m-1">Предприятие производит более 100 наименований высококачественной эко-продукции на основе целебных растений (трав Алтая), продукции пчеловодческих и фермерских хозяйств Республики Алтай и Алтайского края. Вих числе ряд востребованных линий: «Горная Сибирь» — линия бальзамов существует уже более 20 лет и включает в себя витаминные, успокаивающие, иммуномодулирующие и очищающие настои;</p>
            <a href="{{route('catalog',['category'=>'all'])}}"><button class="text-sm font-semibold uppercase bg-gradient-to-r from-[#06d6a0] to-[#00a8e8] px-6 py-3 text-white shadow-xl hover:shadow-[#00a6e873] transition duration-200">посмотреть продукцию</button></a>
        </div>
    </div>
</div>
<div id="gallary" class="bg-slate-100 py-16">
    <p class="text-4xl uppercase font-semibold text-center mb-4">Галерея</p>
    <p class="text-sm text-gray-500 mb-14 text-center">Производим эко-продукцию для здоровья нации! Развиваем собственное производство в столице Алтайского края.</p>
    <div class="container mx-auto flex flex-wrap justify-center w-[1000px] mb-16 gap-10 z-0 max-lg:items-center max-lg:flex-col max-lg:w-full">
        <a href="{{asset('storage/default/gallary1.jpg')}}" data-fancybox="gallery" data-caption="">
            <img src="{{asset('storage/default/gallary1.jpg')}}" alt="изображение отсутствует" width="250" class="h-[167px] hover:bg-slate-100 hover:shadow-xl cursor-crosshair transition duration-300 hover:scale-110"/>
        </a>
        <a href="{{asset('storage/default/gallary2.jpg')}}" data-fancybox="gallery" data-caption="">
            <img src="{{asset('storage/default/gallary2.jpg')}}" alt="изображение отсутствует" width="250" class="h-[167px] hover:bg-slate-100 hover:shadow-xl cursor-crosshair transition duration-300 hover:scale-110"/>
        </a>
        <a href="{{asset('storage/default/gallary3.jpg')}}" data-fancybox="gallery" data-caption="">
            <img src="{{asset('storage/default/gallary3.jpg')}}" alt="изображение отсутствует" width="250" class="h-[167px] hover:bg-slate-100 hover:shadow-xl cursor-crosshair transition duration-300 hover:scale-110"/>
        </a>
        <a href="{{asset('storage/default/gallary4.jpeg')}}" data-fancybox="gallery" data-caption="">
            <img src="{{asset('storage/default/gallary4.jpeg')}}" alt="изображение отсутствует" width="250" class="h-[167px] hover:bg-slate-100 hover:shadow-xl cursor-crosshair transition duration-300 hover:scale-110"/>
        </a>
        <a href="{{asset('storage/default/gallary5.jpeg')}}" data-fancybox="gallery" data-caption="">
            <img src="{{asset('storage/default/gallary5.jpeg')}}" alt="изображение отсутствует" width="250" class="h-[167px] hover:bg-slate-100 hover:shadow-xl cursor-crosshair transition duration-300 hover:scale-110"/>
        </a>
        <a href="{{asset('storage/default/gallary6.jpeg')}}" data-fancybox="gallery" data-caption="">
            <img src="{{asset('storage/default/gallary6.jpeg')}}" alt="изображение отсутствует" width="250" class="h-[167px] hover:bg-slate-100 hover:shadow-xl cursor-crosshair transition duration-300 hover:scale-110"/>
        </a>
    </div>
</div>
<div class="container mx-auto w-[1200px] p-10 mb-16 max-lg:w-full">
    <p class="text-4xl uppercase font-semibold mb-16">Наши бренды</p>
    <div class="flex items-center justify-between flex-wrap max-lg:items-center max-lg:flex-col max-lg:gap-2">
        <div><img src="{{asset('storage/default/Altayskiy_balzam_1x.jpg')}}" alt="" width="150px" class="cursor-crosshair grayscale hover:grayscale-0 transition duration-300 ease-in-out"></div>
        <div><img src="{{asset('storage/default/chaga_2x.jpg')}}" alt="" width="150px" class="cursor-crosshair grayscale hover:grayscale-0 transition duration-300 ease-in-out"></div>
        <div><img src="{{asset('storage/default/Gornaya_Sibir_2_2x.jpg')}}" alt="" width="150px" class="cursor-crosshair grayscale hover:grayscale-0 transition duration-300 ease-in-out"></div>
        <div><img src="{{asset('storage/default/Ivan_chay_2x.jpg')}}" alt="" width="150px" class="cursor-crosshair grayscale hover:grayscale-0 transition duration-300 ease-in-out"></div>
        <div><img src="{{asset('storage/default/Zolotoy_olen_altaya_1x.jpg')}}" alt="" width="150px" class="cursor-crosshair grayscale hover:grayscale-0 transition duration-300 ease-in-out"></div>
        <div><img src="{{asset('storage/default/pantogematogen_1x.jpg')}}" alt="" width="150px" class="cursor-crosshair grayscale hover:grayscale-0 transition duration-300 ease-in-out"></div>
    </div>
</div>
<div id="contact"class="bg-slate-100 p-10 max-lg:p-1">
    <div class="container mx-auto w-[1200px] px-10 pb-16 max-lg:w-full max-lg:p-1">
        <p class="text-4xl uppercase font-semibold mb-16">Контакты</p>
        <div class="flex justify-between items-center flex-wrap">
            <div class="">
                <div class="flex items-center gap-10 mb-5">
                    <img src="{{asset('storage/default/telephone.png')}}" alt="" width="30">
                    <div class="">
                        <p class="text-md text-gray-800">+7(961)995-0586</p>
                        <p class="text-sm text-gray-500">С понедельника по пятницу с 9 утра до 18 вечера</p>
                    </div>
                </div>
                <div class="flex items-center gap-10 mt-5 mb-10">
                    <img src="{{asset('storage/default/email.png')}}" alt="" width="30">
                    <div class="">
                        <p class="text-md text-gray-800">magiatrrav@mail.ru</p>
                        <p class="text-sm text-gray-500">Присылайте нам свой вопросы в любое время!</p>
                    </div>
                </div>
                <iframe class="max-lg:w-[400px]" src="https://yandex.ru/map-widget/v1/?um=constructor%3A9d48d22aa50ce36e27dead86a917fa66562bdf56e409c0ab91c34f99c8b8f2c8&amp;source=constructor" width="545" height="400" frameborder="0"></iframe>
            </div>
            <div class="">
                <p class="text-4xl uppercase font-semibold mb-16">Остались вопросы ?</p>
                <form action="{{route('feedback')}}" method="post" class="flex flex-col gap-6">
                    @csrf
                    <input type="text" name="name" id="" placeholder="Ваше имя" class="border p-3 text-sm outline-none" required>
                    <input type="email" name="email" id="" placeholder="Ваш e-mail" class="border p-3 text-sm outline-none" required>
                    <textarea name="text" id="" cols="30" rows="10" placeholder="Сообщение" class="border p-3 text-sm outline-none" required></textarea>
                    <button type="submit" class="bg-[#00a8e8] text-white border p-3 outline-none hover:bg-[#06d6a0] transition duration-300 ease-in-out text-xl font-bold">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
