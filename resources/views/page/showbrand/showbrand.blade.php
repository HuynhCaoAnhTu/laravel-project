@extends('welcome')
@section('content')
<div class="features_items"><!--features_items-->
    
    @foreach ( $brand_name as$key => $bra_name )
                
        
    <h2 style="margin-top: 5px" class="title text-center">Thương hiệu {{ $bra_name->brand_name }}</h2>
   <div class="row" style=" margin-bottom: 10px">
       <div class="col-md-4">
           <form>
               @csrf
               
               <label style="display: inline; " for="">Sắp xếp: </label>
        <select  id="sort" class="search_box  form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <?php
            $sort_key=Session::get('sort_key');  
            Session::put('sort_key',null);  
        if($sort_key=='') {
            Session::put('sort_key',null);  
       
        ?>
          <option disabled selected></option>
        <?php
         }else{ ?>
                <?php
     
                if($sort_key=='giam_dan')
                {
                    ?>
                       <option selected disabled>-Giá giảm dần-</option>
                       
                <?php
                  Session::put('sort_key',null);  
                }elseif ($sort_key=='tang_dan')
                {
                    ?>
                        <option selected disabled>-Giá tăng dần-</option>   
                    <?php
                     Session::put('sort_key',null);   
                }
                ?>
               
                 <?php
                }
                ?>
           <optgroup label="Lọc theo">
            <option value="{{ Request::url()}}?sort_by=tang_dan">Giá tăng dần</option>
            <option value="{{ Request::url()}}?sort_by=giam_dan">Giá giảm dần</option>
           </optgroup>
          </select>
        </form>
       </div>
       <div class="col-md-2">
        <button   style="  font-size: 14px " class="btn btn-fefault cart">
            
           <a href="{{  url()->current()}}?sort_by=tag1" style="font-style: none; color: aliceblue"> 10.000-50.000</a>
        </button>
        <button   style="  font-size: 14px " class="btn btn-fefault cart">
            <a  href="{{  url()->current()}}?sort_by=tag2"   style="font-style: none; color: aliceblue">   
                100.000-200.000</a>
          
        </button>
        
       </div>
       <div class="col-md-3">
        <button   style=" font-size: 14px" class="btn btn-fefault cart">
            <a href="{{  url()->current()}}?sort_by=tag3"   style="font-style: none; color: aliceblue">   300.000-500.000 </a>
        
        </button>
        <button   style=" font-size: 14px" class="btn btn-fefault cart">
            <a  href="{{  url()->current()}}?sort_by=tag4"  style="font-style: none; color: aliceblue">   500.000-1.000.000 </a>
           
        </button>
       </div>
       <div class="col-md-3">
        <button   style=" font-size: 14px" class="btn btn-fefault cart">
            <a  href="{{  url()->current()}}?sort_by=reset"  style="font-style: none; color: aliceblue">  Xóa bộ lọc </a>
           
        </button>
       </div>
   </div>
    @endforeach
         @foreach ($brand_by_id as$key => $pro )
         <form  action="{{ URL::to('/save-cart') }} " method="POST">
            {{ csrf_field() }}
            <input name="qty" type="hidden" value="1" min="1" />
            <input name="productid_hiden" type="hidden"  value="{{ $pro->product_id }}"  />
                <a href="{{URL::to('/chi_tiet_san_pham/'.$pro->product_id)  }}">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                                <div class="productinfo text-center">
                               
                                    <img  id="imageProduct" src="{{ URL::to('public/uploads/product/'.$pro->product_image) }}" alt=""  />
                               
                                    <h2 id="price">{{ number_format($pro->product_price) }} VND</h2>
                                    <p>{{ $pro->product_name }}</p>
                                    <button name="add-to-card" type="submit" data-id="{{ $pro->product_id  }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart" ></i>Thêm vào giỏ</button>
                                </form>
                                </div>
                              
                        </div>
                       
                    </div>
                </div>
            </a>
               @endforeach 
               <div class="col-sm-7 text-right text-center-xs">                
                {{ $brand_by_id->links('pagination::bootstrap-4')}} 
              </div>
                
        </div>
        @stop