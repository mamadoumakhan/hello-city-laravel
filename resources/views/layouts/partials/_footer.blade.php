<footer class="text-gris-400">
          <p>
             &copy Copyright {{date('Y')}} 
             @if(! Route:: is('about'))
                &middot <a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-100 underline ">About us</a>
             @endif
          </p>
</footer>