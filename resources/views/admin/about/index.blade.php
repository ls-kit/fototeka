@extends('layouts.master')

@section('title','Arkiva Dixhitale e Fotografisë')
@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4> View About Content
                    <a href="{{ url('admin/add-about') }}" class="btn btn-primary float-end">Add About Content</a>
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
                        <td>Description</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($about as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{!! $item->description !!}</td>
                                <td>
                                    <a href="{{ url('admin/about/'.$item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/delete-about/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
