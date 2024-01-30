<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <h1>Table Standard</h1>
    <ul>
        {{-- @foreach ($standards as $standard)
            <li>{{$standard->name}} | {{$standard->khooshe_name}}</li>
        @endforeach --}}
        @foreach ($standards as $standard)
            <li>{{$standard}}</li>
        @endforeach
    </ul>
</body>
</html>