@extends('frontend.layout.app')
@section('content')
    <div class="p-5">
        {!! isset($terms->description) ? $terms->description : '' !!}
    </div>
@endsection

