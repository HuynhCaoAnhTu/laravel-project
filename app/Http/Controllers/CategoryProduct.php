<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryProduct extends Controller
{
     
public function Authlogin(){
  $admin_id= Session::get('customer_id');
  if($admin_id)
  return Redirect::to('admin.dashboard');
  else
  return Redirect::to('trangchu')->send();
}

  public function add_category_product()
  {
    $this->Authlogin();
        return view('admin.add-category-product');
  }
  public function all_category_product()
  {
    $this->Authlogin();
      $all_category_product=DB::table('tbl_category_product')->orderBy('category_id','desc')->get();
        $maneger_category_product = view('admin.all-category-product')->with('all_category_product',$all_category_product);
        return view('admin-layout')->with('admin.all-category-product',$maneger_category_product);
    
  }

  public function save_category_product(Request $request)
  {
    $this->Authlogin();
    $data=array();
    $data['category_name']= $request->category_product_name;
    $data['category_desc']= $request->category_product_desc;
    $data['category_status']= $request->category_product_status;
    $data['category_type']= $request->category_type;
    DB::table('tbl_category_product')->insert($data);
    Session::put('message_ad','Thêm thành công');
    return Redirect::to('all-category-product');
  }


  public function active_category_product($category_product_id)
  {
    $this->Authlogin();
     DB::table('tbl_category_product')->where('category_id',$category_product_id )->update(['category_status'=>1]);
    Session::put('message_ad','Thêm thành công');
    return Redirect::to('all-category-product');
  }
  public function unactive_category_product($category_product_id)
  {
    $this->Authlogin();
    DB::table('tbl_category_product')->where('category_id',$category_product_id )->update(['category_status'=>0]);
    Session::put('message_ad','Thêm thành công');
    return Redirect::to('all-category-product');
  }
  public function edit_category_product($category_product_id)
  {
    $this->Authlogin();
    $cate_product=DB::table('tbl_category_product')->orderBy('category_id','desc')->get();
    $edit_category_product=DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
        $maneger_category_product = view('admin.edit-category-product')
        ->with('edit_category_product',$edit_category_product)
        ->with('cate_product',$cate_product);
        return view('admin-layout')->with('admin.edit-category-product',$maneger_category_product);
        // echo'<pre>';
        // print_r($edit_category_product);
        // echo'</pre>';
  }
  public function delete_category_product($category_product_id)
  {
    $this->Authlogin();
    DB::table('tbl_category_product')->where('category_id',$category_product_id )->delete();
   
    return Redirect::to('all-category-product');
  }

  public function update_category_product($category_product_id,Request $request)
  {
    $this->Authlogin();
    $data=array();
    $data['category_name']= $request->category_product_name;
    $data['category_desc']= $request->category_product_desc;
    $data['category_type']= $request->category_type;
    DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
    
    return Redirect::to('all-category-product');
  }

  public function show_cate($category_id){
    $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderBy('category_id','desc')->get();
    $slider=DB::table('sliders')->where('status','0')->where('slider_id','7')->get();
    $slider1=DB::table('sliders')->where('status','0')->orderBy('slider_id','desc')->where('slider_id','<>','7')->get();
    $brand_product=DB::table('tbl_brand_product')->where('brand_status','0')->orderBy('brand_id','desc')->get();
        

    if(isset($_GET['sort_by']))
    {
      $sort_by=$_GET['sort_by'];
      Session::put('sort_key',$sort_by);
      if($sort_by=='tang_dan')
      {
        $category_by_id=  DB::table('tbl_product')->where('product_status','0')->where('category_id',$category_id)->orderBy('product_price','ASC')->paginate(6);
        Session::put('sort_key',null);  
      }
      elseif($sort_by=='giam_dan')
      {
        $category_by_id=  DB::table('tbl_product')->where('product_status','0')->where('category_id',$category_id)->orderBy('product_price','DESC')->paginate(6);
        Session::put('sort_key',null);  
      }
      elseif($sort_by=='tag1')
      {
        $category_by_id=  DB::table('tbl_product')->where('product_status','0')->where('category_id',$category_id)->where('product_price','>','10000')->where('product_price','<','50000')->paginate(6);
        Session::put('sort_key',null);  
      }
      elseif($sort_by=='tag2')
      {
        $category_by_id=  DB::table('tbl_product')->where('product_status','0')->where('category_id',$category_id)->where('product_price','>','100000')->where('product_price','<','200000')->paginate(6);
        Session::put('sort_key',null);  
      }
      elseif($sort_by=='tag3')
      {
        $category_by_id=  DB::table('tbl_product')->where('product_status','0')->where('category_id',$category_id)->where('product_price','>','300000')->where('product_price','<','500000')->paginate(6);
        Session::put('sort_key',null);  
      }
      elseif($sort_by=='tag4')
      {
        $category_by_id=  DB::table('tbl_product')->where('product_status','0')->where('category_id',$category_id)->where('product_price','>','500000')->paginate(6);
        Session::put('sort_key',null);  
      }
      elseif($sort_by=='reset')
      {
        $category_by_id=  DB::table('tbl_product')->where('product_status','0')->where('category_id',$category_id)->paginate(6);
        Session::put('sort_key',null);
      }
  
    }
  else{
    $category_by_id=  DB::table('tbl_product')->where('product_status','0')->where('category_id',$category_id)->paginate(6);
  }

     
      $category_name=DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->limit(1)->get();
    return view('page.showcate.showcategory')
    ->with('category',  $cate_product)
        ->with('brand',  $brand_product)
        ->with('category_by_id',   $category_by_id)
        ->with('category_name', $category_name)
        ->with('slider',  $slider)
        ->with('slider1',  $slider1);
   
        
  }
}
?>