@extends('layouts.app')

@section('content')
<section class="section" style="padding-top: 150px; background: #ffffff;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 70px;">
            <h1 style="font-size: 3rem; margin-bottom: 15px; color: var(--brand-maroon); font-weight: 600;">Exquisite Suites</h1>
            <div style="width: 80px; height: 3px; background: var(--brand-maroon); margin: 0 auto;"></div>
            <p style="color: var(--text-main); margin-top: 20px; font-size: 1.1rem; max-width: 600px; margin-left: auto; margin-right: auto;">Elegantly appointed rooms designed for maximum comfort and relaxation during your stay at Ranjan Residency.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(290px, 1fr)); gap: 30px;">
            @foreach($rooms as $room)
            <div class="luxury-room-card" style="border-radius: 25px; overflow: hidden; border: 1px solid #eeeeee;">
                <div class="image-wrapper" style="height: 350px;">
                    <!-- Swiper for Rooms -->
                    <div class="swiper room-swiper-{{ $room['id'] }}" style="height: 100%;">
                        <div class="swiper-wrapper">
                            @foreach($room['images'] as $img)
                            <div class="swiper-slide">
                                <a href="{{ $img }}" class="glightbox">
                                    <img src="{{ $img }}" style="width: 100%; height: 100%; object-fit: cover;" alt="{{ $room['title'] }}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next" style="color: #fff; transform: scale(0.7);"></div>
                        <div class="swiper-button-prev" style="color: #fff; transform: scale(0.7);"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="content-wrapper">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 15px;">
                        <h3 style="font-size: 1.8rem; color: var(--text-main); font-weight: 600;">{{ $room['title'] }}</h3>
                        <!-- <div style="color: var(--brand-maroon); font-weight: 700; font-size: 1.2rem;">{{ $room['price'] }}</div> -->
                    </div>
                    <p style="color: var(--text-muted); margin-bottom: 25px; line-height: 1.7;">{{ $room['description'] }}</p>
                    
                    <div class="features-grid">
                        @foreach($room['features'] as $feature)
                            <div class="feature-item"><i class="fas fa-check"></i> {{ $feature }}</div>
                        @endforeach
                    </div>
                    
                    <a href="tel:+919786590145" class="btn-maroon" style="width: 100%; text-align: center; border-radius: 0;">RESERVE THIS SUITE</a>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    new Swiper('.room-swiper-{{ $room['id'] }}', {
                        loop: true,
                        autoplay: {
                            delay: {{ 3500 + ($loop->index * 500) }},
                            disableOnInteraction: false,
                        },
                        pagination: { el: '.swiper-pagination', clickable: true },
                        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                        touchReleaseOnEdges: true,
                        watchSlidesProgress: true,
                    });
                });
            </script>
            @endforeach
        </div>
    </div>
</section>

<style>
.luxury-room-card {
    background: #ffffff;
    border: 1px solid #eeeeee;
    transition: all 0.4s ease;
}
.luxury-room-card:hover {
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    transform: translateY(-5px);
}
.image-wrapper {
    height: 300px;
    position: relative;
    overflow: hidden;
}
.image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.luxury-room-card:hover .image-wrapper img { transform: scale(1.1); }

.content-wrapper { padding: 35px; }
.features-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
    margin-bottom: 35px;
}
.feature-item {
    font-size: 0.9rem;
    color: var(--text-main);
}
.feature-item i { color: var(--brand-maroon); margin-right: 8px; font-size: 0.8rem; }
</style>
@endsection
