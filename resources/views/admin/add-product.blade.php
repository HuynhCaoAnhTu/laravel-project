@extends('admin-layout')
@section('admin-content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Thêm sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                    <form role="form" action="{{ URL::to('/save-product') }}" method="post"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="product_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình ảnh </label>
                            <input type="file" class="form-control" id="exampleInputPassword1" name="product_image" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="product_price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm </label>
                            <textarea name="product_desc" style="resize: none" id="editor1" rows="8" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số lượng sản phẩm </label>
                            {{-- <textarea name="product_content" style="resize: none" id="editor2" rows="8" class="form-control"></textarea> --}}
                            <input type="text" class="form-control" id="exampleInputEmail1" name="product_quality">
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleInputPassword1">Dach mục sản phẩm </label>
                             <select  class="form-control input-lg m-bot10 " name="product_cate">
                                @foreach ($cate_product as$key=> $cate_value )
                                <option value="{{ $cate_value->category_id }}">{{ $cate_value->category_name }}</option>;
                              @endforeach 
                             </select>
                        
                           </div>
                           <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục thương hiệu</label>
                             <select  class="form-control input-lg m-bot10 " name="product_bra">
                                @foreach ($brand_product as$key=> $brand_value )
                                <option value="{{ $brand_value->brand_id }}">{{ $brand_value->brand_name }}</option>;
                              @endforeach 
                             </select>
                        
                           </div>
                       
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị </label>
                             <select  class="form-control input-lg m-bot10 " name="product_status">
                                 <option value="0">Hiện</option>
                                 <option value="1">Ẩn</option>
                                 
                             </select>
                        
                           </div>
                        
                        <div class="form-group" style="margin-top: 30px">
                        <button type="submit" name="add_product" class="btn btn-info">Thêm</button>
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