@extends('layouts.master')

@section('title','Categories')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>View gallery <a href="{{url('admin/category/'.$category_id.'/add-gallery')}}" class="btn btn-primary btn-sm float-end">Add gallery</a></h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert">{{ session('message') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Meta</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galleries as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    <img src="{{ asset('uploads/category/'.$item->category_id.'/'.$item->image) }}" width="100px" height="100px" alt="Img">
                                </td>
                                <td>
                                    <ul>
                                        @foreach($item->meta_data as $key => $data)
                                            <li>{!! $key !!} => {!! $data !!}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="{{ url('admin/category/'.$item->category_id.'/edit-gallery/'.$item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/category/'.$item->category_id.'/delete-gallery/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
