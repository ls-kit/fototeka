@extends('frontend.layout.app')
@section('content')
    <div class="top-height"></div>
    <div class="container">
        <h4 class="mt-4">
            @lang('text.list-of-rubrics')
        </h4>
        <div class="row">
            <div class=" col-md-12" id="pills-koleksioni" role="tabpanel" aria-labelledby="pills-koleksioni-tab"
                 style="padding: 20px 0 20px 0;">
                <div class="row gx-5">
                    @foreach($category as $cat)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="card">
                                <div class="">
                                    <a href="/section/{{$cat->id}}">
                                        <img class="collection-image"
                                             src="{{ asset('uploads/category/'.$cat->image) }}">
                                    </a>
                                </div>
                                <div>
                                    <div class="collection-text">
                                        <h4 class="m-0">
                                            <a class="author-name" href="/section/{{$cat->id}}">
                                                {{$cat->name}}
                                                <span class="dropdown-arrow-span"><i class="fa fa-chevron-down dropdown-arrow"></i></span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-height"></div>
@endsection
