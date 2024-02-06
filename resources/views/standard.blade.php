@extends('layouts.app')

@section('title', 'جستجوی استاندارد')

@section('content')
    <h1>انتخاب حرفه‌ی مورد نظر</h1>
    <form action="{{route('find.standard')}}" method="POST" class="form-wrapper cf">
        @csrf
        <input type="text" id="standard" name="standard" placeholder="نام استاندارد ..." required>
        <button type="submit">جستجو</button>
        <div class="container">
            <ul>
                @foreach ($standards as $standard)
                    {{-- <li>{{$standard->id}} , {{$standard->name}} , {{$standard->code}} , {{$standard->khooshe_name}}</li> --}}
                    <div class="btn">
                        <li>{{$standard->name}}
                            <a href="#">{{$standard->ostanname}}</a>
                        </li>
                    </div>
                @endforeach
            </ul>
        </div>
    </form>
@endsection