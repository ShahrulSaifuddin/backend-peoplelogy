@foreach ($users as $id => $user)
    <p>{{ $id }}. My name is {{ $user['name'] }} and i am from {{ $user['city'] }}</p>
@endforeach
