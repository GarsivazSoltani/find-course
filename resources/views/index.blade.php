<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find Course</title>
</head>
<body>
    <h1>DataBase Load</h1>
    <ul>
        {{-- @foreach ($tesult as $row)
            <li>{{$row}}</li>
        @endforeach --}}

        @foreach ($standards as $standard)
            <li>{{$standard->name}} | {{$standard->khooshe_name}}</li>
        @endforeach
    </ul>
</body>
</html>