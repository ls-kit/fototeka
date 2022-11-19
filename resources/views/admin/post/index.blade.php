@extends('layouts.master')

@section('title','View Posts')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>
                    View Koleksion
                    <a href="{{ url('admin/add-post') }}" class="btn btn-primary float-end">Add Koleksion</a>
                </h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert">{{ session('message') }}</div>
                @endif

                <table  class="table table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Tema</td>
                            <td>Title</td>
                            <td>Author</td>
                            <td>Description</td>
                            <td>Image</td>
                            <td>Image w. Desc</td>
                            <td>Original Date</td>
                            <td>Digital Date</td>
                            <td>Physics Description</td>
                            <td>Dimensions</td>
                            <td>Material</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->category?->name[session('lang') != '' ? session('lang') : 'al'] }}</td>
                                <td>
                                    AL: {{$item->title['al']}} <br>
                                    EN: {{$item->title['en']}} <br>
                                </td>
                                <td>{{ $item->author->name }} {{ $item->author->last_name }}</td>
                                <td>
                                    AL: {{$item->description['al']}} <br>
                                    EN: {{$item->description['en']}} <br>
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/post/'.$item->image) }}" width="100px" height="100px" alt="Img">
                                </td>
                                <td>
                                    @if($item->image_with_description != null)
                                        <img src="{{ asset('uploads/post/'.$item->image_with_description) }}" width="100px" height="100px" alt="Img">
                                    @endif
                                </td>
                                <td>{{ $item->original_date }}</td>
                                <td>{{ $item->digital_date }}</td>
                                <td>{{ $item->physic_description }}</td>
                                <td>{{ $item->width }} x {{ $item->height }}</td>
                                <td>{{ $item->material }}</td>
                                <td>
                                    {!! $item->order !!}
                                    @if($item->order!=count($posts))
                                        <a href="/admin/post/{{$item->id}}/down" style="color: #888ea8; font-size:20px;" ><i class="fa fa-arrow-down"></i></a>
                                    @endif
                                    @if($item->order!=1)
                                        <a href="/admin/post/{{$item->id}}/up" style="color: #888ea8; font-size:20px;" > <i class="fa fa-arrow-up"></i></a>
                                    @endif
                                    <a href="{{ url('admin/post/'.$item->id.'/gallery') }}" class="btn btn-primary">gallery</a>
                                    <a href="{{ url('admin/post/'.$item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/delete-post/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
