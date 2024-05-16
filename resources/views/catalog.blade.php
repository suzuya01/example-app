@extends('layouts.app')
@section('content')
<div id="catalog" class="container w-[1200px] mx-auto pt-[115px]">
    <div id="blockCategoris" class="flex gap-3">
        <button class="text-sm uppercase rounded-3xl bg-gray-200 py-2 px-5 hover:bg-gray-300 transition duration-500 ease-in-out">всё</button>
        <button class="text-sm uppercase rounded-3xl bg-gray-200 py-2 px-5 hover:bg-gray-300 transition duration-500 ease-in-out">бальзамы</button>
        <button class="text-sm uppercase rounded-3xl bg-gray-200 py-2 px-5 hover:bg-gray-300 transition duration-500 ease-in-out">эликсиры</button>
        <button class="text-sm uppercase rounded-3xl bg-gray-200 py-2 px-5 hover:bg-gray-300 transition duration-500 ease-in-out">чай</button>
        <button class="text-sm uppercase rounded-3xl bg-gray-200 py-2 px-5 hover:bg-gray-300 transition duration-500 ease-in-out">травы</button>
    </div>
    <div id="Products" class="py-10 flex items-center justify-start flex-wrap gap-16">
        @foreach ($products as $product)
        <a href="{{route('product',['product'=>$product])}}">
            <div id="cardProduct" class="w-[350px] h-[470px] hover:shadow-md transition duration-500 ease-in-out my-2 flex flex-col justify-between">
                <img src="{{asset('storage/'.$product->img)}}" alt="изображение отсутствует" class="h-[300px] mx-auto">
                <div id="ProductInfo" class="py-3 px-4">
                    <p id="ProductName" class="text-l font-bold uppercase py-2">{{$product->name}}</p>
                    <p id="ProductDesc" class="text-sm text-gray-400 truncate">{{$product->description}}</p>
                    <button onclick="document.location='{{route('product',['product'=>$product])}}'" class="croshair text-white w-full font-bold uppercase bg-gray-300 hover:bg-[#00a8e8] transition duration-500 ease-in-out py-2 mt-3">подробнее</button>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
