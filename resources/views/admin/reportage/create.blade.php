@extends('layouts.master')

@section('title','add reportage')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Add Reportage</h4>
            </div>
            <div class="card-body">

                @if($errors->any())
                    <div class="alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/add-reportage') }}" method="POST" enctype="multipart/form-data">
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
                        <input name="description[al]" rows="5" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Description EN</label>
                        <input name="description[en]" rows="5" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Year</label>
                        <input type="number" name="year" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary" type="submit">Save Category</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
