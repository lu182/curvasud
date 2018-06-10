
<div class="top-right links">
    @auth
        <a href="{{ url('/home') }}">LOGUEADO</a>
    @else
        <a href="{{ route('login') }}">NO LOGUEADO</a>
    @endauth
</div>
