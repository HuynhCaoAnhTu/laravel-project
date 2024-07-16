<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>YourPet</title>
	<link rel="shortcut icon" href="{{ asset('public/frontend/images/pet.png')}}" />
	<link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>
	<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>

    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('public/frontend/css/sweetalert.css') }}" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<meta property="fb:app_id" content="&#123;433875678148032&#125;" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->


    <link rel="shortcut icon" href="public/frontend/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/frontend/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/frontend/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/frontend/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="public/frontend/images/apple-touch-icon-57-precomposed.png">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<style>
		#snackbar {

      min-width: 250px;
      margin-left: -125px;
      background-color: #1DB9C3;
      color: rgb(58, 53, 53);
      text-align: center;
      border-radius: 5px;
      padding: 16px;
      position: fixed;
      z-index: 1;
      right: 10px;
      top:10px;
      font-size: 18px;
	  font-weight: 600;
    }
	</style>
</head><!--/head-->

<body>

	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=433875678148032&autoLogAppEvents=1" nonce="TEztGm4A"></script>



	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 0372.273.647</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> yourpets@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		<?php
$message=Session::get('message');                                                                   // code mess khi add vào gio hang
if($message)
{
	echo '<div id="snackbar"> '.$message .'</div> ';
	Session::put('message',null);
}
?>

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="logo pull-left">
							<a href="{{ URL::to('/') }}"><img src="{{ asset('public/frontend/images/yourpet.png')}}"  style="width: 90%;"  alt="" /></a>
						</div>
					</div>
					<div class="col-sm-9">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							 {{-- <li><a data-wow-delay="0.2s" class="wow bounceInRight"  id="navmid" href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a data-wow-delay="0.4s" class="wow bounceInRight" id="navmid" href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a data-wow-delay="0.6s" class="wow bounceInRight" id="navmid" href="checkout.html"><i class="fa fa-crosshairs"></i> Thanh toán</a></li> --}}
								<li><a  id="navmid" href="{{ URL::to('/show_cart_product') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<?php
								$customer_id=Session::get('customer_id');
								$customer_name=Session::get('customer_name');


                    			$customer_pl=Session::get('user_pl');
								if($customer_id!=Null)
								{
								?>
								<li>
									<a   id="navmid" href="{{URL::to('/logout')}}"><i class="fa fa-lock"></i>
										<?php 	$customer_name=Session::get('customer_name'); echo $customer_name; ?> | Đăng xuất </a></li>
									<?php
								}else{



									?>
								<li> <a   id="navmid" href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>

							<?php } ?>
								<?php

								if($customer_pl==1 ||$customer_pl==2 )
								{
								?>
								<li>
									<a   id="navmid" href="{{URL::to('/dashboard')}}"><i class="fa fa-lock"></i>
										Đến trang quản lý </a></li>
									<?php
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row" >
					<div class="col-sm-8">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a  href="{{ URL:: to ('/trangchu') }}" class="">Trang chủ</a></li>
								<li class="dropdown "><a href="#">Danh mục<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										@foreach ($category as$key=>$cate1 )
                                     <li><div> <a href="{{ URL::to('/danhmucsanpham/'.$cate1->category_id) }}"> {{ $cate1->category_name }}</a></div></li>
										@endforeach
                                    </ul>
                                </li>
								<li class="dropdown "><a href="#">Thương hiệu<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										@foreach ($brand as$key=>$brand1 )
										<li><div> <a href="{{ URL::to('/thuonghieusanpham/'.$brand1->brand_id) }}"> {{ $brand1->brand_name }}</a></div></li>
										   @endforeach
                                    </ul>
                                </li>



							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<form action="{{ URL::to('/search') }}" method="post">
							{{ csrf_field() }}
						<div class="search_box pull-right">
							<input type="text" name="keyword_search" placeholder="Search"/>
							<button type="submit"><i class="fa fa-search"></i></button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="slider"><!--slider-->
		<div class="container" >
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							@foreach ( $slider as $key=>$sli_v )


							<div class="item active">
								<div class="col-sm-6">
									<div id="containerWater">
										<h1><span  id="title" class="title1" style="font-size: 120px;margin-left: -30px;font-weight: bolder">YourPets</span></h1>
										<h1><span id="title" class="title2" style="font-size: 120px;margin-left: -30px;font-weight: bolder">YourPets</span></h1>
										</div>
										<div class="titlebanner">

									</div>
									<?php
										$slide_id='7';
										?>
									<button type="button" class="btn btn-default get"><a style="color: black;font-weight: bolder" href="{{ URL::to('/danhmucsanpham/7') }}">Tìm hiểu ngay</a></button>
								</div>
								<div class="col-sm-6">

									<img src="{{asset ('public/uploads/slider/'.$sli_v->slider_image) }}" height="520px" width="520px" class="girl img-responsive" alt="" />

								</div>
							</div>
							@endforeach

							@foreach ( $slider1 as $key=>$sli_v )

							<div class="item ">
								<div class="col-sm-6">
									<div id="containerWater">
										<h1><span  id="title" class="title1" style="font-size: 120px;margin-left: -30px;font-weight: bolder">YourPets</span></h1>
										<h1><span id="title" class="title2" style="font-size: 120px;margin-left: -30px;font-weight: bolder">YourPets</span></h1>
										</div>
										<div class="titlebanner">

									</div>
									<?php
										$slide_id='7';
										?>
									<button type="button" class="btn btn-default get"><a href="{{ URL::to('/danhmucsanpham/7') }}">Tìm hiểu ngay</a></button>
								</div>
								<div class="col-sm-6">

									<img src="{{asset ('public/uploads/slider/'.$sli_v->slider_image) }}" height="520px" width="520px" class="girl img-responsive" alt="" />

								</div>
							</div>
							@endforeach



						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->
	<section>
		<div class="container" style="margin-top:50px">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2 class="wow bounceInLeft">Danh mục</h2>
							<div style="margin-bottom: 0px" class="panel-group category-products" id="accordian"><!--category-productsr-->
								<h4 class="panel-title">
									<a data-toggle="collapse" style="text-decoration: none; margin-left: 13px" data-parent="#accordian" href="#thucan">
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										Thức ăn cho thú cưng
									</a>
								</h4>


							</div>
							<div id="thucan" class="panel-collapse collapse in">
								<div class="panel-body" style="padding: 5px">

								</div>
							</div>
									<div style="margin-bottom: 0px" class="panel-group category-products" id="accordian"><!--category-productsr-->
										<h4 class="panel-title">
											<a data-toggle="collapse" style="text-decoration: none; margin-left: 10px" data-parent="#accordian" href="#phukien">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												Phụ kiện cho thú cưng
											</a>
										</h4>


									</div>
										<div id="phukien" class="panel-collapse collapse in">
									<div class="panel-body" style="padding: 5px">

									</div>
										</div>








									<div style="margin-top:15px " class="brands_products"><!--brands_products-->
										<h2  class="wow bounceInLeft">Thương hiệu</h2>
										<div class="brands-name">
											<ul class="nav nav-pills nav-stacked">
												@foreach ($brand as$key=>$brand )
												<li > <a   style="text-transform: none" href="{{ URL::to('/thuonghieusanpham/'.$brand->brand_id) }}"> {{ $brand->brand_name }}</a></li>
												@endforeach
											</ul>
										</div>
									</div><!--/brands_products-->


									<div class="shipping text-center"><!--shipping-->
										<img  class="wow bounceInLeft" src="{{ asset('public/frontend/images/logo (2).png')}}" alt="" />
									</div><!--/shipping-->

				</div>
				</div>

										<div class="col-sm-9 padding-right">
											@yield('content')
										</div>

			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->


		<div class="footer-widget">
			<div class="container">
				<div class="row">

					<div class="col-sm-1">
					</div>
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>Thông tin Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li>Địa chỉ: 05 đường 11B, KDC Dương Hồng, Bình Hưng, Bình Chánh, TPHCM</li>
								<li>Điện thoại: 0372.273.647</li>

							</ul>
						</div>
					</div>
						<div class="col-sm-4">
							<div class="single-widget">
								<h2>Hướng dẫn</h2>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="">Hướng dẫn đặt hàng</a>
										</li>
									<li><a href="">Hướng dẫn thanh toán</a></li>

								</ul>
							</div>

					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Chính sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Chính sách bảo vệ thông tin người dùng</a>


									</li>
								<li><a href="">Quy định đổi trả sản phẩm</a></li>
								<li>	<a href="">Chính sách giao hàng</a></li>

							</ul>
						</div>

				</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">

				</div>
			</div>
		</div>

	</footer><!--/Footer-->



    <script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
	<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}" ></script>
	<script src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}" ></script>
	<script src="{{ asset('public/frontend/js/price-range.js') }}" ></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}" ></script>
    <script src="{{ asset('public/frontend/js/main.js') }}" ></script>
	<script src="{{ asset('public/frontend/js/sweetalert.js') }}" ></script>
	<script src="{{ asset('public/frontend/js/script.js') }}" ></script>
	<script> new WOW().init(); </script>
	<script>

		setTimeout(function() {
			$('#snackbar').fadeOut();
		}, 1000); // <-- time in milliseconds
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#sort').on('change',function(){
					var url=$(this).val();
				if(url)
				{
					window.location=url;
				}
				else
				return false;
				});
			});
		</script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('#sort_by_price').on('click',function(){
						var url=$(this).val();
					if(url)
					{
						window.location=url;
					}
					else
					return false;
					});
				});
			</script>
</body>
</html>






