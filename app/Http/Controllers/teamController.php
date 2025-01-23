<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use File;
use Illuminate\Support\Str;
class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team=DB::select('select * from teams order by id DESC');

        return view('admin.team.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
                $image =new Team();
                if ($request->hasFile('file')) {
                    $dir = 'uploads/team';
                    $extension = strtolower($request->file('file')->getClientOriginalExtension()); // get image extension
                    $fileName = Str::random(10) . '.' . $extension;
                    $request->file('file')->move($dir, $fileName);
                    $image->image = $fileName;
                }
               
                $image->save();
            return redirect('/team')->with('status','Successfully Uploaded .Thank you');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turf = Team::find($id);
        $image_path= public_path('uploads/team/'.$turf->image);
        if (File::exists($image_path)) {
           unlink($image_path);
       }
      $turf->delete();
      return redirect()->back()->with('status','Successfully Deleted.Thank you');
    }
}
