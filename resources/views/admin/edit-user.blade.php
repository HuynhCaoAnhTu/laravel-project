@extends('admin-layout')
@section('admin-content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Cập nhật thương hiệu
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach ($edit_user as $key =>$edit_value )
                            
                      
                    <form role="form" action="{{ URL::to('/update-user/'.$edit_value->customer_id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên </label>
                            <input type="text" 
                            value="{{  $edit_value->customer_name }}" class="form-control" id="exampleInputEmail1" name="user_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tài khoản </label>
                            <input type="text" value="{{ $edit_value->customer_email }}" class="form-control" id="exampleInputEmail1" name="user_user_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu </label>
                            <input type="text" value="{{ $edit_value->customer_pass }}" class="form-control" id="exampleInputEmail1" name="user_pass">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Số điện thoại </label>
                            <input type="text" value="{{ $edit_value->customer_phone }}" class="form-control" id="exampleInputEmail1" name="user_phone">
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phân loại</label>
                             <select  class="form-control input-lg m-bot10 " name="user_pl">
                                @foreach ($edit_user as$key=> $edit_value )
                                @if($edit_value->phan_loai == 0 )
                                <option selected value="0">Khách hàng</option>;
                                <option  value="1">Nhân Viên</option>;
                                <option value="2">Quản lý</option>;
                                @elseif($edit_value->phan_loai == 1 )
                                <option  value="0">Khách hàng</option>;
                                <option selected value="1">Nhân Viên</option>;
                                <option value="2">Quản lý</option>;
                                @elseif($edit_value->phan_loai == 2 )

                                <option  value="0">Khách hàng</option>;
                                <option  value="1">Nhân Viên</option>;
                                <option selected value="2">Quản lý</option>;
                              

                                @endif
                              @endforeach 
                             </select>
                        
                           </div>
                   
                             
                            
                       
                               
                            
                           
                       
                        
                        <div class="form-group" style="margin-top: 30px">
                        <button type="submit" name="update_user" class="btn btn-info">Cập nhật</button>
                        </div>
                    </form>
                    @endforeach
                    </div>

                </div>
            </section>

    </div>
   
        </section>

    </div>
</div>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );
</script>
@endsection