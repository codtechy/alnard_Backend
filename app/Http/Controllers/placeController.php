<?php

namespace App\Http\Controllers;

use App\Country;
use App\Place;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class placeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = DB::table('places')
            ->join('countries', 'countries.id', '=', 'places.country_id')
            ->select('places.*', 'countries.country as class')
            ->get();
        // $places = DB::select('select * from places order by id DESC');
        return view('admin.place.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Country::all(['id', 'country']);
        $table = Country::orderBy('id', 'DESC')->get();
        return view('admin.place.create', compact('category', $category, 'table'));
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
            'country_id' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $image = new Place();
        $image->name = $request->name;
        $image->country_id = $request->country_id;
        $image->save();
        return redirect('/places')->with('status', 'Successfully Uploaded .Thank you');
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
        $product = Place::find($id);
        $table = DB::select('select * from countries order by id DESC');
        return view('admin.place.edit', compact('product', 'id', 'table'));
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
            'country_id' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $image = Place::find($id);
        $image->name = $request->name;
        $image->country_id = $request->country_id;
        $image->save();
        return redirect('/places')->with('status', 'Successfully Uploaded .Thank you');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turf = Package::find($id);
        $image_path = public_path('uploads/package/' . $turf->image);
        if (File::exists($image_path)) {
            unlink($image_path);
        }
        $turf->delete();
        return redirect()->back()->with('status', 'Successfully Deleted.Thank you');
    }
}
