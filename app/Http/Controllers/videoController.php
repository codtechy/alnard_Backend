<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Videos;
use Spatie\MediaLibrary\Conversions\ImageGenerators\Video;

class videoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = DB::select('select * from videos order by id DESC');
        return view('admin.video.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return "aa";
        $video = Videos::find($id);
        return view('admin.video.edit', compact('video', 'id'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'video' => 'required|string',
        ]);


        $category = Videos::find($id);
        $category->video = $validatedData['video'];
        $category->save();

        return redirect('/video')->with('status', 'Successfully Updated!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
