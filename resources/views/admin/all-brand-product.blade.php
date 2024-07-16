@extends('admin-layout')
@section('admin-content')


<div class="table-agile-info" >
  <button type="button" class="btn btn-success"><a style="  text-decoration: none; color: white "href="{{URL::to ('/add-brand-product') }}"> <i class="fa fa-plus"></i> Thêm mới</a></button>
    <div class="panel panel-default">
      <div class="panel-heading">
      Liệt kê thương hiệu
      </div>
     
      {{-- <div class="table-responsive"> --}}
        {{-- <div class="search_box pull-right">
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
          </div> --}}
       
        <table id="myTable" class="table table-striped " style="color: black !important">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên thương hiệu </th>
              <th>Mô tả</th>
              <th>Hiển thị</th>
              <th></th>
               
              </th>
            </tr>
          </thead>
          <tbody >
            @foreach ($all_brand_product as$key => $brandpro )
              
            <tr>
              <td>{{ ($brandpro->brand_id) }}</td>
              <td>{{ ($brandpro->brand_name) }}</td>
              <td> {!! ($brandpro->brand_desc) !!}</td>
              <td>
                <?php
                if($brandpro->brand_status==0){
                  ?>
              
               <a href="{{ URL::to ('/active-brand-product/'.$brandpro->brand_id) }}"><i style="font-size: 25px;margin-left: 15px " class="fa fa-eye"  ></i></a>
               
               <?php
                 }else {
                   ?>
                <a href="{{ URL::to ('/unactive-brand-product/'.$brandpro->brand_id)  }}"><i style="font-size: 25px;margin-left: 15px " class="fa fa-eye-slash" style="margin-left: 15px "></i> </a>
              <?php 
              }
               ?>
              </td>
              <td>
                <a  style="font-size: 25px; " href="{{URL::to ('/edit-brand-product/'.$brandpro->brand_id) }}"><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                  <a style="font-size: 25px;"onclick="return confirm('Bạn có chắc muốn xóa không ?')" href="{{URL::to ('/delete-brand-product/'.$brandpro->brand_id) }}"><i class="fa fa-times text-danger text"></i></a>
                
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