<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class BrandProduct extends Controller
{
     
public function Authlogin(){
  $admin_id= Session::get('customer_id');
  if($admin_id)
  return Redirect::to('admin.dashboard');
  else
  return Redirect::to('trangchu')->send();
}
    public function add_brand_product()
  {
    $this->Authlogin();
        return view('admin.add-brand-product');
  }
  public function all_brand_product()
  { $this->Authlogin();
      $all_brand_product=DB::table('tbl_brand_product')->orderBy('brand_id','desc')->get();
        $maneger_brand_product = view('admin.all-brand-product')->with('all_brand_product',$all_brand_product);
        return view('admin-layout')->with('admin.all-brand-product',$maneger_brand_product);
    
  }

  public function save_brand_product(Request $request)
  {
    $this->Authlogin();
    $data=array();
    $data['brand_name']= $request->brand_product_name;
    $data['brand_desc']= $request->brand_product_desc;
    $data['brand_status']= $request->brand_product_status;
    DB::table('tbl_brand_product')->insert($data);
    Session::put('message_ad','Thêm thành công');
    return Redirect::to('all-brand-product');
  }


  public function active_brand_product($brand_product_id)
  {
    $this->Authlogin();
     DB::table('tbl_brand_product')->where('brand_id',$brand_product_id )->update(['brand_status'=>1]);
    Session::put('message_ad','Thêm thành công');
    return Redirect::to('all-brand-product');
  }
  public function unactive_brand_product($brand_product_id)
  {
    $this->Authlogin();
    DB::table('tbl_brand_product')->where('brand_id',$brand_product_id )->update(['brand_status'=>0]);
    Session::put('message_ad','Thêm thành công');
    return Redirect::to('all-brand-product');
  }
  public function edit_brand_product($brand_product_id)
  {
    $this->Authlogin();
    $edit_brand_product=DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->get();
        $maneger_brand_product = view('admin.edit-brand-product')->with('edit_brand_product',$edit_brand_product);
        return view('admin-layout')->with('admin.edit-brand-product',$maneger_brand_product);
  }
  public function delete_brand_product($brand_product_id)
  {
    $this->Authlogin();
    DB::table('tbl_brand_product')->where('brand_id',$brand_product_id )->delete();
   
    return Redirect::to('all-brand-product');
  }

  public function update_brand_product($brand_product_id,Request $request)
  {
    $this->Authlogin();
    $data=array();
    $data['brand_name']= $request->brand_product_name;
    $data['brand_desc']= $request->brand_product_desc;
   
    DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->update($data);
  
    return Redirect::to('all-brand-product');
  }
  public function show_brand($brand_id)
  {
    $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderBy('category_id','desc')->get();

    $brand_product=DB::table('tbl_brand_product')->where('brand_status','0')->orderBy('brand_id','desc')->get();
        

  if(isset($_GET['sort_by']))
  {
    $sort_by=$_GET['sort_by'];
    Session::put('sort_key',$sort_by);
    if($sort_by=='tang_dan')
    {
      $brand_by_id=  DB::table('tbl_product')->where('product_status','0')->where('brand_id',$brand_id)->orderBy('product_price','ASC')->paginate(6);
      Session::put('sort_key',null);  
    }
    elseif($sort_by=='giam_dan')
    {
      $brand_by_id=  DB::table('tbl_product')->where('product_status','0')->where('brand_id',$brand_id)->orderBy('product_price','DESC')->paginate(6);
      Session::put('sort_key',null);  
    }
    elseif($sort_by=='tag1')
    {
      $brand_by_id=  DB::table('tbl_product')->where('product_status','0')->where('brand_id',$brand_id)->where('product_price','>','10000')->where('product_price','<','50000')->paginate(6);
      Session::put('sort_key',null);  
    }
    elseif($sort_by=='tag2')
    {
      $brand_by_id=  DB::table('tbl_product')->where('product_status','0')->where('brand_id',$brand_id)->where('product_price','>','100000')->where('product_price','<','200000')->paginate(6);
      Session::put('sort_key',null);  
    }
    elseif($sort_by=='tag3')
    {
      $brand_by_id=  DB::table('tbl_product')->where('product_status','0')->where('brand_id',$brand_id)->where('product_price','>','300000')->where('product_price','<','500000')->paginate(6);
      Session::put('sort_key',null);  
    }
    elseif($sort_by=='tag4')
    {
      $brand_by_id=  DB::table('tbl_product')->where('product_status','0')->where('brand_id',$brand_id)->where('product_price','>','500000')->paginate(6);
      Session::put('sort_key',null);  
    }
    elseif($sort_by=='reset')
    {
      $brand_by_id=  DB::table('tbl_product')->where('product_status','0')->where('tbl_product.brand_id',$brand_id)->paginate(6); 
      Session::put('sort_key',null);  
    }

  }
else{$brand_by_id=  DB::table('tbl_product')->where('product_status','0')->where('tbl_product.brand_id',$brand_id)->paginate(6);}
    
      $slider=DB::table('sliders')->where('status','0')->where('slider_id','7')->get();
      $slider1=DB::table('sliders')->where('status','0')->orderBy('slider_id','desc')->where('slider_id','<>','7')->get();
      $brand_name=DB::table('tbl_brand_product')->where('tbl_brand_product.brand_id',$brand_id)->limit(1)->get();
    return view('page.showbrand.showbrand')
    ->with('category',  $cate_product)
        ->with('brand',  $brand_product)
        ->with('brand_by_id',   $brand_by_id)
        ->with('brand_name',   $brand_name)
        ->with('slider',  $slider)
        ->with('slider1',  $slider1);
      
        
  }
}
