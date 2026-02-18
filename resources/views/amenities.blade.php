@extends('layouts.app')

@section('content')
<section class="section mobile-pt-40" style="padding-top: 150px; background: #ffffff;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 70px;" class="mobile-mt-30">
            <h1 style="font-size: 3rem; margin-bottom: 15px; color: var(--brand-maroon); font-weight: 600;">Exquisite Services</h1>
            <div style="width: 80px; height: 3px; background: var(--brand-maroon); margin: 0 auto;"></div>
            <p style="color: var(--text-main); margin-top: 20px; font-size: 1.1rem; max-width: 700px; margin-left: auto; margin-right: auto;">Providing world-class facilities and seamless services to ensure your experience at Ranjan Residency is nothing short of extraordinary.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            @foreach($amenities as $amenity)
            <div class="amenity-card">
                <div class="icon-box">
                    <i class="fas {{ $amenity['icon'] }}"></i>
                </div>
                <h3 style="margin-bottom: 15px; color: var(--text-main); font-weight: 600;">{{ $amenity['title'] }}</h3>
                <p style="color: var(--text-muted); line-height: 1.8;">{{ $amenity['desc'] }}</p>
            </div>
            @endforeach
        </div>

        <!-- Convention Hall Detail -->
        <div class="mobile-column" style="margin-top: 100px; background: #ffffff; overflow: hidden; display: flex; flex-wrap: wrap; border: 1px solid #eeeeee; box-shadow: 0 40px 100px rgba(0,0,0,0.05);">
            <div style="border-radius: 10px; flex: 1; min-width: 320px; height: 450px;" class="mobile-h-auto">
                <img style="border-radius: 10px;box-shadow: 0 15px 40px rgba(0,0,0,0.1);" class src="{{ asset('images/site/ban-hall1.jpg') }}" style="width: 100%; height: 100%; object-fit: cover; min-height: 250px;" alt="Grand Convention Hall">
            </div>
            <div style="flex: 1; min-width: 300px; padding: 60px; display: flex; flex-direction: column; justify-content: center;" class="mobile-px-20 mobile-pt-40">
                <h2 style="margin-bottom: 25px; font-size: 2.5rem; color: var(--text-main); font-weight: 600;" class="mobile-text-center">Mini <span style="color: var(--brand-maroon);">A/C Hall</span></h2>
                <p style="color: var(--text-main); margin-bottom: 30px; font-size: 1.05rem; line-height: 1.8;">
                    Our state-of-the-art air-conditioned hall is the crown jewel of Poigai. Perfect for  corporate gala dinners, and international conferences. 
                </p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div style="font-size: 1rem; color: var(--text-main); font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--brand-maroon); margin-right: 10px;"></i> 300+ Seating</div>
                    <div style="font-size: 1rem; color: var(--text-main); font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--brand-maroon); margin-right: 10px;"></i> Surround Sound</div>
                    <div style="font-size: 1rem; color: var(--text-main); font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--brand-maroon); margin-right: 10px;"></i> Grand Stage</div>
                    <div style="font-size: 1rem; color: var(--text-main); font-weight: 600;"><i class="fas fa-check-circle" style="color: var(--brand-maroon); margin-right: 10px;"></i> Dining Suite</div>
                </div>
                <div style="margin-top: 45px;">
                    <a href="tel:+919786590145" class="btn-maroon" style="border-radius: 0; padding: 15px 45px;">CHECK AVAILABILITY</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.amenity-card {
    background: #ffffff;
    padding: 50px 40px;
    border: 1px solid #eeeeee;
    transition: all 0.4s ease;
}
.amenity-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.05);
}
.icon-box {
    width: 70px;
    height: 70px;
    background: #f9f9f9;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 30px;
}
.icon-box i { font-size: 2.22rem; color: var(--brand-maroon); }
</style>
@endsection
