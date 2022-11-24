@extends('layouts.master')

@section('title','Edit Post')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>
                    Edit Koleksion
                    <a href="{{ url('admin/posts') }}" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ url('admin/update-post/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Tema</label>
                        <select name="category_id" required class="form-control">
                            <option value=""> -- Select Tema -- </option>
                            @foreach($category as $catitem)
                                <option value="{{$catitem->id}}" {{$post->category_id == $catitem->id ? 'selected':''}}>
                                    {{$catitem->name[session('lang') != '' ? session('lang') : 'al']}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" >Title Al</label>
                        <input type="text" name="title[al]" value="{{$post->title['al']}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" >Title EN</label>
                        <input type="text" name="title[en]" value="{{$post->title['en']}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Author</label>
                        <select name="author_id" class="form-control">
                            @foreach($author as $item)
                                <option value="{{$item->id}}" {{$post->author_id == $item->id ? 'selected':''}}>{{$item->name}} {{$item->last_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" >Description Al</label>
                        <textarea id="editor-1" type="text" name="description[al]" class="form-control">{{$post->description['al']}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" >Description En</label>
                        <textarea id="editor-2" type="text" name="description[en]" class="form-control">{{$post->description['en']}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" >Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" >Image with description</label>
                        <input type="file" name="image_with_description" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Original Date</label>
                        <input type="text" name="original_date" value="{{$post->original_date}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Digital Date</label>
                        <input type="text" name="digital_date" rows="3" value="{{$post->digital_date}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Physic Description</label>
                        <input type="text" name="physic_description" rows="3" value="{{$post->physic_description}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Width</label>
                        <input type="text" name="width" rows="3" value="{{$post->width}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Height</label>
                        <input type="text" name="height" rows="3" value="{{$post->height}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Material</label>
                        <input type="text" name="material" rows="3" value="{{$post->material}}" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary float-end">Save Post</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor-1' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
        .create( document.querySelector( '#editor-2' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
@endsection
