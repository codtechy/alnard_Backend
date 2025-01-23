<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Validator;
use App\Bannervideo;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class bannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner=DB::select('select * from banners order by id DESC');
        return view('admin.banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required',
        ]);
          if ($validator->fails()) {
                 return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }
                $image =new Banner();
                if ($request->hasFile('file')) {
                    $dir = 'uploads/banner';
                    $extension = strtolower($request->file('file')->getClientOriginalExtension()); // get image extension
                    $fileName = Str::random(10) . '.' . $extension;
                    $request->file('file')->move($dir, $fileName);
                    $image->image = $fileName;
                }
        // $image->u_link ='a';
        // $image->title = 'a';
        // $image->sub_title ='a';
                $image->save();
            return redirect('/banner')->with('status','Successfully Uploaded .Thank you');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Bannervideo::find($id);
        return view('admin.banner.edit', compact('banner','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'u_link' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $image = Bannervideo::find($id);
        $image->u_link = $request->u_link;
    
        $image->save();
        return redirect('/banner')->with('status', 'Successfully Uploaded .Thank you');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turf = Banner::find($id);
        $image_path= public_path('uploads/banner/'.$turf->image);
        if (File::exists($image_path)) {
           unlink($image_path);
       }
      $turf->delete();
      return redirect()->back()->with('status','Successfully Deleted.Thank you');
    }
}
