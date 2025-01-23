<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Validator;
use File;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
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
        $image = new Product();
        if ($request->hasFile('file')) {
            $dir = 'uploads/product';
            $extension = strtolower($request->file('file')->getClientOriginalExtension()); // get image extension
            $fileName = str_random(12) . '.' . $extension; // rename image
            $request->file('file')->move($dir, $fileName);
            $image->image = $fileName;
        }
        $image->title = $request->name;
        $image->category_id = $request->category_id;
        $image->save();
        return redirect('/products')->with('status', 'Successfully Uploaded .Thank you');
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
        $categories = Category::all();
        $products = Product::find($id);
        return view('admin.product.edit', compact('products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $image =Product::find($id);
        if ($request->hasFile('file')) {
            $dir = 'uploads/product';
            $extension = strtolower($request->file('file')->getClientOriginalExtension()); // get image extension
            $fileName = str_random(12) . '.' . $extension; // rename image
            $request->file('file')->move($dir, $fileName);
            $image->image = $fileName;
        }
        $image->title = $request->name;
        $image->category_id = $request->category_id;
        $image->save();
        return redirect('/products')->with('status', 'Successfully Uploaded .Thank you');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $turf = Product::find($id);
        $image_path = public_path('uploads/product/' . $turf->image);
        if (File::exists($image_path)) {
            unlink($image_path);
        }
        $turf->delete();
        return redirect()->back()->with('status', 'Successfully Deleted.Thank you');
    }
    
}
