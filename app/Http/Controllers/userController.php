<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Country;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Package;
use League\Glide\Server;
use App\Category;
use App\Product;

class userController extends Controller
{
    public function index()
    {

        // $products = DB::table('services')
        //     ->orderBy('id', 'desc')
        //     ->latest()
        //     ->take(3)
        //     ->get();

        $banners = DB::table('banners')
        ->orderBy('id', 'desc')
            ->get();


        $products = DB::table('products')
        ->orderBy('id', 'desc')
        ->latest()
        ->take(4)
        ->get();

        $blogs = DB::table('blogs')
        ->orderBy('id', 'desc')
        ->latest()
        ->take(3)
        ->get();    


        $videos = DB::table('videos')
        ->orderBy('id', 'desc')
        ->latest()
            ->take(1)
            ->get();


        $says = DB::table('says')
        ->orderBy('id', 'desc')
            ->get();

        $teams = DB::table('teams')
        ->orderBy('id', 'desc')
        ->get();



        return view('users.index', compact('products', 'banners', 'videos', 'says', 'teams', 'blogs'));
    }


    public function singleservices($id)
    {
        $pro = Service::find($id);
        // $id = $pro->id;
        if ($id > 0) {

            $services = DB::table('services')
                ->orderBy('id', 'desc')
                ->where('id', $id)
                ->get();



            $products = DB::table('services')
                ->orderBy('id', 'desc')
                ->get();

            return view('users.singleservice', compact('services', 'products'));
        } else {

            $services = Service::inRandomOrder()->limit(1)->get();
            $products = DB::table('services')
                ->orderBy('id', 'desc')
                ->get();

            return view('users.singleservice', compact('services', 'products'));
        }
    }




 
    public function productbycat($id)
    {
        $cate_id = Category::find($id);
        $category=$cate_id->Name;
        // return $category;

        if (!$cate_id) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $products = DB::table('products')
        ->where('category_id', $cate_id->id) // Extract ID
        ->get();


        $categories = DB::select('select * from categories order by id DESC');

        

        return view('users.product', compact('categories', 'products', 'category'));
    }

        public function about()
    {

        return view('users.about');
    }

    public function institutions()
    {

        return view('users.institutions');
    }

    public function courses()
    {

        return view('users.courses');
    }

    public function virtual()
    {

        $googlestreet = DB::table('subservices')
            ->orderBy('id', 'desc')
            ->where('service', 'Google Street')
            ->get();


        $twod = DB::table('subservices')
            ->orderBy('id', 'desc')
            ->where('service', '2D Virtual Tour')
            ->get();

        $threed = DB::table('subservices')
            ->orderBy('id', 'desc')
            ->where('service', '3D Virtual Tour')
            ->get();

        return view('users.virtual', compact('googlestreet', 'twod', 'threed'));
    }

    public function service($id)
    {


        // return "aa";
        $item = Service::find($id);
        $id = $item->id;

        $service = DB::table('services')
            ->orderBy('id', 'desc')
            ->where('id', $id)
            ->first();

        $serviceslide = DB::table('serviceslides')
            ->where('service_id', $id)
            ->get();

        $count = DB::table('serviceslides')
            ->where('service_id', $id)
            ->count();


        $servicescate = DB::table('services')
            ->orderBy('id', 'desc')
            ->get();

        $blogs = DB::table('blogs')
            ->orderBy('id', 'desc')
            ->latest()
            ->take(3)
            ->get();

        $teams = DB::table('teams')
            ->orderBy('id', 'desc')
            ->get();


        return view('users.service', compact('count', 'serviceslide', 'teams', 'blogs', 'servicescate', 'service'));
    }
    public function projects()
    {

        $packagecategories = DB::table('packagecategories')
            ->orderBy('id', 'desc')
            ->get();

        $packages = DB::table('packages')
            ->orderBy('id', 'desc')
            ->get();


        $teams = DB::table('teams')
            ->orderBy('id', 'desc')
            ->get();



        $servicescate = DB::table('services')
            ->orderBy('id', 'desc')
            ->get();

        return view('users.project', compact('servicescate', 'teams', 'packagecategories', 'packages'));
    }

    public function userblog()
    {



        $blogs = DB::table('blogs')
            ->orderBy('id', 'desc')
            ->get();



        return view('users.bloglist', compact('blogs'));
    }


    public function singleblog($id)
    {

        

        $blog = Blog::find($id);
        $id = $blog->id;


        $blogs = DB::table('blogs')
            ->where('id', $id)
            ->first();



        return view('users.blogDetails', compact('blogs'));
    }


    public function userservices()
    {


        $services = DB::table('services')
            ->orderBy('id', 'asc')
            ->get();

        return view('users.services', compact('services'));
    }

    public function userservicesbyfilter($id, Request $request)
    {

        $a = $request->id;

        if ($a == 1) {
            $services = DB::table('services')
                ->orderBy('id', 'asc')
                ->where('selection', '=', "Virtual Tour")
                ->get();
            return view('users.services', compact('services'));
        } elseif ($a == 2) {
            $services = DB::table('services')
                ->orderBy('id', 'asc')
                ->where('selection', '=', "Virtual Help Desk")
                ->get();
            return view('users.services', compact('services'));
        } elseif ($a == 3) {

            $services = DB::table('services')
                ->orderBy('id', 'asc')
                ->where('selection', '=', "Virtual Expo")
                ->get();
            return view('users.services', compact('services'));
        } elseif ($a == 4) {
            $services = DB::table('services')
                ->orderBy('id', 'asc')
                ->where('selection', '=', "360 Photography")
                ->get();
            return view('users.services', compact('services'));
        }


        // return view('users.services', compact('services'));
    }

    public function portfoliowodthid($id, Request $request)
    {

        $a = $request->id;


        $services = DB::table('services')
            ->orderBy('id', 'asc')
            ->where('id', '=', $a)
            ->take(1)
            ->get();
        return view('users.singleservice', compact('services'));
    }



    public function usercontact()
    {

        return view('users.contact');
    }


    public function projectsingle($id)
    {

        // $data = [
        //     'success' => true,
        //     'message' => 'Your AJAX processed correctly'
        // ];

        // return response()->json($data);


        $category = Package::find($id);
        $id = $category->id;

        $pros = DB::table('packages')
            ->where('category_id', $id)
            ->get();
        // $arr = array('image' => $pros);
        return json_encode($pros);
    }

    public function homeproject($id)
    {


        $category = Package::find($id);
        $id = $category->id;

        $pros = DB::table('packages')
            ->where('category_id', $id)
            ->get();
        // $arr = array('image' => $pros);
        return json_encode($pros);
    }



    public function userproducts()
    {

        $products = DB::select('select * from products order by id DESC');
        $categories = DB::select('select * from categories order by id DESC');

        return view('users.productfull', compact('products', 'categories'));
    }

    public function usersingleproduct($id)
    {

        $pro = Service::find($id);
        $id = $pro->id;

        $product = DB::table('services')
            ->orderBy('id', 'desc')
            ->where('id', $id)
            ->first();

        return view('users.single-product', compact('product'));
    }
}
