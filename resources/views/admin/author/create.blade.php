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
                <h4> Add New Author </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/add-author') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="" >Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Last Name</label>
                        <input type="text" name="last_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Biography AL</label>
                        <textarea id="editor-1" name="biography[al]" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Biography EN</label>
                        <textarea id="editor-2" name="biography[en]" rows="5" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" >Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" >Images</label>
                        <input type="file" name="images[]"  class="form-control" multiple>
                    </div>

                    <div class="mb-3">
                        <label for="" >Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" >Age from</label>
                        <input type="text" name="age_from" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" >Age to</label>
                        <input type="text" name="age_to" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save Author</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor-1' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
        .create( document.querySelector( '#editor-2' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
@endsection
