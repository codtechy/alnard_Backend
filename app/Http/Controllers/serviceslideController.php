<?php

namespace App\Http\Controllers;

use App\Service;
use App\Serviceslide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
class serviceslideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $serviceslides = DB::table('serviceslides')
        ->join('services', 'services.id', '=', 'serviceslides.service_id')
        ->select('serviceslides.*', 'services.title as service')
        ->get();
        // $serviceslides = DB::select('select * from serviceslides order by id DESC');
        // return view('admin.package.index', compact('serviceslides'));


        // $category = DB::select('select * from serviceslides order by id DESC');
        return view('admin.serviceslide.index', compact('serviceslides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Service::all(['id', 'title']);
        $table = Service::orderBy('id', 'DESC')->get();
        return view('admin.serviceslide.create', compact('category', $category, 'table'));
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
            'name' => 'required|max:25',
            'words' => 'required',
            'service_id'=>'required|integer',


        ]);




        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }



        $image = new Serviceslide();
        $image->service_id = $request->service_id;
        $image->name = $request->name;
        $image->words = $request->words;
        $image->save();
        return redirect('/servicesslide')->with('status', 'Successfully Uploaded .Thank you');
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
        $product = Serviceslide::find($id);
        $table = DB::select('select * from services order by id DESC');
        return view('admin.serviceslide.edit', compact('product', 'id', 'table'));
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
            'name' => 'required|max:25',
            'words' => 'required',
            'service_id' => 'required|integer',


        ]);




        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }



        $image =Serviceslide::find($id);
        $image->service_id = $request->service_id;
        $image->name = $request->name;
        $image->words = $request->words;
        $image->save();
        return redirect('/servicesslide')->with('status', 'Successfully Uploaded .Thank you');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turf = Serviceslide::find($id);
        $turf->delete();
        return redirect()->back()->with('status', 'Successfully Deleted.Thank you');
    }
}
