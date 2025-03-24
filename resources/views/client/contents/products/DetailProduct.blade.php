@extends('client.layouts.main')
@section('content')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-start">
                        <ul class="breadcrumb-url">
                            <li class="breadcrumb-url-li">
                                <a href="index5.html">Trang Chủ</a>
                            </li>
                            <li class="breadcrumb-url-li">
                                <span>Chi Tiết Sản Phẩm</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcumb end -->
    <!-- content area start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="left-right-column">
                <div class="left-column">
                    <!-- special products start -->
                    <div class="special-product left-section-b-padding">
                        <div class="left-section-title">
                            <h4>KH Mua <span>Nhiều Nhất <img width="30px" height="30px"
                                        src="{{ asset('assets/Client/image/icons8-fire.gif') }}" alt=""></span></h4>
                        </div>
                        <a href="#special-pro" data-bs-toggle="collapse" class="responsive-collapse">KH Mua <span>Nhiều Nhất
                                <img width="30px" height="30px" src="{{ asset('assets/Client/image/icons8-fire.gif') }}"
                                    alt=""></span><i class="fa fa-angle-down"></i></a>
                        <div class="special-pro swiper-container collapse" id="special-pro">
                            <div class="swiper-wrapper">
                                @foreach ($ProductHotSale as $item)
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="{{ route('products.detailProduct', $item->slug) }}">
                                                        <img src="{{ asset($item->image) }}" class="img-fluid"
                                                        loading="lazy"  alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a style="color: red"
                                                        href="{{ route('products.detailProduct', $item->slug) }}"><b>{{ $item->name }}</b></a>
                                                </h3>
                                                <div class="pro-price">
                                                    @if ($item->price_sale == 0)
                                                        <span
                                                            class="new-price">{{ number_format($item->price, 0, '.', ',') }}đ</span>
                                                    @else
                                                        <span
                                                            class="new-price">{{ number_format($item->price_sale, 0, '.', ',') }}đ</span>
                                                    @endif
                                                </div>
                                                <br>
                                                <small>Đã bán: @formatNumber($item->buys)</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- special products end -->
                    <!-- big sale start -->
                    <div class="left-deal-bg"
                        style="background-image: url(https://i.postimg.cc/kXGmsCRb/Illustration-With-Type-Happy-Halloween-Instagram-Post.png);">
                        {{-- <a href='https://postimg.cc/BtrkZdgS' target='_blank'><img src='https://i.postimg.cc/kXGmsCRb/Illustration-With-Type-Happy-Halloween-Instagram-Post.png' border='0' alt='Illustration-With-Type-Happy-Halloween-Instagram-Post'/></a> --}}
                        <div class="left-deal-c">
                            <h2>Học Để</h2>
                            <h4>Sáng Tạo</h4>
                            <a href="javascript:void(0)">Vui Để Phát Triển</a>
                        </div>
                    </div>
                    <!-- big sale end -->
                    <!-- home brand start -->
                    <div class="left-section-t-padding">
                        <div class="left-section-title">
                            <h4>Tác Giả <span>Nổi Bật</span></h4>
                        </div>
                        <div class="home3-brand owl-carousel owl-theme">
                            <div class="items">
                                <img loading="lazy"
                                    src="https://i.postimg.cc/65bGbBjJ/28tech.jpg" class="img-fluid" alt="brand-image">
                            </div>
                            <div class="items">
                                <img loading="lazy"
                                    src="https://i.postimg.cc/vZpxM3w0/iig.jpg" class="img-fluid" alt="brand-image">
                            </div>
                            <div class="items">
                                <img loading="lazy"
                                    src="https://i.postimg.cc/RhFZwHz3/ai.jpg" class="img-fluid" alt="brand-image">
                            </div>
                            <div class="items">
                                <img loading="lazy"
                                    src="https://i.postimg.cc/rwdRv73d/wd7mfkqfbcbriinuemkc.jpg" class="img-fluid"
                                    alt="brand-image">
                            </div>
                            <div class="items">
                                <img loading="lazy"
                                    src="https://i.postimg.cc/QCyxmdXf/jj4kvuflmofwpmhlao0d.jpg" class="img-fluid"
                                    alt="brand-image">
                            </div>
                        </div>
                    </div>
                    <!-- home brand end -->
                    <!-- trending products left start -->
                    <div class="tred-product left-section-t-padding">
                        <div class="left-section-title">
                            <h4>Xem <span>Nhiều Nhất</span></h4>
                        </div>
                        <a href="#tred-products" data-bs-toggle="collapse" class="responsive-collapse">Xem <span>
                            Nhiều Nhất</span><i class="fa fa-angle-down"></i></a>
                        <div class="trening-left-pro swiper-container collapse" id="tred-products">
                            @foreach ($ProductHotView as $item)
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a loading="lazy" href="{{ route('products.detailProduct', $item->slug) }}">
                                                    <img src="{{ asset($item->image) }}" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                        </div> 
                                        <div class="caption">
                                            <h3><a style="color: red"
                                                    href="{{ route('products.detailProduct', $item->slug) }}"><b>{{ $item->name }}</b></a>
                                            </h3>
                                            <div class="pro-price">
                                                @if ($item->price_sale == 0)
                                                    <span
                                                        class="new-price">{{ number_format($item->price, 0, '.', ',') }}đ</span>
                                                @else
                                                    <span
                                                        class="new-price">{{ number_format($item->price_sale, 0, '.', ',') }}đ</span>
                                                @endif
                                            </div>
                                            <br>
                                            <small>Luợt xem: @formatNumber($item->view)</small>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            @endforeach 
                        </div>
                    </div>
                    <!-- trending products end -->
                </div>
                <div class="right-column">
                    <!-- product info start -->
                    <section class="pro-page">
                        <div class="row pro-image">
                            <div class="col-xl-5 col-lg-6 col-md-6 col-12 larg-image">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="image-11">
                                        <a href="javascript:void(0)" class="long-img">
                                            <figure>

                                                {{-- <img src="{{asset('assets/client/image/hihih.jpg')}}" class="img-fluid"
                                                    alt="image"> --}}
                                                <img loading="lazy" src="{{ asset($detailProduct->image) }}" class="img-fluid"
                                                    alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6 col-12 pro-info">
                                <h4>{{ $detailProduct->name }}</h4>
                                <div class="pro-availabale">
                                    <span class="available">Trạng Thái:</span>
                                    <span class="pro-instock">Còn Hàng</span>
                                </div>
                                <div class="pro-price">

                                    @if ($detailProduct->price_sale == 0)
                                        <span class="new-price" style="color: red">Giá:
                                            {{ number_format($detailProduct->price, 0, '.', ',') }}đ</span>
                                        <span class="old-price">&nbsp<i class="fa-solid fa-eye"></i><b>Xem:
                                                @formatNumber($detailProduct->view)</b></span>
                                    @elseif($detailProduct->price_sale > 0)
                                        <span class="new-price" style="color: red">Giá:
                                            {{ number_format($detailProduct->price_sale, 0, '.', ',') }}đ</span>
                                        <span
                                            class="old-price"><del>{{ number_format($detailProduct->price, 0, '.', ',') }}đ</del></span>
                                        <span class="old-price">&nbsp<i class="fa-solid fa-eye"></i><b>Lượt Xem:
                                                @formatNumber($detailProduct->view)</b></span>
                                    @endif
                                    {{-- <span class="new-price">$180.00 CAD</span>
                                    <span class="old-price"><del>$200.00 CAD</del></span> --}}
                                </div>
                                <span class="pro-details">Nhanh lên! Chỉ còn <span class="pro-number">7</span> sản phẩm
                                    trong kho!</span>
                                <ul class="contdown_row">
                                    <li class="countdown_section">
                                        <span id="days" class="countdown_timer">1</span>
                                        <span class="countdown_title">Day</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="hours" class="countdown_timer">8</span>
                                        <span class="countdown_title">Hrs</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="minutes" class="countdown_timer">30</span>
                                        <span class="countdown_title">Min</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="seconds" class="countdown_timer">5</span>
                                        <span class="countdown_title">Sec</span>
                                    </li>
                                </ul>
                                <div class="pro-items">
                                    <span class="pro-size">Đã Bán:</span>
                                    <ul class="pro-wight">
                                        <li><a href="javascript:void(0)" class="active">
                                                <b> @formatNumber($detailProduct->buys) Sản Phẩm</b></a></li>
                                    </ul>
                                </div>
                                <div class="pro-items">
                                    <span class="pro-size">Thời Lượng:</span>
                                    <ul class="pro-wight">
                                        <li><a href="javascript:void(0)"
                                                class="active"><b>{{ $detailProduct->total_course ?? '0' }} Chương
                                                    Học</b></a></li>
                                    </ul>
                                </div>
                                <div class="pro-lable">
                                    <span class="pro-size">Sở Hữu Khóa Học:</span>
                                    <ul class="pro-wight">
                                        <li><a href="javascript:void(0)" class="active"><b>TRỌN ĐỜI</b></a></li>
                                    </ul>
                                </div>
                                <form action="{{ route('addToCart', $detailProduct->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="pro-btn">
                                        {{-- <input type="hidden" name="price" value="{{ $detailProduct->price }}">
                                        <input type="hidden" name="name" value="{{ $detailProduct->name }}">
                                        <input type="hidden" name="price_sale"
                                            value="{{ $detailProduct->price_sale }}">
                                        <input type="hidden" name="image" value="{{ $detailProduct->image }}"> --}}
                                        <button type="submit" class="btn btn-style1"><span>Mua Ngay</span></button>
                                    </div>
                                </form>
                                <div class="share">
                                    <span class="share-lable">Share:</span>
                                    <ul class="share-icn">

                                        <li><a href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa-brands fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <div class="javascript:void(0)">
                                    <a href="checkout-1.html">
                                        <img src="{{ asset('assets/client/image/pay-image.jpg') }}" class="img-fluid"
                                            alt="pay-image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- product info end -->
                    <!-- product page tab start -->
                    <section class="row pro-page-content section-tb-padding">
                        <div class="col">
                            <div class="pro-page-tab">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Mô Tả Sản Phẩm</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Video</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Size chart</a>
                                    </li> --}}
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-1">
                                        <div class="tab-1content">
                                            <h4>Mô Tả Khóa Học</h4>
                                            <ul class="tab-description">
                                                {!! $detailProduct->description !!}
                                            </ul>
                                        </div>
                                        {{-- <div class="tab-2content">
                                            <h4>Key specification</h4>
                                            <ul class="tab-description">
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry</li> 
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- product page tab end -->
                    <!-- releted product start -->
                    {{-- <section class="pro-releted">
                        <div class="section-title">
                            <span>Có thể bạn sẽ thích</span>
                            <h2>Sản Phẩm Liên Quan</h2>
                        </div>
                        <div class="releted-products-7 owl-carousel owl-theme">
                            <div class="items">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="product-style-7.html">
                                                <img src="{{asset('assets/client/image/layout-7/6.jpg')}}" width="50px" height="50px" class="img-fluid" alt="image"> 
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
                                        <h3><a href="product-style-7.html">South indian palakpaner</a></h3>
                                        <div class="pro-price">
                                            <span class="new-price">$93.00 USD</span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </section> --}}
                </div>
            </div>
        </div>
    </section>
    <style>
        .home3-brand .items img {
            border-radius: 50%; 
            object-fit: cover; 
            width: 60px;
            height: 60px;
        }
        .releted-products-7 .items img { 
            width: 500px;
            height: 500px;
        }
    </style>
@endsection

@push('styles')
    <link rel="shortcut icon" type="image/favicon" href="image/fevicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/bootstrap.min.css') }}">
    <!-- simple-line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/simple-line-icons.css') }}">
    <!-- font-awesome icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/font-awesome.min.css') }}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/themify-icons.css') }}">
    <!-- ion icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/ionicons.min.css') }}">
    <!-- owl slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/owl.theme.default.min.css') }}">
    <!-- swiper -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/swiper.min.css') }}">
    <!-- animation -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/animate.css') }}">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/style7.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/responsive7.css') }}">
@endpush
