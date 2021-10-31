<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('マイページ') }}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach ($reviews as $review)
          <div id="whoobe-swr0n" class="pt-4 bg-white w-full md:w-56 justify-center items-center shadow px-6 py-4 flex flex-col">
            <img class="card-img" src="{{$review->mediumImageUrl}}"></img>
            <h2 class="text-gray-500 text-1xl font-semibold border-b-2 p-3">{{$review->title}}</h2>

            <div class="mb-10 text-center capitalize p-2" id="whoobe-m2doo">★：{{$review->evaluation}}</div>
            <div class="flex justify-end mt-4">
              <form action="{{ route('review.destroy',$review->id) }}" method="POST" class="text-left">
                @method('delete')
                @csrf
                <button type="submit" class="mr-2 ml-2 text-sm hover:bg-gray-200 hover:shadow-none text-white py-1 px-2 focus:outline-none focus:shadow-outline">
                  <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="black">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
              </form>
            </div>
          </div>
          @endforeach
        </div>
      </div>
</x-app-layout>