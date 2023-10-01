<form method="POST" action="{{ url('/logout') }}">
    @csrf
    <!-- @auth -->
    Welcome, {{ auth()->user()->name }}
    <!-- @endauth -->
    <button type="submit">Logout</button>
</form>