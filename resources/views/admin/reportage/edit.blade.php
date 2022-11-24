@extends('layouts.master')

@section('title','Reportage')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Edit Reportage</h4>
            </div>
            <div class="card-body">

                @if($errors->any())
                    <div class="alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/update-reportage/'.$reportage->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Reportage Name Al</label>
                        <input type="text" name="name[al]" class="form-control" value="{{$reportage->name['al']}}" required>
                    </div>
                    <div class="mb-3">
                        <label>Reportage Name EN</label>
                        <input type="text" name="name[en]" class="form-control" value="{{$reportage->name['en']}}" required>
                    </div>

                    <div class="mb-3">
                        <label>Description AL</label>
                        <textarea id="editor-1" name="description[al]" rows="5" class="form-control" required>{{$reportage->description['al']}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Description EN</label>
                        <textarea id="editor-2" name="description[en]" rows="5" class="form-control" required>{{$reportage->description['en']}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Year</label>
                        <input type="number" name="year" class="form-control" value="{{$reportage->year}}" required>
                    </div>
                    <div class="mb-3">
                        <label>Image</label>
                        @if($reportage->image != null)
                            <img src="{{ asset("uploads/reportage/$reportage->image") }}" alt="" height="80px" width="80px">
                        @endif
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-primary" href="/admin/reportage/{{$reportage->id}}/gallery">Open gallery</a>
                            <button class="btn btn-primary" type="submit">Update Reportage</button>
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
