<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Standard</title>
</head>
<body>
    <h1>انتخاب حرفه‌ی مورد نظر</h1>
    <form action="{{route('standard')}}" method="POST" class="form-wrapper cf">
        @csrf
        {{-- <label for="standard">نام استاندارد:</label><br> --}}
        <input type="text" id="standard" name="standard" placeholder="نام استاندارد ..." required>
        <button type="submit">جستجو</button>
    </form>
    <div class="container">
        <ul>
            @foreach ($standards as $standard)
                {{-- <li>{{$standard->id}} , {{$standard->name}} , {{$standard->code}} , {{$standard->khooshe_name}}</li> --}}
                <div class="btn">
                    <li>{{$standard->name}}
                        <a href="#">{{$standard->khooshe_name}}</a>
                    </li>
                </div>
            @endforeach
        </ul>
    </div>
</body>
</html>