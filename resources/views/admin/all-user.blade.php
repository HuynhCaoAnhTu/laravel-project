@extends('admin-layout')
@section('admin-content')


<div class="table-agile-info" >
  <button type="button" class="btn btn-success"><a style="  text-decoration: none; color: white "href="{{URL::to ('/add-user') }}"> <i class="fa fa-plus"></i> Thêm mới</a></button>
    <div class="panel panel-default">
      <div class="panel-heading">
      Liệt kê tài khoản
      </div>
     
      {{-- <div class="table-responsive"> --}}
        {{-- <div class="search_box pull-right">
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
          </div> --}}
       
        <table id="myTable" class="table table-striped " style="color: black !important">
          <thead>
            <tr>
            
              <th>Tên</th>
              <th>Tài khoản</th>
              <th>Mật khẩu</th>
              <th>Số điện thoại</th>
              <th>Phân loại</th>
              <th></th>
              </th>
            </tr>
          </thead>
          <tbody >
            @foreach ($all_user as$key => $user )
              
            <tr>
              <td>{{ ($user->customer_name) }}</td>
              <td>{{ ($user->customer_email) }}</td>
              <td> {{ ($user->customer_pass) }}</td>
              <td> {{ ($user->customer_phone) }}</td>
              <td>
                <?php
                if($user->phan_loai==0){
                  ?>
              
          Khách hàng
               
               <?php
                 }elseif($user->phan_loai==1) {
                   ?>
                Nhân viên
              <?php 
              }else {
                ?>
               Quản lý
               <?php
              }
               ?>
              </td>
              <td>
                <a  style="font-size: 25px; " href="{{URL::to ('/edit-user/'.$user->customer_id) }}"><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                  <a style="font-size: 25px;"onclick="return confirm('Bạn có chắc muốn xóa không ?')" href="{{URL::to ('/delete-user/'.$user->customer_id) }}"><i class="fa fa-times text-danger text"></i></a>
                
              </td>
            </tr>
            @endforeach
             
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          
          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">                
            {{-- {{$all_brand_product->links('pagination::bootstrap-4')}}  --}}
          </div>
        </div>
      </footer>
    </div>
  </div>
 
  <script>
    $(document).ready(function(){
        $('#myTable').dataTable();
    });
    </script>
@endsection