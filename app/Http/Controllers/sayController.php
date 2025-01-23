<?php

namespace App\Http\Controllers;

use App\Say;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use File;

class sayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $says=DB::select('select * from says order by id DESC');

    return view('admin.say.index',compact('says'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.say.create');
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
            'designation' => 'required',
            'words' => 'required',
            'file' => 'required',
           
        ]);
    
    
    
    
          if ($validator->fails()) {
                 return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }
            
    
                
                $image =new Say();
        if ($request->hasFile('file')) {
            $dir = 'uploads/clientsays';
            $extension = strtolower($request->file('file')->getClientOriginalExtension()); // get image extension
            $fileName = str_random(10) . '.' . $extension; // rename image
            $request->file('file')->move($dir, $fileName);
            $image->image = $fileName;
        }
        $image->name = $request->name;
               
                $image->designation= $request->designation;
                $image->words= $request->words;
                 $image->save();
                // dd($image);
            return redirect('/says')->with('status','Successfully Uploaded .Thank you');
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
        $banner = Say::find($id);
        return view('admin.say.edit', compact('banner','id'));
    
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
            'name' => 'required',
            'designation' => 'required',
            'words' => 'required',
            

        ]);




        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }



        $image = Say::find($id);
        if ($request->hasFile('file')) {
            $dir = 'uploads/clientsays';
            $extension = strtolower($request->file('file')->getClientOriginalExtension()); // get image extension
            $fileName = str_random() . '.' . $extension; // rename image
            $request->file('file')->move($dir, $fileName);
            $image->image = $fileName;
        }
        $image->name = $request->name;
        $image->designation = $request->designation;
        $image->words = $request->words;
        $image->save();
        // dd($image);
        return redirect('/says')->with('status', 'Successfully Uploaded .Thank you');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turf = Say::find($id);
        $image_path = public_path('uploads/clientsays/' . $turf->image);
        if (File::exists($image_path)) {
            unlink($image_path);
        }
      $turf->delete();
      return redirect()->back()->with('status','Successfully Deleted.Thank you');
   }
}
