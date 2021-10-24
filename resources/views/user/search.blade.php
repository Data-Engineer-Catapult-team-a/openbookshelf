<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Search User') }}
    </h2>
  </x-slot>

  <form class="form-inline my-2 my-lg-0 ml-2">
      <div class="form-group">
      <input type="search" class="form-control mr-sm-2" name="search"  value="{{request('find_user')}}" placeholder="キーワードを入力" aria-label="検索...">
      </div>
      <input type="submit" value="検索" class="btn btn-info">
  </form>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-grey-dark border-b border-grey-light">user</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6 border-b border-grey-light">
                  <button class="text-left font-bold text-lg text-grey-dark"><a href="{{ route('user.go_personal_page', ['user_id' =>$user->id])}}">{{$user->name}}</a></button>
                  <div class="flex">
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>




</x-app-layout>