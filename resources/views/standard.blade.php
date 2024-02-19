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
                        <form action="{{route('find.standard')}}" method="POST" class="form-wrapper cf" id="findForm">
                            @csrf
                            <div class="input-group mb-3">
                                <button class="btn btn-primary order-2" id="btnFindStandard" type="submit" id="button-addon1">جستجو</button>
                                <input type="text" class="form-control" id="standard" name="standard" placeholder="نام استاندارد ..." aria-label="Example text with button addon" aria-describedby="button-addon1">
                            </div>
                            {{-- <input type="text" class="form-control" id="standard" name="standard" placeholder="نام استاندارد ..." required>
                            <button type="submit" class="btn btn-primary">جستجو</button> --}}
                            <div class="container">
                                <div class="ul list-group" id="standardList">
                                    @foreach ($standards as $standard)
                                        <a href="#" class="list-group-item list-group-item-action">{{$standard->name}} | {{$standard->ostanname}}</a>
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