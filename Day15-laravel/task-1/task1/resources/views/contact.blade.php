<h1>contact page</h1>
@if ($contactData)
    <p>number = {{ $contactData }}</p>
@else
    <p>number not found</p>
@endif
<a href="{{ route('nav') }}">Back to nav page</a>
