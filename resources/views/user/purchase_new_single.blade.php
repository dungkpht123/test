@extends('user.site')
@section('main')
<?php $images = json_decode($product->list_image) ?>
<!------ Breadcrumbs Start ------>
<div class="impl_bread_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>purchase single</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">purchase single</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!------ Purchase Car Start ------>
<div class="impl_buy_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="impl_buycar_wrapper">
                    <div class="impl_buycar_color" id="color_car">
                        <div class="slider slider-for1">
                            <div><img src="{{ url('public/uploads')}}/{{ $product->image }}" alt="{{ $product->name }}"></div>
                            @if(is_array($images))
                            @for($i = 1 ; $i < count($images); $i++) <div>
                                <h3><img src="{{$images[$i]}}" alt="{{ $product->name }}" class="img-fluid impl_hover_car_img" style="height: 300px;" /></h3>
                        </div>
                        @endfor
                        @endif

                    </div>
                    <div class="slider slider-nav1">
                        <div><span class="car_color car_clr1"></span></div>
                        <div><span class="car_color car_clr2"></span></div>
                        <div><span class="car_color car_clr3"></span></div>
                        <div><span class="car_color car_clr4"></span></div>
                        <div><span class="car_color car_clr5"></span></div>
                        <div><span class="car_color car_clr6"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="impl_buycar_data">
                <h1>{{ $product->name }}
                    <span>

                    </span>
                </h1>
                @if($product->sale_price > 0)
                <h4><s> {{ number_format( $product->price )}} VND</s></h4>
                <h2 style="color: red;">{{ number_format( $product->sale_price )}} VND</h2>
                @else
                <h2>{{ number_format( $product->price )}} VND</h2>
                @endif
                <div class="content mt-3">
                    {!!($product->content)!!}
                </div>
                <div class="impl_old_buy_btn">
                    <a href="{{ route('checkout') }}/{{$product->id}}" class="impl_btn">thêm vào giỏ hàng</a>
                    <a href="{{ route('checkout') }}/{{$product->id}}" class="impl_btn">mua ngay</a>
                    <a href="{{ route('compare') }}/{{$product->id}}" class="impl_btn">so sánh</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!------ Purchase Car Start ------>
<div class="impl_spesi_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="impl_car_spesi_list">
                    <div class="impl_heading">
                        <h1>Car Specifications</h1>
                    </div>
                    <ul>
                        <li>
                            <h3>Acceleration</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width:70%"></div>
                            </div>
                        </li>
                        <li>
                            <h3>weight</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width:30%"></div>
                            </div>
                        </li>
                        <li>
                            <h3>control</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width:80%"></div>
                            </div>
                        </li>
                        <li>
                            <h3>off-road</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width:60%"></div>
                            </div>
                        </li>
                        <li>
                            <h3>top speed</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width:40%"></div>
                            </div>
                        </li>
                        <li>
                            <h3>toughness</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width:50%"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 impl_padderleft impl_padderright">
                <div class="impl_car_spesi_img">
                    <img src="{{ url('public/fontend/images/banner1.jpg') }}" alt="" />
                </div>
            </div>
        </div>

    </div>
</div>
<!------ Car parts wrapper Start ------>
<div class="impl_carparts_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="impl_carparts_inner">
                    <div class="impl_carparts">
                        <div class="slider slider-for">
                            <div>
                                <div class="impl_slider_img"><img src="{{ url('public/uploads/sanpham1.png')}}" alt="">
                                    <ul class="impl_car_prts">
                                        <li>
                                            <span class="impl_cr_no">1</span>
                                            <span class="impl_cr_prts_des">Anti-Lock Braking </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">2</span>
                                            <span class="impl_cr_prts_des"> Premium Headlights</span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">3</span>
                                            <span class="impl_cr_prts_des">Night Vision Windshield </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">4</span>
                                            <span class="impl_cr_prts_des">Leather Seats </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">5</span>
                                            <span class="impl_cr_prts_des">Best Quality Tires </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">6</span>
                                            <span class="impl_cr_prts_des">Ground Clearance of 170mm </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">7</span>
                                            <span class="impl_cr_prts_des">350 Liters Boot Capacity </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="impl_slider_img"><img src="http://via.placeholder.com/1140x353" alt="">
                                    <ul class="impl_car_prts">
                                        <li>
                                            <span class="impl_cr_no">1</span>
                                            <span class="impl_cr_prts_des">radiator support </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">2</span>
                                            <span class="impl_cr_prts_des">premium headlights</span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">3</span>
                                            <span class="impl_cr_prts_des">Night Vision Windshield </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">4</span>
                                            <span class="impl_cr_prts_des">Leather Seats </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">5</span>
                                            <span class="impl_cr_prts_des">premium headlights</span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">6</span>
                                            <span class="impl_cr_prts_des">solid bumber </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">7</span>
                                            <span class="impl_cr_prts_des">mirror</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="impl_slider_img"><img src="http://via.placeholder.com/1140x353" alt="">
                                    <ul class="impl_car_prts">
                                        <li>
                                            <span class="impl_cr_no">1</span>
                                            <span class="impl_cr_prts_des">step bumper </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">2</span>
                                            <span class="impl_cr_prts_des"> tail lights</span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">3</span>
                                            <span class="impl_cr_prts_des">Night Vision Windshield </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">4</span>
                                            <span class="impl_cr_prts_des">grilles </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">5</span>
                                            <span class="impl_cr_prts_des">tailgates trunk lids </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">6</span>
                                            <span class="impl_cr_prts_des">silencer </span>
                                        </li>
                                        <li>
                                            <span class="impl_cr_no">7</span>
                                            <span class="impl_cr_prts_des">tail light </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slider slider-nav">
                            <div>
                                <div class="impl_thumb_ovrly"><img src="http://via.placeholder.com/170x100" alt=""></div>
                            </div>
                            <div>
                                <div class="impl_thumb_ovrly"><img src="http://via.placeholder.com/170x100" alt=""></div>
                            </div>
                            <div>
                                <div class="impl_thumb_ovrly"><img src="http://via.placeholder.com/170x100" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!------ Car description wrapper Start ------>
<div class="impl_descrip_wrapper">
    <div class="container">
        <div class="row">
        <div class="col-md-7">
                <div class="img">
                    @if(is_array($images))
                        <img src="{{$images[1]}}" alt="{{ $product->name }}" class="img-fluid impl_hover_car_img" style=" max-height: 480px; max-width: 634px;" />
                    @endif
                </div>
                <div class="button" style=" margin-top: 40px; text-align: center;">
                    <a href="" type="button" class="btn " style="background-color: #2c72c6;border-color: #2c72c6; color: #fff; max-width:200px;width: 100%;min-width: 0;" >MUA NGAY</a>
                    <a href="" type="button" class="btn " style="margin-left: 10px;  max-width: 200px;  width: 100%;  min-width: 0; border:1px solid #000; color:#2c72c6" >XEM PROCHUSE</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="impl_heading">
                            <h1>Thông số kĩ thuật</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_descrip_box">
                            <h2>Dài x Rộng x Cao</h2>
                            <p>{!! $thongso->dai_rong_cao !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_descrip_box">
                            <h2>Động Cơ</h2>
                            <p>{!! $thongso->dongCo !!}</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_descrip_box">
                            <h2>Chiều Dài Cơ Sở</h2>
                            <p>{!! $thongso->chieuDaiCS !!}</p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_descrip_box">
                            <h2>Khoảng Sáng Gầm</h2>
                            <p>{!! $thongso->khoangSangGam !!}</p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_descrip_box">
                            <h2>Dung tích Nhiên liệu</h2>
                            <p>{!! $thongso->dungTichNL !!}</p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_descrip_box">
                            <h2>Mức tiêu thụ Nhiên Liệu</h2>
                            <p>{!! $thongso->mucTieuThuNL !!}</p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_descrip_box">
                            <h2>Công suất max</h2>
                            <p>{!! $thongso->congSuatMax !!}</p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_descrip_box">
                            <h2>Momem Xoắn cực đại</h2>
                            <p>{!! $thongso->moMemXoan !!}</p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_descrip_box">
                            <h2>Hộp số</h2>
                            <p>{!! $thongso->hopSo !!}</p>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="impl_descrip_box">
                            <h2>Dẫn động</h2>
                            <p>{!! $thongso->danDong !!}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!------ Car description wrapper Start ------>
<div class="impl_review_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="impl_heading">
                    <h1>user reviews</h1>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
                <div class="review_slider">
                    <div class="impl_review_box">
                        <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                        <ul class="review_rating">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="review_date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                        </div>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                        <h4 class="review_author">By : Jasmine Keith</h4>
                    </div>
                    <!--2-->
                    <div class="impl_review_box">
                        <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                        <ul class="review_rating">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="review_date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                        </div>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                        <h4 class="review_author">By : Jasmine Keith</h4>
                    </div>
                    <!--3-->
                    <div class="impl_review_box">
                        <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                        <ul class="review_rating">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="review_date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                        </div>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                        <h4 class="review_author">By : Jake Nolan</h4>
                    </div>
                    <!--4-->
                    <div class="impl_review_box">
                        <h2>Reviewing After 10,000 kms And Six Months Of Driving Dawn, Curiosity</h2>
                        <ul class="review_rating">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="review_date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                        </div>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                        <h4 class="review_author">By : Jasmine Keith</h4>
                    </div>
                    <!--5-->
                    <div class="impl_review_box">
                        <h2>Best Deal , Value For Money Review After 7000 kms </h2>
                        <ul class="review_rating">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="review_date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> By : Christopher Brown
                        </div>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                        <h4 class="review_author">By : Jasmine Keith</h4>
                    </div>
                    <!--6-->
                    <div class="impl_review_box">
                        <h2>Not Meeting Expectation Regarding The Features Listed By Dawn, Curiosity</h2>
                        <ul class="review_rating">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <div class="review_date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> 15 September 2017
                        </div>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleas- ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil.</p>
                        <h4 class="review_author">By : Jake Nolan</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop()