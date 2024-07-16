<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


session_start();
class AdminController extends Controller
{
   
public function Authlogin(){
  $admin_id= Session::get('customer_id');
  if($admin_id)
  return Redirect::to('admin.dashboard');
  else
  return Redirect::to('trangchu')->send();
}
 
  
public function index()
{ 
  $admin_id=Session::get('customer_id');
  if($admin_id){
    return Redirect::to('dashboard');
  }else{
      return view('trangchu');
  }
}

public function show_dashboard()
{  $this->Authlogin();
   return view('admin.dashboard');
}



public function logout()
{ 
  Session::put('customer_id',null);
      Session::put('customer_name',null);
      Session::put('customer_phone',null);
      Session::put('customer_email',null);
      Cart::clear();
  Session::put('user_pl',null);
 
  return Redirect::to('/');
}
public function manage_order(){
  $this->Authlogin();
    $all_order = DB::table('tbl_order')
            ->join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_order.customer_id')
              ->select('tbl_order.*', 'tbl_customer.customer_name')
              ->orderBy('tbl_order.order_id','desc')->get();
      
        $manager_order = view('admin.manage_order')->with('all_order',  $all_order);
        return view('admin-layout')->with('admin.manage_order ', $manager_order);
    
}
public function view_order($order_id){
  $this->Authlogin();
  $order_by_id = DB::table('tbl_order')
          ->join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_order.customer_id')
          ->join('tbl_payment', 'tbl_payment.payment_id', '=', 'tbl_order.payment_id')
          ->join('tbl_shipping', 'tbl_shipping.shipping_id', '=', 'tbl_order.shipping_id')
          ->join('tbl_order_detail', 'tbl_order_detail.order_id', '=', 'tbl_order.order_id')
            ->select('tbl_order.*', 'tbl_customer.*', 'tbl_shipping.*' , 'tbl_order_detail.*','tbl_payment.*')->where('tbl_order.order_id',$order_id)
        ->get();
        $order_by_id1 = DB::table('tbl_order')
          ->join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_order.customer_id')
          ->join('tbl_shipping', 'tbl_shipping.shipping_id', '=', 'tbl_order.shipping_id')
          ->join('tbl_payment', 'tbl_payment.payment_id', '=', 'tbl_order.payment_id')
          ->join('tbl_order_detail', 'tbl_order_detail.order_id', '=', 'tbl_order.order_id')
            ->select('tbl_order.*', 'tbl_customer.*', 'tbl_shipping.*' , 'tbl_order_detail.*','tbl_payment.*')->where('tbl_order.order_id',$order_id)
        ->limit(1)->get();
       
    //   echo'  <pre>';
    // print_r($order_by_id);
    // echo'</pre>';
      $manager_order_by_id = view('admin.view-order')->with('order_by_id',  $order_by_id)
      ->with('order_by_id1',  $order_by_id1);
      return view('admin-layout')->with('admin.view_order ', $manager_order_by_id);


}
public function delete_order($order_id)
{
  $this->Authlogin();
  DB::table('tbl_order')->where('order_id',$order_id )->delete();
 
  return Redirect::to('manage_order');
}
public function acpect_order($order_id)
{
  {
    $this->Authlogin();
     DB::table('tbl_order')->where('order_id',$order_id )->update(['order_status'=>'Xử lý thành công']);
    Session::put('message','Thêm thành công');
    return Redirect::to('manage_order');
  }
}

public function back_manage_order()
{
  {
    return Redirect::to('/manage_order');
  }
}
}
