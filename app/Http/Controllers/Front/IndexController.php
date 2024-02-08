<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use DB;

class IndexController extends Controller
{
 //root page
 public function index()
 {
     $category=DB::table('categories')->orderBy('category_name','ASC')->get();
    //  $brand=DB::table('brands')->where('front_page',1)->limit(24)->get();
     $bannerproduct=Product::where('status',1)->where('product_slider',1)->latest()->first();
    //  $featured=Product::where('status',1)->where('featured',1)->orderBy('id','DESC')->limit(16)->get();
    //  $todaydeal=Product::where('status',1)->where('today_deal',1)->orderBy('id','DESC')->limit(6)->get();
    //  $popular_product=Product::where('status',1)->orderBy('product_views','DESC')->limit(16)->get();
    //  $trendy_product=Product::where('status',1)->where('trendy',1)->orderBy('id','DESC')->limit(8)->get();
    //  $random_product=Product::where('status',1)->inRandomOrder()->limit(16)->get();
    //  $review=DB::table('wbreviews')->where('status',1)->orderBy('id','DESC')->limit(12)->get();
     //homepage category
    //  $home_category=DB::table('categories')->where('home_page',1)->orderBy('category_name','ASC')->get();


    //  $campaign=DB::table('campaigns')->where('status',1)->orderBy('id','DESC')->first();

     return view('frontend.index',compact('category','bannerproduct'));
 }
 public function ProductDetails($slug){
    $product=Product::where('slug',$slug)->first();
    // dd($product);
    return view('frontend.product.product_details',compact('product'));

 }
}
