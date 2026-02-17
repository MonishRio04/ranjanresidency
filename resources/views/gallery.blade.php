@extends('layouts.app')

@section('content')
<section class="section" style="padding-top: 150px; background: #ffffff;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 70px;">
            <h1 style="font-size: 3rem; margin-bottom: 15px; color: var(--brand-maroon); font-weight: 600;">Prestige Gallery</h1>
            <div style="width: 80px; height: 3px; background: var(--brand-maroon); margin: 0 auto;"></div>
            <p style="color: var(--text-main); margin-top: 20px;">Capturing the essence of luxury and celebration at Ranjan Mahal</p>
        </div>
        
        <div style="columns: 3 300px; column-gap: 20px; overflow: hidden;">
            @php
                use App\Models\Media;
                $staticImages = glob(public_path('images/site/*.{JPG,jpg,png,jpeg}'), GLOB_BRACE);
                $galleryItems = [];

                // Add static images
                foreach($staticImages as $imgPath) {
                    $galleryItems[] = asset('images/site/' . basename($imgPath));
                }

                // Add uploaded media images
                $uploadedImages = Media::where('type', 'image')->get();
                foreach($uploadedImages as $media) {
                    $galleryItems[] = $media->url;
                }

                shuffle($galleryItems);
            @endphp

            @foreach($galleryItems as $image)
            <div style="margin-bottom: 20px; position: relative; overflow: hidden; break-inside: avoid; border: 1px solid #eeeeee;">
                <img src="{{ $image }}" style="width: 100%; display: block; transition: all 0.5s ease;" class="gallery-img">
                <div class="overlay">
                    <i class="fas fa-search-plus" style="font-size: 2rem; color: var(--brand-maroon);"></i>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
.gallery-img:hover {
    transform: scale(1.05);
}
.overlay {
    position: absolute;
    inset: 0;
    background: rgba(255,255,255,0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
    cursor: pointer;
    backdrop-filter: blur(5px);
}
.overlay:hover {
    opacity: 1;
}
</style>
@endsection
