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
                <h4> Update Terms and Conditions Page </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/update-terms') }}" method="POST">
                    @method('PUT')
                    @csrf

                    <div class="mb-3">
                        <label>Terms and Conditions</label>
                        <textarea id="editor-1" name="description" rows="5" class="form-control">{{ $terms->description }}</textarea>
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Update</button>
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
    </script>
@endsection
