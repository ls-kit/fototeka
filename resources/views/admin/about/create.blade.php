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
                <h4> Add About Content </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/add-about') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="" >Description</label>
                        <textarea type="text" name="description" rows="5" id="about-textarea" class="form-control"></textarea>
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save Content</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#about-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
