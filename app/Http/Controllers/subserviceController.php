<?php

namespace App\Http\Controllers;

use App\Subservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class subserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner=DB::select('select * from subservices order by id DESC');
        return view('admin.subservice.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $banner = Subservice::find($id);
        return view('admin.subservice.edit', compact('banner','id'));
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
            'service' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $image = Subservice::find($id);
        $image->u_link = $request->u_link;
        $image->service = $request->service;
        $image->save();
        return redirect('/subservice')->with('status', 'Successfully Uploaded .Thank you');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 3D Virtual Tour	8kPNXKy2cRE	
        // 2D Virtual Tour	r7KDxSAZBB0	
        // Google Street	O4cGc2mOxL4
    }
}
