@extends('app')
   @section('titre', env('APP_NAME'))
         
   @section('content')
          <h1>welcome to senegal </h1>
          <p>it's currently {{date('h:i A')}}.</p>
   @endsection