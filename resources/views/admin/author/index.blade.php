@extends('layouts.master')

@section('title','Arkiva Dixhitale e Fotografisë')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4> View Authors
                    <a href="{{ url('admin/add-author') }}" class="btn btn-primary float-end">Add Author</a>
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
                            <td>Biography</td>
                            <td>Email</td>
                            <td>Image</td>
                            <td>Images</td>
                            <td>year</td>
                            <td>Address</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($authors as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->last_name}}</td>
                                <td>
                                    AL: {{$item->biography['al']}} <br>
                                    EN: {{$item->biography['en']}} <br>
                                </td>
                                <td>{{ $item->email}}</td>
                                <td>
                                    <img src="{{ asset('uploads/author/'.$item->image) }}" width="100px" height="100px" alt="Img">
                                </td>
                                <td>
                                    @if($item->images != null)
                                        @foreach($item->images as $image)
                                            <img src="{{ asset('uploads/author/'.$image) }}"  height="100px" alt="Img">
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{ $item->age_from}} - {{ $item->age_to}}</td>
                                <td>{{ $item->address}}</td>
                                <td>
                                    @if($item->order!=count($authors))
                                        <a href="/admin/author/{{$item->id}}/down" style="color: #888ea8; font-size:20px;" ><i class="fa fa-arrow-down"></i></a>
                                    @endif
                                    @if($item->order!=1)
                                        <a href="/admin/author/{{$item->id}}/up" style="color: #888ea8; font-size:20px;" > <i class="fa fa-arrow-up"></i></a>
                                    @endif
                                    <a href="{{ url('admin/author/'.$item->id.'/gallery') }}" class="btn btn-primary">gallery</a>
                                    <a href="{{ url('admin/authors/'.$item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/delete-authors/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
