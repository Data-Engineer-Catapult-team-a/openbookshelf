<html>
  <head>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
  </head>

  <body>
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Personal Page') }}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- <table class="text-center w-full border-collapse"> -->
            <!-- <tbody> -->
              @foreach ($reviews as $review)
                  <div id="whoobe-swr0n" class="pt-4 bg-white w-full md:w-56 justify-center items-center shadow px-6 py-4 flex flex-col">
                    <img class="card-img" src="{{$review->mediumImageUrl}}"></img>
                    <h2 class="text-gray-500 text-1xl font-semibold border-b-2 p-3">{{$review->title}}</h2>

                    <div class="mb-10 text-center capitalize p-2" id="whoobe-m2doo">★：{{$review->evaluation}}</div>
                    <div class="flex justify-end mt-4">
                      <a class="font-semibold border-b-2 text-xl font-medium text-indigo-500" href="{{ route('review.go_personal_review', ['id' =>$review->id])}}">Review</a>
                    </div>
                  </div>
              @endforeach
            <!-- </tbody> -->
          <!-- </table> -->
        </div>
      </div>
    </div>

  
  </x-app-layout>
</body>
</html>