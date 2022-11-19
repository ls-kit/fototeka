@extends('layouts.master')

@section('title','Add Posts')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            @if($errors->any())
                <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            @endif
            <div class="card-header">
                <h4>
                    Add Koleksion
                    <a href="{{ url('admin/add-post') }}" class="btn btn-primary float-end">Add Koleksion</a>
                </h4>
            </div>
            <div class="card-body">

                <form action="{{ url('admin/add-post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Tema</label>
                        <select name="category_id" class="form-control">
                            @foreach($category as $cateitem)
                                <option value="{{$cateitem->id}}">{{$cateitem->name[session('lang') != '' ? session('lang') : 'al']}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" >Title Al</label>
                        <input type="text" name="title[al]" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" >Title EN</label>
                        <input type="text" name="title[en]" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Author</label>
                        <select name="author_id" class="form-control">
                            @foreach($author as $item)
                                <option value="{{$item->id}}">{{$item->name}} {{$item->last_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" >Description AL</label>
                        <textarea type="text" name="description[al]" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" >Description EN</label>
                        <textarea type="text" name="description[en]" class="form-control"></textarea>
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
                        <input type="text" name="original_date" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Digital Date</label>
                        <input type="text" name="digital_date" rows="3" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Physic Description</label>
                        <input type="text" name="physic_description" rows="3" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Width</label>
                        <input type="text" name="width" rows="3" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Height</label>
                        <input type="text" name="height" rows="3" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="" >Material</label>
                        <input type="text" name="material" rows="3" class="form-control">
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
