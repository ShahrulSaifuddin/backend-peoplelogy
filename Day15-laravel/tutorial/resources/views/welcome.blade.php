<a href="{{ route('about') }}">about</a>

<br>

{{ 5 + 5 }}

<br>

{!! '<h1>hello world</h1>' !!}

<br>

@php
    $user = 'shahrul';
    $names = ['john', 'anna', 'mike'];
@endphp

{{ $user }}

<br>

<ul>
    @foreach ($names as $name)
        <li>{{ $loop->iteration }} - {{ $name }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($names as $name)
        @if ($loop->even)
            <li style="color: red">{{ $name }}</li>
        @else
            <li style="color: green">{{ $name }}</li>
        @endif
    @endforeach
</ul>
