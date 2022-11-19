@extends('frontend.layout.app')
@section('content')
    <div class="container" style="margin-top: 60px;">
        <div class="top-height"></div>
        <div class="top-height"></div>
        <div class="row pb-100"></div>
        <div class="row">
            <div class="col-lg-6 pb-60">
                <div class="row input-container contact-form-wrapper">
                    <div class="section-title">
                        <h2 class="title bio-text image-title">@lang('text.contact-information')</h2>
                    </div>
                    <div class="bio-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                </div>
            </div>
            <div class="col-lg-6 contact-form-container">
                <form class="contact-form" method="post">
                    <div class="row input-container contact-form-wrapper">
                        <div class="section-title">
                            <h2 class="title bio-text image-title">@lang('text.contact-us-for-any-question')</h2>
                        </div>

                        <div class="col-12">
                            <div>
                                <label for="name">@lang('text.name')</label>
                                <input type="text" name="name" id="name" class="form-control" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label for="email">@lang('text.email')</label>
                                <input type="email" name="email" id="email" class="form-control" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label for="phone">@lang('text.phone-number')</label>
                                <input type="text" name="phone" id="phone" class="form-control" required/>
                            </div>
                        </div>
                        <div class="col-12">
                            <div>
                                <label id="message">@lang('text.message')</label>
                                <textarea name="message" id="message" class="form-control" rows="4"
                                          placeholder="@lang('text.enter-message')" required></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 mt-30">
                            <button class="btn contact-btn" type="submit">@lang('text.send-message')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bottom-height"></div>
    </div>
@endsection
