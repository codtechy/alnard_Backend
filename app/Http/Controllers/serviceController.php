<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Str;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::select('select * from services order by id DESC');
        return view('admin.servicess.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.servicess.create');
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
            'title' => 'required',
            'file' => 'required',
            'price' => 'required',
            'words' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $image = new Service();
        if ($request->hasFile('file')) {
            $dir = 'uploads/service';
            $extension = strtolower($request->file('file')->getClientOriginalExtension()); // get image extension
            $fileName = Str::random(32) . '.' . $extension; // rename image
            $request->file('file')->move($dir, $fileName);
            $image->image = $fileName;
        }
        $image->title = $request->title;
        $image->words = $request->words;
        $image->price = $request->price;

        $image->save();
        return redirect('/services')->with('status', 'Successfully Uploaded .Thank you');
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
        $banner = Service::find($id);
        return view('admin.servicess.edit', compact('banner', 'id'));
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
            'title' => 'required',
            'price' => 'required',
            'words' => 'required',


        ]);




        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }



        $image = Service::find($id);
        if ($request->hasFile('file')) {
            $dir = 'uploads/service';
            $extension = strtolower($request->file('file')->getClientOriginalExtension()); // get image extension
            $fileName = Str::random(32) . '.' . $extension; // rename image
            $request->file('file')->move($dir, $fileName);
            $image->image = $fileName;
        }
        $image->title = $request->title;
        $image->words = $request->words;
        $image->price = $request->price;
        $image->save();
        // dd($image);
        return redirect('/services')->with('status', 'Successfully Uploaded .Thank you');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turf = Service::find($id);
        $image_path = public_path('uploads/service/' . $turf->image);
        if (File::exists($image_path)) {
            unlink($image_path);
        }
        $turf->delete();
        return redirect()->back()->with('status', 'Successfully Deleted.Thank you');
    }
}
