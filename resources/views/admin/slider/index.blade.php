@extends('layouts.master')

@section('title','Arkiva Dixhitale e Fotografisë')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4> View Slider
                    <a href="{{ url('admin/add-slider') }}" class="btn btn-primary float-end">Add Slider</a>
                </h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert">{{ session('message') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Last Name</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($slider as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->last_name}}</td>
                            <td>
                                <img src="{{ asset('uploads/slider/'.$item->image) }}" width="100px" height="100px" alt="Img">
                            </td>
                            <td>
                                <a href="{{ url('admin/delete-slider/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
