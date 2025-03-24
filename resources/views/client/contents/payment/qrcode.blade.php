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
            background: none;
            /* Loại bỏ nền mặc định của button */
            border-radius: 50%;
            border: 1px #264790 solid;
            cursor: pointer;
            /* Con trỏ tay khi hover */
            font-size: 16px;
            /* Điều chỉnh kích thước icon */
            /* padding: 8px;  */
            color: #333;
            /* Màu icon */
            transition: color 0.3s;
            /* Hiệu ứng hover */
            width: 40px;
            height: 40px;
            background-color: #264790;
        }

        .search-btn:hover {
            color: #007bff;
            /* Màu khi hover */
        }

        .search-btn .fa-search {
            vertical-align: middle;
            /* Căn giữa icon với text (nếu có) */
        }

        /* Đảm bảo button nằm ngang với input */
        .search-wrap form {
            display: flex;
            align-items: center;
            gap: 5px;
            /* Khoảng cách giữa input và button */
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
                                        <img class="img-fluid" width="20px" height="20px"
                                            src="{{ asset('assets/client/image/vietnam-flag.jpg') }}" alt="">
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
                                <a href="{{ route('home') }}">
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
                                    <input type="text" name="search" placeholder="Nhập tên khóa học"
                                        value="{{ request('search') }}">
                                    <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"
                                            style="color: #ffff;"></i></button>
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
                                                        <a href="{{ route('products.listProduct') }}"
                                                            class="link-title">
                                                            <span class="sp-link-title">
                                                                <img src="https://img.icons8.com/?size=100&id=119436&format=png&color=000000"
                                                                    width="40px" height="40px" alt="">
                                                                Khóa Học</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="{{ route('products.category', 'combo-tiet-kiem-4208') }}"
                                                            class="link-title">
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- menu end -->
                                    <div class="img-hotline">
                                        <div class="image-line">
                                            <a href="javascript:void(0)"><img
                                                    src="{{ asset('assets/Client/image/icon_contact.png') }}"
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
                                                <a href="{{ route('products.category', 'combo-tiet-kiem-4208') }}"
                                                    class="link-title link-title-lg">
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- menu end -->
                            <div class="img-hotline">
                                <div class="image-line">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('assets/Client/image/icon_contact.png') }}"
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
    <!-- map area start -->
    <section class="contact section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="map-area">
                        <div class="map-title">
                            <h1><img src="{{ asset('assets/Client/image/icons8-purchase-order.gif') }}"
                                    alt="">
                                Thanh Toán Đơn Hàng
                                <img src="{{ asset('assets/Client/image/icons8-purchase-order.gif') }}"
                                    alt="">
                            </h1>
                        </div>
                        <div class="map-details section-t-padding">
                            <div class="contact-info">
                                <div class="contact-details">
                                    <h4>Thông Tin Của Bạn</h4>
                                    <form>
                                        <label>Tên Của Bạn</label>
                                        <input type="text" name="name" disabled
                                            value="{{ session('user_info.name') }}" placeholder="Enter your name">

                                        <label>Địa Chỉ Gmail</label>
                                        <input type="text" name="Email" disabled
                                            value="{{ session('user_info.email') }}">
                                        <small style="color: red">Gmail nhận khóa học sau khi thanh toán</small>
                                        <label>SDT</label>
                                        <input type="text" name="Email" disabled
                                            value="{{ session('user_info.phone') }}">
                                    </form>
                                    {{-- <a href="index1.html" class="btn-style1">Submit <i class="ti-arrow-right"></i></a> --}}
                                </div>
                                <br>
                                <hr>
                                <div class="contact-details">
                                    <h4>Thông Tin Sản Phẩm</h4>
                                    <form>

                                        @if (session('cart.image')==null)
                                        <img width="150px" height="150px"
                                        src="https://img.icons8.com/?size=100&id=77141&format=png&color=000000" alt="">
                                        @else
                                        <img style="border: 2px rgb(0, 241, 241) solid" width="150px" height="150px"
                                        src="{{ asset(session('cart.image')) }}" alt="">
                                        @endif
                                        <hr>
                                        <label>
                                            <img src="{{ asset('assets/Client/image/icons8-sun.gif') }}"
                                                width="30px" height="30px" alt="">
                                            Tên Khóa Học: <span
                                                style="color: red">{{ session('cart.name') }}</span></label>
                                        <hr>
                                        @if (session('cart.price_sale') == 0)
                                            <label>
                                                <img src="{{ asset('assets/Client/image/icons8-sun.gif') }}"
                                                    width="30px" height="30px" alt="">
                                                Giá Gốc: <span style="color: red">

                                                    {{ number_format(session('cart.price'), 0, '.', ',') }}đ</span></label>

                                            <hr>
                                            <label><img src="{{ asset('assets/Client/image/icons8-sun.gif') }}"
                                                    width="30px" height="30px" alt="">
                                                Giá Đã Giảm: <span>
                                                    {{ number_format(session('cart.pricez_sale'), 0, '.', ',') }}đ</span></label>
                                        @else
                                            <label><img src="{{ asset('assets/Client/image/icons8-sun.gif') }}"
                                                    width="30px" height="30px" alt="">
                                                Giá Gốc: <span><del>
                                                        {{ number_format(session('cart.price'), 0, '.', ',') }}đ
                                                    </del></span></label>
                                            <hr>
                                            <label><img src="{{ asset('assets/Client/image/icons8-sun.gif') }}"
                                                    width="30px" height="30px" alt="">
                                                Giá Đã Giảm: <span style="color: red">
                                                    {{ number_format(session('cart.price_sale'), 0, '.', ',') }}đ
                                                </span></label>
                                        @endif
                                        <hr>
                                        @if (session('cart.price_sale') == 0)
                                            <label><img src="{{ asset('assets/Client/image/icons8-sun.gif') }}"
                                                    width="30px" height="30px" alt="">
                                                Tổng Thanh Toán: <span style="color: red">
                                                    {{ number_format(session('cart.price'), 0, '.', ',') }}đ
                                                </span></label>
                                        @else
                                            <label><img src="{{ asset('assets/Client/image/icons8-sun.gif') }}"
                                                    width="30px" height="30px" alt="">
                                                Tổng Thanh Toán: <span style="color: red">
                                                    {{ number_format(session('cart.price_sale'), 0, '.', ',') }}đ
                                                </span></label>
                                        @endif

                                    </form>
                                    {{-- <a href="index1.html" class="btn-style1">Submit <i class="ti-arrow-right"></i></a> --}}
                                </div>
                            </div>
                            <hr>
                            <div class="contact-info">
                                <div class="information">
                                    <h4>Thông Tin Thanh Toán</h4>
                                    {{-- <p class="info-description">Quét Mã Qr</p> --}}
                                    <div class="contact-in">
                                        <ul class="info-details">
                                            <li><i class="fa fa-qrcode"></i></li>
                                            <li>
                                                <h4>Quét Mã Qrcode ( Hoặc Chuyển Khoản Phía Dưới )</h4>
                                                <br>
                                                <img width="150px" height="150px"
                                                    src="https://qr.sepay.vn/img?acc={{ session('transaction.accountNumber') }}&bank=ACB&amount={{ session('transaction.transferAmount') }}&des={{ session('transaction.content') }}"
                                                    alt="">
                                            </li>
                                        </ul>
                                        <br>
                                        <hr>
                                        <ul class="info-details">
                                            <li><i class="fa-solid fa-building-columns"></i></li>
                                            <li>
                                                <h4>Chuyển Khoản Nội Dung</h4>
                                                {{-- <a href="tel:12345678999">+ 0123 4567 8999</a> --}}
                                            </li>
                                        </ul>
                                        <ul class="info-details">
                                            <li>
                                                <h4><img width="30px" height="30px"
                                                        src="{{ asset('assets/client/image/icons8-coin.gif') }}"
                                                        alt="">
                                                    Tên Ngân Hàng: <span style="color: red">ACB</span></h4>
                                                {{-- <a href="mailto:yoursite@demo.com">yoursite@demo.com</a> --}}
                                            </li>
                                        </ul>
                                        <ul class="info-details">
                                            <input type="hidden" name="transactionID" value="{{session('transaction.transactionID')}}">
                                            <li>
                                                <h4>
                                                    <img width="30px" height="30px"
                                                        src="{{ asset('assets/client/image/icons8-coin.gif') }}"
                                                        alt="">
                                                    Số Tài Khoản:
                                                    <span
                                                        style="color: red; position: relative; display: inline-block;">
                                                        {{ session('transaction.accountNumber') }}
                                                        <i class="fas fa-copy copy-icon"
                                                            data-clipboard-text="{{ session('transaction.accountNumber') }}"
                                                            style="cursor: pointer; margin-left: 5px; font-size: 14px; color: #666;"></i>
                                                    </span>
                                                </h4>
                                            </li>
                                        </ul>
                                        <ul class="info-details">
                                            <li>
                                                <h4>
                                                    <img width="30px" height="30px"
                                                        src="{{ asset('assets/client/image/icons8-coin.gif') }}"
                                                        alt="">
                                                    Số Tiền Chuyển Khoản:
                                                    <span
                                                        style="color: red; position: relative; display: inline-block;">
                                                        {{ number_format(session('transaction.transferAmount'), 0, '.', ',') }}đ
                                                        <i class="fas fa-copy copy-icon"
                                                            data-clipboard-text="{{ number_format(session('transaction.transferAmount'), 0, '.', ',') }}đ"
                                                            style="cursor: pointer; margin-left: 5px; font-size: 14px; color: #666;"></i>
                                                    </span>
                                                </h4>
                                            </li>
                                        </ul>
                                        <ul class="info-details">
                                            <li>
                                                <h4>
                                                    <img width="30px" height="30px"
                                                        src="{{ asset('assets/client/image/icons8-coin.gif') }}"
                                                        alt="">
                                                    Nội Dung Chuyển Khoản:
                                                    <span
                                                        style="color: red; position: relative; display: inline-block;">
                                                        {{ session('transaction.content') }}
                                                        <i class="fas fa-copy copy-icon"
                                                            data-clipboard-text="{{ session('transaction.content') }}"
                                                            style="cursor: pointer; margin-left: 5px; font-size: 14px; color: #666;"></i>
                                                    </span>
                                                </h4>
                                            </li>
                                        </ul>
                                        <br>
                                        <ul class="info-details">
                                            {{-- <li><i class="fa fa-envelope"></i></li> --}}
                                            <li>
                                                <h4>Lưu ý: <span style="color: rgb(14, 46, 230)">Vui Lòng Chuyển Khoản
                                                        Đúng
                                                        Nội Dung Và Số Tiền Tránh Delay</span></h4>
                                                {{-- <a href="mailto:yoursite@demo.com">yoursite@demo.com</a> --}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('client/layouts/footer')

    <a href="javascript:void(0)" class="scroll" id="top">
        <span><i class="fa fa-angle-double-up"></i></span>
    </a>
    <!-- back to top end -->
    <div class="mm-fullscreen-bg"></div>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new ClipboardJS('.copy-icon');

            document.querySelectorAll('.copy-icon').forEach(icon => {
                icon.addEventListener('click', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Đã sao chép!',
                        text: 'Đã sao chép: ' + this.getAttribute('data-clipboard-text'),
                        timer: 1500,
                        showConfirmButton: false
                    });
                });
            });
        });
    </script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script>
    function checkTransactionStatus(transactionID) {
        if (!transactionID) {
            console.error('Transaction ID không hợp lệ:', transactionID);
            return;
        }
        $.ajax({
            url: '/check-transaction-status',
            type: 'GET',
            data: { transactionID: transactionID },
            success: function(response) {
                if (response.status === 'success') {
                    window.location.href = '/payment/success?transactionId=' + transactionID;
                    clearInterval(checkInterval);
                } else if (response.status === 'failed') {
                    alert('Giao dịch thất bại. Vui lòng thử lại.');
                    window.location.href = '/payment/failed';
                    clearInterval(checkInterval);
                }
            },
            error: function(xhr, status, error) {
                if (xhr.status === 404) {
                    console.log('Giao dịch không tồn tại:', transactionID);
                } else {
                    console.log('Lỗi khi kiểm tra trạng thái giao dịch:', error);
                }
            }
        });
    }

    var transactionID = @json(session('transaction.transactionID'));

    if (transactionID) {
        var checkInterval = setInterval(function() {
            checkTransactionStatus(transactionID);
        }, 10000);
    } else {
        console.error('Không tìm thấy Transaction ID trong session');
    }
</script>


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
