@extends('layouts.master')

@section('title','Category')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Add Category</h4>
            </div>
            <div class="card-body">

                @if($errors->any())
                    <div class="alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/add-category') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label>Reportage Name Al</label>
                        <input type="text" name="name[al]" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Reportage Name EN</label>
                        <input type="text" name="name[en]" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Description AL</label>
                        <textarea name="description[al]" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Description EN</label>
                        <textarea name="description[en]" rows="5" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>


                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <h6> SEO Tags </h6>
                    <div class="mb-3">
                        <label>Meta title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Meta Description</label>
                        <input rows="3" name="meta_description" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Meta Keyword</label>
                        <input rows="3" name="meta_keyword" class="form-control">
                    </div>

                    <h6> Status Mode </h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Navbar Status</label>
                            <input type="checkbox" name="navbar_status">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status">
                        </div>

                        <div class="col-md-6">
                            <button class="btn btn-primary" type="submit">Save Category</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
