<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Authlogin(){
  $admin_id= Session::get('customer_id');
  if($admin_id)
  return Redirect::to('admin.dashboard');
  else
  return Redirect::to('trangchu')->send();
}

    public function add_user()
  {
    $this->Authlogin();

   
    return view('admin.add-user');
  }

  public function all_user()
  {
    $this->Authlogin();
    $all_user = DB::table('tbl_customer')->orderBy('customer_id','desc')->get();
      
        $maneger_user = view('admin.all-user')->with('all_user',$all_user);
        return view('admin-layout')->with('admin.all-user',$maneger_user);
    
  }

  public function save_user(Request $request)
  {
    $this->Authlogin();
    $data=array();
    $data['customer_name']= $request->user_name;
    $data['customer_email']= $request->user_user_name;
    $data['customer_pass']= $request->user_pass;
    $data['customer_phone']= $request->user_phone;
    $data['phan_loai']= $request->user_pl;
  
    DB::table('tbl_customer')->insert($data);
    Session::put('message_ad_ad','Thêm thành công');
    return Redirect::to('all-user');
  }


 
  public function edit_user($user_id)
  {
    $this->Authlogin();
    
    $edit_user=DB::table('tbl_customer')->where('customer_id',$user_id)->get();
        $maneger_user = view('admin.edit-user')->with('edit_user',$edit_user);
    
     
     
        return view('admin-layout')->with('edit-user',$maneger_user);
  }
  public function delete_user($user_id)
  {
    $this->Authlogin();
    DB::table('tbl_customer')->where('customer_id',$user_id )->delete();
    Session::put('message_ad','Xóa thành công');
    return Redirect::to('all-user');
  }

  public function update_user($user_id,Request $request)
  {
    $this->Authlogin();
    $data=array();
    $data['customer_name']= $request->user_name;
    $data['customer_email']= $request->user_user_name;
    $data['customer_pass']= $request->user_pass;
    $data['customer_phone']= $request->user_phone;
    $data['phan_loai']= $request->user_pl;
   
 
    DB::table('tbl_customer')->where('customer_id',$user_id)->update($data);
    Session::put('message_ad','Sửa thành công');
    return Redirect::to('all-user');
 
 }
}
