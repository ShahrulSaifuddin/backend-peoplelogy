{{-- php in js --}}
{{-- @php
    $user = 'shahrul';
    $users = ['john', 'mike', 'anna', 'peter'];
@endphp --}}

{{-- <script>
    const name = @json($user);
    console.log(name);
    const users = @json($users);
    console.log(users);
    users.forEach(element => {
        console.log(element);
    });
</script> --}}

{{-- @extends('layouts.app')

@for ($i = 0; $i < 3; $i++)
    @push('content')
        <h2>main content</h2>
    @endpush
@endfor --}}

<a href="{{ route('users') }}">users</a>
