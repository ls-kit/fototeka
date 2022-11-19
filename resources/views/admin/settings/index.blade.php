@extends('layouts.master')

@section('title','Arkiva Dixhitale e Fotografisë')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-body">
                @if(session('message'))
                    <div class="alert">{{ session('message') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Page</td>
                        <td>Settings</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $item)
                        <tr>
                            <form action="{!! url('/admin/update-settings/'.$item->id) !!}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->page }}</td>
                                <td>
                                    @foreach($item->settings as $key => $setting)
                                        @if($key == 'logoWhite')
                                            <label for="{!! $key !!}">{!! $key !!}</label>
                                            <input class="form-control" type="file" id="{!! $key !!}" name="settings[{!! $key !!}]">
                                            @if($setting != null)
                                                <img src="{{ asset('uploads/settings/'.$setting) }}" width="100px" height="100px" alt="Img">
                                            @endif
                                            <br>
                                        @elseif($key == 'logoBlack')
                                            <label for="{!! $key !!}">{!! $key !!}</label>
                                            <input class="form-control" type="file" id="{!! $key !!}" name="settings[{!! $key !!}]">
                                            @if($setting != null)
                                                <img src="{{ asset('uploads/settings/'.$setting) }}" width="100px" height="100px" alt="Img">
                                            @endif
                                            <br>
                                        @elseif($key == 'images')
                                            <label for="{!! $key !!}">{!! $key !!}</label>
                                            <input class="form-control" type="file" id="{!! $key !!}" name="settings[{!! $key !!}][]" multiple>
                                            @if($setting != null)
                                                @foreach($setting as $image)
                                                    <img src="{{ asset('uploads/settings/'.$image) }}" width="100px" height="100px" alt="Img">
                                                @endforeach
                                            @endif
                                            <br>
                                        @else
                                            <label for="{!! $key !!}">{!! $key !!}</label>
                                            <textarea class="form-control" type="text" id="{!! $key !!}" name="settings[{!! $key !!}]" >{!! $setting !!}</textarea>
                                            <br>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
