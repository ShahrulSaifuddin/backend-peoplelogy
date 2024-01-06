{{-- <a href="{{ route('about') }}">about</a>

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
</ul> --}}

{{-- @include('pages.header', ['name' => 'shahrul']) --}}

{{-- @php
    $fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'orange'];
    $boolean = true;
@endphp --}}

{{-- @include('pages.header', ['name' => $fruits]) --}}

{{-- @includeWhen($boolean, 'pages.header', ['name' => $fruits]) --}}

{{-- @includeUnless($boolean, 'pages.header', ['name' => $fruits]) --}}

@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    @include('pages.header')
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto ea pariatur, quia quam debitis blanditiis,
        nesciunt quaerat molestiae atque eligendi sed id officiis repellat eveniet suscipit eaque. Dignissimos amet mollitia
        quibusdam omnis officia vitae ipsum eligendi, voluptates iste totam porro doloribus corporis consequatur velit
        temporibus deserunt optio reprehenderit ipsa dolorem distinctio tempora at voluptas. Ad, beatae assumenda.
        Reprehenderit nostrum beatae veritatis? Unde, exercitationem quis. Ratione laborum expedita excepturi at culpa
        inventore facilis dolor quae, atque explicabo corrupti ipsa quod labore tempora doloremque aperiam sit magnam
        accusantium molestias quam! Mollitia explicabo odit qui cumque nam vel consequuntur voluptas ullam maxime
        aspernatur!</p>
    @include('pages.footer')
@endsection
