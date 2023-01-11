<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Models\Video;

class VideoController extends Controller
{
    public function getVideoUploadForm()
    {
        return  view(('admin.videos.create'));
    }

    public function uploadVideo(Request $request)
   {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        // $fileName = $request->video->getClientOriginalName();
        // $filePath = 'videos/' . $fileName;

        // $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->video));

        // File URL to access the video in frontend
        // $url = Storage::disk('public')->url($filePath);

        $fileUrl = $request->file('video');

        $fileName = $request->video->getClientOriginalName();
        $destinationPath = public_path('/videos/');
        // $filePath = 'videos/' . $fileName;

        $fileUrl->move($destinationPath, $fileName);

        if ($fileUrl) {
            $video = new Video();
            $video->title = $request->title;
            $video->path = $filePath;
            $video->save();

            return back()
            ->with('success','Video has been successfully uploaded.');
        }

        return back()
            ->with('error','Unexpected error occured');
    }
}
