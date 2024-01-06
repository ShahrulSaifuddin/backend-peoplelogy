@php
    $names = ['john', 'anna', 'mike', 'peter'];
@endphp

<ul>
    @foreach ($names as $name)
        @if ($loop->even)
            <li style="color: red">{{ $name }}</li>
        @else
            <li style="color: green">{{ $name }}</li>
        @endif
    @endforeach
</ul>

<script>
    @foreach ($names as $name)
        console.log("{{ $name }}");
    @endforeach
</script>
