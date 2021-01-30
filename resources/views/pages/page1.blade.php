@extends('app')
      @section('titre',' About us | '.config('app.name'))
    
      @section('content')
        <img src="images/images2.jpg" alt="images de mettez vous à laise">
        <p>built with &hearts; by makhan traore</p>
        <p>came back to first page <a href="{{route('home')}}"></a></p>
      @endsection