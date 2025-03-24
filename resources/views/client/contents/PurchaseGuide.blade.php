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
    <title>Hướng Dẫn Mua Hàng</title>   

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
           <style> #button-contact-vr { position: fixed; bottom: 0; z-index: 99999; } /*phone*/ #button-contact-vr .button-contact { position: relative; } #button-contact-vr .button-contact .phone-vr { position: relative; visibility: visible; background-color: transparent; width: 90px; height: 90px; cursor: pointer; z-index: 11; -webkit-backface-visibility: hidden; -webkit-transform: translateZ(0); transition: visibility .5s; left: 0; bottom: 0; display: block; } .phone-vr-circle-fill { width: 65px; height: 65px; top: 12px; left: 12px; position: absolute; box-shadow: 0 0 0 0 #c31d1d; background-color: rgba(230, 8, 8, 0.7); border-radius: 50%; border: 2px solid transparent; -webkit-animation: phone-vr-circle-fill 2.3s infinite ease-in-out; animation: phone-vr-circle-fill 2.3s infinite ease-in-out; transition: all .5s; -webkit-transform-origin: 50% 50%; -ms-transform-origin: 50% 50%; transform-origin: 50% 50%; -webkit-animuiion: zoom 1.3s infinite; animation: zoom 1.3s infinite; } .phone-vr-img-circle { background-color: #e60808; width: 40px; height: 40px;line-height: 40px; top: 25px; left: 25px; position: absolute; border-radius: 50%; display: flex; justify-content: center; -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out; animation: phone-vr-circle-fill 1s infinite ease-in-out; } .phone-vr-img-circle a { display: block; line-height: 37px; } .phone-vr-img-circle img { max-width: 40px; } @-webkit-keyframes phone-vr-circle-fill { 0% {-webkit-transform: rotate(0) scale(1) skew(1deg); } 10% {-webkit-transform: rotate(-25deg) scale(1) skew(1deg);} 20% {-webkit-transform: rotate(25deg) scale(1) skew(1deg);} 30% {-webkit-transform: rotate(-25deg) scale(1) skew(1deg);} 40% {-webkit-transform: rotate(25deg) scale(1) skew(1deg);} 50% {-webkit-transform: rotate(0) scale(1) skew(1deg);} 100% {-webkit-transform: rotate(0) scale(1) skew(1deg);} } @-webkit-keyframes zoom{0%{transform:scale(.9)}70%{transform:scale(1);box-shadow:0 0 0 15px transparent}100%{transform:scale(.9);box-shadow:0 0 0 0 transparent}}@keyframes zoom{0%{transform:scale(.9)}70%{transform:scale(1);box-shadow:0 0 0 15px transparent}100%{transform:scale(.9);box-shadow:0 0 0 0 transparent}} .phone-bar a { position: fixed; bottom: 25px; left: 30px; z-index: -1; background: rgb(232, 58, 58); color: #fff; font-size: 16px; padding: 8px 15px 7px 50px; border-radius: 100px;white-space: nowrap; } .phone-bar a:hover { opacity: 0.8;color: #fff; } @media(max-width: 736px){ .phone-bar{display: none;} } #zalo-vr .phone-vr-circle-fill { box-shadow: 0 0 0 0 #2196F3; background-color: rgba(33, 150, 243, 0.7); } #zalo-vr .phone-vr-img-circle { background-color: #2196F3; } #viber-vr .phone-vr-circle-fill { box-shadow: 0 0 0 0 #714497; background-color: rgba(113, 68, 151, 0.8); } #viber-vr .phone-vr-img-circle { background-color: #714497; } #contact-vr .phone-vr-circle-fill { box-shadow: 0 0 0 0 #2196F3; background-color: rgba(33, 150, 243, 0.7); } #contact-vr .phone-vr-img-circle { background-color: #2196F3; } #button-contact-vr { position: fixed; bottom: 0; z-index: 99999; } #button-contact-vr .button-contact { position: relative; } #button-contact-vr .button-contact .phone-vr { position: relative; visibility: visible; background-color: transparent; width: 90px; height: 90px; cursor: pointer; z-index: 11; -webkit-backface-visibility: hidden; -webkit-transform: translateZ(0); transition: visibility .5s; left: 0; bottom: 0; display: block; } #zalo-vr .phone-vr-circle-fill { box-shadow: 0 0 0 0 #2196F3; background-color: rgba(33, 150, 243, 0.7); } .phone-vr-circle-fill { width: 65px; height: 65px; top: 12px; left: 12px; position: absolute; box-shadow: 0 0 0 0 #c31d1d; background-color: rgba(230, 8, 8, 0.7); border-radius: 50%; border: 2px solid transparent; -webkit-animation: phone-vr-circle-fill 2.3s infinite ease-in-out; animation: phone-vr-circle-fill 2.3s infinite ease-in-out; transition: all .5s; -webkit-transform-origin: 50% 50%; -ms-transform-origin: 50% 50%; transform-origin: 50% 50%; -webkit-animuiion: zoom 1.3s infinite; animation: zoom 1.3s infinite; } #zalo-vr .phone-vr-img-circle { background-color: #2196F3; } .phone-vr-img-circle a { display: block; line-height: 37px; } .phone-vr-img-circle img { max-width: 40px; } #phone-vr .phone-vr-circle-fill { opacity: 0.7; box-shadow: 0 0 0 0 #919191; } .phone-bar a, #phone-vr .phone-vr-circle-fill, #phone-vr .phone-vr-img-circle, #phone-vr .phone-bar a { background-color: #2a90d8; } .phone-vr-img-circle { background-color: #fe0000; width: 40px; height: 40px; line-height: 40px; top: 25px; left: 25px; position: absolute; border-radius: 50%; display: flex; justify-content: center; -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out; animation: phone-vr-circle-fill 1s infinite ease-in-out; } 
#messenger-vr .phone-vr-circle-fill{
    box-shadow: 0 0 0 0 #0084ff;
    background-color: #0084ff;
}
#messenger-vr .phone-vr-img-circle {
    background-color: white;
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
    <!-- mobile menu end -->
<section class="faqs-area section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="faq-title">
                    <h1>
                        <img src="{{asset('assets/Client/image/icons8-fire.gif')}}" alt="">
                        Hướng Dẫn Mua Hàng
                        <img src="{{asset('assets/Client/image/icons8-fire.gif')}}" alt=""> 
                    </h1>
                    <p> Làm theo thứ tự các bước dưới đây để mua khóa học</p>
                </div>
                <div class="faq-box">
                    <ul class="faq-ul">
                        <li class="faq-li">
                            <h3><span>1.</span>Chọn khóa học mà bạn quan tâm.</h3>
                            <span class="faq-desc">Xem danh sách các khóa học có sẵn trên website và chọn khóa học mà bạn quan tâm.</span>
                        </li>
                        <li class="faq-li">
                            <h3><span>2.</span>Xem chi tiết khóa học.</h3>
                            <span class="faq-desc">Bấm vào khóa học để xem chi tiết mô tả khóa học của bạn.</span>
                        </li>
                        <li class="faq-li">
                            <h3><span>3.</span>Bấm nút mua hàng ngay cạnh mô tả ngắn</h3>
                            <span class="faq-desc">Nhấp vào nút “Mua ngay” để thanh toán cho các khóa học của bạn.</span>
                        </li>
                    </ul>
                    <ul class="faq-ul">
                        <li class="faq-li">
                            <h3><span>4.</span>Điền thông tin cơ bản để nhận khóa học sau khi mua.</h3>
                            <span class="faq-desc">Điền thông tin các trường (họ tên, gmail nhận khóa học, số điện thoại nhận hỗ trợ). Chọn hình thức thanh toán mong muốn và làm theo hướng dẫn trên màn hình để hoàn tất thanh toán.</span>
                        </li>
                        <li class="faq-li">
                            <h3><span>5.</span>Xác nhận mua hàng và thanh toán.</h3>
                            <span class="faq-desc">Sau khi thanh toán thành công, hệ thống tự động thêm bạn vào khóa học bạn đã đăng ký và gửi gmail xác nhận cho bạn trong khoảng thời gian từ 1 - 2 phút.</span>
                        </li>
                        <li class="faq-li">
                            <h3><span>6.</span>Kiểm tra email để nhận khóa học.</h3>
                            <span class="faq-desc">Khoá học sẽ gửi ngay vào email của bạn đã đăng ký, hãy kiểm tra hòm thư của bạn nhé.</span>
                        </li>
                    </ul>
                    <br>
                    <a href="#!" class="btn-style1">Mọi thắc mắc và câu hỏi xin liên hệ 
                        <img src="https://img.icons8.com/?size=100&id=0m71tmRjlxEe&format=png&color=000000" alt="" width="25px" height="25px">
                        <span style="color: red">Zalo</span> 0568327300 !</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq's collapse end -->  


@include("client/layouts/footer")

<a href="javascript:void(0)" class="scroll" id="top">
    <span><i class="fa fa-angle-double-up"></i></span>
</a> 
    <!-- back to top end -->
    <div class="mm-fullscreen-bg"></div>


    <div id="button-contact-vr"> 
        <div id="zalo-vr" class="button-contact"> 
        <div class="phone-vr"> 
            <div class="phone-vr-circle-fill"></div> 
            <div class="phone-vr-img-circle"> 
                <a target="_blank" href="https://www.facebook.com/hocngaygiare/"> 
                    <img src="https://img.icons8.com/?size=100&id=uLWV5A9vXIPu&format=png&color=000000"> 
                </a> 
            </div> 
        </div> 
    </div> 
        <div id="phone-vr" class="button-contact"> 
        <div class="phone-vr"> 
            <div class="phone-vr-circle-fill"></div> 
            <div class="phone-vr-img-circle"> 
                <a href="https://zalo.me/0568327300"> 
                    <img src="https://img.icons8.com/?size=100&id=0m71tmRjlxEe&format=png&color=000000"> 
                </a> 
            </div> 
        </div> 
    </div> 
</div>
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