@extends('app')
   @section('titre')
         {{ env('APP_NAME')}}
   @endsection
         
   @section('content')
      <img src="images/images1.jpg" alt="images de bienvenue">
          <h1>welcome to senegal </h1>
          <p>it's currently {{date('h:i A')}}.</p>
   @endsection