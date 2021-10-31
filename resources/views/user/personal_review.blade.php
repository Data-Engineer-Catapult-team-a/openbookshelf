<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Personal Review') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <h2>{{$reviews[0]->publisherName}}</h2>
          <h2>{{$reviews[0]->title}}</h2>
          <img src="{{$reviews[0]->mediumImageUrl}}">
          <h3>★：{{$reviews[0]->evaluation}}</h3>
          <p>感想：{{$reviews[0]->comment}}</p>
          <a class="hover:text-purple-800 text-left text-grey-dark underline" href="{{$reviews[0]->itemUrl}}">楽天ショップページ：{{$reviews[0]->itemUrl}}</a>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>