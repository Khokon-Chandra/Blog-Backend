<?php

namespace App\Http\Controllers\Backend;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Authorizable;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    use Authorizable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.media.media', ['media' => Media::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.media.add-media');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];
        $files = $request->validate(['media' => 'required']);
        foreach ($files['media'] as $file) {
            $filename = uniqid() . "." . $file->getClientOriginalExtension();
            $directory = uniqid() . "_" . now()->timestamp;
            $file->storeAs('public/' . $directory, $filename);
            $data[] = ['link' => Storage::disk('public')->url($directory . "/" . $filename)];
        }
        Media::upsert($data, ['link']);
        return back()->with('success', 'Successfully Files Uploaded');
    }

    public function storeSingleFile(Request $request)
    {
        $file = $request->file('file');
        $filename = uniqid().".".$file->getClientOriginalExtension();
        $directory = uniqid() . "_" . now()->timestamp;
        $file->storeAs('public/' . $directory, $filename);
        $link = Storage::disk('public')->url($directory . "/" . $filename);
        $data = ['link' => $link];
        Media::create($data);
        return $link;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }
}
