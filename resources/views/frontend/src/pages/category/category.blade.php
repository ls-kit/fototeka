@extends('frontend.layout.app')
@section('content')
    <div class="container catergory-box">
        @foreach($categories as $category)
            <div class="row align1">
                <div class="col-12 col-sm-4 col-md-3 collectionImageDiv">
                    <img src='{{ asset("uploads/category/$category->image") }}' alt="" class="img-fluid">
                    <!-- <div style=" background: url('{{ asset("uploads/category/$category->image") }}' ) no-repeat;background-size: contain;margin-top:30px;width: 100%;height: 30vh;margin-bottom: 15px" class="cover1"></div> -->
                </div>
                <div class="col-12 col-sm-8 col-md-6" style="display: flex;align-items: flex-end;flex-wrap: wrap;align-content: flex-end">
                    <h2 class="bio-text mt-3 mt-sm-0" style="font-weight: 600;width: 100%">{{$category->name[session('lang') != '' ? session('lang') : 'al']}}</h2>
                    <p class="bio-text collectionParagraph mt-2 mb-0">
                        {{substr($category->description[session('lang') != '' ? session('lang') : 'al'],0,390)}}
                        <a href="{!! url('/singleCategory/'.$category->id) !!}" class="read_more">
                            @lang('text.read_more')
                        </a>
                    </p>

                </div>
            </div>
        @endforeach
    </div>
@endsection
