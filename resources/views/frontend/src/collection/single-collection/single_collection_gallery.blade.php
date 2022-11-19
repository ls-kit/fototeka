@extends('frontend.layout.app')
@section('content')


    <div style="display: flex;align-items: center">
    <div class="container" style="margin-top: 15px;">

        <!-- BACK BUTTON AT IMAGE VIEW LEVEL -->
        <div style="text-align: right;">
            <a href="{!! url('/collection_details/'.$gallery->post_id)!!}" class="backButton">
                <svg height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.87 124.75"><defs><style>.cls-1{fill:#b3b3b3;}</style></defs><path class="cls-1" d="M367.43,186.85l58.1-58.12a4.27,4.27,0,0,1,6,0l.25.26a4.26,4.26,0,0,1,0,6L380,186.85a4.26,4.26,0,0,0,0,6l51.83,51.84a4.26,4.26,0,0,1,0,6l-.25.25a4.26,4.26,0,0,1-6,0l-58.11-58.12A4.26,4.26,0,0,1,367.43,186.85Z" transform="translate(-366.19 -127.49)"/></svg>
                @lang('text.koleksionet_single_back')
            </a>
        </div>

        <div style="align-items: center;display: flex;    justify-content: center;">
            <a href="{!! url("/collection/$gallery->post_id/gallery/$pervious") !!}">
                @include('frontend.layout.left_arrow_single')
            </a>

            <img id="myImg" src="{{ asset('uploads/post/'.$gallery->post_id.'/'.$gallery->image) }}" data-img-desc="{{ asset('uploads/post/'.$gallery->post_id.'/'.$gallery->image_with_description) }}"  style="max-height: 70vh;max-width: 80%;">

            <a href="{!! url("/collection/$gallery->post_id/gallery/$next") !!}">
                @include('frontend.layout.right_arrow_single')
            </a>
        </div>
        <div class="bio-text-images" >


            <!-- PRINTING OF LABELS FROM PHOTOS's DETAILS -->

            @if(isset($gallery->meta_data["author_name"]["al"]))
                {!! $gallery->meta_data["author_name"]["al"] !!}
            @elseif(!is_array($gallery->meta_data["author_name"]))
                {!! $gallery->meta_data["author_name"] !!}
            @endif

            @if(isset($gallery->meta_data["author_last_name"]["al"]))
                {!! $gallery->meta_data["author_last_name"]["al"] !!},
            @elseif(!is_array($gallery->meta_data["author_last_name"]))
                {!! $gallery->meta_data["author_last_name"] !!},
            @endif

            @if(isset($gallery->meta_data["title"]["al"]))
                "{!! $gallery->meta_data["title"]["al"] !!}",
            @elseif(!is_array($gallery->meta_data["title"]))
                "{!! $gallery->meta_data["title"] !!}",
            @endif

            @if(isset($gallery->meta_data["original_date"]["al"]))
                {!! $gallery->meta_data["original_date"]["al"] !!},
            @elseif(!is_array($gallery->meta_data["original_date"]))
                {!! $gallery->meta_data["original_date"] !!},
            @endif

            @if(isset($gallery->meta_data["digital_date"]["al"]))
                {!! $gallery->meta_data["digital_date"]["al"] !!},
            @elseif(!is_array($gallery->meta_data["digital_date"]))
                {!! $gallery->meta_data["digital_date"] !!},
            @endif

            @if(isset($gallery->meta_data["description"]["al"]))
                {!! $gallery->meta_data["description"]["al"] !!},
            @elseif(!is_array($gallery->meta_data["description"]))
                {!! $gallery->meta_data["description"] !!},
            @endif

            @if(isset($gallery->meta_data["physic_description"]["al"]))
                {!! $gallery->meta_data["physic_description"]["al"] !!},
            @elseif(!is_array($gallery->meta_data["physic_description"]))
                {!! $gallery->meta_data["physic_description"] !!},
            @endif

            @if(isset($gallery->meta_data["material"]["al"]))
                {!! $gallery->meta_data["material"]["al"] !!},
            @elseif(!is_array($gallery->meta_data["material"]))
                {!! $gallery->meta_data["material"] !!},
            @endif

            @if(isset($gallery->meta_data["width"]["al"]))
                {!! $gallery->meta_data["width"]["al"] !!} x
            @elseif(!is_array($gallery->meta_data["width"]))
                {!! $gallery->meta_data["width"] !!} x
            @endif

            @if(isset($gallery->meta_data["height"]["al"]))
                {!! $gallery->meta_data["height"]["al"] !!}.
            @elseif(!is_array($gallery->meta_data["height"]))
                {!! $gallery->meta_data["height"] !!}.
            @endif

        </div>
    </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal" style="z-index: 99999;
    align-items: center;
    justify-content: center;">
        <div style="display: flex;justify-content: center;">
            <img class="modal-content" id="img01" style="max-height: 85vh;margin: 0">
            @include('frontend.layout.close-button')

        </div>
    </div>
    <div class="bottom-height"></div>
@endsection

@section('scripts')
    <script>
        // Get the modal
        let modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        let img = document.getElementById("myImg");
        let modalImg = document.getElementById("img01");
        let captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "flex";
            modalImg.src = this.dataset.imgDesc;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        let span = document.getElementById("closeModal");

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks outside of modal, close the modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection
