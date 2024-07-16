@extends('admin-layout')
@section('admin-content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Thêm danh mục
                </header>
                <div class="panel-body">
                    <div class="position-center">
                    <form role="form" action="{{ URL::to('/save-user') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên </label>
                            <input type="text" class="form-control"  name="user_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tài khoản </label>
                            <input type="text" class="form-control"  name="user_user_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Mật khẩu </label>
                            <input type="text" class="form-control"  name="user_pass">
                     
                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Số điện thoại </label>
                            <input type="text" class="form-control"  name="user_phone">
                     
                           
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phân loại </label>
                             <select  class="form-control input-lg m-bot10 " name="user_pl">
                                 <option value="0">Khách hàng</option>
                                 <option value="1">Nhân viên </option>
                                 <option value="2">Quản lý </option>
                                 
                             </select>
                             
                            
                       
                               
                            
                           
                        </div>
                        
                        <div class="form-group" style="margin-top: 30px">
                        <button type="submit" name="add_brand_product" class="btn btn-info">Thêm</button>
                        </div>
                    </form>
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