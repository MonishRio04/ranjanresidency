@extends('layouts.app')

@section('content')
<section class="section mobile-pt-40" style="padding-top: 150px; background: #ffffff;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 70px;" class="mobile-mt-30">
            <h1 style="font-size: 3rem; margin-bottom: 15px; color: var(--brand-maroon); font-weight: 600;">Connect With Us</h1>
            <div style="width: 80px; height: 3px; background: var(--brand-maroon); margin: 0 auto;"></div>
            <p style="color: var(--text-main); margin-top: 20px;">We are here to help you plan your perfect event or stay</p>
        </div>
        
        <div class="mobile-column" style="display: flex; flex-wrap: wrap; gap: 60px;">
            <div style="flex: 1; min-width: 300px;">
                <div class="luxury-card mobile-px-20" style="padding: 50px;">
                    <h3 style="margin-bottom: 40px; color: var(--text-main); font-size: 1.8rem; font-weight: 600;" class="mobile-text-center">Direct Contact</h3>
                    
                    <div style="display: flex; gap: 20px; margin-bottom: 35px;">
                        <div class="icon-square">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 10px; color: var(--brand-maroon); font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Our Location</h4>
                            <p style="color: var(--text-main); line-height: 1.6;">No. 963, M.C. Road, Poigai,<br>Vellore - 632 114, Tamil Nadu</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 20px; margin-bottom: 35px;">
                        <div class="icon-square">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 10px; color: var(--brand-maroon); font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Reservations</h4>
                            <p style="color: var(--text-main);">Office: 0416-2272145</p>
                            <p style="color: var(--text-main);">Mobile: 97918 90145 / 97865 90145</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 20px; margin-bottom: 45px;">
                        <div class="icon-square">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 10px; color: var(--brand-maroon); font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Email Inquiry</h4>
                            <p style="color: var(--text-main);">info@ranjanresidency.com</p>
                        </div>
                    </div>
                    
                    <a href="tel:+919786590145" class="btn-maroon" style="width: 100%; display: block; text-align: center; border-radius: 0;">CLICK TO CALL NOW</a>
                </div>
            </div>
            
            <div style="flex: 1.5; min-width: 320px;" class="mobile-h-auto mobile-mt-30">
                <div style="width: 100%; height: 100%; overflow: hidden; border: 1px solid #eeeeee; box-shadow: 0 15px 40px rgba(0,0,0,0.05); min-height: 500px;" class="mobile-h-auto">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35555.276495393043!2d79.0118!3d12.9165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad3923fc7b4699%3A0xe9c394d2c8843940!2sPoigai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1625678901234!5m2!1sen!2sin" 
                        width="100%" 
                        height="450" 
                        style="border:0; min-height: 350px;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.luxury-card {
    background: #ffffff;
    border: 1px solid #eeeeee;
}
.icon-square {
    width: 50px;
    height: 50px;
    background: #f9f9f9;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.icon-square i { color: var(--brand-maroon); font-size: 1.2rem; }
</style>
@endsection
