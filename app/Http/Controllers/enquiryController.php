<?php

namespace App\Http\Controllers;

use App\Say;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use File;
use App\Enquiry;

class enquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $says = DB::select('select * from enquiries order by id DESC');

        return view('admin.enquirylist.index', compact('says'));
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


        // return "aa";

        $validator = Validator::make($request->all(), [
            'fname' => 'required|max:25',
            'lname' => 'required|max:25',
            'email' => 'required|max:25',
            'message' => 'required|max:100',
            'phone' => 'required|min:10',
            'subject' => 'required',

        ]);




        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }

        $image = new Enquiry();
        $image->fname = $request->fname;
        $image->lname = $request->lname;
        $image->email = $request->email;
        $image->phone = $request->phone;
        $image->subject = $request->subject;
        $image->message = $request->message;
        $image->save();

        session()->flash('success', 'Submitted completed successfully.');
        return redirect('/#contact');
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
        $turf = Enquiry::find($id);
        $turf->delete();
        return redirect()->back()->with('status', 'Successfully Deleted.Thank you');
    }
}
