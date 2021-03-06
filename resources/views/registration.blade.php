<?php
//  dd($result);
?>
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl  text-gray-800 leading-tight">
      {{ __('レビュー登録') }}
    </h2>
  </x-slot>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
        <div class="p-6 bg-white border-b border-gray-200">
          <form class="mb-6" action="{{ route('Books.store',$result) }}" method="POST">
          @csrf
            <table class="text-center w-full border-collapse ">
            <tbody>
              <tr class="hover:bg-grey-lighter border-b border-grey-light ">
          @foreach ($result as $result)
                <td class="table-img ">
                  <a href="{{$result['mediumImageUrl']}}">
                  <img src="{{$result['mediumImageUrl']}}" alt="商品画像" >
                  </a>
                </td>
                <td class="py-8 px-6 border-b border-grey-light">
                  <h2 class="text-left font-bold text-lg text-grey-dark">{{$result['title']}}</h2>
                  <p class="text-left text-grey-dark">出版社： {{$result['publisherName']}}</p>
                  <a href="{{$result['itemUrl']}}">
                  <p class="hover:text-purple-800 text-left text-grey-dark underline">URL： {{$result['itemUrl']}}</p>
                  </a>
                </td>
              </tr>
            </tbody>
            </table>
            <br>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" >評価</label>
              <select type="integer" name="evaluation">
                @for($i = 1; $i < 6; $i++)
                <option value="<?=$i?>">★{{ $i }}</option>
                @endfor
              </select>
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" >コメント</label>
              <textarea class="border py-5 px-3 text-grey-darkest" id="comment" name="comment" placeholder="200文字まで" rows="3" name="textareaRemarks" cols="50" type="text" ></textarea>
            </div>
              <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              投稿する
              </button>
              @endforeach
          </form>
        </div>
      </div>
    </div>
</x-app-layout>

