@php
    $footer_settings = App\Models\Settings::where('page', 'footer')->first();
    $footer = $footer_settings->settings['copyright'];
@endphp

@if(Route::current()->getName() == 'home')
<div class="my-footer">
    <div class="container footer-container">
        <div class="row">
            <img src="/images/ministria-e-kultures.svg" class="footer-img">
{{--            <img src="/assets/frontend/footer-logo.svg" class="footer-logo">--}}


        </div>
        <div class="row w-100">
        <p class="text-center pt-3 text-white">{{ $footer }}</p>
        </div>
    </div>
</div>
@endif

@if(Route::current()->getName() != 'home')

<div class="container">
    <footer class="py-3 my-4">
      <p class="text-center pt-3 text-black">{{ $footer }}</p>
    </footer>
  </div>
@endif
