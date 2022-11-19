@extends('layouts.master')

@section('title','Rubrika')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>View Tema <a href="{{url('admin/add-category')}}" class="btn btn-primary btn-sm float-end">Add Tema</a></h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert">{{ session('message') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tema Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    AL: {{$item->name['al']}} <br>
                                    EN: {{$item->name['en']}} <br>
                                </td>
                                <td>
                                    AL: {{$item->description['al']}} <br>
                                    EN: {{$item->description['en']}} <br>
                                </td>
{{--                                <td>{{$item->image}}</td>--}}
                                <td>
                                    <img src="{{ asset('uploads/category/'.$item->image) }}" width="100px" height="100px" alt="Img">
                                </td>
                                <td>{{$item->status == '1' ? 'Hidden':'Shown'}}</td>
                                <td>
                                    <a href="{{ url('admin/edit-category/'.$item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
