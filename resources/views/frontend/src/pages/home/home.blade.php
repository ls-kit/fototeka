@extends('frontend.layout.app')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach($slider as $key => $value)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" @if($key == 0) class="active" @endif aria-current="true" aria-label="Slide {{$key}}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach($slider as $key => $value)
            <div class="carousel-item @if($key == 0) active @endif">
                            <img src="{{ asset('uploads/slider/'.$value->image) }}" class="d-block w-100 slider-img" alt="...">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection

