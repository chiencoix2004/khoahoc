<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from spacingtech.com/html/vegist-final/vegist/grid-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:28:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>Thanh Toán</title>   

    <!-- favicon -->
    <link rel="shortcut icon" type="image/favicon" href="{{ asset('assets/Client/image/fevicon.png') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/bootstrap.min.css') }}">
    <!-- simple-line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/simple-line-icons.css') }}">
    <!-- font-awesome icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/font-awesome.min.css') }}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/themify-icons.css') }}">
    <!-- ion icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/ionicons.min.css') }}">
    <!-- owl slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/owl.theme.default.min.css') }}">
    <!-- swiper -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/swiper.min.css') }}">
    <!-- animation -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/animate.css') }}">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .search-btn {
            background: none; /* Loại bỏ nền mặc định của button */
            border-radius: 50%;
            border: 1px #264790 solid; 
            cursor: pointer; /* Con trỏ tay khi hover */
            font-size: 16px; /* Điều chỉnh kích thước icon */
            /* padding: 8px;  */
            color: #333; /* Màu icon */
            transition: color 0.3s; /* Hiệu ứng hover */
            width: 40px;
            height: 40px;
            background-color: #264790;
        }
        
        .search-btn:hover {
            color: #007bff; /* Màu khi hover */
        }
        
        .search-btn .fa-search {
            vertical-align: middle; /* Căn giữa icon với text (nếu có) */
        }
        
        /* Đảm bảo button nằm ngang với input */
        .search-wrap form {
            display: flex;
            align-items: center;
            gap: 5px; /* Khoảng cách giữa input và button */
        }
        
        .search-wrap input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            flex-grow: 1; 
        }
         </style> 
</head>

<body class="home-1"> 
    <section class="top1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="top-home">
                        <li class="top-home-li">
                            <!-- currency start -->
                            <div class="currency">
                                <span class="currency-head">Tiền Tệ:</span>
                                <div class="currency-drop">
                                    <div class="eur">
                                        <img class="img-fluid" width="20px" height="20px" src="{{asset('assets/client/image/vietnam-flag.jpg')}}" alt="">
                                        <span class="cur-name">VND</span>
                                    </div> 
                                </div>
                            </div>
                            <!-- currency end -->
                            <!-- mobile search start -->
                            {{-- <div class="r-search">
                                <a href="#r-search-modal" class="search-popuup" data-bs-toggle="modal"><i
                                        class="fa fa-search"></i></a>
                                <div class="modal fade" id="r-search-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="m-drop-search">
                                                    <input type="text" name="search"
                                                        placeholder="Nhập tên khóa học...">
                                                    <a href="#!" class="search-btn"><i
                                                            class="fa fa-search"></i></a>
                                                </div>
                                                <button type="button" class="close" data-bs-dismiss="modal"><i
                                                        class="ion-close-round"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- mobile search end -->
                        </li>
                        <li class="top-home-li t-content">
                            <!-- offer text start -->
                            <div class="top-content">
                                <p class="top-slogn"><span class="top-c">Combo Tiết Kiệm</span> giảm 90%
                                </p>
                            </div>
                            <!-- offer text end -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- header start -->
    <header class="header-area">
        <div class="header-main-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header-main">
                            <!-- logo start -->
                            <div class="header-element logo">
                                <a href="{{route('home')}}"> 
                                    <img width="170px" height="25px"
                                    src="{{ asset('assets/client/image/logogiarehocngay.png') }}" alt="logo-image"
                                    class="img-fluid">
                                </a>
                            </div>
                            <!-- logo end -->
                            <!-- search start -->
                            {{-- <div class="header-element search-wrap">
                                <input type="text" name="search" placeholder="Nhập tên khóa học...">
                                <a href="#!" class="search-btn"><i class="fa fa-search"></i></a>
                            </div> --}}
                            <div class="header-element search-wrap">
                                <form action="{{ route('products.search') }}" method="GET">
                                    <input type="text" name="search" placeholder="Nhập tên khóa học" value="{{ request('search') }}">
                                    <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass" style="color: #ffff;"></i></button>
                                </form>
                            </div>
                            <!-- search end -->
                            <!-- header-icon start -->
                            <div class="header-element right-block-box">
                                <ul class="shop-element">
                                    <li class="side-wrap nav-toggler">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#navbarContent">
                                            <span class="line"></span>
                                        </button>
                                    </li> 
                                </ul>
                            </div>
                            <!-- header-icon end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main-menu-area">
                                <div class="main-navigation navbar-expand-xl">
                                    <div class="box-header menu-close">
                                        <button class="close-box" type="button"><i
                                                class="ion-close-round"></i></button>
                                    </div>
                                    <!-- menu start -->
                                    <div class="navbar-collapse" id="navbarContent">
                                        <div class="megamenu-content">
                                            <div class="mainwrap">
                                                <ul class="main-menu">
                                                    <li class="menu-link parent">
                                                        <a href="{{ route('home') }}" class="link-title">
                                                            <span class="sp-link-title">
                                                                <img src="https://img.icons8.com/?size=100&id=42814&format=png&color=000000"
                                                                    width="40px" height="40px" alt="">
                                                                Trang Chủ</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="{{ route('products.listProduct') }}" class="link-title">
                                                            <span class="sp-link-title">
                                                                <img src="https://img.icons8.com/?size=100&id=119436&format=png&color=000000"
                                                                    width="40px" height="40px" alt="">
                                                                Khóa Học</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="{{route('products.category','combo-tiet-kiem-4208')}}" class="link-title">
                                                            <span class="sp-link-title">
                                                                <img src="https://img.icons8.com/?size=100&id=3YhoNsfPvctU&format=png&color=000000"
                                                                    width="40px" height="40px" alt="">
                                                                Combo Giá Rẻ</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="{{ route('huongdanmuahang') }}" class="link-title">
                                                            <span class="sp-link-title">
                                                                <img src="https://img.icons8.com/?size=100&id=43131&format=png&color=000000"
                                                                    width="40px" height="40px" alt="">
                                                                Cách Mua Hàng</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="{{ route('feedback') }}" class="link-title">
                                                            <span class="sp-link-title">
                                                                <img src="https://img.icons8.com/?size=100&id=42782&format=png&color=000000"
                                                                    width="40px" height="40px" alt="">
                                                                Feedback</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="{{ route('member') }}" class="link-title">
                                                            <span loading="lazy" class="sp-link-title">
                                                                <img src="https://img.icons8.com/?size=100&id=77141&format=png&color=000000"
                                                                    width="40px" height="40px" alt="">
                                                                   Gói Hội Viên</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- menu end -->
                                    <div class="img-hotline">
                                        <div class="image-line">
                                            <a href="javascript:void(0)"><img src="{{asset('assets/Client/image/icon_contact.png')}}"
                                                    class="img-fluid" alt="image-icon"></a>
                                        </div>
                                        <div class="image-content">
                                            <span class="hot-l">Zalo 24/7:</span>
                                            <span>0568327300</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </header>
    <!-- header end -->

    <!-- mobile menu start -->
    <div class="header-bottom-area mobile">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-menu-area">
                        <div class="main-navigation navbar-expand-xl">
                            <div class="box-header menu-close">
                                <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                            </div>
                            <!-- menu start -->
                            <div class="navbar-collapse" id="navbarContent01">
                                <div class="megamenu-content">
                                    <div class="mainwrap">
                                        <ul class="main-menu"> 
                                            <li class="menu-link parent">
                                                <a href="{{ route('home') }}" class="link-title link-title-lg">
                                                    <span class="sp-link-title">
                                                        <img src="https://img.icons8.com/?size=100&id=42814&format=png&color=000000"
                                                            width="40px" height="40px" alt="">
                                                        Trang Chủ</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="{{ route('products.listProduct') }}"
                                                    class="link-title link-title-lg">
                                                    <span class="sp-link-title">
                                                        <img src="https://img.icons8.com/?size=100&id=119436&format=png&color=000000"
                                                            width="40px" height="40px" alt="">
                                                        Khóa Học</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="{{route('products.category','combo-tiet-kiem-4208')}}" class="link-title link-title-lg">
                                                    <span class="sp-link-title">
                                                        <img src="https://img.icons8.com/?size=100&id=3YhoNsfPvctU&format=png&color=000000"
                                                            width="40px" height="40px" alt="">
                                                        Combo Giá Rẻ</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="{{ route('huongdanmuahang') }}"
                                                    class="link-title link-title-lg">
                                                    <span class="sp-link-title">
                                                        <img src="https://img.icons8.com/?size=100&id=43131&format=png&color=000000"
                                                            width="40px" height="40px" alt="">
                                                        Cách Mua Hàng</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="{{ route('feedback') }}" class="link-title link-title-lg">
                                                    <span class="sp-link-title">
                                                        <img src="https://img.icons8.com/?size=100&id=42782&format=png&color=000000"
                                                            width="40px" height="40px" alt="">
                                                        Feedback</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="{{ route('member') }}" class="link-title link-title-lg">
                                                    <span class="sp-link-title">
                                                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=77141&format=png&color=000000"
                                                            width="40px" height="40px" alt="">
                                                            Gói Hội Viên</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- menu end --> 
                            <div class="img-hotline">
                                <div class="image-line">
                                    <a href="javascript:void(0)"><img src="{{asset('assets/Client/image/icon_contact.png')}}"
                                            class="img-fluid" alt="image-icon"></a>
                                </div>
                                <div class="image-content">
                                    <span class="hot-l"> 24/7:</span>
                                    <span>0568327300</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout page-3 start -->
    <section class="section-tb-padding check-3"
        style="background-image: url({{ asset('assets/Client/image/landing-background.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="style-3-title">Xác Nhận Đơn Hàng</h2>
                    <div class="check-3-start">
                        <div class="check-out-3" style="border: 1px #1d2333 solid;border-radius: 2px;">
                            {{-- background-color: rgba(137, 125, 247, 0.856) --}}
                            <div class="check-pro">
                                <h2 style="background-color: #1d2333;color:rgb(255, 255, 255)">1. Sản Phẩm Của Bạn</h2>
                                <ul class="check-ul">
                                    <li>
                                        <div class="check-pro-img">
                                            <a href=" "><img width="100px" height="100px"
                                                    src="https://img.icons8.com/?size=100&id=77141&format=png&color=000000" class="img-fluid"
                                                    alt="image"></a>
                                        </div>
                                        <div class="check-content"> 
                                                <span style="color: red">Khóa Học:</span>
                                                {{ Str::limit(session('cart.name'), 30, '...') }}
                                            <span class="check-code-blod" style="color: red">Trạng Thái: <span
                                                    style="color: black">Còn Hàng</span></span>
                                            @if (session('cart.price_sale') == 0)
                                                <span style="color: red">Giá:</span>
                                                <span class="check-code-blod" style="color: black"
                                                    class="check-price">{{ number_format(session('cart.price'), 0, '.', ',') }}đ</span>
                                            @elseif(session('cart.price_sale') > 0)
                                                <span class="check-code-blod" style="color: red">Giá: <span
                                                        style="color: black"
                                                        class="check-price">{{ number_format(session('cart.price_sale'), 0, '.', ',') }}đ</span>
                                                </span>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="check-out-3" style="border: 1px #1d2333 solid;border-radius: 2px;">
                            <div class="check-add">
                                <h2 style="background-color: #1d2333;color:rgb(255, 255, 255)">2. Thông Tin Nhận Hàng</h2>
                                <form action="{{ route('payment.create') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <ul>
                                        <li>
                                            <label>Tên Khách Hàng<span style="color: red">*</span></label>
                                            <input style="border: 1px #40D04F solid " type="text" name="name"
                                                placeholder="Nhập Tên Của Bạn">
                                            <div style="font-size: 11px" class="text-danger" id="discountError">
                                                <span>&nbsp&nbsp&nbsp<b>Nhập Tên Của Bạn</b></span>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Địa Chỉ Email Nhận Khóa Học<span style="color: red">*</span></label>
                                            <input type="email" name="email" placeholder="Nhập Email">
                                            <div style="font-size: 11px" class="text-danger" id="discountError">
                                                <span>&nbsp&nbsp&nbsp<b>Nhập Email Để Nhận Khóa Học Sau Khi Thanh
                                                        Toán.</b></span>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Số Điện Thoại</label>
                                            <input type="number" name="phone" placeholder="Nhập SDT">
                                            <div style="font-size: 11px" class="text-danger" id="discountError">
                                                <span>&nbsp&nbsp&nbsp<b>Nhập SDT Để Trao Đổi Nếu Có Vấn Đề</b></span>
                                            </div>
                                        </li>
                                    </ul>

                            </div>
                        </div>
                        <div class="check-out-3" style="border: 1px #1d2333 solid;border-radius: 2px;">
                            <div class="pay-method">
                                <h2 style="background-color: #1d2333;color:rgb(255, 255, 255)">3. Phương Thức Thanh Toán
                                </h2>
                                {{-- <div class="p-method" style="background-color: #1d2333;color:rgb(255, 255, 255)">
                                    <ul style="text-align: center">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="p-labal"> 
                                                    <img src="https://img.icons8.com/?size=100&id=31167&format=png&color=000000" width="50px" height="50px" alt="">
                                                    <span style="color:rgb(255, 255, 255)">Chuyển Khoản Ngân Hàng | Qrcode</span>
                                                </span>
                                            </a>
                                        </li> 
                                    </ul>
                                </div> --}}
                                <div class="p-method" style="background-color: #1d2333; color: rgb(255, 255, 255);">
                                    <ul style="text-align: center">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <!-- Thêm radio button vào đây -->
                                                {{-- <input type="radio" id="bank-transfer" name="payment-method" value="bank" checked> --}}

                                                <span class="p-labal">
                                                    <img src="https://img.icons8.com/?size=100&id=31167&format=png&color=000000"
                                                        width="50px" height="50px" alt="">
                                                    <span style="color:rgb(255, 255, 255)">Chuyển Khoản Ngân Hàng |
                                                        Qrcode</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="order-summary">
                                    <h2 style="background-color: #1d2333;color:rgb(255, 255, 255)">Chi tiết đơn hàng</h2>
                                    <ul style="background-color: #1d2333;color:rgb(255, 255, 255)">
                                        <li>
                                            <span class="p-name" style="color: red">Sản Phẩm</span>
                                            <span class="p-price" style="color: red">Đơn Giá</span>
                                        </li>
                                        <li>
                                            <span class="p-name">Giá Gốc</span>
                                            @if (session('cart.price_sale') == 0)
                                                <span
                                                    class="p-price">{{ number_format(session('cart.price'), 0, '.', ',') }}đ</span>
                                            @elseif(session('cart.price_sale') > 0)
                                                <span
                                                    class="p-price"><del>{{ number_format(session('cart.price'), 0, '.', ',') }}đ</del></span>
                                            @endif
                                        </li>
                                        <li>
                                            <span class="p-name">Giá Đã Giảm</span>
                                            @if (session('cart.price_sale') == 0)
                                                <span class="p-price">0đ</span>
                                            @elseif(session('cart.price_sale') > 0)
                                                <span
                                                    class="p-price">{{ number_format(session('cart.price_sale'), 0, '.', ',') }}đ</span>
                                            @endif
                                        </li>
                                        <li>
                                            <span class="p-name">Mã Giảm Giá</span>
                                            <span class="p-price">0đ</span>
                                        </li>
                                        <li class="order-total" style="background-color: #1d2333;color:rgb(255, 255, 255)">
                                            <span class="p-name">Tổng Tiền Thanh Toán</span>
                                            @if (session('cart.price_sale') == 0)
                                                <span style="color: red"
                                                    class="p-price">{{ number_format(session('cart.price'), 0, '.', ',') }}đ</span>
                                            @elseif(session('cart.price_sale') > 0)
                                                <span style="color: red"
                                                    class="p-price">{{ number_format(session('cart.price_sale'), 0, '.', ',') }}đ</span>
                                            @endif
                                        </li>
                                    </ul>
                                    <div  class="check-btn" style="background-color: #1d2333;color:rgb(255, 255, 255);align-content: center">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn-style1" type="submit">Thanh Toán Mua Hàng</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout page-3 end -->
    @include("client/layouts/footer")

    <a href="javascript:void(0)" class="scroll" id="top">
        <span><i class="fa fa-angle-double-up"></i></span>
    </a> 
        <!-- back to top end -->
        <div class="mm-fullscreen-bg"></div>
        <!-- jquery -->
        <script src="{{ asset('assets/Client/js/modernizr-2.8.3.min.js') }}"></script>
        <script src="{{ asset('assets/Client/js/jquery-3.6.0.min.js') }}"></script>
        <!-- bootstrap -->
        <script src="{{ asset('assets/Client/js/bootstrap.min.js') }}"></script>
        <!-- popper -->
        <script src="{{ asset('assets/Client/js/popper.min.js') }}"></script>
        <!-- fontawesome -->
        <script src="{{ asset('assets/Client/js/fontawesome.min.js') }}"></script>
        <!-- owl carousal -->
        <script src="{{ asset('assets/Client/js/owl.carousel.min.js') }}"></script>
        <!-- swiper -->
        <script src="{{ asset('assets/Client/js/swiper.min.js') }}"></script>
        <!-- price range -->
        {{-- <script src="{{ asset('assets/Client/js/range-slider.js') }}"></script> --}}
        <!-- custom -->
        <script src="{{ asset('assets/Client/js/custom.js') }}"></script> 
    </body> 
    
    <!-- Mirrored from spacingtech.com/html/vegist-final/vegist/grid-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:28:10 GMT -->
    
    </html>