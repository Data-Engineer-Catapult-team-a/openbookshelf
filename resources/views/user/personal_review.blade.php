<html>
  <head>
  </head>
  <body>
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Personal Review') }}
    </h2>
  </x-slot>


  <div class="max-w-md py-4 px-28  bg-white shadow-lg rounded-lg my-2 mx-10 container mx-auto ">
    <div id="whoobe-swr0n" class="pt-4 bg-white w-full md:w-56 justify-center items-center shadow px-6 py-4 flex flex-col text-center overflow-y-auto ">
      <img class="" src="{{$reviews[0]->mediumImageUrl}}"></img>
      <h2 class="text-gray-500 text-1xl font-semibold border-b-2 p-3">{{$reviews[0]->title}}</h2>

      <div class="mb-10 text-center capitalize p-2" id="whoobe-m2doo">★：{{$reviews[0]->evaluation}}</div>
      <p class="text-base">{{$reviews[0]->comment}}</p>
      
      <div class="card-link">
        <a href="{{$reviews[0]->itemUrl}}">楽天SHOP</a>
      </div>
    </div>
  </div>

  </x-app-layout>
</body>
</html>