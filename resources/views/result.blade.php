    <x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('検索結果') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-gray-200 border-b border-gray-200">
          <table class="text-center w-full border-collapse">
            <thead>
              <td> </td>
                <td class=" bg-grey-lightest font-bold uppercase text-lg text-grey-dark border-b border-grey-light">検索結果
                </td>
            </thead>
            <tbody>
            @foreach ($result1 as $row)
              <tr class="hover:bg-grey-lighter">
                <td class="table-img">
                <img src="{{$row['mediumImageUrl']}}" alt="商品画像">
                </td>
                <td class="py-4 px-6 border-b border-grey-light">
                  <h3 class="text-left font-bold text-lg text-grey-dark">タイトル： {{$row['title']}}</h3>
                  <p class="text-left text-grey-dark">出版社： {{$row['publisherName']}}</p>
                  <a href="{{$row['itemUrl']}}">
                  <p class="text-left text-grey-dark">URL： {{$row['itemUrl']}}</p>
                  </a>
                  <br>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
