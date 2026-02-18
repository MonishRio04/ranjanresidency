@extends('layouts.app')

@section('content')
<section class="section" style="padding-top: 150px; background: #ffffff;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 70px;">
            <h1 style="font-size: 3rem; margin-bottom: 15px; color: var(--brand-maroon); font-weight: 600;">Discover Our Story</h1>
            <div style="width: 80px; height: 3px; background: var(--brand-maroon); margin: 0 auto;"></div>
        </div>
        
        <div class="mobile-column" style="display: flex; flex-wrap: wrap; gap: 60px; align-items: center;">
            <div style="flex: 1; min-width: 320px; position: relative;">
                <img src="{{ asset('images/site/krishna.png') }}" style="width: 100%; border-radius: 0; box-shadow: 0 15px 40px rgba(0,0,0,0.1);" alt="Ranjan Residency Exterior">
            </div>
            <div style="flex: 1.2; min-width: 280px;">
                <h2 style="margin-bottom: 25px; font-size: 2.22rem; color: var(--text-main); font-weight: 600;">A Legacy of <span style="color: var(--brand-maroon);">Hospitality</span></h2>
                <p style="color: var(--text-main); margin-bottom: 25px; font-size: 1.1rem; line-height: 1.8;">
                    Ranjan Residency is more than just a place to stay; it's a landmark of luxury and comfort in Poigai, Vellore. Strategically located on M.C. Road, we provide a sophisticated environment for both premium accommodation and special occasions.
                </p>
                <p style="color: var(--text-main); margin-bottom: 25px; font-size: 1.1rem; line-height: 1.8;">
                    Our residency offers well-appointed rooms with modern amenities, including a complimentary non-veg breakfast for all room guests. Coupled with our grand air-conditioned banquet hall, we offer a complete package for medical visitors, tourists, and event guests alike.
                </p>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-top: 50px;">
                    <div class="luxury-card" style="padding: 35px; border-left: 5px solid var(--brand-maroon); border-radius: 0; background: #f9f9f9;">
                        <h4 style="color: var(--brand-maroon); margin-bottom: 15px; font-size: 1.4rem; font-weight: 600;">Our Vision</h4>
                        <p style="font-size: 1rem; color: var(--text-main); line-height: 1.7;">To be the premier destination for grand celebrations and comfortable stays in Vellore, recognized for our elegance and service.</p>
                    </div>
                    <div class="luxury-card" style="padding: 35px; border-left: 5px solid var(--brand-maroon); border-radius: 0; background: #f9f9f9;">
                        <h4 style="color: var(--brand-maroon); margin-bottom: 15px; font-size: 1.4rem; font-weight: 600;">Our Mission</h4>
                        <p style="font-size: 1rem; color: var(--text-main); line-height: 1.7;">Delivering exceptional service and luxury with a touch of traditional hospitality to make every event unforgettable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.luxury-card {
    transition: all 0.3s ease;
    border: 1px solid #eeeeee;
}
.luxury-card:hover { 
    transform: translateY(-5px); 
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}
</style>
@endsection
