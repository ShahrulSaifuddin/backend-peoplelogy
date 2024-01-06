{{-- <h1>header page</h1> --}}
{{-- <p>name: {{ $name }}</p> --}}

{{-- @foreach ($name as $key => $value)
    <h4>{{ $key }} - {{ $value }}</h4>
@endforeach --}}

<h1>Home Page</h1>
<nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
</nav>
