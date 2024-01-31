<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AzmoonHoze</title>
</head>
<body>
    <h1>Table AzmoonHoze</h1>
    <ul>
        @foreach ($azmoonHozes as $azmoonHoze)
            <li>{{$azmoonHoze->date}}</li>
        @endforeach
    </ul>
</body>
</html>