@extends('layouts.app')

@section('content')
<section class="section" style="padding-top: 120px; background: var(--secondary-dark); min-height: 100vh;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 2.2rem;">Admin Media</h2>
            <div style="width: 80px; height: 3px; background: var(--primary-gold); margin: 15px auto;"></div>
            <p style="color: #bbb;">Manage your website content</p>
        </div>

        @if(session('success'))
            <div style="background: rgba(40, 167, 69, 0.2); color: #28a745; padding: 15px; border-radius: 8px; margin-bottom: 30px; border: 1px solid #28a745; text-align: center;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Upload Form -->
        <div style="max-width: 600px; margin: 0 auto 40px; background: #111; padding: 25px; border-radius: 12px; border: 1px dashed var(--primary-gold);">
            <h3 style="margin-bottom: 20px; color: var(--primary-gold); font-size: 1.3rem;">Upload New Media</h3>
            <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="margin-bottom: 25px;">
                    <label style="display: block; margin-bottom: 10px; color: #aaa;">Select Image or Video</label>
                    <input type="file" name="file" required style="width: 100%; padding: 12px; background: #000; border: 1px solid #333; color: white; border-radius: 5px;">
                    <small style="color: #666;">Supports JPG, PNG, MP4 (Max 20MB)</small>
                </div>
                <div style="margin-bottom: 25px;">
                    <label style="display: block; margin-bottom: 10px; color: #aaa;">Title / Description</label>
                    <input type="text" name="title" placeholder="e.g. Wedding Event Highlights" style="width: 100%; padding: 12px; background: #000; border: 1px solid #333; color: white; border-radius: 5px;">
                </div>
                <button type="submit" class="btn-gold" style="width: 100%;">Upload to Website</button>
            </form>
        </div>

        <hr style="border: 0; border-top: 1px solid #333; margin-bottom: 60px;">

        <!-- Management List -->
        <h3 style="margin-bottom: 30px; font-size: 2rem; text-align: center;">Currently Active Media</h3>
        @if($uploadedMedia->count() > 0)
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                @foreach($uploadedMedia as $media)
                <div style="background: #111; border-radius: 12px; overflow: hidden; border: 1px solid #333; transition: all 0.3s;">
                    @if($media->type == 'video')
                        <video width="100%" height="200" controls style="object-fit: cover; background: #000;">
                            <source src="{{ asset('uploads/' . $media->filename) }}" type="video/mp4">
                        </video>
                    @else
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('uploads/' . $media->filename) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="{{ $media->title }}">
                        </div>
                    @endif
                    <div style="padding: 20px; display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <h4 style="margin: 0; color: #fff;">{{ $media->title }}</h4>
                            <small style="color: #666; text-transform: uppercase;">{{ $media->type }}</small>
                        </div>
                        <form action="{{ route('media.destroy', $media->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: #ff4d4d; border: none; color: white; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <p style="text-align: center; color: #666; font-style: italic;">No uploaded media yet. Start by uploading above.</p>
        @endif
    </div>
</section>
@endsection
