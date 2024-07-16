<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
 public function index()
    {
        $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderBy('category_id','desc')->get();

        $brand_product=DB::table('tbl_brand_product')->where('brand_status','0')->orderBy('brand_id','desc')->get();
        $slider=DB::table('sliders')->where('status','0')->where('slider_id','7')->get();
        $slider1=DB::table('sliders')->where('status','0')->orderBy('slider_id','desc')->where('slider_id','<>','7')->get();
        $all_product=DB::table('tbl_product')->where('product_status','0')->orderBy('product_id','desc')->paginate(9);
        return view('page.home',)
        ->with('category',  $cate_product)
        ->with('brand',  $brand_product)
        ->with('product',  $all_product)
        ->with('slider',  $slider)
        ->with('slider1',  $slider1);
      
   
    }
    public function search(Request $request)
    {
        $keyword=$request->keyword_search;
        Session::put('key',$keyword);
        $search_product=DB::table('tbl_product')->where('product_name','like','%'.$keyword.'%')->get();

        $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderBy('category_id','desc')->get();

        $brand_product=DB::table('tbl_brand_product')->where('brand_status','0')->orderBy('brand_id','desc')->get();
        $slider=DB::table('sliders')->where('status','0')->where('slider_id','7')->get();
        $slider1=DB::table('sliders')->where('status','0')->orderBy('slider_id','desc')->where('slider_id','<>','7')->get();
        $all_product=DB::table('tbl_product')->where('product_status','0')->orderBy('product_id','desc')->paginate(6);
        return view('page.search.search',)
        ->with('category',  $cate_product)
        ->with('search_result',   $search_product)
        ->with('brand',  $brand_product)
        ->with('product',  $all_product)
        ->with('slider',  $slider)
        ->with('slider1',  $slider1);
      
    }
   
}
