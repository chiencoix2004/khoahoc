@extends('client.layouts.main')
@section('content')
    <section class="home-slider-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="menu-slider">
                        <div class="vegamenu-content">
                            <a href="#vega-menu" data-bs-toggle="collapse" class="vegamenu-title">
                                <span class="menu-icon"><i class="ion-navicon"></i></span>
                                <span class="menu-cat-title">Danh Mục Khóa Học</span>
                                <span class="menu-down-icon"><i class="ion-ios-arrow-down"></i></span>
                            </a>
                            <div class="main-wrap collapse" id="vega-menu">
                                <ul class="vega-menu">
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'combo-tiet-kiem-4208') }}" class="link-title">
                                            <i class="fa-solid fa-book"></i>
                                            <span>Combo Tiết Kiệm</span>
                                            {{-- {{route('products.category' --}}
                                        </a> 
                                        <a href="{{ route('products.category', 'combo-tiet-kiem-4208') }}" class="left-mega-menu-xl">
                                            <i class="fa-solid fa-book"></i>
                                            <span>Combo Tiết Kiệm</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'lap-trinh-website-2979') }}" class="link-title">
                                            <i class="fas fa-laptop-code"></i>
                                            <span>Công Nghệ Thông Tin</span>
                                        </a>
                                        <a href="{{ route('products.category', 'lap-trinh-website-2979') }}" class="left-mega-menu-xl">
                                            <i class="fas fa-laptop-code"></i>
                                            <span>Công Nghệ Thông Tin</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'toeic-ielts-6504') }}" class="link-title">
                                            <i class="fas fa-language"></i>
                                            <span>Ngoại Ngữ</span>
                                        </a>
                                        <a href="{{ route('products.category', 'toeic-ielts-6504') }}" class="left-mega-menu-xl">
                                            <i class="fas fa-language"></i>
                                            <span>Ngoại Ngữ</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'capcut-5121') }}" class="link-title">
                                            <i class="fa-solid fa-screwdriver-wrench"></i>
                                            <span>Thiết Kế Đồ Họa</span>
                                        </a>
                                        <a href="{{ route('products.category', 'capcut-5121') }}" class="left-mega-menu-xl">
                                            <i class="fa-solid fa-screwdriver-wrench"></i>
                                            <span>Thiết Kế Đồ Họa</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'facebook-marketing-6874') }}" class="link-title">
                                            <i class="fa-solid fa-square-poll-vertical"></i>
                                            <span>Marketing</span>
                                        </a>
                                        <a href="{{ route('products.category', 'facebook-marketing-6874') }}" class="left-mega-menu-xl">
                                            <i class="fa-solid fa-square-poll-vertical"></i>
                                            <span>Marketing</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'excel-2842') }}" class="link-title">
                                            <i class="fas fa-file-word"></i>
                                            <span>Tin Học Văn Phòng</span>
                                        </a>
                                        <a href="{{ route('products.category', 'excel-2842') }}" class="left-mega-menu-xl">
                                            <i class="fas fa-file-word"></i>
                                            <span>Tin Học Văn Phòng</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'chung-khoan-6663') }}" class="link-title">
                                            <i class="fa-solid fa-sack-dollar"></i>
                                            <span>Đầu Tư</span>
                                        </a>
                                        <a href="{{ route('products.category', 'chung-khoan-6663') }}" class="left-mega-menu-xl">
                                            <i class="fa-solid fa-sack-dollar"></i>
                                            <span>Đầu Tư</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'dung-phim-8602') }}" class="link-title">
                                            <i class="fas fa-camera"></i>
                                            <span>Dựng Phim & Nhiếp Ảnh</span>
                                        </a>
                                        <a href="{{ route('products.category', 'dung-phim-8602') }}" class="left-mega-menu-xl">
                                            <i class="fas fa-camera"></i>
                                            <span>Dựng Phim & Nhiếp Ảnh</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'chien-luoc-kinh-doanh-4750') }}" class="link-title">
                                            <i class="fa-solid fa-suitcase"></i>
                                            <span>Kinh Doanh & Khởi Nghiệp</span>
                                        </a>
                                        <a href="{{ route('products.category', 'chien-luoc-kinh-doanh-4750') }}" class="left-mega-menu-xl">
                                            <i class="fa-solid fa-suitcase"></i>
                                            <span>Kinh Doanh & Khởi Nghiệp</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'ki-nang-dam-phan-5420') }}" class="link-title">
                                            <i class="fa-solid fa-user-plus"></i>
                                            <span>Kỹ Năng Cá Nhân</span>
                                        </a>
                                        <a href="{{ route('products.category', 'ki-nang-dam-phan-5420') }}" class="left-mega-menu-xl">
                                            <i class="fa-solid fa-user-plus"></i>
                                            <span>Kỹ Năng Cá Nhân</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'facebook-1662') }}" class="link-title">
                                            <i class="fa-brands fa-facebook"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a href="{{ route('products.category', 'facebook-1662') }}" class="left-mega-menu-xl">
                                            <i class="fa-brands fa-facebook"></i>
                                            <span>Facebook</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'tiktok-8380') }}" class="link-title">
                                            <i class="fa-brands fa-tiktok"></i>
                                            <span>Tiktok</span>
                                        </a>
                                        <a href="{{ route('products.category', 'tiktok-8380') }}" class="left-mega-menu-xl">
                                            <i class="fa-brands fa-tiktok"></i>
                                            <span>Tiktok</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.category', 'khac-6125') }}" class="link-title">
                                            <i class="fa-solid fa-caret-down"></i>
                                            <span>Khác</span>
                                        </a>
                                        
                                        <a href="{{route('products.category', 'khac-6125') }}" class="left-mega-menu-xl">
                                            <i class="fa-solid fa-caret-down"></i>
                                            <span>Khác</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="home-slider-2">
                            <div class="home-slider2 owl-carousel owl-theme">

                                <div class="items">
                                    <div class="img-back">
                                        <img loading="lazy"
                                            src='https://i.postimg.cc/kXYK1s6j/bannersale.png'alt='bannersale' />
                                        <div class="slide-c-1 h-s-content">
                                            {{-- <span>Chỉ từ 49k </span>
                                        <h1>Combo Khóa Học<br>Giá Rẻ</h1>
                                        <a href="grid-list-2.html" class="btn btn-style1">Mua Ngay</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="img-back">
                                        <img loading="lazy" src='https://i.postimg.cc/qRHF5nDF/combokhoahoc.png'
                                            alt='combokhoahoc' />
                                        {{-- <div class="slide-c-2 h-s-content">
                                        <h1>Combo Khóa Học<br>Giá Rẻ</h1>
                                        <a href="grid-list-2.html" class="btn btn-style1">Mua Ngay</a>
                                    </div> --}}
                                    </div>
                                </div>
                                <div loading="lazy" class="items">
                                    <div class="img-back">
                                        <img src='https://i.postimg.cc/B6S3kxR6/bannerdeal.png' alt='bannerdeal' />
                                        <div class="slide-c-3 h-s-content">
                                            {{-- <span>Top selling!</span>
                                        <h1>Healthier<br>testy way</h1>
                                        <a href="grid-list-2.html" class="btn btn-style1">Shop now</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--home page slider end-->
    <!-- service start -->
    <section class="service-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="service">
                        <div class="service-box">
                            <div class="s-box">
                                <img loading="lazy" src="{{ asset('assets/Client/image/uytinchatluong.png') }}"
                                    width="50px" height="50px" alt="">
                                <div class="service-content">
                                    <span>&nbsp; <b>Uy Tín & Chất Lượng</b> </span>
                                    <p>&nbsp; Uy tín đặt lên hàng đầu</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="s-box">
                                <img loading="lazy" src="{{ asset('assets/Client/image/kichhoatnhanh.png') }}"
                                    width="50px" height="50px" alt="">
                                <div class="service-content">
                                    <span>&nbsp; <b>Kích Hoạt Nhanh</b> </span>
                                    <p>&nbsp; Kích hoạt nhanh chóng chỉ 1-2p</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="s-box">
                                <img loading="lazy" src="{{ asset('assets/Client/image/updatelientuc.png') }}"
                                    width="50px" height="50px" alt="">
                                <div class="service-content">
                                    <span>&nbsp; <b>Update Liên Tục</b> </span>
                                    <p>&nbsp; Cập nhật khóa học mới hằng tuần</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-box">
                            <div class="s-box">
                                <img loading="lazy" src="{{ asset('assets/Client/image/hoconline.png') }}" width="50px"
                                    height="50px" alt="">
                                <div class="service-content">
                                    <span>&nbsp; <b>Học online tiện lợi
                                        </b> </span>
                                    <p>&nbsp; Học online dễ dàng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service end -->
    <!-- trending product start -->
    <section class="section-tb-padding trending-pro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Khóa Học Mua Nhiều Nhất</h2>
                    </div>
                    <div class="home2-trending owl-carousel owl-theme">
                        @foreach ($ProductHotSale as $item)
                            <div class="items">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="{{ route('products.detailProduct', $item->slug) }}">
                                            <img loading="lazy" class="img-fluid" src="{{ asset($item->image) }}"
                                                alt="pro-img1">
                                            {{-- <img class="img-fluid additional-image" src="image/pro/pro-img-01.jpg" alt="additional image"> --}}
                                        </a>
                                    </div> 
                                    @if ($item->price_sale > 0)
                                    <div class="Pro-lable">
                                        <span class="p-discount">-{{ $item->discount_percent }}%</span>
                                    </div>
                                    @endif
                                </div>
                                <div class="caption">
                                    <h3><a
                                            href="{{ route('products.detailProduct', $item->slug) }}"><b style="color: red">{{ $item->name }}</b></a>
                                    </h3>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                    {{-- <div class="pro-price">
                                <span class="new-price">$130.00 USD</span>
                            </div> --}}
                                    <div class="pro-price">
                                        @if ($item->price_sale == 0)
                                            <span class="new-price">{{ number_format($item->price, 0, '.', ',') }}đ</span>
                                            <span class="old-price"><b>Đã Bán:
                                                    @formatNumber($item->buys)</b>&nbsp|&nbsp<i class="fa-solid fa-eye"></i><b>
                                                    @formatNumber($item->view)</b></span>
                                        @elseif($item->price_sale > 0)
                                            <span
                                                class="new-price">{{ number_format($item->price_sale, 0, '.', ',') }}đ</span>
                                            <span
                                                class="old-price"><del>{{ number_format($item->price, 0, '.', ',') }}đ</del></span>
                                            <span class="old-price"><b>Đã Bán:
                                                    @formatNumber($item->buys)</b>&nbsp|&nbsp<i class="fa-solid fa-eye"></i><b>
                                                    @formatNumber($item->view)</b></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending product end -->
    <!-- category image start -->
    <section class="section-b-padding home2-category">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Danh Sách Khóa Học</h2>
                    </div>
                    <div class="home2-cate-image owl-carousel owl-theme">
                        <div class="items">
                            <div class="cate-image">
                                <a href="#!">
                                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=122502&format=png&color=000000" class="img-fluid" alt="cate-image">
                                    <span>Combo Khóa Học</span>
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="cate-image">
                                <a href="#!">
                                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=7VmM1pi6cq-q&format=png&color=000000" class="img-fluid" alt="cate-image">
                                    <span>Công Nghệ Thông Tin</span>
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="cate-image">
                                <a href="#!">
                                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=120517&format=png&color=000000" class="img-fluid" alt="cate-image">
                                    <span>Ngoại Ngữ</span>
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="cate-image">
                                <a href="#!">
                                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=114248&format=png&color=000000" class="img-fluid" alt="cate-image">
                                    <span>Thiết Kế Đồ Họa</span>
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="cate-image">
                                <a href="#!">
                                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=113842&format=png&color=000000" class="img-fluid" alt="cate-image">
                                    <span>Marketing</span>
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="cate-image">
                                <a href="#!">
                                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=110473&format=png&color=000000" class="img-fluid" alt="cate-image">
                                   <span>Tin Học Văn Phòng</span>
                                </a>
                            </div>
                        </div> 
                        <div class="items">
                            <div class="cate-image">
                                <a href="#!">
                                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=112793&format=png&color=000000" class="img-fluid" alt="cate-image">
                                   <span>Đầu Tư</span>
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="cate-image">
                                <a href="#!">
                                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=115628&format=png&color=000000" class="img-fluid" alt="cate-image">
                                   <span>Dựng Phim & Nhiếp Ảnh</span>
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="cate-image">
                                <a href="#!">
                                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=ndn9OSlhNd4B&format=png&color=000000" class="img-fluid" alt="cate-image">
                                   <span>Kinh Doanh & Khởi Nghiệp</span>
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="cate-image">
                                <a href="#!">
                                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=118555&format=png&color=000000" class="img-fluid" alt="cate-image">
                                   <span>Facebook</span>
                                </a>
                            </div>
                        </div>
                        <div class="items">
                            <div class="cate-image">
                                <a href="#!">
                                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=-x2V8Q63DerT&format=png&color=000000" class="img-fluid" alt="cate-image">
                                   <span>Titkok</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category image end -->
    <!-- our product tab star -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="our-tab">
                        <div class="section-title">
                            <h2>Combo Tiết Kiệm</h2>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home">Khóa Học Hot</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-pro-slider">
                            <div class="tab-pane fade show active" id="profile">
                                <div class="our-products-tab swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach ($ProductCombo as $item) 
                                        <div class="swiper-slide">
                                            <div class="tab-product">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="{{ route('products.detailProduct', $item->slug) }}">
                                                            <img src="{{asset($item->image)}}" alt="pro-img1" loading="lazy"
                                                                class="img-fluid"> 
                                                        </a>
                                                    </div>
                                                    @if ($item->price_sale > 0)
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-{{ $item->discount_percent }}%</span>
                                                    </div>
                                                    @endif 
                                                </div>
                                                <div class="tab-caption">
                                                    <h3><a href="{{ route('products.detailProduct', $item->slug) }}">{{$item->name}}</a></h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                        <i class="fa fa-star e-star"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">{{ number_format($item->price_sale, 0, '.', ',') }}đ</span>
                                                        <span class="old-price"><del>{{ number_format($item->price, 0, '.', ',') }}đ</del></span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        
                                                        <a href="{{ route('products.detailProduct', $item->slug) }}"  class="btn btn-style1">
                                                            {{-- <i class="fa-solid fa-cart-shopping"></i> --}} Mua Ngay
                                                            
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button"
                                            aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0"
                                            role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our product tab end -->
    <!-- featured products start -->
    {{-- <section class="section-tb-padding featured-products">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Featured products</h2>
                    </div>
                    <div class="featured owl-carousel owl-theme">
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-8.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-08.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-text">New</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Orange juice (5ltr)</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star b-star"></i>
                                    <i class="fa fa-star b-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$93.00 USD</span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-9.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-09.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-discount">-12%</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Organic coconet (5ltr) juice</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$167.00 USD</span>
                                    <span class="old-price"><del>$179.00 USD</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-10.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-010.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-text">New</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Shrimp jumbo (5Lb)</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$230.00 USD</span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-11.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-011.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-text">New</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Sp.red fresh guava</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$45.00 USD</span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-12.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-012.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-discount">-25%</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Fresh mussel (500g)</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$245.00 USD</span>
                                    <span class="old-price"><del>$270.00 USD</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-1.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-01.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-text">New</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Fresh organic fruit (50gm)</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$130.00 USD</span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-2.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-02.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-text">New</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Fresh & healty food</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$126.00 USD</span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-3.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-03.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-discount">-20%</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Fresh apple</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$130.00 USD</span>
                                    <span class="old-price"><del>$150.00 USD</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-4.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-04.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-text">New</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Fresh litchi 100% organic</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$117.00 USD</span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-5.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-05.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-discount">-12%</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Vegetable tomato fresh</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star b-star"></i>
                                    <i class="fa fa-star b-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$133.00 USD</span>
                                    <span class="old-price"><del>$145.00 USD</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-6.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-06.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-discount">-21%</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Natural grassbean</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$139.00 USD</span>
                                    <span class="old-price"><del>$160.00 USD</del></span>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-7.jpg" alt="pro-img1">
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-07.jpg"
                                            alt="additional image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-discount">-10%</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3><a href="product-style-2.html">Fresh dryed almod (50gm)</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                    <i class="fa fa-star e-star"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$580.00 USD</span>
                                    <span class="old-price"><del>$590.00 USD</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- featured products end -->
@endsection
