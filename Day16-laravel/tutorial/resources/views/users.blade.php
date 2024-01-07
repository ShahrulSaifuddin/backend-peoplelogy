{{-- <h1>my name is {{ $name }} and I'm from {{ !empty($city) ? $city : 'heaven' }}
</h1> --}}

{{-- @foreach ($users as $id => $user)
    <p>{{ $id }}. My name is {{ $user['name'] }} and i am from {{ $user['city'] }}</p>
@endforeach --}}

<h1>Users Page</h1>
<p>Welcome {{ $name }}</p>

<a href="{{ route('home') }}">Back to home page</a>
