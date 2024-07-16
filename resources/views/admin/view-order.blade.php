@extends('admin-layout')
@section('admin-content')
<div class="table-agile-info" >
    <div class="panel panel-default">
      <div class="panel-heading">
     Thông tin người mua
      </div>
     
      <div class="table-responsive">
        <table class="table table-striped b-t bg-dark" style="color: black !important">
          <thead>
            <tr>
             
              <th>Tên người mua hàng</th>
             
              <th>Số điện thoại</th>
              <th>Phương thức thanh toán</th>
             
            </tr>
          </thead>
          <tbody>
            @foreach ($order_by_id1 as$key => $order_v)
            
            <tr>
            
              <td>{{ $order_v->customer_name }}</td>
              <td>{{ $order_v->customer_phone }}</td>
           
              <td>
                <?php
                if($order_v->payment_id ==0){
                  ?>
              
              Trả khi nhận hàng
               
               <?php
                 }elseif($order_v->payment_id ==1) {
                   ?>
               Thông qua ATM
              <?php 
              }else {
               ?>
              
               Trả bằng Credit card
               <?php
              }
               ?>
              </td>
            </tr>
          
             @endforeach
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
  
<br> <br>
<div class="table-agile-info" >
    <div class="panel panel-default">
      <div class="panel-heading">
Thông tin vận chuyển
      </div>
     
      <div class="table-responsive">
        <table class="table table-striped b-t bg-dark" style="color: black !important">
          <thead>
            <tr>
              
              <th>Tên người nhận</th>
              <th>Địa chỉ </th>
              <th>Số điện thoại</th>
              <th>Tình trạng đơn hàng</th>
              
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($order_by_id1 as$key => $order_v)
            
            <tr>
      
              <td>{{ $order_v->shipping_name }} </td>
              <td> {{ $order_v->shipping_address }}</td>
              <td>{{ $order_v->shipping_phone }}</td>
              <td>{{ $order_v->order_status }}</td>
              <td>
              
                
              </td>
            </tr>
       
             @endforeach
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
  <br> <br>
<div class="table-agile-info" >
    <div class="panel panel-default">
      <div class="panel-heading">
Chi tiết đơn hàng
      </div>
     
      <div class="table-responsive">
        <table class="table table-striped b-t bg-dark" style="color: black !important">
          <thead>
            <tr>
             
              <th>Tên sản phẩm </th>
              <th>ID </th>
              <th>Số lượng </th>
              <th>Giá </th>
              <th>Tổng tiền</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($order_by_id as$key => $order_v)
            
            <tr>
      
              <td>{{ $order_v->product_name }} </td>
              <td>{{ $order_v->product_id }} </td>
              <td> {{ $order_v->product_quantity }}</td>
              <td> {{ number_format($order_v->product_price) }} VND</td>
              <td> {{ number_format($order_v->order_total) }} VND</td>
             
            </tr>
          
             @endforeach
          
             
          </tbody>
        </table>
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-8"></div>
      <div class="col-md-1">
        @foreach ($order_by_id1 as$key => $order_v)
        {{-- <a onclick="return confirm('Có chấp nhận đơn hàng này không ?')" href="{{URL::to ('/acpect-order/'.$order_v->order_id) }}"><button><i style="font-size: 20px; margin-left: 10px" class="fa fa-check text-success text-active"></i>Duyệt</button></a> --}}
        {{-- <button type="button" style="font-size: 20px; margin-left: 10px " class="btn btn-success"><a href="{{URL::to ('/acpect-order/'.$order_v->order_id) }}"></a>Duyệt</button> --}}
        <a onclick="return confirm('Có chấp nhận đơn hàng này không ?')" href="{{URL::to ('/acpect-order/'.$order_v->order_id) }}">
          <?php
          if($order_v->order_status=='Đang chờ xử lý')
          {?>

       
          <button  style="font-size: 20px" class="btn btn-success">Duyệt</button>
          <?php
        }?>
        </a> 
        @endforeach
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-1">
        
        <a  href="{{URL::to ('/back_to_manage_order') }}">
          <button style="font-size: 20px"  class="btn btn-primary">Trở lại</button>
        </a>
      </div>
  </div>
  </div>
@endsection