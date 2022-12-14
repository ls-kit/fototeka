@extends('frontend.layout.app')
@section('content')
    <div>
        <form action="{{ route('search.content') }}" method="POST">
            @csrf
            <label for="search">Search</label>
            <input type="search" name="search" id="search">
            <button type="submit">Search</button>
        </form>
    </div>

    <div>
        @if (isset($posts))
            <div>
                <h3>Posts</h3>
                @foreach ($posts as $post)
                    <div>
                        <h6>{{ $post->title['en'] }}</h6>
                        <img src="{{ asset("uploads/post/$post->image") }}" alt="{{ $post->title['en'] }}" width="200px">
                        <a href="/collection_details/{{ $post->id }}">See more</a>
                    </div>
                @endforeach
            </div>
        @endif

        @if (isset($post_collections))
            <div>
                <h3>Post Gallery</h3>
                @foreach ($post_collections as $collection)
                    <div>
                        <h6>
                            @if (isset($collection->meta_data['description']['al']))
                                {!! $collection->meta_data['description']['al'] !!},
                            @elseif(!is_array($collection->meta_data['description']))
                                {!! $collection->meta_data['description'] !!},
                            @endif
                        </h6>
                        <img src="{{ asset("uploads/post/$collection->post_id/$collection->image") }}"
                            alt="@if (isset($collection->meta_data['description']['al'])) {!! $collection->meta_data['description']['al'] !!},
                                @elseif(!is_array($collection->meta_data['description']))
                                    {!! $collection->meta_data['description'] !!}, @endif"
                            width="200px">
                        <a href="/collection/{{ $collection->post_id }}/gallery/{{ $collection->id }}">See more</a>
                    </div>
                @endforeach
            </div>
        @endif

        @if (isset($authors))
            <div>
                <h3>Authors</h3>
                @foreach ($authors as $author)
                    <div>
                        <h6>{{ $author->name }}</h6>
                        <img src="{{ asset("uploads/author/$author->image") }}" alt="{{ $author->name }}" width="200px">
                        <a href="/author/{{ $author->id }}">See more</a>
                    </div>
                @endforeach
            </div>
        @endif

        @if (isset($author_collections))
            <div>
                <h3>Author Gallery</h3>
                @foreach ($author_collections as $collection)
                    <div>
                        <h6>
                            @if (isset($collection->meta_data['description']['al']))
                                {!! $collection->meta_data['description']['al'] !!},
                            @elseif(!is_array($collection->meta_data['description']))
                                {!! $collection->meta_data['description'] !!},
                            @endif
                        </h6>
                        <img src="{{ asset("uploads/author/$collection->author_id/$collection->image") }}"
                            alt="@if (isset($collection->meta_data['description']['al'])) {!! $collection->meta_data['description']['al'] !!},
                                @elseif(!is_array($collection->meta_data['description']))
                                    {!! $collection->meta_data['description'] !!}, @endif"
                            width="200px">
                        <a href="/author/{{ $collection->author_id }}/gallery/{{ $collection->id }}">See more</a>
                    </div>
                @endforeach
            </div>
        @endif

        @if (isset($reportages))
            <div>
                <h3>Reportages</h3>
                @foreach ($reportages as $reportage)
                    <div>
                        <h6>{{ $reportage->name['en'] }}</h6>
                        <img src="{{ asset("uploads/reportage/$reportage->image") }}" alt="{{ $reportage->name['en'] }}"
                            width="200px">
                        <a href="/reportage/{{ $reportage->id }}">See more</a>
                    </div>
                @endforeach
            </div>
        @endif

        @if (isset($categories))
            <div>
                <h3>Categories</h3>
                @foreach ($categories as $category)
                    <div>
                        <h6>{{ $category->name['en'] }}</h6>
                        <img src="{{ asset("uploads/category/$category->image") }}" alt="{{ $category->name['en'] }}"
                            width="200px">
                        <a href="/singleCategory/{{ $category->id }}">See more</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
