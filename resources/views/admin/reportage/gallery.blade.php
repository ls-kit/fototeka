@extends('layouts.master')

@section('title','Reportages')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>View gallery <a href="{{url('admin/reportage/'.$reportage_id.'/add-gallery')}}" class="btn btn-primary btn-sm float-end">Add gallery</a></h4>
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
                            <th>Image with meta</th>
                            <th>Meta</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galleries as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    <img src="{{ asset('uploads/reportage/'.$item->reportage_id.'/'.$item->image) }}" width="100px" height="100px" alt="Img">
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/reportage/'.$item->reportage_id.'/'.$item->image_with_description) }}" width="100px" height="100px" alt="Img">
                                </td>
                                <td>
                                    <ul>
                                        @foreach($item->meta_data as $key => $data)
                                            <li>{!! $key !!} =>
                                                @foreach(['al','en'] as $lang)
                                                    {!! $lang !!}: @if(isset($data[$lang])){!! $data[$lang] !!}
                                                    @elseif(!is_array($data))
                                                        {!! $data !!}
                                                    @endif |
                                                @endforeach
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="{{ url('admin/reportage/'.$item->reportage_id.'/edit-gallery/'.$item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/reportage/'.$item->reportage_id.'/delete-gallery/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
