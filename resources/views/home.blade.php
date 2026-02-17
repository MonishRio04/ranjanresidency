@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section id="home" style="
    height: 100vh; 
    background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('images/site/hero.jpg') }}'); 
    background-size: cover; 
    background-position: center;
    background-attachment: fixed;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding-top: 60px;
">
    <div class="container" style="animation: fadeIn 1.2s ease-out;">
        <h2 style="font-size: 1.1rem; letter-spacing: 5px; color: #fff; margin-bottom: 20px; font-weight: 700; text-transform: uppercase; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">Discover Luxury At</h2>
        <h1 class="hero-title" style="font-size: 5rem; margin-bottom: 30px; font-weight: 700; color: #fff; letter-spacing: 2px; line-height: 1.1; text-shadow: 0 5px 25px rgba(0,0,0,0.4);">Ranjan Residency</h1>
        <div style="width: 100px; height: 3px; background: var(--brand-maroon); margin: 0 auto 40px;"></div>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="tel:+919786590145" class="btn-maroon" style="padding: 15px 45px; border-radius: 0;">BOOK YOUR STAY</a>
            <a href="{{ route('about') }}" style="background: rgba(255,255,255,0.9); color: var(--text-main); padding: 15px 45px; text-decoration: none; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; transition: all 0.3s; border-radius: 0;">OUR STORY</a>
        </div>
    </div>
</section>
<!-- Highlight Bar -->
<div style="background: var(--brand-maroon); color: #fff; padding: 15px 0; text-align: center; font-weight: bold; font-family: 'Cinzel', serif; letter-spacing: 1px; position: relative; z-index: 10; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
    <div class="container" style="display: flex; align-items: center; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <i class="fas fa-certificate" style="font-size: 1.2rem;"></i>
        <span style="font-size: 1rem; text-transform: uppercase;">LIMITED TIME OFFER: FREE SUPPLEMENTARY NON-VEG BREAKFAST FOR ALL ROOMS</span>
        <i class="fas fa-certificate" style="font-size: 1.2rem;"></i>
    </div>
</div>

<style>
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
.luxury-card {
    background: #ffffff;
    border: 1px solid #eeeeee;
    border-radius: 0;
    padding: 30px;
    transition: all 0.4s ease;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}
.luxury-card:hover {
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
}
</style>

<!-- About Section -->
<section id="about" class="section" style="position: relative; overflow: hidden; background: #ffffff;">
    <div class="container">
        <div class="mobile-column" style="display: flex; flex-wrap: wrap; align-items: center; gap: 60px;">
            <div style="flex: 1; min-width: 280px;">
                <h2 style="font-size: 2.8rem; margin-bottom: 25px; line-height: 1.2; font-weight: 600; color: var(--brand-maroon);">Heritage & <br>Hospitality</h2>
                <div style="width: 60px; height: 3px; background: var(--brand-maroon); margin-bottom: 30px;"></div>
                <p style="margin-bottom: 35px; color: var(--text-main); font-size: 1.1rem; line-height: 1.8;">
                    Located conveniently on M.C. Road, Ranjan Mahal & Residency is a landmark of luxury in Vellore. We provide an exquisite environment for weddings, corporate events, and premium stays.
                </p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 40px;">
                    <div style="border-left: 3px solid var(--brand-maroon); padding-left: 20px;">
                        <div>
                            <h4 style="color: var(--brand-maroon); font-size: 1.8rem; margin-bottom: 5px; font-weight: 700;">24/7</h4>
                            <p style="color: var(--text-main); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Concierge</p>
                        </div>
                        <div style="margin-top: 20px;">
                            <h4 style="color: var(--brand-maroon); font-size: 1.8rem; margin-bottom: 5px; font-weight: 700;">A/C</h4>
                            <p style="color: var(--text-main); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Suites</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="flex: 1; min-width: 320px; position: relative;">
                <div style="position: absolute; top: -15px; left: -15px; width: 100%; height: 100%; border: 1px solid var(--brand-maroon); z-index: 1;"></div>
                <img src="{{ asset('images/site/20260207060025_IMG_4849.JPG') }}" style="width: 100%; position: relative; z-index: 2; box-shadow: 20px 20px 60px rgba(0,0,0,0.1);" alt="Ranjan Mahal Interior">
            </div>
        </div>
    </div>
</section>
<!-- Nearby Attractions Carousels -->
<section id="nearby" class="section bg-secondary" style="overflow: hidden;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-size: 2.8rem; margin-bottom: 15px; font-weight: 600; color: var(--brand-maroon);">Nearby Exploration</h2>
            <div style="width: 80px; height: 3px; background: var(--brand-maroon); margin: 0 auto 20px;"></div>
            <p style="color: var(--text-main); font-size: 1.1rem;">Ideally located for the modern traveler</p>
        </div>

        @foreach($nearbyPlaces as $category)
        <div style="margin-bottom: 80px;">
            <div style="margin-bottom: 35px; display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                <h3 style="color: var(--brand-maroon); font-size: 1.8rem; margin: 0; font-family: 'Cinzel', serif;">{{ $category['title'] }}</h3>
                <div style="height: 1px; flex: 1; background: #eee; min-width: 50px;"></div>
                <p style="color: var(--text-muted); margin: 0; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">{{ $category['subtitle'] }}</p>
            </div>

            <!-- Swiper Carousel -->
            <div class="swiper {{ $category['slug'] }}-swiper" style="padding-bottom: 50px;">
                <div class="swiper-wrapper">
                    @foreach($category['items'] as $place)
                    <div class="swiper-slide">
                        <div class="luxury-card" style="padding: 0; overflow: hidden; position: relative; height: 100%; border-radius: 20px; height: 450px;">
                            <div style="height: 240px; overflow: hidden;">
                                <img src="{{ $place['image'] }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'" alt="{{ $place['name'] }}">
                            </div>
                            <div style="position: absolute; top: 20px; right: 20px; background: var(--bg-obsidian); color: #fff; padding: 7px 20px; border-radius: 12px; font-weight: 700; font-size: 0.8rem; border: 1px solid var(--border-glow); box-shadow: 0 0 20px rgba(99, 102, 241, 0.2); z-index: 5;">
                                {{ $place['distance'] }}
                            </div>
                            <div style="padding: 30px; background: #ffffff; height: calc(100% - 240px); border-bottom: 3px solid var(--brand-maroon);">
                                <h3 style="margin-bottom: 12px; color: var(--text-main); font-size: 1.3rem; font-weight: 600;">{{ $place['name'] }}</h3>
                                <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.7; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">{{ $place['description'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Add Pagination/Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next" style="color: var(--primary-gold); transform: scale(0.7);"></div>
                <div class="swiper-button-prev" style="color: var(--primary-gold); transform: scale(0.7);"></div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Features Grid -->
<section class="section" style="background: transparent;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 70px;">
            <h2 style="font-size: 2.8rem; margin-bottom: 15px; font-weight: 600; color: var(--brand-maroon);">Our Amenities</h2>
            <div style="width: 80px; height: 3px; background: var(--brand-maroon); margin: 0 auto 20px;"></div>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="luxury-card">
                <i class="fas fa-crown" style="font-size: 2.5rem; color: var(--brand-maroon); margin-bottom: 25px; display: block;"></i>
                <h3 style="font-weight: 600; color: var(--text-main);">Grand A/C Hall</h3>
                <p style="color: var(--text-muted); line-height: 1.7;">A magnificent space for your most treasured celebrations and corporate functions.</p>
            </div>
            <div class="luxury-card">
                <i class="fas fa-bed" style="font-size: 2.8rem; color: var(--primary-indigo); margin-bottom: 30px; display: block;"></i>
                <h3 style="font-weight: 700; font-size: 1.6rem; margin-bottom: 20px;">Elite Suites</h3>
                <p style="color: var(--text-muted); line-height: 1.8; opacity: 0.8;">Experience the finest in-room technology and comfort with our premium curated suites.</p>
            </div>
            <div class="luxury-card">
                <i class="fas fa-shopping-bag" style="font-size: 2.8rem; color: var(--primary-indigo); margin-bottom: 30px; display: block;"></i>
                <h3 style="font-weight: 700; font-size: 1.6rem; margin-bottom: 20px;">Shopping Mall</h3>
                <p style="color: var(--text-muted); line-height: 1.8; opacity: 0.8;">Integrated shopping experience right at your doorstep, featuring top brands and convenience.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 60px;">
            <a href="{{ route('amenities') }}" style="color: var(--primary-indigo); text-decoration: none; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem; border-bottom: 2px solid var(--primary-indigo); padding-bottom: 5px; transition: all 0.3s;">Explore All Amenities</a>
        </div>
    </div>
</section>

<!-- Special Showcase -->
<section style="height: 600px; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/site/uploaded_media_0_1770826520282.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; display: flex; align-items: center; justify-content: center;">
    <div style="text-align: center; background: rgba(0,0,0,0.4); padding: 50px; border-radius: 20px; backdrop-filter: blur(5px); border: 1px solid rgba(255,255,255,0.1); max-width: 800px; margin: 0 20px;">
        <h2 style="color: #fff; font-size: 3rem; margin-bottom: 20px;">Art & Tradition</h2>
        <p style="color: var(--primary-gold); font-size: 1.2rem; font-family: 'Lato'; letter-spacing: 3px; text-transform: uppercase;">Preserving our rich cultural heritage</p>
    </div>
</section>

<!-- Rooms Section -->
<section id="rooms" class="section" style="background: var(--section-bg);">
    <div class="container">
        <div style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-size: 2.8rem; margin-bottom: 15px; font-weight: 600; color: var(--brand-maroon);">Exquisite Suites</h2>
            <div style="width: 80px; height: 3px; background: var(--brand-maroon); margin: 0 auto 20px;"></div>
            <p style="color: var(--text-main); font-size: 1.1rem;">Elegance in every detail</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px;">
            @foreach(array_slice($rooms, 0, 3) as $room)
            <div style="background: #ffffff; border-radius: 0; overflow: hidden; transition: all 0.4s; border: 1px solid #eeeeee; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                <div style="height: 280px; overflow: hidden; position: relative;">
                    <img src="{{ $room['image'] }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.7s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'" alt="{{ $room['title'] }}">
                    <div style="position: absolute; top: 15px; left: 15px; z-index: 5;">
                        <span style="background: #e74c3c; color: #fff; padding: 4px 12px; border-radius: 4px; font-weight: bold; font-size: 0.7rem; text-transform: uppercase; box-shadow: 0 4px 10px rgba(0,0,0,0.3); display: inline-flex; align-items: center; gap: 5px;">
                            <i class="fas fa-certificate"></i> Free Non-Veg Breakfast
                        </span>
                    </div>
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px;">
                        <span style="background: var(--brand-maroon); color: #fff; padding: 7px 20px; font-weight: 700; font-size: 0.8rem;">{{ $room['price'] }}</span>
                    </div>
                </div>
                <div style="padding: 30px;">
                    <h3 style="font-size: 1.6rem; margin-bottom: 15px; color: var(--text-main); font-weight: 600;">{{ $room['title'] }}</h3>
                    <p style="color: var(--text-muted); margin-bottom: 25px; font-size: 0.95rem; line-height: 1.7;">{{ $room['description'] }}</p>
                    <div style="display: flex; gap: 10px; margin-bottom: 30px; flex-wrap: wrap;">
                        @foreach(array_slice($room['features'], 0, 2) as $feature)
                        <span style="font-size: 0.75rem; color: var(--text-main); background: #f9f9f9; padding: 5px 12px; font-weight: 600; text-transform: uppercase;"><i class="fas fa-check" style="color: var(--brand-maroon); margin-right: 5px;"></i> {{ $feature }}</span>
                        @endforeach
                    </div>
                    <a href="{{ route('rooms') }}" style="display: inline-block; margin-top: 10px; color: var(--primary-indigo); text-decoration: none; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem; border-bottom: 2px solid var(--primary-indigo); padding-bottom: 5px; transition: all 0.3s;">Discover Suite &rarr;</a>
                </div>
            </div>
            @endforeach
        </div>
        <div style="text-align: center; margin-top: 60px;">
            <a href="{{ route('rooms') }}" class="btn-indigo">All Accommodations</a>
        </div>
    </div>
</section>

<!-- Ganesha Section -->
<section id="ganesha" class="section" style="background: rgba(15, 23, 42, 0.2); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
        <div class="mobile-column" style="display: flex; align-items: center; gap: 60px; flex-direction: row-reverse;">
            <div style="flex: 1;">
                <h2 style="font-size: 2.8rem; margin-bottom: 20px; font-weight: 600; color: var(--brand-maroon);">Spiritual Serenity</h2>
                <div style="width: 60px; height: 3px; background: var(--brand-maroon); margin-bottom: 30px;"></div>
                <p style="color: var(--text-main); font-size: 1.1rem; line-height: 1.8;">Our residency features a beautiful Ganesha shrine, bringing a sense of peace and divine blessings to all our guests and celebrations.</p>
            </div>
            <div style="flex: 1; min-width: 320px; position: relative;">
                <div style="position: absolute; top: -15px; left: -15px; width: 100%; height: 100%; border: 1px solid var(--brand-maroon); z-index: 1;"></div>
                <img src="{{ asset('images/site/uploaded_media_2_1770826520282.jpg') }}" style="width: 100%; object-fit: cover; box-shadow: 0 20px 50px rgba(0,0,0,0.1); position: relative; z-index: 2;" alt="Ganesha Shrine">
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section id="map" class="section bg-secondary">
    <div class="container">
        <div style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-size: 2.5rem; margin-bottom: 15px;">Visit <span style="color: #fff;">Us</span></h2>
            <div style="width: 60px; height: 3px; background: var(--primary-gold); margin: 0 auto;"></div>
            <p style="color: #999; margin-top: 20px;">Prime location on M.C. Road, Poigai, Vellore</p>
        </div>
        
        <div class="mobile-column" style="display: flex; gap: 0; background: #1a1a1a; border-radius: 25px; overflow: hidden; border: 1px solid rgba(255,255,255,0.05); box-shadow: 0 40px 80px rgba(0,0,0,0.4);">
            <div style="flex: 2; height: 450px;">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15555.276495393043!2d79.0118!3d12.9165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad3923fc7b4699%3A0xe9c394d2c8843940!2sPoigai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1625678901234!5m2!1sen!2sin" 
                    width="100%" 
                    height="100%" 
                    style="border:0; filter: grayscale(1) invert(0.9) contrast(1.2);" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
            <div style="flex: 1; padding: 60px; background: #ffffff; display: flex; flex-direction: column; justify-content: center; border: 1px solid #eeeeee;">
                <h4 style="margin-bottom: 15px; font-size: 2rem; color: var(--brand-maroon); font-weight: 600;">Ranjan Residency</h4>
                <p style="font-size: 1.1rem; color: var(--text-main); margin-bottom: 35px; line-height: 1.8;">No. 963, M.C. Road, Poigai,<br>Vellore - 632 114, Tamil Nadu</p>
                <div style="display: flex; flex-direction: column; gap: 15px;">
                    <a href="https://maps.google.com" target="_blank" class="btn-maroon" style="text-align: center; border-radius: 0;">GET DIRECTIONS</a>
                    <a href="tel:+919786590145" style="text-align: center; color: var(--brand-maroon); text-decoration: none; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; padding: 10px; letter-spacing: 1px;">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Highlights Section (Replaced) -->
<section id="latest-updates" class="section">
    <div class="container">
        <div style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-size: 2.8rem; margin-bottom: 15px; font-weight: 600; color: var(--brand-maroon);">Gallery Highlights</h2>
            <div style="width: 80px; height: 3px; background: var(--brand-maroon); margin: 15px auto;"></div>
            <p style="color: var(--text-main);">Glimpses of our curated boutique premises</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            @forelse($uploadedMedia as $media)
            <div class="luxury-card" style="padding: 0; overflow: hidden; position: relative; height: 350px;">
                @if($media->type === 'video')
                    <video style="width: 100%; height: 280px; object-fit: cover;" controls>
                        <source src="{{ $media->url }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                @else
                    <div style="height: 280px; overflow: hidden;">
                        <img src="{{ $media->url }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'" alt="{{ $media->title }}">
                    </div>
                @endif
                <div style="padding: 15px 20px;">
                    <h4 style="color: var(--brand-maroon); margin: 0; font-size: 1.1rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: 600;">{{ $media->title }}</h4>
                    <p style="color: var(--text-muted); font-size: 0.8rem; margin-top: 5px;">{{ $media->created_at->diffForHumans() }}</p>
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 40px; background: #f9f9f9; border: 1px dashed #ddd;">
                <i class="fas fa-images" style="font-size: 3rem; color: #ddd; margin-bottom: 20px; display: block;"></i>
                <p style="color: var(--text-muted);">No recent highlights to show at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        @foreach($nearbyPlaces as $category)
        new Swiper('.{{ $category['slug'] }}-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: {{ 3000 + ($loop->index * 1000) }},
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });
        @endforeach
    });
</script>

<style>
.swiper-pagination-bullet { background: #555; }
.swiper-pagination-bullet-active { background: var(--primary-gold) !important; }
</style>

<!-- Guest Reviews Section -->
<section id="reviews" class="section" style="background: transparent;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 70px;">
            <h2 style="font-size: 2.8rem; margin-bottom: 15px; font-weight: 600; color: var(--brand-maroon);">Guest Experiences</h2>
            <div style="width: 80px; height: 3px; background: var(--brand-maroon); margin: 0 auto 20px;"></div>
            <p style="color: var(--text-main); font-size: 1.1rem;">Warm words from our cherished visitors</p>
        </div>

        <div style="grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); display: grid; gap: 40px;">
            @foreach($reviews as $review)
            <div class="luxury-card" style="padding: 50px 40px; border-left: 5px solid var(--brand-maroon);">
                <i class="fas fa-quote-left" style="font-size: 2rem; color: #f0f0f0; margin-bottom: 20px; display: block;"></i>
                <div style="margin-bottom: 20px;">
                    @for($i = 0; $i < 5; $i++)
                        <i class="fas fa-star" style="color: {{ $i < $review->rating ? 'var(--brand-maroon)' : '#dddddd' }}; font-size: 0.85rem;"></i>
                    @endfor
                </div>
                <p style="color: var(--text-main); font-style: italic; font-size: 1rem; line-height: 1.8; margin-bottom: 30px;">"{{ $review->comment }}"</p>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 50px; height: 50px; background: var(--primary-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #000; font-weight: bold; font-size: 1.2rem;">
                        {{ substr($review->name, 0, 1) }}
                    </div>
                    <div>
                        <h4 style="color: #fff; margin: 0;">{{ $review->name }}</h4>
                        <small style="color: #666;">{{ $review->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        </div>
        
        <div style="margin-top: 80px; background: #ffffff; padding: 60px; border: 1px solid #eeeeee; max-width: 1000px; margin-left: auto; margin-right: auto;">
            <div style="text-align: center; margin-bottom: 50px;">
                <h3 style="font-size: 2.5rem; color: var(--brand-maroon); margin-bottom: 15px; font-weight: 600;">Share Your Experience</h3>
                <p style="color: var(--text-main); font-size: 1.1rem;">Your feedback helps us provide even better hospitality</p>
            </div>

            @if(session('success'))
                <div style="background: rgba(46, 204, 113, 0.1); border: 1px solid #2ecc71; color: #2ecc71; padding: 15px 25px; border-radius: 12px; margin-bottom: 30px; text-align: center;">
                    <i class="fas fa-check-circle" style="margin-right: 10px;"></i> {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('reviews.store') }}" method="POST">
                @csrf
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-bottom: 30px;">
                    <div>
                        <label style="color: var(--text-main); display: block; margin-bottom: 10px; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 700;">Full Name</label>
                        <input type="text" name="name" required style="width: 100%; border: 1px solid #ddd; padding: 15px; color: var(--text-main); outline: none; background: #fff;">
                    </div>
                    <div>
                        <label style="color: var(--text-main); display: block; margin-bottom: 10px; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 700;">Rating</label>
                        <select name="rating" required style="width: 100%; border: 1px solid #ddd; padding: 15px; color: var(--text-main); outline: none; background: #fff;">
                            <option value="5">⭐⭐⭐⭐⭐ (Exquisite)</option>
                            <option value="4">⭐⭐⭐⭐ (Good)</option>
                            <option value="3">⭐⭐⭐ (Average)</option>
                        </select>
                    </div>
                </div>
                <div style="margin-bottom: 30px;">
                    <label style="color: var(--text-main); display: block; margin-bottom: 10px; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 700;">Your Narrative</label>
                    <textarea name="comment" required rows="4" style="width: 100%; border: 1px solid #ddd; padding: 15px; color: var(--text-main); outline: none; resize: none; background: #fff;"></textarea>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn-maroon" style="padding: 15px 80px; width: auto; border-radius: 0;">PUBLISH REVIEW</button>
                    <p style="margin-top: 25px; color: var(--text-muted); font-size: 0.85rem;">Or leave a review on <a href="https://search.google.com/local/writereview?placeid=ChIJZ4UyVL4_rTsRsuW5_qyLizA" target="_blank" style="color: var(--brand-maroon); text-decoration: none; font-weight: 700;">Google Maps</a></p>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
