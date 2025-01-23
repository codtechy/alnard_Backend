<?php

namespace App\Http\Controllers;
use App\Banner;
use App\Say;
use App\Service;
use App\Offer;
use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $banner = Banner::count();
        $services = Service::count();
        $gallery = Offer::count();
        $says = Say::count(); 
        $blog = Blog::count(); 
        return view('admin.index',compact('gallery','banner','services', 'says','blog'));
    }
}
