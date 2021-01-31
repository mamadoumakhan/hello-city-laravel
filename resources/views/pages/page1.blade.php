@extends('app')
      @section('titre',' About us | '.config('app.name'))
    
      @section('content')
        <img src="{{asset('images/images2.jpg')}}" alt="images de mettez vous à laise" class="h-32 mt-12 my-12 rounded-full shadow-md">
        <p>built with <span class="text-pink-500">&hearts;</span> by makhan traore</p>
        <p>came back to first page <a class="text-indigo-500 hover:text-indigo-100 underline " href="{{route('home')}}"></a></p>
      @endsection