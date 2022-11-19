@extends('layouts.master')

@section('title','Category')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Edit Tema</h4>
            </div>
            <div class="card-body">

                @if($errors->any())
                    <div class="alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Reportage Name Al</label>
                        <input type="text" name="name[al]" class="form-control" value="{{$category->name['al']}}" required>
                    </div>
                    <div class="mb-3">
                        <label>Reportage Name EN</label>
                        <input type="text" name="name[en]" class="form-control" value="{{$category->name['en']}}" required>
                    </div>

                    <div class="mb-3">
                        <label>Description AL</label>
                        <textarea name="description[al]" rows="5" class="form-control" required>{{$category->description['al']}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Description EN</label>
                        <textarea name="description[en]" rows="5" class="form-control" required>{{$category->description['en']}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" value="{{$category->slug}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image" value="{{$category->image}}" class="form-control">
                    </div>

                    <h6> SEO Tags </h6>
                    <div class="mb-3">
                        <label>Meta title</label>
                        <input type="text" name="meta_title" value="{{$category->meta_title}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Meta Description</label>
                        <input rows="3" name="meta_description" value="{{$category->meta_description}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Meta Keyword</label>
                        <input rows="3" name="meta_keyword" value="{{$category->meta_keyword}}" class="form-control">
                    </div>

                    <h6> Status Mode </h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Navbar Status</label>
                            <input type="checkbox" name="navbar_status" value="{{$category->navbar_status}}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" value="{{$category->status}}">
                        </div>

                        <div class="col-md-6">
                            <button class="btn btn-primary" type="submit">Update Tema</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
