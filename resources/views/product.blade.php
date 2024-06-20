@extends('layouts.app')
@section('content')
<div id="product" class="w-full pt-[115px]">
        <div class="container w-[1200px] mx-auto pt-10 max-lg:w-full">
            <div class="flex items-start justify-between max-lg:items-center max-lg:flex-col">
                <div class="f-panzoom shadow-md" id="myPanzoom">
                    <a href="{{asset('storage/'.$product->img)}}" data-fancybox="gallery" data-caption="">
                        <img class="f-panzoom__content cursor-zoom-in max-lg:w-[350px]" src="{{asset('storage/'.$product->img)}}" alt="изображение отсутствует" width="500px" />
                    </a>
                </div>
                <div id="ProductInfo" class="py-3 px-4 max-w-[600px]">
                    <p id="ProductName" class="text-2xl font-bold py-2">{{$product->name}}</p>
                    <hr class="my-2">
                    <p id="ProductType" class="text-m mb-1"><span class="text-gray-400">Вид: </span>{{$product->category->name}}</p>
                    <p id="ProductDesc" class="text-m mb-1"><span class="text-gray-400">Производство: </span>{{$product->production}}</p>
                    <p id="ProductDesc" class="text-m mb-1"><span class="text-gray-400">Объем, мл: </span>{{$product->vol}}</p>
                    <hr class="my-2">
                    <p class="text-m font-bold">Описание</p>
                    <p id="ProductDesc" class="text-m mb-4">{{$product->description}}</p>
                    <p id="ProductStructure" class="text-m mb-4"><span class="text-m font-bold">Состав: </span>{{$product->structure}}</p>
                    <p id="ProductMoa" class="text-m mb-4"><span class="text-m font-bold">Способ применения: </span>{{$product->moa}}</p>
                    <p id="ProductYslHran" class="text-m mb-4"><span class="text-m font-bold">Условия хранения: </span>{{$product->yslHran}}</p>
                    <p id="ProductTime" class="text-m"><span class="text-m font-bold">Срок годности: </span>{{$product->expirationDate}}</p>
                    <p id="Price" class="text-m"><span class="text-m font-bold">Цена: </span>{{$product->price}} ₽</p>
                    <div class="my-4">
                        <button onclick="document.location='{{route('catalog',['category'=>'all'])}}'" class="text-white w-full font-bold uppercase bg-gray-300 hover:bg-[#00a8e8] transition duration-500 ease-in-out py-2 mt-3">вернуться в каталог</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const container = document.getElementById("myPanzoom");
        const options = { click: "toggleCover" };
        new Panzoom(container, options);
    </script>
@endsection
