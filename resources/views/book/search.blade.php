<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('検索フォーム') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <form action="{{ route('search')}}" method="GET" name="search">
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest">
                検索したい本
              </label>
              <div class="container mx-auto flex justify-between  items-center">
                <input class="border py-2 px-30 text-grey-darkest" type="text" name="search" id="search">
                <button type="submit" class="border py-2 px-3 text-grey-darkest  font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                  検索する
                </button>
              </div>
            </div>
          </form>
          @if (session('notReview'))
          <div class="alert alert-danger">
            {{ session('notReview') }}
          </div>

          @endif
          @if (session('notBook'))
          <div class="alert alert-danger">
            {{ session('notBook') }}
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</x-app-layout>