<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranjan Residency - Luxury & Comfort</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- GLightbox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    
    <style>
        :root {
            --brand-maroon: #c1282f;
            --bg-pure: #ffffff;
            --text-main: #282828;
            --text-muted: #666666;
            --text-light: #ffffff;
            --maroon-gradient: linear-gradient(135deg, #c1282f 0%, #e31e24 100%);
            --section-bg: #f5f5f5;
        }

        /* Base Styles */
        body {
            font-family: 'Lato', sans-serif;
            background-color: var(--bg-pure);
            color: var(--text-main);
            overflow-x: hidden;
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Cinzel', serif;
            color: var(--text-main);
            text-transform: capitalize;
            letter-spacing: 0;
            font-weight: 600;
        }

        .text-maroon { color: var(--brand-maroon); }

        /* Utilities */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .section {
            padding: 80px 0;
        }

        .bg-maroon { background-color: var(--brand-maroon); }
        .bg-light { background-color: var(--section-bg); }
        
        .btn-maroon {
            background-color: var(--brand-maroon);
            color: #fff !important;
            padding: 12px 30px;
            border: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.85rem;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
            font-weight: 700;
        }
        
        .btn-maroon:hover {
            background-color: #a01d24;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(193, 40, 47, 0.3);
        }

        /* Swiper Jitter Fix */
        .swiper-slide {
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            transform: translate3d(0, 0, 0);
            -webkit-transform: translate3d(0, 0, 0);
        }
        
        .swiper-container, .swiper {
            touch-action: pan-y !important;
        }

        /* Navigation */
        .navbar {
            background-color: #fff;
            padding: 15px 0;
            position: sticky;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Cinzel', serif;
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--brand-maroon);
            text-decoration: none;
            letter-spacing: 0.5px;
            white-space: nowrap;
        }

        .nav-links {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .nav-link {
            color: var(--text-main);
            text-decoration: none;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            position: relative;
            font-weight: 700;
            padding: 10px 10px;
        }

        .nav-link:hover {
            color: var(--brand-maroon);
        }

        .btn-maroon-sm {
            background-color: var(--brand-maroon);
            color: #fff !important;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            margin-left: 10px;
            display: inline-block;
        }

        /* Footer */
        footer {
            background-color: var(--brand-maroon);
            color: #fff;
            padding: 70px 0 30px;
            position: relative;
            z-index: 2;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-title {
            margin-bottom: 20px;
            font-size: 1.2rem;
            color: #fff;
        }
        
        .footer-bottom {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            font-size: 0.85rem;
            color: rgba(255,255,255,0.6);
        }

        /* Mobile Menu trigger */
        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--brand-maroon);
            cursor: pointer;
        }

        /* Responsive Breakpoints */
        @media (max-width: 1150px) {
            .section {
                padding: 60px 0;
            }

            h1 { font-size: 2.2rem !important; }
            h2 { font-size: 1.8rem !important; }
            h3 { font-size: 1.5rem !important; }
            
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: #ffffff;
                flex-direction: column;
                padding: 30px 20px;
                text-align: center;
                border-bottom: 2px solid var(--brand-maroon);
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            }
            
            .nav-links.active {
                display: flex;
            }
            
            .nav-links .nav-link {
                width: 100%;
                padding: 15px;
                border-bottom: 1px solid #f5f5f5;
                font-size: 0.9rem;
            }

            .menu-toggle {
                display: block;
            }

            .logo {
                font-size: 1.2rem;
            }

            .hero-title {
                font-size: 2.5rem !important;
                line-height: 1.1 !important;
            }

            .mobile-column {
                flex-direction: column !important;
                gap: 40px !important;
            }

            .container {
                padding: 0 15px;
            }

            /* Responsive utilities */
            .mobile-order-first { order: -1 !important; }
            .mobile-text-center { text-align: center !important; }
            .mobile-p-0 { padding: 0 !important; }
            .mobile-px-20 { padding-left: 20px !important; padding-right: 20px !important; }
            .mobile-pt-40 { padding-top: 40px !important; }
            .mobile-mt-30 { margin-top: 30px !important; }
            .mobile-h-auto { height: auto !important; }
            .mobile-min-h-0 { min-height: 0 !important; }
        }

        @media (max-width: 768px) {
            .section {
                padding: 50px 0;
            }
            
            .md-hidden {
                display: none !important;
            }

            /* Disable fixed background on mobile for performance and layout stability */
            .hero-section, .special-showcase {
                background-attachment: scroll !important;
            }
        }

        /* Prevent horizontal overflow globally */
        html, body {
            max-width: 100%;
            overflow-x: hidden;
            width: 100%;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 480px) {
            h1 { font-size: 2rem !important; }
            h2 { font-size: 1.7rem !important; }
            h3 { font-size: 1.4rem !important; }
            .hero-title { font-size: 2rem !important; }
            
            .btn-maroon { 
                padding: 12px 25px; 
                font-size: 0.8rem; 
                width: 100%;
                text-align: center;
            }

            .logo {
                font-size: 1.1rem;
            }
        }

        @media (min-width: 769px) {
            .hidden-desktop {
                display: none !important;
            }
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="{{ route('home') }}" class="logo">RANJAN RESIDENCY</a>
            <div class="menu-toggle" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>
            <div class="nav-links" id="navLinks">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-link">About</a>
                <a href="{{ route('rooms') }}" class="nav-link">Rooms</a>
                <a href="{{ route('vellore-sites') }}" class="nav-link">Vellore Sites</a>
                <a href="{{ route('amenities') }}" class="nav-link">Amenities</a>
                <a href="{{ route('gallery') }}" class="nav-link">Gallery</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                <a href="tel:+919786590145" class="btn-maroon-sm md-hidden-header"><i class="fas fa-phone-alt" style="margin-right: 8px;"></i> BOOK NOW</a>
            </div>
        </div>
    </nav>
    
    <script>
        function toggleMenu() {
            document.getElementById('navLinks').classList.toggle('active');
        }

        // Initialize GLightbox
        document.addEventListener('DOMContentLoaded', function() {
            const lightbox = GLightbox({
                touchNavigation: true,
                loop: true,
                autoplayVideos: true
            });
        });
    </script>

    @yield('content')

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div>
                    <h3 class="footer-title">Ranjan Residency</h3>
                    <p style="color: #fff; margin-bottom: 15px;">Experience the perfect blend of luxury and comfort. Our residency offers well-appointed rooms and top-tier hospitality in the heart of Vellore.</p>
                </div>
                <div>
                    <h3 class="footer-title">Contact Us</h3>
                    <p><i class="fas fa-phone-alt text-gold"></i> 0416-2272145 (Office)</p>
                    <p><i class="fas fa-mobile-alt text-gold"></i> 97918 90145 / 97865 90145</p>
                    <p><i class="fas fa-map-marker-alt text-gold"></i> No. 963, M.C. Road, Poigai</p>
                    <p>Vellore - 632 114</p>
                </div>
                <div>
                    <h3 class="footer-title">Quick Links</h3>
                    <ul style="list-style: none;">
                        <li><a href="/rooms"  style="color: #fff; text-decoration: none;">Luxury Rooms</a></li>
                        <li><a href="/amenities" style="color: #fff; text-decoration: none;">Amenities</a></li>
                        <li><a href="/gallery" style="color: #fff; text-decoration: none;">Photo Gallery</a></li>
                        <li><a href="/contact" style="color: #fff; text-decoration: none;">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; {{ date('Y') }} Ranjan Residency. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Mobile Fixed Call Button -->
    <a href="tel:+919786590145" style="
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background: linear-gradient(45deg, #D4AF37, #FDB931);
        color: #000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        z-index: 1001;
        text-decoration: none;
    " class="md-hidden">
        <i class="fas fa-phone-alt"></i>
    </a>

</body>
</html>
