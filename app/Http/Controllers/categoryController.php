<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Validator;
use Illuminate\Support\Facades\DB;
class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = DB::select('select * from categories order by id DESC');
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);


        $category = new Category();
        $category->name = $validatedData['name'];
        $category->save();

        return redirect('/category')->with('status', 'Successfully Uploaded.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category', 'id'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);


        $category =Category::find($id);
        $category->name = $validatedData['name'];
        $category->save();

        return redirect('/category')->with('status', 'Successfully Updated!.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $turf = Category::find($id);
        $turf->delete();
        return redirect()->back()->with('status', 'Successfully Deleted.Thank you');
    }
}
