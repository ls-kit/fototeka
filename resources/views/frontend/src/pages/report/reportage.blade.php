@extends('frontend.layout.app')
@section('content')
    <div class="container-fluid pb-100" style="margin-top: 30px;">
        <div class="row">
            @foreach($reportages as $reportage)
                <div class="col-12 mb-4">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-2" >
                                <a href="{!! url('/reportage/'.$reportage->id) !!}">
                                    <img src='{{ asset("uploads/reportage/$reportage->image") }}' alt="image" class="img-fluid">
                                    <!-- <div style="background: url('{{ asset("uploads/reportage/$reportage->image") }}') bottom no-repeat;background-size: contain;margin-top:30px;height: 19.5vh"></div> -->
                                </a>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9 col-lg-10" style="display: flex;align-items: flex-end;flex-wrap: wrap;align-content: flex-end">
                                <a href="{!! url('/reportage/'.$reportage->id) !!}" style="text-decoration: none">
                                    <h2 class="bio-text mt-2 mt-md-0" style="font-weight: 500;width: 100%">{{$reportage->name[session('lang') != '' ? session('lang') : 'al']}}</h2>
                                    <p class="bio-text" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;margin-top: 30px;margin-bottom:0;font-size: 16px;font-style: italic">{{$reportage->description[session('lang') != '' ? session('lang') : 'al']}}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
