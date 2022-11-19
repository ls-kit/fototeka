@extends('layouts.master')

@section('title','Reportage')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Edit Category Gallery</h4>
            </div>
            <div class="card-body">

                @if($errors->any())
                    <div class="alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/category/'.$category_id.'/update-gallery/'.$gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <h3>Meta info:</h3>
                    <div class="mb-3">
                        <label>Author name</label>
                        <input type="text" name="meta_data[author_name]" value="{!! $gallery->meta_data['author_name'] ?? '' !!}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Author last name</label>
                        <input type="text" name="meta_data[author_last_name]" value="{!! $gallery->meta_data['author_last_name'] ?? '' !!}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="meta_data[title]" value="{!! $gallery->meta_data['title'] ?? '' !!}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <input type="text" name="meta_data[description]" value="{!! $gallery->meta_data['description'] ?? '' !!}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Original date</label>
                        <input type="text" name="meta_data[original_date]" value="{!! $gallery->meta_data['original_date'] ?? '' !!}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Digital date</label>
                        <input type="text" name="meta_data[digital_date]" value="{!! $gallery->meta_data['digital_date'] ?? '' !!}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Physical description</label>
                        <input type="text" name="meta_data[physic_description]" value="{!! $gallery->meta_data['physic_description'] ?? '' !!}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>height</label>
                        <input type="text" name="meta_data[height]" value="{!! $gallery->meta_data['height'] ?? '' !!}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>width</label>
                        <input type="text" name="meta_data[width]" value="{!! $gallery->meta_data['width'] ?? '' !!}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>material</label>
                        <input type="text" name="meta_data[material]" value="{!! $gallery->meta_data['material'] ?? '' !!}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Image</label>
                        @if($gallery->image != null)
                            <img src="{{ asset("uploads/category/$category_id/$gallery->image") }}" alt="" height="80px" width="80px">
                        @endif
                        <input type="file" name="image" class="form-control">
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
