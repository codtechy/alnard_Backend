<?php

namespace App\Http\Controllers;

use App\Homeenq;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;

class homeenqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = DB::select('select * from homeenqs order by id DESC');
        return view('admin.homeenquiry.index', compact('category'));
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
        

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'comment' => 'required',
            'phone' => 'required|min:10',
            'date' => 'required',
            'time' => 'required',

        ]);




        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }



        Homeenq::create($request->all());

        return redirect()->back()->with('status', 'Successfully Submitted .Thank you');
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
        $turf = Homeenq::find($id);
        $turf->delete();
        return redirect()->back()->with('status', 'Successfully Deleted.Thank you');
    }
}
