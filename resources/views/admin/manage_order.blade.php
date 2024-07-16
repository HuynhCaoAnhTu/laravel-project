@extends('admin-layout')
@section('admin-content')
<div class="table-agile-info" >
    <div class="panel panel-default">
      <div class="panel-heading">
      Liệt kê đơn hàng
      </div>
     
      <div class="table-responsive">
        <table id="myTable" class="table table-striped b-t bg-dark" style="color: black !important">
          <thead>
            <tr>
           
              <th>Mã đơn hàng</th>
              <th>Tên người mua hàng</th>
              <th>Tổng giá tiền </th>
              <th>Tình trạng đơn hàng</th>
              <th>Ngày đặt </th>
              <th>Hiện thị</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($all_order as$key => $order)
                
            
            <tr>
              <td>{{ ($order->order_id) }}</td>
              <td>{{ ($order->customer_name) }}</td>
              <td> {{ number_format($order->order_total)  }} VND</td>
              
              <td>
                <?php
                  if($order->order_status=='Xử lý thành công'){
                    ?>
                    <p class="text-success" style="font-weight: 600">    {{ ($order->order_status) }}</p>
                    <?php
                  } else {
                    ?>
                   <p class="text-danger " style="font-weight: 600">    {{ ($order->order_status) }}</p>
                   <?php
                  }
                  
                  ?>
             
              </td>
              <td>{{ ($order->order_time) }}</td>
              <td>
                <a href="{{URL::to ('/view-order/'.$order->order_id) }}"><i style="font-size: 20px; margin-left: 10px" class="fa fa-pencil-square-o "></i></a> 
                <a onclick="return confirm('Có chấp nhận đơn hàng này không ?')" href="{{URL::to ('/acpect-order/'.$order->order_id) }}"><i style="font-size: 20px; margin-left: 10px" class="fa fa-check text-success text-active"></i></a>
                  <a onclick="return confirm('Bạn có chắc muốn xóa không ?')" href="{{URL::to ('/delete-order/'.$order->order_id) }}"><i  style="font-size: 20px; margin-left: 10px" class="fa fa-times text-danger text"></i></a>
                
                
              </td>
            </tr>
            @endforeach
             
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          
          <div class="col-sm-5 text-center">
          
          </div>
          <div class="col-sm-7 text-right text-center-xs">                
         
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script>
    $(document).ready(function(){
       $('#myTable').DataTable( {
         
        dom: 'lBfrtip',
   buttons: [
    'copy', 'excel', 
   ],
   "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
  });
  
    });
    </script>

@endsection