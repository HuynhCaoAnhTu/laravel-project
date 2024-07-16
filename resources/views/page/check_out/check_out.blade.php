@extends('welcome')
@section('content')
<section id="cart_items">
  
    <?php
        $customer_id=Session::get('customer_id');
               $customer_name=   Session::get('customer_name');
                 $customer_phone =Session::get('customer_phone');
                 $customer_email =Session::get('customer_email');
        ?>
    <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="{{ URL::to('/trangchu') }}">Trang chủ</a></li>
          <li class="active">Xác nhận giỏ hàng</li>
        </ol>
    </div>

   

        <div class="register-req">
            <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
        </div><!--/register-req-->

        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-5">
                    <div class="shopper-info">
                        <p>Thông tin thanh toán</p>
                        <form action="{{ URL::to('/save-checkout-customer') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="text"  name="shipping_name" value="{{  $customer_name }}" placeholder="Họ và tên">
                            <input type="text" name="shipping_email" value="{{ $customer_email }}"  placeholder="Email">
                            <input type="text" name="shipping_address"  placeholder="Địa chỉ">
                            <input type="text" name="shipping_phone" value="{{ $customer_phone }}" placeholder="Số điện thoại">
                            <button type="submit"class="btn btn-default">Xác nhận thông tin</button>

                   
                 
                    </div>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-5">
                    <div class="order-message">
                        <p>Ghi chú gửi hàng</p>
                        <textarea name="shipping_notes"  placeholder="Ghi chú cho đơn hàng của bạn" rows="16"></textarea>
                        
                    </div>	
                </div>	
            </form>				
            </div>
        </div>
       

       
 
</section> <!--/#cart_items-->


@stop