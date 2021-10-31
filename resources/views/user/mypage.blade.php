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
                  <img src="{{$review->mediumImageUrl}}"></img>
                </td>
                <td>
                  <a class="hover:text-purple-800 text-grey-dark underline" href="{{ route('review.go_personal_review', ['id' =>$review->id])}}">{{$review->title}}</a>
                  <p>★：{{$review->evaluation}}</p>
                </td>
              </button>
              <div class="flex">
                <form action="{{ route('review.destroy',$review->id) }}" method="POST" class="text-left">
                  @method('delete')
                  @csrf
                  <button type="submit" class="mr-2 ml-2 text-sm hover:bg-gray-200 hover:shadow-none text-white py-1 px-2 focus:outline-none focus:shadow-outline">
                    <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="black">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </form>
              </div>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</x-app-layout>