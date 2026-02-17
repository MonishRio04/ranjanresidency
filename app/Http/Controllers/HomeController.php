<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $rooms = $this->getRoomsData();
        $amenities = $this->getAmenitiesData();
        $gallery = $this->getGalleryData();
        $nearbyPlaces = $this->getNearbyPlacesData();
        $reviews = Review::latest()->take(3)->get();
        $uploadedMedia = Media::latest()->take(6)->get();

        return view('home', compact('rooms', 'amenities', 'gallery', 'uploadedMedia', 'nearbyPlaces', 'reviews'));
    }


    public function about()
    {
        return view('about');
    }

    public function rooms()
    {
        $rooms = $this->getRoomsData();
        return view('rooms', compact('rooms'));
    }

    public function velloreSites()
    {
        $nearbyPlaces = $this->getNearbyPlacesData();
        return view('vellore-sites', compact('nearbyPlaces'));
    }

    public function amenities()
    {
        $amenities = $this->getAmenitiesData();
        return view('amenities', compact('amenities'));
    }

    public function gallery()
    {
        $gallery = $this->getGalleryData();
        return view('gallery', compact('gallery'));
    }

    public function contact()
    {
        return view('contact');
    }

    private function getRoomsData()
    {
        return [
            [
                'id' => 1,
                'title' => 'Golden Suite',
                'price' => '₹4,500 / Day',
                'description' => 'Experience luxury with our premium Golden Suite, featuring a king-size bed, city view, and exclusive amenities.',
                'image' => asset('images/site/Room1.JPG'),
                'images' => [
                    asset('images/site/Room1.JPG'),
                    asset('images/site/20260207061731_IMG_4872.JPG'),
                    asset('images/site/20260207061750_IMG_4873.JPG')
                ],
                'features' => ['King Bed', 'City View', 'Free Wi-Fi', 'Free Non-Veg Breakfast']
            ],
            [
                'id' => 2,
                'title' => 'Deluxe Room',
                'price' => '₹2,500 / Day',
                'description' => 'Perfect for business travelers, our Deluxe Room offers comfort and convenience with a modern workspace.',
                'image' => asset('images/site/Room2.JPG'),
                'images' => [
                    asset('images/site/Room2.JPG'),
                    asset('images/site/20260207062202_IMG_4882.JPG'),
                    asset('images/site/20260207062246_IMG_4884.JPG')
                ],
                'features' => ['Queen Bed', 'Work Desk', 'Wi-Fi', 'Free Non-Veg Breakfast']
            ],
            [
                'id' => 3,
                'title' => 'Family Suite',
                'price' => '₹5,500 / Day',
                'description' => 'Spacious accommodation for the whole family, with two bedrooms and a living area.',
                'image' => asset('images/site/Room3.JPG'),
                'images' => [
                    asset('images/site/Room3.JPG'),
                    asset('images/site/20260207061806_IMG_4874.JPG'),
                    asset('images/site/20260207061851_IMG_4875.JPG')
                ],
                'features' => ['2 Bedrooms', 'Living Area', 'Kitchenette', 'Free Non-Veg Breakfast']
            ],
        ];
    }

    private function getAmenitiesData()
    {
        return [
            ['icon' => 'fa-wifi', 'title' => 'High-Speed Wi-Fi', 'desc' => 'Connect seamlessly throughout the property.'],
            ['icon' => 'fa-parking', 'title' => 'Spacious Parking', 'desc' => 'Secure parking for over 200 vehicles.'],
            ['icon' => 'fa-calendar-check', 'title' => 'Convention Hall', 'desc' => 'A/C Hall perfect for weddings and events.'],
            ['icon' => 'fa-shopping-bag', 'title' => 'Shopping Access', 'desc' => 'Integrated shopping mall for your convenience.'],
            ['icon' => 'fa-utensils', 'title' => 'Free Non-Veg Breakfast', 'desc' => 'Complementary non-veg breakfast for all room guests.'],
            ['icon' => 'fa-video', 'title' => '24/7 Security', 'desc' => 'CCTV surveillance and round-the-clock security.'],
        ];
    }

    private function getGalleryData()
    {
        return [
            ['src' => asset('images/site/20260207060025_IMG_4849.JPG'), 'category' => 'Exterior'],
            ['src' => asset('images/site/20260207062753_IMG_4894.JPG'), 'category' => 'Hall'],
            ['src' => asset('images/site/uploaded_media_0_1770826520282.jpg'), 'category' => 'Art'],
            ['src' => asset('images/site/uploaded_media_2_1770826520282.jpg'), 'category' => 'Shrine'],
            ['src' => asset('images/site/uploaded_media_3_1770826520282.jpg'), 'category' => 'Entrance'],
            ['src' => asset('images/site/uploaded_media_1_1770826520282.jpg'), 'category' => 'Interior'],
        ];
    }

    private function getNearbyPlacesData()
    {
        $hospitals = [
            [
                'name' => 'CMC Hospital Vellore',
                'distance' => '9 km',
                'image' => asset('images/site/cmc.webp'),
                'description' => 'World-renowned medical institution providing advanced healthcare services.'
            ],
            [
                'name' => 'Naruvi Hospitals',
                'distance' => '9 km',
                'image' => asset('images/site/naruvi.webp'),
                'description' => 'State-of-the-art multi-speciality hospital offering world-class medical care.'
            ],
            [
                'name' => 'Narayani Research Hospital',
                'distance' => '10 km',
                'image' => asset('images/site/narayani.webp'),
                'description' => 'Advanced research-based healthcare facility.'
            ]
        ];
        $attractions = [
            [
                'name' => 'Sripuram Golden Temple',
                'distance' => '10 km',
                'image' => asset('images/site/sripuram.webp'),
                'description' => 'Famous spiritual destination covered in pure gold.'
            ],
            [
                'name' => 'Vellore Fort & Jalakandeswarar Temple',
                'distance' => '9 km',
                'image' => asset('images/site/vellore_fort.webp'),
                'description' => 'Historic 16th-century fort with a beautiful ancient temple.'
            ],
            [
                'name' => 'Virinchipuram Margabandeeswarar Temple',
                'distance' => '4 km',
                'image' => asset('images/site/virinchipuram.webp'),
                'description' => 'Ancient Shiva temple known for Dravidian architecture.'
            ],
            [
                'name' => 'Vasala Ishkan Temple',
                'distance' => '11 km',
                'image' => asset('images/site/iskcon.webp'),
                'description' => 'Peaceful spiritual center dedicated to Lord Krishna.'
            ],
            [
                'name' => 'Varadaraja Perumal Temple',
                'distance' => '5 km',
                'image' => asset('images/site/varadarajan.webp'),
                'description' => 'Famous temple dedicated to Lord Vishnu.'
            ]
        ];
        $connectivity = [
            [
                'name' => 'Katpadi Railway Junction',
                'distance' => '13 km',
                'image' => asset('images/site/katpadi.webp'),
                'description' => 'Major railway junction connecting key cities.'
            ],
            [
                'name' => 'VIT University',
                'distance' => '15 km',
                'image' => asset('images/site/vit.webp'),
                'description' => 'One of India’s top private universities.'
            ],
            [
                'name' => 'Tidel Park (IT)',
                'distance' => '4 km',
                'image' => asset('images/site/tidel.webp'),
                'description' => 'IT park housing multiple technology companies.'
            ],
            [
                'name' => 'Vellore Airport (Nearest)',
                'distance' => 'Approx 90 km',
                'image' => asset('images/site/airport.webp'),
                'description' => 'Nearest airport providing domestic connectivity.'
            ],
            [
                'name' => 'Anandhas Hotel',
                'distance' => 'Nearby',
                'image' => asset('images/site/anandhas.webp'),
                'description' => 'Popular vegetarian restaurant in Vellore.'
            ]
        ];

        return [
            [
                'title' => 'Medical Care',
                'subtitle' => 'World-class healthcare within minutes',
                'items' => $hospitals,
                'slug' => 'hospitals'
            ],
            [
                'title' => 'Nearby Attractions',
                'subtitle' => 'Explore the rich heritage of Vellore',
                'items' => $attractions,
                'slug' => 'attractions'
            ],
            [
                'title' => 'Connectivity & Transport',
                'subtitle' => 'Easy access to major transport hubs',
                'items' => $connectivity,
                'slug' => 'connectivity'
            ]
        ];
    }

    private function getReviewsData()
    {
        return \App\Models\Review::latest()->get();
    }
}
