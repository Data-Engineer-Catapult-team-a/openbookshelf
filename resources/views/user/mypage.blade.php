<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Search User') }}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-grey-dark border-b border-grey-light">名前：{{$user->name}}</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-grey-dark border-b border-grey-light">所属・役職：{{$user->user_description}}</th>
              </tr>
            </thead>
            <tbody>
          </table>
          <table class="text-center w-full border-collapse">
            @foreach ($reviews as $review)
            <tr class="hover:bg-grey-lighter">
              <button class="text-left font-bold text-lg text-grey-dark">
                <td class="py-4 px-6 ">
                  <img class="" src="{{$review->mediumImageUrl}}"></img>
                </td>
                <td>
                  <a class="hover:text-purple-800 text-grey-dark underline" href="{{ route('review.go_personal_review', ['id' =>$review->id])}}">{{$review->title}}</a>
                  <p>★：{{$review->evaluation}}</p>
                </td>
              </button>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</x-app-layout>