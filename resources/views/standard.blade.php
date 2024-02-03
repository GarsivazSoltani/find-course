<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Standard</title>
</head>
<body>
    <h1>Table Standard</h1>
    <form action="{{route('standard')}}" method="POST">
        @csrf
        <label for="standard">نام استاندارد:</label><br>
        <input type="text" id="standard" name="standard">
        <button type="submit">جستجو</button>
    </form>
    <ul>
        @foreach ($standards as $standard)
            <li>{{$standard->id}} , {{$standard->name}} , {{$standard->code}} , {{$standard->khooshe_name}}</li>
        @endforeach
    </ul>
</body>
</html>