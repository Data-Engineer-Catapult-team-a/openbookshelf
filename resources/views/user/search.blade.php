<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Search User') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class=" max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <form class="form-inline my-2 my-lg-0 ml-2">
              <input class="border py-2 px-30 text-grey-darkest" type="search" name="search" id="search" value="{{request('find_user')}}" placeholder="検索したいユーザー名" aria-label="検索">
              <button type="submit" class="border py-2 px-3 text-grey-darkest  font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                検索する
              </button>
            </form>
          </div>
        </div>
        <div class="p-6 bg-white border-b border-gray-200">
          <table class="w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-grey-dark border-b border-grey-light">ユーザー名</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-grey-dark border-b border-grey-light">所属・役職</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6">
                  <button class="text-left font-bold text-lg text-grey-dark"><a href="{{ route('review.go_personal_page', ['user_id' =>$user->id])}}">{{$user->name}}</a></button>
                </td>
                <td class="hover:bg-grey-lighter">
                  <button class="text-left font-bold text-lg text-grey-dark"><a href="{{ route('review.go_personal_page', ['user_id' =>$user->id])}}">{{$user->user_description}}</a></button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>




</x-app-layout>