@extends('layouts.master')

@section('title','Reportages')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Reportages <a href="{{url('admin/add-reportage')}}" class="btn btn-primary btn-sm float-end">Add Reportage</a></h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert">{{ session('message') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Reportage Name</th>
                            <th>Description</th>
                            <th>Year</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reportages as $item)
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
                                <td>{{$item->year}}</td>
                                <td>
                                    <img src="{{ asset('uploads/reportage/'.$item->image) }}" width="100px" height="100px" alt="Img">
                                </td>
                                <td>
                                    <a href="{{ url('admin/reportage/'.$item->id.'/gallery') }}" class="btn btn-primary">gallery</a>
                                    <a href="{{ url('admin/edit-reportage/'.$item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/delete-reportage/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
