@extends('layouts.master')

@section('title','Arkiva Dixhitale e Fotografisë')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            @if($errors->any())
                <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            @endif
            <div class="card-header">
                <h4> Edit Author
                    <a href="{{ url('admin/authors') }}" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/update-authors/'.$author->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="" >Name</label>
                        <input type="text" name="name" value="{{$author->name}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Last Name</label>
                        <input type="text" name="last_name" value="{{$author->last_name}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>biography AL</label>
                        <textarea name="biography[al]" rows="5" class="form-control" required>{{$author->biography['al']}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>biography EN</label>
                        <textarea name="biography[en]" rows="5" class="form-control" required>{{$author->biography['en']}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" >Email</label>
                        <input type="text" name="email" value="{{$author->email}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Image</label>
                        <input type="file" name="image"  class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" >Images</label>
                        <input type="file" name="images[]"  class="form-control" multiple>
                    </div>

                    <div class="mb-3">
                        <label for="" >Address</label>
                        <input type="text" name="address" value="{{$author->address}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Age from</label>
                        <input type="text" name="age_from" value="{{$author->age_from}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" >Age to</label>
                        <input type="text" name="age_to" value="{{$author->age_to}}" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
