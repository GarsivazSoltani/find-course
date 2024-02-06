@extends('layouts.app')

@section('title', 'ثبت نام آزمون ادواری')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>بارگذاری بانک اطلاعاتی</h1>
                <div class="card">
                    <div class="card-header">
                        استانداردها
                    </div>
                    <div class="card-body">
                        <div class="ul list-group">
                            @foreach ($standards as $standard)
                            <li class="list-group-item">{{$standard->name}} | {{$standard->khooshe_name}}</li>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-center mt-4">{{ $standards->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
    
