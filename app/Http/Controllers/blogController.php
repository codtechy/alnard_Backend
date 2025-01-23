<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Support\Facades\DB;
use Validator;
use File;
use Illuminate\Http\Request;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $says = DB::select('select * from blogs order by id DESC');
        return view('admin.blog.index', compact('says'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.blog.create');
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
            'name' => 'required|max:250',
            'title' => 'required|max:250',
            'date'=>'required',
            'words' => 'required',
            'file' => 'required',

        ]);




        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }



        $image = new Blog();
        if ($request->hasFile('file')) {
            $dir = 'uploads/blogs';
            $extension = strtolower($request->file('file')->getClientOriginalExtension()); // get image extension
            $fileName = str_random() . '.' . $extension; // rename image
            $request->file('file')->move($dir, $fileName);
            $image->image = $fileName;
        }
        $image->name = $request->name;
        $image->title = $request->title;
        $image->date = $request->date;
        $image->words = $request->words;
        $image->save();
        // dd($image);
        return redirect('/blogs')->with('status', 'Successfully Uploaded .Thank you');
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
        $banner = Blog::find($id);
        return view('admin.blog.edit', compact('banner', 'id'));
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
            'name' => 'required|max:250',
            'title' => 'required|max:250',
            'date' => 'required',
            'words' => 'required',

        ]);




        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }



        $image =Blog::find($id);
        if ($request->hasFile('file')) {
            $dir = 'uploads/blogs';
            $extension = strtolower($request->file('file')->getClientOriginalExtension()); // get image extension
            $fileName = str_random() . '.' . $extension; // rename image
            $request->file('file')->move($dir, $fileName);
            $image->image = $fileName;
        }
        $image->name = $request->name;
        $image->title = $request->title;
        $image->date = $request->date;
        $image->words = $request->words;
        $image->save();
        // dd($image);
        return redirect('/blogs')->with('status', 'Successfully Uploaded .Thank you');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turf = Blog::find($id);
        $image_path = public_path('uploads/blogs/' . $turf->image);
        if (File::exists($image_path)) {
            unlink($image_path);
        }
        $turf->delete();
        return redirect()->back()->with('status', 'Successfully Deleted.Thank you');
    }
}
