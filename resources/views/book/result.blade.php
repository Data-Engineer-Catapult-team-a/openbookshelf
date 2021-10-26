
    <x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl  text-gray-800 leading-tight">
      {{ __('検索結果') }}
    </h2>
  </x-slot>

  <div class="py-12 ">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="overflow-hidden shadow-md sm:rounded-lg ">
        <div class="p-6 bg-purple-150  border-gray-300">
          <table class="text-center w-full border-collapse ">
            <tbody>
            @foreach ($result1 as $row)
              <tr class="hover:bg-grey-lighter border-b border-grey-light ">
                <td class="table-img ">
                  <a href="{{$row['mediumImageUrl']}}">
                  <img src="{{$row['mediumImageUrl']}}" alt="商品画像" >
                  </a>
                </td>
                <td class="py-8 px-6 border-b border-grey-light">
                  <h2 class="text-left font-bold text-lg text-grey-dark">{{$row['title']}}</h3>
                  <p class="text-left text-grey-dark">出版社： {{$row['publisherName']}}</p>
                  <br>
                  <a href="{{$row['itemUrl']}}">
                    <p class="hover:text-purple-800 text-left text-grey-dark underline">URL： {{$row['itemUrl']}}</p>
                  </a>
                  <br>
                </td>
                <div>hello world</div>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

