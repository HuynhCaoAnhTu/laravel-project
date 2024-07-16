@extends('welcome')
@section('content')
@foreach ($details_product as$key=>$details )
    
<?php
$uri = $_SERVER['REQUEST_URI'];
// echo $uri;
?>
<div class="product-details"><!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <img src="{{URL::to('public/uploads/product/'. $details->product_image  )}}" alt="" />
            
        </div>
     

    </div>
    <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->
          
            <h2>{{ $details->product_name }}</h2>
            <p>ID: {{ $details->product_id }}</p>
           <div> <img src="{{URL::to('public/frontend/images/rating.png')}}" alt="" /></div>
           <form action="{{URL::to('/save-cart')  }}" method="POST">
               {{ csrf_field() }}
           <span>
                <span>{{ number_format($details->product_price) }} VND</span>
                <label>Quantity:</label>
                <input name="qty" type="number" value="1" min="1" />
                <input name="productid_hiden" type="hidden"  value="{{ $details->product_id }}"  />
                
               
            </span>
           <div> <button  style=";margin: 0 0 10px 0" type="submit" class="btn btn-fefault cart">
            <i class="fa fa-shopping-cart"></i>
            Thêm vào giỏ
        </button></div>
    </form>
    <?php 
    if($details->product_quality==0){                                   // so luong hang
    echo " <h2><b>Tình trạng:</b>  <b style='color: red;' >Hết hàng</b> </h2>";
    }else{
       echo "<h2> <b>Tình trạng:</b>  <b> Còn hàng </b> (SL: $details->product_quality)</h2>";
    }
    
    ?>
           
            <h2><b>Thương hiệu:</b> {{ $details->brand_name }} </h2>
           
        </div><!--/product-information-->
    </div>
</div><!--/product-details-->
@endforeach
<div class="category-tab shop-details-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#mota" data-toggle="tab">Mô tả</a></li>
           
            <li ><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade  active in " id="mota" >
        <p>{!! $details->product_desc !!}</p>
            
        </div>
  
            
            
        
          
        
        
        <div class="tab-pane fade   in" id="reviews" >
            <div class="col-sm-12">
            
                <div class="fb-comments" data-href="http://127.0.0.1{{$uri}}" data-width="100%" data-numposts="5"></div>
            </div>
        </div>
        
    </div>
</div><!--/category-tab-->

<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">Sản phẩm liên quan</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">	
               
                @foreach ($related_product as $key=>$related )
                <form  action="{{ URL::to('/save-cart') }} " method="POST">
                    {{ csrf_field() }}
                    <input name="qty" type="hidden" value="1" min="1" />
                    <input name="productid_hiden" type="hidden"  value="{{ $related->product_id }}"  />
                <a href="{{URL::to('/chi_tiet_san_pham/'.$related->product_id)  }}">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{ URL::to('public/uploads/product/'.$related->product_image) }}" height="270" width="150" alt="" />
                                <h2>{{ number_format($related->product_price) }} VND</h2>
                                <p>{{ $related->product_name }}</p>
                                <button name="add-to-card" type="submit" data-id="{{ $related->product_id  }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart" ></i>Thêm vào giỏ</button>
                            </form>
                            </div>
                            
                    </div>
                    </div>
                </div>
                </a>
                      
                @endforeach
         
            </div>
            <div class="item ">	
                @foreach ($related_product1 as $key=>$related1 )
                <a href="{{URL::to('/chi_tiet_san_pham/'.$related1->product_id)  }}">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{ URL::to('public/uploads/product/'.$related1->product_image) }}" height="270" width="150" alt="" />
                                <h2>{{ number_format($related1->product_price) }}VND</h2>
                                <p>{{ $related1->product_name }}</p>
                                <button name="add-to-card" type="submit" data-id="{{ $related1->product_id  }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart" ></i>Thêm vào giỏ</button>
                                </form>
                            </div>
                            
                    </div>
                    </div>
                </div>
                </a>
                      
                @endforeach
         
            </div>
            
        </div>
         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>			
    </div>
</div><!--/recommended_items-->
@stop