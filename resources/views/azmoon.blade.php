<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Azmoon</title>
</head>
<body>
    <h1>Table Azmoon</h1>
    <ul>
        @foreach ($azmoons as $azmoon)
            <li>{{$azmoon}}</li>
        @endforeach
    </ul>
</body>
</html>