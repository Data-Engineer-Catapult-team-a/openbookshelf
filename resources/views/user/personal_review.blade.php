<html>
  <head>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
  </head>
  <body>
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Personal Review') }}
    </h2>
  </x-slot>
  


  <section class="card">
    <div class="card-content">
      <div class="">
        <img src="{{$reviews[0]->mediumImageUrl}}">
      
      <h2>{{$reviews[0]->title}}</h2>
      <h3>★：{{$reviews[0]->evaluation}}</h3>
      <p>{{$reviews[0]->comment}}</p>
    </div>
    <div class="card-link">
       <a href="{{$reviews[0]->itemUrl}}">楽天SHOP</a>
    </div>
  </section>
  </x-app-layout>
</body>
</html>