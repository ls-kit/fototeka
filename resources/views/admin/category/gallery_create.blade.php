@extends('layouts.master')

@section('title','add reportage galleries')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Add category galleries</h4>
            </div>
            <div class="card-body">

                @if($errors->any())
                    <div class="alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/category/'.$category_id.'/add-gallery') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3>Meta info:</h3>
                    <div class="mb-3">
                        <label>Author name</label>
                        <input type="text" name="meta_data[author_name]" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Author last name</label>
                        <input type="text" name="meta_data[author_last_name]" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="meta_data[title]" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <input type="text" name="meta_data[description]" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Original date</label>
                        <input type="text" name="meta_data[original_date]" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Digital date</label>
                        <input type="text" name="meta_data[digital_date]" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Physical description</label>
                        <input type="text" name="meta_data[physic_description]" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>height</label>
                        <input type="text" name="meta_data[height]" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>width</label>
                        <input type="text" name="meta_data[width]" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>material</label>
                        <input type="text" name="meta_data[material]" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary" type="submit">Save gallery</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
