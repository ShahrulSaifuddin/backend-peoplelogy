<h1>about page</h1>
@if ($ID)
    <p>ID = {{ $ID }}</p>
@else
    <p>ID = not found</p>
@endif
<a href="{{ route('home') }}">home</a>
