@extends('layouts.app')

@section('content')
<section class="section mobile-pt-40" style="padding-top: 150px; background: #ffffff; min-height: 100vh;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 70px;" class="mobile-mt-30">
            <h1 style="font-size: 3rem; margin-bottom: 15px; color: var(--brand-maroon); font-weight: 600;">Vellore Sites</h1>
            <div style="width: 80px; height: 3px; background: var(--brand-maroon); margin: 0 auto;"></div>
            <p style="color: var(--text-main); margin-top: 20px; font-size: 1.1rem; max-width: 800px; margin-left: auto; margin-right: auto;">
                Ranjan Residency is strategically located in the heart of Vellore, providing easy access to major landmarks, hospitals, and spiritual centers. Explore the proximity of key locations from our residency.
            </p>
        </div>

        <!-- Connection Diagram (Desktop only) -->
        <div class="connection-wrapper">
            <div class="connection-container">
                <div class="central-node">
                    <div class="node-content">
                        <i class="fas fa-hotel"></i>
                        <span>Ranjan Residency</span>
                        <small style="display: block; font-size: 0.6rem; margin-top: 5px; opacity: 0.8;">MAIN POINT</small>
                    </div>
                    <div class="pulse-ring"></div>
                </div>

                @php 
                    $totalItems = 0;
                    foreach($nearbyPlaces as $cat) $totalItems += count($cat['items']);
                    $currentIdx = 0;
                @endphp

                @foreach($nearbyPlaces as $category)
                    @foreach($category['items'] as $place)
                        @php 
                            $angle = ($currentIdx / $totalItems) * 360;
                            $currentIdx++;
                        @endphp
                        <div class="destination-node" style="--angle: {{ $angle }}deg; --delay: {{ $currentIdx * 0.1 }}s;">
                            <div class="connection-line"></div>
                            <div class="destination-content">
                                <div class="dist-tag">{{ $place['distance'] }}</div>
                                <h4 title="{{ $place['name'] }}">{{ $place['name'] }}</h4>
                                <small>{{ $category['title'] }}</small>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

        <!-- List View (Mobile & Backup) -->
        <div style="margin-top: 80px; display: grid; grid-template-columns: repeat(auto-fit, minmax(290px, 1fr)); gap: 30px;">
            @foreach($nearbyPlaces as $category)
            <div class="category-card" style="background: #ffffff; padding: 40px; border: 1px solid #eee; transition: all 0.3s;">
                <h3 style="color: var(--brand-maroon); margin-bottom: 30px; font-size: 1.6rem; display: flex; align-items: center; gap: 15px;">
                    <i class="fas {{ $category['slug'] == 'hospitals' ? 'fa-hospital' : ($category['slug'] == 'attractions' ? 'fa-fort-awesome' : 'fa-train') }}" style="font-size: 1.2rem; opacity: 0.3;"></i>
                    {{ $category['title'] }}
                </h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($category['items'] as $place)
                    <li style="margin-bottom: 25px; border-bottom: 1px solid #f5f5f5; padding-bottom: 20px; display: flex; justify-content: space-between; align-items: center; gap: 20px;">
                        <div style="flex: 1;">
                            <span style="display: block; font-weight: 700; color: var(--text-main); line-height: 1.3; font-size: 1rem;">{{ $place['name'] }}</span>
                            <small style="color: var(--text-muted); font-size: 0.85rem; margin-top: 5px; display: block;">{{ $place['description'] }}</small>
                        </div>
                        <div style="text-align: right;">
                            <span style="background: #fdf2f2; color: var(--brand-maroon); padding: 5px 12px; font-size: 0.8rem; font-weight: 800; white-space: nowrap; border-radius: 4px; border: 1px solid rgba(193, 40, 47, 0.1);">{{ $place['distance'] }}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        
        <div style="text-align: center; margin-top: 80px;">
            <a href="{{ route('home') }}" class="btn-maroon" style="padding: 15px 45px; border-radius: 0;">BACK TO HOME</a>
        </div>
    </div>
</section>

<style>
.connection-wrapper {
    position: relative;
    padding: 100px 0;
    overflow: visible;
}

@media (max-width: 1100px) {
    .connection-wrapper { display: none; }
}

.connection-container {
    position: relative;
    height: 700px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.central-node {
    position: relative;
    z-index: 100;
    width: 200px;
    height: 200px;
    background: var(--brand-maroon);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    box-shadow: 0 0 50px rgba(193, 40, 47, 0.3);
    text-align: center;
    border: 5px solid #fff;
}

.node-content i { font-size: 3rem; display: block; margin-bottom: 10px; color: #fff; }
.node-content span { font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 1rem; color: #fff; }

.pulse-ring {
    position: absolute;
    width: 100%;
    height: 100%;
    border: 2px solid var(--brand-maroon);
    border-radius: 50%;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); opacity: 0.8; }
    100% { transform: scale(1.8); opacity: 0; }
}

.destination-node {
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: rotate(var(--angle));
    pointer-events: none;
}

.connection-line {
    position: absolute;
    width: 300px;
    height: 2px;
    background: linear-gradient(to right, var(--brand-maroon), #eeeeee);
    left: calc(50% + 50px);
    transform-origin: left;
    animation: lineGrow 1s ease-out forwards;
    animation-delay: var(--delay);
    opacity: 0;
}

@keyframes lineGrow {
    0% { width: 0; opacity: 0; }
    100% { width: 300px; opacity: 0.6; }
}

.destination-content {
    position: absolute;
    left: calc(50% + 350px);
    transform: rotate(calc(-1 * var(--angle)));
    background: #ffffff;
    padding: 15px 20px;
    border: 1px solid #f0f0f0;
    width: 240px;
    pointer-events: all;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    animation: fadeIn 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    animation-delay: calc(var(--delay) + 0.3s);
    opacity: 0;
    border-radius: 8px;
}

.destination-content:hover {
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    transform: rotate(calc(-1 * var(--angle))) translateY(-10px) scale(1.05);
    border-color: var(--brand-maroon);
    z-index: 10;
}

.dist-tag {
    position: absolute;
    top: -12px;
    right: 15px;
    background: var(--brand-maroon);
    color: #fff;
    font-size: 0.7rem;
    padding: 3px 12px;
    font-weight: 800;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(193, 40, 47, 0.2);
}

.destination-content h4 {
    margin: 0;
    font-size: 1rem;
    color: var(--text-main);
    white-space: wrap;
    line-height: 1.3;
    font-weight: 700;
}

.destination-content small {
    color: var(--brand-maroon);
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.65rem;
    letter-spacing: 1px;
    margin-top: 5px;
    display: block;
}

@keyframes fadeIn {
    from { opacity: 0; transform: rotate(calc(-1 * var(--angle))) translateX(-40px); }
    to { opacity: 1; transform: rotate(calc(-1 * var(--angle))) translateX(0); }
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.05);
    border-color: rgba(193, 40, 47, 0.2);
}
</style>
@endsection
