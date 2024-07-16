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
                        @foreach ($edit_brand_product as $key =>$edit_value )
                            
                      
                    <form role="form" action="{{ URL::to('/update-brand-product/'.$edit_value->brand_id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu </label>
                            <input type="text" value={{ $edit_value->brand_name }} class="form-control" id="exampleInputEmail1" name="brand_product_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả </label>
                            <textarea name="product_desc" style="resize: none" id="editor1" rows="8" class="form-control">{{ $edit_value->brand_desc }} </textarea>
                        </div>
                       
                   
                             
                            
                       
                               
                            
                           
                       
                        
                        <div class="form-group" style="margin-top: 30px">
                        <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật</button>
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