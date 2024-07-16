@extends('admin-layout')
@section('admin-content')

<div class="table-agile-info" >
    <div class="panel panel-default">
      <button type="button" class="btn btn-success"><a style="  text-decoration: none; color: white " href="{{URL::to ('/add-product') }}"> <i class="fa fa-plus"></i> Thêm mới</a></button>
      <div style="margin-bottom: 10px" class="panel-heading">
      Liệt kê sản phẩm
      </div>
     
      <div class="table-responsive">
        <table id="myTable" class="table table-striped b-t bg-dark" style="color: black !important">
          <thead>
            <tr>
             
              <th>Tên sản phẩm </th>
              <th>Giá sản phẩm </th>
              <th>Hình ảnh sản phẩm</th>
              <th>Danh mục</th>
              <th>Thương hiệu </th>
              <th>Mô tả</th>
              <th>Số lượng</th>
              <th>Hiển thị</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($all_product as$key => $productpro )
                
            
            <tr>
            
              <td>{{ ($productpro->product_name) }}</td>
              <td>{{ ($productpro->product_price) }}</td>
              <td><img src="public/uploads/product/{{ ($productpro->product_image) }}" height="100" width="100" alt=""></td>
              <td>{{ ($productpro->category_name) }}</td>
              <td>{{ ($productpro->brand_name) }}</td>
              <td>{!! ($productpro->product_desc) !!}</td>
              <td> {!! ($productpro->product_quality) !!}</td>
              <td>
                <?php
                if($productpro->product_status==0){
                  ?>
              
               <a href="{{ URL::to ('/active-product/'.$productpro->product_id) }}"><i style="font-size: 25px;margin-left: 15px " class="fa fa-eye"  ></i></a>
               
               <?php
                 }else {
                   ?>
                <a href="{{ URL::to ('/unactive-product/'.$productpro->product_id)  }}"><i style="font-size: 25px;margin-left: 15px " class="fa fa-eye-slash" style="margin-left: 15px "></i> </a>
              <?php 
              }
               ?>
              </td>
              <td>
                <a href="{{URL::to ('/edit-product/'.$productpro->product_id) }}"><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                  <a onclick="return confirm('Bạn có chắc muốn xóa không ?')" href="{{URL::to ('/delete-product/'.$productpro->product_id) }}"><i class="fa fa-times text-danger text"></i></a>
                
              </td>
            </tr>
            @endforeach
             
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          
          <div class="col-sm-5 text-center">
            {{-- <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> --}}
          </div>
          <div class="col-sm-7 text-right text-center-xs">                
            {{-- {{$all_product->links('pagination::bootstrap-4')}}  --}}
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