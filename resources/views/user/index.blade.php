<!-- resources/views/tweet/index.blade.php -->
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/card.css') }}">
</head>
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Recommended User') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <!-- <table class="text-center w-full border-collapse"> -->
            <!-- {{$user}} -->
            <!-- <tbody> -->
              <div class="user_name">
              <p>{{$user -> name}}</p>
              </div>
              @foreach ($reviews as $review)
              <section class="card">
                <div class="card-content">
                  <img class="card-img" src="{{$review->mediumImageUrl}}"></img>
                  <div class="card-title">
                    <a href="{{ route('review.go_personal_review', ['id' =>$review->id])}}">{{$review->title}}</a>
                  </div>
                  <p>★：{{$review->evaluation}}</p>
                  <!-- <p class="card-text">{{$review->comment}}</p> -->
                </div>
                <div class="card-link">
                  <a href="{{ route('review.go_personal_review', ['id' =>$review->id])}}">Review</a>
                </div>
              </section>
              @endforeach
            <!-- </tbody> -->
          <!-- </table> -->
        </div>
      </div>
    </div>




</x-app-layout>

<html>