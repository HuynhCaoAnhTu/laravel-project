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
                    <form role="form" action="{{ URL::to('/save-brand-product') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục </label>
                            <input type="text" class="form-control"  name="brand_product_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả </label>
                            <textarea name="brand_product_desc" style="resize: none" id="editor1"rows="8" class="form-control"></textarea>
                     
                           
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị </label>
                             <select  class="form-control input-lg m-bot10 " name="brand_product_status">
                                 <option value="0">Hiện</option>
                                 <option value="1">Ẩn</option>
                                 
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