   <x-app-layout>
       <x-slot name="header">
           <h2 class="font-semibold text-xl  text-gray-800 leading-tight">
               {{ __('レビュー一覧') }}
           </h2>
       </x-slot>

       <div class="py-12 ">
           <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
               <div class="overflow-hidden shadow-md sm:rounded-lg ">
                   <table class="text-center w-full border-collapse ">
                       <tbody>
                           <tr class="hover:bg-grey-lighter border-b border-grey-light ">
                               <td class="table-img ">
                                   <a href="{{$reviews[0]['mediumImageUrl']}}">
                                       <img src="{{$reviews[0]['mediumImageUrl']}}" alt="商品画像" width="150px" height="100px">
                                   </a>
                               </td>
                               <td class="py-8 px-6 border-b border-grey-light">
                                   <h2 class="text-left font-bold text-lg text-grey-dark">{{$reviews[0]['title']}}</h3>
                                       <p class="text-left text-grey-dark">出版社： {{$reviews[0]['publisherName']}}</p>
                                       <br>
                                       <a href="{{$reviews[0]['itemUrl']}}">
                                           <p class="hover:text-purple-800 text-left text-grey-dark underline">URL： {{$reviews[0]['itemUrl']}}</p>
                                       </a>
                                       <br>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <table class="text-center w-full border-collapse ">
                       <tbody>
                           @foreach ($reviews as $review)
                           <tr class="hover:bg-grey-lighter border-b border-grey-light ">
                               <td class="py-8 px-6 border-b border-grey-light">
                                   <p class="text-left text-grey-dark">{{$review->user->name}}</p>
                                   <div class="text-left">
                                       @if($review['evaluation']==1)
                                       <p>★☆☆☆☆</p>
                                       @elseif($review['evaluation']==2)
                                       <p>★★☆☆☆</p>
                                       @elseif($review['evaluation']==3)
                                       <p>★★★☆☆</p>
                                       @elseif($review['evaluation']==4)
                                       <p>★★★★☆</p>
                                       @elseif($review['evaluation']==5)
                                       <p>★★★★★</p>
                                       @endif
                                   </div>
                                   <br>
                                   <h2 class="text-left font-bold text-lg text-grey-dark">感想</h2>
                                   <p class="text-left text-grey-dark">{{$review['comment']}}</p>
                                   <br>
                               </td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </x-app-layout>