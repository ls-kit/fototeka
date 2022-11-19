@extends('layouts.master')

@section('title','author gallery update')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Edit author Gallery</h4>
            </div>
            <div class="card-body">

                @if($errors->any())
                    <div class="alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif
                    @php
                        $meta_data = [
                            'author_name'=>'Author Name',
                            'author_last_name'=>'Author Last Name',
                            'title'=>'Title',
                            'description'=>'Description',
                            'original_date'=>'Original Date',
                            'digital_date'=>'Digital Date',
                            'physic_description'=>'Physical description',
                            'height'=>'Height',
                            'width'=>'Width',
                            'material'=>'Material',
    ]
                    @endphp
                <form action="{{ url('admin/author/'.$author_id.'/update-gallery/'.$gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <h3>Meta info:</h3>
                    @foreach($meta_data as $key=>$md)
                        @foreach(['al','en'] as $lang)
                            <div class="mb-3">
                                <label>{!! $md !!} - {!! $lang !!}</label>
                                <input type="text" name="meta_data[{!! $key !!}][{!! $lang !!}]"
                                       value="@if(isset($gallery->meta_data[$key][$lang])){!! $gallery->meta_data[$key][$lang] !!}@elseif(!is_array($gallery->meta_data[$key])){!! $gallery->meta_data[$key] !!}@endif"
                                       class="form-control">
                            </div>
                        @endforeach
                    @endforeach

                    <div class="mb-3">
                        <label>Image</label>
                        @if($gallery->image != null)
                            <img src="{{ asset("uploads/author/$author_id/$gallery->image") }}" alt="" height="80px" width="80px">
                        @endif
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Image w. Desc</label>
                        @if($gallery->image_with_description != null)
                            <img src="{{ asset("uploads/author/$author_id/$gallery->image_with_description") }}" alt="" height="80px" width="80px">
                        @endif
                        <input type="file" name="image_with_description" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary" type="submit">Update gallery</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
