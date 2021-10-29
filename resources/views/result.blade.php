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
                  @foreach ($result1 as $result1)
                  <tr class="hover:bg-grey-lighter border-b border-grey-light ">
                    <td class="table-img ">
                      <a href="{{$result1['mediumImageUrl']}}">
                        <img src="{{$result1['mediumImageUrl']}}" alt="商品画像" width="300" height="150">
                      </a>
                    </td>
                    <td class="py-8 px-6 border-b border-grey-light">
                      <h2 class="text-left font-bold text-lg text-grey-dark">{{$result1['title']}}</h3>
                        <p class="text-left text-grey-dark">出版社： {{$result1['publisherName']}}</p>
                        <br>
                        <a href="{{$result1['itemUrl']}}">
                          <p class="hover:text-purple-800 text-left text-grey-dark underline">URL： {{$result1['itemUrl']}}</p>
                        </a>
                        <button href type="submit" class="border py-2 px-3 text-grey-darkest  font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                          <a href="{{route('Books.show',$result1['isbn'])}}">レビューを見る</a>
                        </button>
                        <button class="border py-2 px-3 text-grey-darkest  font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                          レビューを投稿する
                        </button>
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