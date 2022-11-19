@extends('frontend.layout.app')
@section('content')
    <div class="top-height"></div>
    <div class="container">
        <div>
            <section class="container" style="min-height: 1000px;">
                <div class="biography-collection-part" style="padding: 20px;">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation" style="color: #b6b6b6;">
                            <button class="nav-link active" id="pills-koleksioni-tab" data-bs-toggle="pill" data-bs-target="#pills-koleksioni" type="button" role="tab" aria-controls="pills-koleksioni" aria-selected="true"> @lang('text.collection-for-the-rubric') "{{$category->name}}" </button>
                        </li>
                    </ul>
                    <hr style="margin: 0">
                    <div class="tab-content col-md-12" id="pills-tabContent">
                        <div class="tab-pane fade show active col-md-12" id="pills-koleksioni" role="tabpanel" aria-labelledby="pills-koleksioni-tab" style="padding: 20px 0 20px 0;">
                            <div class="row gx-5">
                                @forelse($category->posts as $item)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="card">
                                            <div class="">
                                                <a href="/collection/{{$item->id}}">
                                                    <img class="collection-image"
                                                         src="{{ asset('uploads/post/'.$item->image) }}">
                                                </a>
                                            </div>
                                            <div>
                                                <div class="collection-text">
                                                    <h4 class="m-0">
                                                        <a href="/collection/{{$item->id}}" class="author-name right font-20">
                                                            @lang('text.data')
                                                            <span class="dropdown-arrow-span"><i class="fa fa-chevron-down dropdown-arrow"></i></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @empty
                                    <p> No Content </p>
                                @endforelse
                            </div>
                        </div>
                    </div>
            </section>
        </div>

    </div>
@endsection

<style>
    #pills-tab .nav-item .nav-link.active {
        color: #b6b6b6;
        background: none;
    }
    #pills-tab .nav-item .nav-link {
        color: #b6b6b6 !important;
    }
    #pills-tab .nav-link{
        color: #b6b6b6 !important;
    }
</style>
