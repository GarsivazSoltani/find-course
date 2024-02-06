@extends('layouts.app')

@section('title', 'جستجوی استاندارد')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>انتخاب حرفه‌ی مورد نظر</h1>
                <div class="card">
                    <div class="card-header">
                        استانداردها
                    </div>
                    <div class="card-body">
                        <form action="{{route('find.standard')}}" method="POST" class="form-wrapper cf">
                            @csrf
                            <input type="text" id="standard" name="standard" placeholder="نام استاندارد ..." required>
                            <button type="submit">جستجو</button>
                            <div class="container">
                                <div class="ul list-group">
                                    @foreach ($standards as $standard)
                                        {{-- <li>{{$standard->id}} , {{$standard->name}} , {{$standard->code}} , {{$standard->khooshe_name}}</li> --}}
                                        <li class="list-group-item">{{$standard->name}}
                                            <a href="#">{{$standard->ostanname}}</a>
                                        </li>
                                    @endforeach
                                </div>
                                {{-- <div class="d-flex justify-content-center mt-4">{{ $standards->links() }}</div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection