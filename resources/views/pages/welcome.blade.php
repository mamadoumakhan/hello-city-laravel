@extends('app')
   @section('titre')
         {{ env('APP_NAME')}}
   @endsection
         
   @section('content')
      <img src="{{asset('/images/images1.jpg')}}" alt="images de bienvenue" class="mt-12 rounded-shadow-md h-32">
          <h1 class="mt-5 text-green-500 sm|text-3xl text-5xl font-semibold ">welcome to senegal </h1>
          <p class="mt-5 text-lg text-yellow-400">it's currently {{date('h:i A')}}.</p>
   @endsection