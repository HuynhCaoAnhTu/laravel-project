@extends('admin-layout')
@section('admin-content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Cập nhật danh mục
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach ($edit_category_product as $key =>$edit_value )
                            
                      
                    <form role="form" action="{{ URL::to('/update-category-product/'.$edit_value->category_id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục </label>
                            <input type="text" value="{{$edit_value->category_name }}" class="form-control" id="exampleInputEmail1" name="category_product_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả </label>
                            
                            <textarea name="category_product_desc" style="resize: none" id="editor1" rows="8" class="form-control">{{ $edit_value->category_desc }} </textarea>
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleInputPassword1">Loại </label>
                             <select  class="form-control input-lg m-bot10 " name="category_type">
                              
                            
                                @if( $edit_value->category_type=='Thức ăn')
                                
                                <option selected value="{{ $edit_value->category_type }}">
                                    {{ $edit_value->category_type }}
                                </option>;
                                <option value="Phụ kiện">
                                   Phụ kiện
                                </option>;
                                @else
                                <option selected value="{{ $edit_value->category_type }}">
                                    {{ $edit_value->category_type }}
                                </option>;
                                <option value="Thức ăn">
                                   Thức ăn
                                </option>;
                               
                                @endif
                           
                             </select>
                        
                           </div>
                             
                            
                       
                               
                            
                           
                       
                        
                        <div class="form-group" style="margin-top: 30px">
                        <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật</button>
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