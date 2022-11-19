@extends('frontend.layout.app')
@section('content')
    <div class="container" style="padding-left: 0;margin-top: 60px;">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4" >
                        <div style="background: url('{{ asset("uploads/category/$category->image") }}') left top no-repeat;background-size: contain;width: 100%;height: 60vh"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h2 class="bio-text" style="font-weight: 600;width: 100%;">{{$category->name[session('lang') != '' ? session('lang') : 'al']}}</h2>
                        <p class="bio-text" style="margin-top: 30px;font-size: 17px;">{{$category->description[session('lang') != '' ? session('lang') : 'al']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

