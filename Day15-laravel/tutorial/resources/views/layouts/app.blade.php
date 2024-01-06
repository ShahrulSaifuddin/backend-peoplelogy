<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>@yield('title', 'Default Title')</h1>
    @hasSection('content')
        <div>@yield('content')</div>
    @else
        <div>no content found</div>
    @endif
</body>

</html>
