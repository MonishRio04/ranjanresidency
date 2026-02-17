<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index(Request $request)
    {
        // if ($request->get('pwd') === 'ranjan123') {
        //     session(['admin_access' => true]);
        // }
        
        // if (!session('admin_access')) {
        //     return abort(404);
        // }
        
        $uploadedMedia = Media::latest()->get();
        return view('admin.media', compact('uploadedMedia'));
    }

    public function store(Request $request)
    {
        dd(1,$request->files->count());
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $mimeType = $file->getMimeType();
            $type = str_contains($mimeType, 'video') ? 'video' : 'image';
            
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            
            dd(Media::create([
                'filename' => $filename,
                'type' => $type,
                'title' => $request->title ?? $file->getClientOriginalName(),
            ]));

            return back()->with('success', 'Media uploaded successfully!');
        }
        return back()->with('error', 'Failed to upload media.');
    }

    public function destroy($id)
    {
        if (!session('admin_access')) return abort(403);
        
        $media = Media::findOrFail($id);
        $filePath = public_path('uploads/' . $media->filename);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $media->delete();
        return back()->with('success', 'Media deleted successfully!');
    }
}
