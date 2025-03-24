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
    <title>Danh Mục Sản Phẩm</title> 
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

                            {{-- <div class="search-content">
                                <form action="{{ route('products.search') }}" method="GET" class="search-engine">
                                    <input type="text" name="search" placeholder="Nhập tên khóa học" value="{{ request('search') }}">
                                    <button type="submit" class="search-btn"><i class="ion-ios-search-strong"></i></button>
                                </form>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></button>
                            </div> --}}
                            <!-- mobile search start -->
                            <div class="r-search">
                                <a href="#r-search-modal" class="search-popuup" data-bs-toggle="modal"><i
                                        class="fa fa-search"></i></a>
                                <div class="modal fade" id="r-search-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="m-drop-search">
                                                    {{-- <input type="text" name="search"
                                                        placeholder="Nhập tên khóa học...">
                                                    <a href="#!" class="search-btn"><i
                                                            class="fa fa-search"></i></a> --}}
                                                            <form action="{{ route('products.search') }}" method="GET" class="search-engine">
                                                                <input type="text" name="search" placeholder="Nhập tên khóa học" value="{{ request('search') }}">
                                                                <button type="submit" class="search-btn"><i class="ion-ios-search-strong"></i></button>
                                                            </form>
                                                </div>
                                                <button type="button" class="close" data-bs-dismiss="modal"><i
                                                        class="ion-close-round"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <!-- top notificationbar end -->

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
{{-- <div class="search-content">
                                <form action="{{ route('products.search') }}" method="GET" class="search-engine">
                                    <input type="text" name="search" placeholder="Nhập tên khóa học" value="{{ request('search') }}">
                                    <button type="submit" class="search-btn"><i class="ion-ios-search-strong"></i></button>
                                </form>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></button>
                            </div> --}}
                            
                            <!-- search start -->
                            
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

    <section class="about-breadcrumb">
        <div class="about-back section-tb-padding" style="background-image: url({{asset('assets/Client/image/about-image.jpg')}})">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-l">
                            <ul class="about-link">
                                <li class="go-home"><a href="#!">Trang Chủ</a></li>
                                <li class="about-p"><span>Danh Mục</span></li>
                                @if (!empty($categoryProduct))
                                <li class="about-p"><span style="color: red">"{{$categoryProduct->name}}"</span></li> 
                                @else
                                <li class="about-p"><span style="color: red">"Tất Cả Khóa Học"</span></li> 
                                @endif  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="all-filter">
                        <div class="categories-page-filter">
                            <h4 class="filter-title">Danh Mục Khóa Học</h4>
                            <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Danh
                                    Mục
                                    Khóa
                                    Học
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-option collapse" id="category-filter" style="height: 500px">
                                @foreach ($categories as $category)
                                    <li class="grid-list-option">
                                        <img width="30px" height="30px"
                                            src="{{ asset('assets/client/image/icons8-plus.gif') }}"
                                            alt="">
                                        <a href="javascript:void(0)">{{ $category->name }}
                                            @if ($category->children->count() > 0)
                                                <i class="fa-solid fa-caret-down"></i>
                                            @endif
                                        </a>
                                    </li>
                                    @if ($category->children->count() > 0)
                                        @foreach ($category->children as $child)
                                            <li class="grid-list-option sub-category" style="padding-left: 20px;">
                                                <img width="30px" height="30px"
                                                    src="{{ asset('assets/client/image/icons8-forward-button.gif') }}"
                                                    alt="">
                                                <a href="{{route('products.category',$child->slug)}}">{{ $child->name }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="grid-list-banner"
                        style="background-image: url('https://i.postimg.cc/c1Q2LjY2/HOCNGAY-1.png');">
                        <div class="grid-banner-content"> 
                        </div> </div>
                    <div class="grid-list-area">
                        <div class="grid-list-select">
                            <ul class="grid-list">
                                {{-- <li class="colloction-icn"><a href="#!"><i
                                            class="ti-layout-list-thumb"></i></a>
                                </li> --}}
                                {{-- <li class="colloction-icn"><a href="#!"><i class="ti-layout-grid2"></i></a>
                                </li>
                                <li class="colloction-icn three-grid"><a href="#!" class="active"><i
                                            class="ti-layout-grid3"></i></a></li> --}}
                                            @if (!empty($categoryProduct))
                                <li class="colloction-icn">Danh Mục: <span style="color: red">"{{$categoryProduct->name}}"</span></a>
                                </li> 
                                @else
                                <li class="colloction-icn">Danh Mục: <span style="color: red">"Tất Cả Sản Phẩm"</span></a>
                                </li> 
                                @endif
                                    
                                
                            </ul>
                            {{-- <ul class="grid-list-selector">
                                <li>
                                    <label>Lọc Tìm Kiếm</label>
                                    <select>
                                        <option>Featured</option>
                                        <option>Best selling</option>
                                        <option>Alphabetically,A-Z</option>
                                        <option>Alphabetically,Z-A</option>
                                        <option>Price, low to high</option>
                                        <option>Price, high to low</option>
                                        <option>Date new to old</option>
                                        <option>Date old to new</option>
                                    </select>
                                </li>
                            </ul> --}}
                            {{-- <ul class="grid-list-selector">
                                <li>
                                    <label>Lọc Tìm Kiếm</label>
                                    <select name="sort" id="sort" onchange="this.form.submit()">
                                        <option value="default" {{ request('sort') == 'default' ? 'selected' : '' }}>Mặc định</option>
                                        <option value="date-old-new" {{ request('sort') == 'date-old-new' ? 'selected' : '' }}>Cũ nhất</option>
                                        <option value="date-new-old" {{ request('sort') == 'date-new-old' ? 'selected' : '' }}>Mới nhất</option>
                                        <option value="price-low-high" {{ request('sort') == 'price-low-high' ? 'selected' : '' }}>Giá: thấp đến cao</option>
                                        <option value="price-high-low" {{ request('sort') == 'price-high-low' ? 'selected' : '' }}>Giá: từ cao đến thấp</option>
                                        <option value="alpha-a-z" {{ request('sort') == 'alpha-a-z' ? 'selected' : '' }}>Tên: A-Z</option>
                                        <option value="alpha-z-a" {{ request('sort') == 'alpha-z-a' ? 'selected' : '' }}>Tên: Z-A</option>
                                    </select>
                                </li>
                            </ul> --}}
                            @if (!empty($categoryProduct))
                            <form method="GET" action="{{ route('products.category', $categoryProduct->slug) }}">
                                <ul class="grid-list-selector">
                                    <li>
                                        <label>Lọc Tìm Kiếm</label>
                                        <select name="sort" id="sort" onchange="this.form.submit()">
                                            <option value="default" {{ request('sort') == 'default' ? 'selected' : '' }}>Mặc định</option>
                                            <option value="date-old-new" {{ request('sort') == 'date-old-new' ? 'selected' : '' }}>Cũ nhất</option>
                                            <option value="date-new-old" {{ request('sort') == 'date-new-old' ? 'selected' : '' }}>Mới nhất</option>
                                            <option value="price-low-high" {{ request('sort') == 'price-low-high' ? 'selected' : '' }}>Giá: thấp đến cao</option>
                                            <option value="price-high-low" {{ request('sort') == 'price-high-low' ? 'selected' : '' }}>Giá: từ cao đến thấp</option>
                                            <option value="alpha-a-z" {{ request('sort') == 'alpha-a-z' ? 'selected' : '' }}>Tên: A-Z</option>
                                            <option value="alpha-z-a" {{ request('sort') == 'alpha-z-a' ? 'selected' : '' }}>Tên: Z-A</option>
                                        </select>
                                    </li>
                                </ul>
                            </form> 
                            @else
                            <form method="GET" action="{{ route('products.listProduct') }}">
                                <ul class="grid-list-selector">
                                    <li>
                                        <label>Lọc Tìm Kiếm</label>
                                        <select name="sort" id="sort" onchange="this.form.submit()">
                                            <option value="default" {{ request('sort') == 'default' ? 'selected' : '' }}>Mặc định</option>
                                            <option value="date-old-new" {{ request('sort') == 'date-old-new' ? 'selected' : '' }}>Cũ nhất</option>
                                            <option value="date-new-old" {{ request('sort') == 'date-new-old' ? 'selected' : '' }}>Mới nhất</option>
                                            <option value="price-low-high" {{ request('sort') == 'price-low-high' ? 'selected' : '' }}>Giá: thấp đến cao</option>
                                            <option value="price-high-low" {{ request('sort') == 'price-high-low' ? 'selected' : '' }}>Giá: từ cao đến thấp</option>
                                            <option value="alpha-a-z" {{ request('sort') == 'alpha-a-z' ? 'selected' : '' }}>Tên: A-Z</option>
                                            <option value="alpha-z-a" {{ request('sort') == 'alpha-z-a' ? 'selected' : '' }}>Tên: Z-A</option>
                                        </select>
                                    </li>
                                </ul>
                            </form> 
                            @endif
                        </div>
                        <div class="grid-pro">
                            <ul class="grid-product">
                                @foreach ($listProduct as $item)
                                    <li class="grid-items">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="{{ route('products.detailProduct', $item->slug) }}">
                                                    <img loading="lazy" class="img-fluid" src="{{ asset($item->image) }}"
                                                        alt="pro-img1">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                                @if ($item->price_sale > 0)
                                                    <span class="p-discount">-{{ $item->discount_percent }}%</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a
                                                    href="{{ route('products.detailProduct', $item->slug) }}"><b>{{ $item->name }}</b></a>
                                            </h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                @if ($item->price_sale == 0)
                                                    <span
                                                        class="new-price">{{ number_format($item->price, 0, '.', ',') }}đ</span>
                                                    <span class="old-price"><b>Đã Bán:
                                                            @formatNumber($item->buys)</b>&nbsp|&nbsp<i
                                                            class="fa-solid fa-eye"></i><b>
                                                            @formatNumber($item->view)</b></span>
                                                @elseif($item->price_sale > 0)
                                                    <span
                                                        class="new-price">{{ number_format($item->price_sale, 0, '.', ',') }}đ</span>
                                                    <span
                                                        class="old-price"><del>{{ number_format($item->price, 0, '.', ',') }}đ</del></span>
                                                    <span class="old-price"><b>Đã Bán:
                                                            @formatNumber($item->buys)</b>&nbsp|&nbsp<i
                                                            class="fa-solid fa-eye"></i><b>
                                                            @formatNumber($item->view)</b></span>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="list-all-page">
                        <span class="page-title">{{ $listProduct->links('pagination::bootstrap-4') }}</span> 
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
    <!-- jquery -->


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
    <script src="{{ asset('assets/Client/js/range-slider.js') }}"></script>
    <!-- custom -->
    <script src="{{ asset('assets/Client/js/custom.js') }}"></script>
</body>

<!-- Mirrored from spacingtech.com/html/vegist-final/vegist/grid-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:28:10 GMT -->

</html>




{{-- @extends('client.layouts.main')
@section('content') --}}
{{-- <div class="header-bottom-area mobile">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-menu-area active">
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
                                                <a href="index1.html" class="link-title">
                                                    <span class="sp-link-title">Home</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="#collapse-home1" data-bs-toggle="collapse"
                                                    class="link-title link-title-lg">
                                                    <span class="sp-link-title">Home</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu sub-menu collapse" id="collapse-home1">
                                                    <li class="submenu-li">
                                                        <a href="../vegist/index1.html" class="submenu-link">Vegist home
                                                            01</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="../vegist-rtl/index1.html" class="submenu-link">Vegist home
                                                            01 (RTL)</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index1.html" class="submenu-link">Vegist home 01 (BOX)</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index2.html" class="submenu-link">Vegist home 02</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index3.html" class="submenu-link">Vegist home 03</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index4.html" class="submenu-link">Vegist home 04</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index5.html" class="submenu-link">Vegist home 05</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index6.html" class="submenu-link">Vegist home 06</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index7.html" class="submenu-link">Vegist home 07</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index8.html" class="submenu-link">Vegist home 08</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index9.html" class="submenu-link">Vegist home 09</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index10.html" class="submenu-link">Vegist home 10</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index11.html" class="submenu-link">Vegist home 11</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index12.html" class="submenu-link">Vegist home 12</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index13.html" class="submenu-link">Vegist home 13</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index14.html" class="submenu-link">Vegist home 14</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index15.html" class="submenu-link">Vegist home 15</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index16.html" class="submenu-link">Vegist home 16</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="index17.html" class="submenu-link">Vegist home 17</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Shop</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="#collapse-mega-menu1" data-bs-toggle="collapse"
                                                    class="link-title link-title-lg">
                                                    <span class="sp-link-title">Shop</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu mega-menu collapse" id="collapse-mega-menu1">
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Fresh food</h2>
                                                        <a href="#collapse-sub-mega-menu1" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Fresh food</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-sub-mega-menu1">
                                                            <li class="supmenu-li"><a href="product.html">Fruit &amp;
                                                                    nut</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Snack food</a>
                                                            </li>
                                                            <li class="supmenu-li"><a href="product.html">Organics nut
                                                                    gifts</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Non dairy</a>
                                                            </li>
                                                            <li class="supmenu-li"><a href="product.html">Mayonnaise</a>
                                                            </li>
                                                            <li class="supmenu-li"><a href="product.html">Milk almond</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Mixedfruits</h2>
                                                        <a href="#collapse-fruits-menu1" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Mixedfruits</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="collapse-fruits-menu1">
                                                            <li class="supmenu-li"><a href="product.html">Oranges</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Coffee
                                                                    creamers</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Ghee
                                                                    beverages</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Ranch salad</a>
                                                            </li>
                                                            <li class="supmenu-li"><a href="product.html">Hemp milk</a>
                                                            </li>
                                                            <li class="supmenu-li"><a href="product.html">Nuts &amp;
                                                                    seeds</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Bananas &amp; plantains</h2>
                                                        <a href="#collapse-banana-menu1" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Bananas &amp; plantains</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="collapse-banana-menu1">
                                                            <li class="supmenu-li"><a href="product.html">Fresh gala</a>
                                                            </li>
                                                            <li class="supmenu-li"><a href="product.html">Fresh
                                                                    berries</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Fruit &amp;
                                                                    nut</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Fifts mixed
                                                                    fruits</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Oranges</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Oranges</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Apples berries</h2>
                                                        <a href="#collapse-apple-menu1" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Apples berries</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="collapse-apple-menu1">
                                                            <li class="supmenu-li"><a href="product.html">Pears
                                                                    produce</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Bananas</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Natural
                                                                    grassbeab</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Fresh green
                                                                    orange</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Fresh organic
                                                                    reachter</a></li>
                                                            <li class="supmenu-li"><a href="product.html">Balckberry
                                                                    100%organic</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="grid-list.html" class="link-title">
                                                    <span class="sp-link-title">Collection</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="#collapse-banner-menu1" data-bs-toggle="collapse"
                                                    class="link-title link-title-lg">
                                                    <span class="sp-link-title">Collection</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu banner-menu collapse"
                                                    id="collapse-banner-menu1">
                                                    <li class="menu-banner">
                                                        <a href="grid-list.html" class="menu-banner-img"><img
                                                                src="image/menu-banner01.jpg" alt="menu-image"
                                                                class="img-fluid"></a>
                                                        <a href="grid-list.html"
                                                            class="menu-banner-title"><span>Bestseller</span></a>
                                                    </li>
                                                    <li class="menu-banner">
                                                        <a href="grid-list.html" class="menu-banner-img"><img
                                                                src="image/menu-banner02.jpg" alt="menu-image"
                                                                class="img-fluid"></a>
                                                        <a href="grid-list.html" class="menu-banner-title"><span>Special
                                                                product</span></a>
                                                    </li>
                                                    <li class="menu-banner">
                                                        <a href="grid-list.html" class="menu-banner-img"><img
                                                                src="image/menu-banner03.jpg" alt="mneu image"
                                                                class="img-fluid"></a>
                                                        <a href="grid-list.html" class="menu-banner-title"><span>Featured
                                                                product</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Pages</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="#collapse-page-menu1" data-bs-toggle="collapse"
                                                    class="link-title link-title-lg">
                                                    <span class="sp-link-title">Pages</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu1">
                                                    <li class="submenu-li">
                                                        <a href="about-us.html" class="submenu-link">About us</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="g-l-link"><span>Account</span>
                                                            <i class="fa fa-angle-right"></i></a>
                                                        <a href="#account-menu1" data-bs-toggle="collapse"
                                                            class="sub-link"><span>Account</span> <i
                                                                class="fa fa-angle-down"></i></a>
                                                        <ul class="collapse blog-style-1" id="account-menu1">
                                                            <li>
                                                                <a href="order-history.html"
                                                                    class="sub-style"><span>Order</span></a>
                                                                <a href="order-history.html"
                                                                    class="blog-sub-style"><span>Order</span></a>
                                                                <a href="profile.html"
                                                                    class="sub-style"><span>Profile</span></a>
                                                                <a href="profile.html"
                                                                    class="blog-sub-style"><span>Profile</span></a>
                                                                <a href="pro-addresses.html"
                                                                    class="sub-style"><span>Address</span></a>
                                                                <a href="pro-addresses.html"
                                                                    class="blog-sub-style"><span>Address</span></a>
                                                                <a href="pro-wishlist.html"
                                                                    class="sub-style"><span>Wishlist</span></a>
                                                                <a href="pro-wishlist.html"
                                                                    class="blog-sub-style"><span>Wishlist</span></a>
                                                                <a href="pro-tickets.html" class="sub-style"><span>My
                                                                        tickets</span></a>
                                                                <a href="pro-tickets.html" class="blog-sub-style"><span>My
                                                                        tickets</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="billing-info.html" class="submenu-link">Billing info</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="cancellation.html" class="submenu-link">Cancellation</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="cart.html" class="submenu-link">Cart page</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="coming-soon.html" class="submenu-link">Coming soon</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="faq's.html" class="submenu-link">Faq's</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="forgot-password.html" class="submenu-link">Forgot
                                                            passowrd</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="order-complete.html" class="submenu-link">Order
                                                            complete</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="tracking.html" class="submenu-link">Track page</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="contact.html" class="submenu-link">Contact us</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="payment-policy.html" class="submenu-link">Payment
                                                            policy</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="privacy-policy.html" class="submenu-link">privacy
                                                            policy</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="return-policy.html" class="submenu-link">Return
                                                            policy</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="terms-conditions.html" class="submenu-link">Terms &amp;
                                                            conditions</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="wishlist.html" class="submenu-link">Wishlist</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="sitemap.html" class="submenu-link">Sitemap</a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="fnf-page.html" class="submenu-link">4 not 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Blogs</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="#blog-style1" data-bs-toggle="collapse"
                                                    class="link-title link-title-lg">
                                                    <span class="sp-link-title">Blogs</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu sub-menu collapse" id="blog-style1">
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="g-l-link"><span>Blog
                                                                grid</span> <i class="fa fa-angle-right"></i></a>
                                                        <a href="#blog-style031" data-bs-toggle="collapse"
                                                            class="sub-link"><span>Blog grid</span> <i
                                                                class="fa fa-angle-down"></i></a>
                                                        <ul class="collapse blog-style-1" id="blog-style031">
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 1</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#grid-1" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 1</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="grid-1">
                                                                    <li><a href="blog-style-1-3-grid.html">Blog 3 grid</a>
                                                                    </li>
                                                                    <li><a href="blog-style-1-left-3-grid.html">Left blog 3
                                                                            grid</a></li>
                                                                    <li><a href="blog-style-1-right-3-grid.html">Right blog
                                                                            3 grid</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 2</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#grid-2" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 2</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="grid-2">
                                                                    <li><a href="blog-style-2-3-grid.html">Blog 3 grid</a>
                                                                    </li>
                                                                    <li><a href="blog-style-2-left-3-grid.html">Left blog 3
                                                                            grid</a></li>
                                                                    <li><a href="blog-style-2-right-3-grid.html">Right blog
                                                                            3 grid</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 3</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#grid-3" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 3</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="grid-3">
                                                                    <li><a href="blog-style-3-grid.html">Blog 3 grid</a>
                                                                    </li>
                                                                    <li><a href="blog-style-3-left-grid-blog.html">Left
                                                                            blog 3 grid</a></li>
                                                                    <li><a href="blog-style-3-right-grid-blog.html">Right
                                                                            blog 3 grid</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 4</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#grid-4" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 4</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="grid-4">
                                                                    <li><a href="blog-style-5-3-grid.html">Blog 3 grid</a>
                                                                    </li>
                                                                    <li><a href="blog-style-5-left-3-grid.html">Left blog 3
                                                                            grid</a></li>
                                                                    <li><a href="blog-style-5-right-3-grid.html">Right blog
                                                                            3 grid</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 5</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#grid-5" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 5</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="grid-5">
                                                                    <li><a href="blog-style-6-3-grid.html">Blog 3 grid</a>
                                                                    </li>
                                                                    <li><a href="blog-style-6-left-3-grid.html">Left blog 3
                                                                            grid</a></li>
                                                                    <li><a href="blog-style-6-right-3-grid.html">Right blog
                                                                            3 grid</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 6</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#grid-6" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 6</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="grid-6">
                                                                    <li><a href="blog-style-7-3-grid.html">Blog 3 grid</a>
                                                                    </li>
                                                                    <li><a href="blog-style-7-left-grid-blog.html">Left
                                                                            blog 3 grid</a></li>
                                                                    <li><a href="blog-style-7-right-grid-blog.html">Right
                                                                            blog 3 grid</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="g-l-link"><span>Blog
                                                                list</span> <i class="fa fa-angle-right"></i></a>
                                                        <a href="#blog-style-01" data-bs-toggle="collapse"
                                                            class="sub-link"><span>Blog list</span> <i
                                                                class="fa fa-angle-down"></i></a>
                                                        <ul class="collapse blog-style-1" id="blog-style-01">
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 1</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#list-1a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 1</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list-1a">
                                                                    <li><a href="blog-style-1-list.html">Blog list</a></li>
                                                                    <li><a href="blog-style-1-left-list.html">Left blog
                                                                            list</a></li>
                                                                    <li><a href="blog-style-1-right-list.html">Right blog
                                                                            list</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 2</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#list-22a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 2</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list-22a">
                                                                    <li><a href="blog-style-2-list.html">Blog list</a></li>
                                                                    <li><a href="blog-style-2-left-list.html">Left blog
                                                                            list</a></li>
                                                                    <li><a href="blog-style-2-right-list.html">Right blog
                                                                            list</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 3</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#list-33a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 3</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list-33a">
                                                                    <li><a href="blog-style-3-list.html">Blog list</a></li>
                                                                    <li><a href="blog-style-3-left-list-blog.html">Left
                                                                            blog list</a></li>
                                                                    <li><a href="blog-style-3-right-list-blog.html">Right
                                                                            blog list</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 4</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#list-44a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 4</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list-44a">
                                                                    <li><a href="blog-style-5-list-blog.html">Blog list</a>
                                                                    </li>
                                                                    <li><a href="blog-style-5-left-list.html">Left blog
                                                                            list</a></li>
                                                                    <li><a href="blog-style-5-right-list.html">Right blog
                                                                            list</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 5</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#list-55a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 5</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list-55a">
                                                                    <li><a href="blog-style-6-list-blog.html">Blog list</a>
                                                                    </li>
                                                                    <li><a href="blog-style-6-left-list-blog.html">Left
                                                                            blog list</a></li>
                                                                    <li><a href="blog-style-6-right-list-blog.html">Right
                                                                            blog list</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        style 6</span><i class="fa fa-angle-right"></i></a>
                                                                <a href="#list-66a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog style 6</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list-66a">
                                                                    <li><a href="blog-style-7-list-blog.html">Blog list</a>
                                                                    </li><!--list-->
                                                                    <li><a href="blog-style-7-left-list-blog.html">Left
                                                                            blog list</a></li><!--list-->
                                                                    <li><a href="blog-style-7-right-list-blog.html">Right
                                                                            blog list</a></li><!--list-->
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="g-l-link"><span>Blog
                                                                details</span> <i class="fa fa-angle-right"></i></a>
                                                        <a href="#blog-style-02" data-bs-toggle="collapse"
                                                            class="sub-link"><span>Blog Details</span> <i
                                                                class="fa fa-angle-down"></i></a>
                                                        <ul class="collapse blog-style-1 ex-width" id="blog-style-02">
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        details style 1</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <a href="#list-11a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog details style
                                                                        1</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list-11a">
                                                                    <li><a href="blog-style-1-details.html">Blog
                                                                            details</a></li>
                                                                    <li><a href="blog-style-1-left-details.html">Left blog
                                                                            details</a></li>
                                                                    <li><a href="blog-style-1-right-details.html">Right
                                                                            blog details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        details style 2</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <a href="#list2a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog details style
                                                                        2</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list2a">
                                                                    <li><a href="blog-style-2-details.html">Blog
                                                                            details</a></li>
                                                                    <li><a href="blog-style-2-left-details.html">Left blog
                                                                            details</a></li>
                                                                    <li><a href="blog-style-2-right-details.html">Right
                                                                            blog details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        details style 3</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <a href="#list3a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog details style
                                                                        3</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list3a">
                                                                    <li><a href="blog-style-3-details.html">Blog
                                                                            details</a></li>
                                                                    <li><a href="blog-style-3-left-blog-details.html">Left
                                                                            blog details</a></li>
                                                                    <li><a href="blog-style-3-right-blog-details.html">Right
                                                                            blog details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        details style 4</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <a href="#list4a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog details style
                                                                        4</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list4a">
                                                                    <li><a href="blog-style-5-details.html">Blog
                                                                            details</a></li>
                                                                    <li><a href="blog-style-5-left-details.html">Left blog
                                                                            details</a></li>
                                                                    <li><a href="blog-style-5-right-details.html">Right
                                                                            blog details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        details style 5</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <a href="#list5a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog details style
                                                                        5</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list5a">
                                                                    <li><a href="blog-style-6-details.html">Blog
                                                                            details</a></li>
                                                                    <li><a href="blog-style-6-left-details-blog.html">Left
                                                                            blog details</a></li>
                                                                    <li><a href="blog-style-6-right-details-blog.html">Right
                                                                            blog details</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="sub-style"><span>Blog
                                                                        details style 6</span><i
                                                                        class="fa fa-angle-right"></i></a>
                                                                <a href="#list6a" data-bs-toggle="collapse"
                                                                    class="blog-sub-style"><span>Blog details style
                                                                        6</span><i class="fa fa-angle-right"></i></a>
                                                                <ul class="grid-style collapse" id="list6a">
                                                                    <li><a href="blog-style-7-details.html">Blog
                                                                            details</a></li>
                                                                    <li><a href="blog-style-7-left-details.html">Left blog
                                                                            details</a></li>
                                                                    <li><a href="blog-style-7-right-details.html">Right
                                                                            blog details</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="g-l-link"><span>Center
                                                                blog</span> <i class="fa fa-angle-right"></i></a>
                                                        <a href="#center-blog-1" data-bs-toggle="collapse"
                                                            class="sub-link"><span>Center blog</span> <i
                                                                class="fa fa-angle-down"></i></a>
                                                        <ul class="collapse blog-style-1" id="center-blog-1">
                                                            <li>
                                                                <a href="blog-style-1-center-blog.html"
                                                                    class="sub-style"><span>Blog style 1</span></a>
                                                                <a href="blog-style-1-center-blog.html"
                                                                    class="blog-sub-style"><span>Blog style 1</span></a>
                                                                <a href="blog-style-2-center-blog.html"
                                                                    class="sub-style"><span>Blog style 2</span></a>
                                                                <a href="blog-style-2-center-blog.html"
                                                                    class="blog-sub-style"><span>Blog style 2</span></a>
                                                                <a href="blog-style-3-center-blog.html"
                                                                    class="sub-style"><span>Blog style 3</span></a>
                                                                <a href="blog-style-3-center-blog.html"
                                                                    class="blog-sub-style"><span>Blog style 3</span></a>
                                                                <a href="blog-style-5-center-blog.html"
                                                                    class="sub-style"><span>Blog style 4</span></a>
                                                                <a href="blog-style-5-center-blog.html"
                                                                    class="blog-sub-style"><span>Blog style 4</span></a>
                                                                <a href="blog-style-6-center-blog.html"
                                                                    class="sub-style"><span>Blog style 5</span></a>
                                                                <a href="blog-style-6-center-blog.html"
                                                                    class="blog-sub-style"><span>Blog style 5</span></a>
                                                                <a href="blog-style-7-center-blog.html"
                                                                    class="sub-style"><span>Blog style 6</span></a>
                                                                <a href="blog-style-7-center-blog.html"
                                                                    class="blog-sub-style"><span>Blog style 6</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Feature</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <a href="#feature-1" data-bs-toggle="collapse"
                                                    class="link-title link-title-lg">
                                                    <span class="sp-link-title">Feature</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu mega-menu collapse" id="feature-1">
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Header style</h2>
                                                        <a href="#feature-01" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Header style</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature-01">
                                                            <li class="supmenu-li"><a href="header-style-1.html">Header
                                                                    style 1</a></li>
                                                            <li class="supmenu-li"><a href="header-style-2.html">Header
                                                                    style 2</a></li>
                                                            <li class="supmenu-li"><a href="header-style-3.html">Header
                                                                    style 3</a></li>
                                                            <li class="supmenu-li"><a href="header-style-4.html">Header
                                                                    style 4</a></li>
                                                            <li class="supmenu-li"><a href="header-style-5.html">Header
                                                                    style 5</a></li>
                                                            <li class="supmenu-li"><a href="header-style-6.html">Header
                                                                    style 6</a></li>
                                                            <li class="supmenu-li"><a href="header-style-7.html">Header
                                                                    style 7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Footer style</h2>
                                                        <a href="#feature-02" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Footer style</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature-02">
                                                            <li class="supmenu-li"><a href="footer-style-1.html">Footer
                                                                    style 1</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-2.html">Footer
                                                                    style 2</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-3.html">Footer
                                                                    style 3</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-4.html">Footer
                                                                    style 4</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-5.html">Footer
                                                                    style 5</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-6.html">Footer
                                                                    style 6</a></li>
                                                            <li class="supmenu-li"><a href="footer-style-7.html">Footer
                                                                    style 7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Product details</h2>
                                                        <a href="#feature-03" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Product details</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature-03">
                                                            <li class="supmenu-li"><a href="product.html">Product details
                                                                    style 1</a></li>
                                                            <li class="supmenu-li"><a href="product-style-2.html">Product
                                                                    details style 2</a></li>
                                                            <li class="supmenu-li"><a href="product-style-3.html">Product
                                                                    details style 3</a></li>
                                                            <li class="supmenu-li"><a href="product-style-4.html">Product
                                                                    details style 4</a></li>
                                                            <li class="supmenu-li"><a href="product-style-5.html">Product
                                                                    details style 5</a></li>
                                                            <li class="supmenu-li"><a href="product-style-6.html">Product
                                                                    details style 6</a></li>
                                                            <li class="supmenu-li"><a href="product-style-7.html">Product
                                                                    details style 7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Other style</h2>
                                                        <a href="#feature-04" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Other style</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse" id="feature-04">
                                                            <li class="supmenu-li"><a href="checkout-1.html">Checkout
                                                                    style 1</a></li>
                                                            <li class="supmenu-li"><a href="checkout-2.html">Checkout
                                                                    style 2</a></li>
                                                            <li class="supmenu-li"><a href="checkout-3.html">Checkout
                                                                    style 3</a></li>
                                                            <li class="supmenu-li"><a href="cart.html">Cart style 1</a>
                                                            </li>
                                                            <li class="supmenu-li"><a href="cart-2.html">Cart style 2</a>
                                                            </li>
                                                            <li class="supmenu-li"><a href="cart-3.html">Cart style 3</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Buy vegist <span
                                                            class="hot">Hot</span></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- menu end -->
                            <div class="img-hotline">
                                <div class="image-line">
                                    <a href="javascript:void(0)"><img src="image/icon_contact.png" class="img-fluid"
                                            alt="image-icon"></a>
                                </div>
                                <div class="image-content">
                                    <span class="hot-l">Hotline:</span>
                                    <span>0123 456 789</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
{{-- <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="all-filter">
                        <div class="categories-page-filter">
                            <h4 class="filter-title">Danh Mục Khóa Học</h4>
                            <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Danh Mục Khóa
                                    Học
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-option collapse" id="category-filter" style="height: 500px">
                                @foreach ($categories as $category)
                                    <li class="grid-list-option">
                                        <img width="30px" height="30px"
                                            src="{{ asset('assets/client/image/icons8-plus.gif') }}" alt="">
                                        <a href="javascript:void(0)">{{ $category->name }}
                                            @if ($category->children->count() > 0)
                                                <i class="fa-solid fa-caret-down"></i>
                                            @endif
                                        </a>
                                    </li>
                                    @if ($category->children->count() > 0)
                                        @foreach ($category->children as $child)
                                            <li class="grid-list-option sub-category" style="padding-left: 20px;">
                                                <img width="30px" height="30px"
                                                    src="{{ asset('assets/client/image/icons8-forward-button.gif') }}"
                                                    alt="">
                                                <a href="javascript:void(0)">{{ $child->name }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="grid-list-banner"
                        style="background-image: url({{ asset('assets/client/image/slider17.jpg') }});">
                        <div class="grid-banner-content">
                            <h4>Tất Cả Khóa Học</h4>
                            <p>Website khóa học online uy tín, giá rẻ, tự động, chất lượng và nhanh chóng nhất hiện nay.
                                Share hàng ngàn khóa học chất lượng nhất từ tất cả các lĩnh vực. Liên tục cập nhật các khóa
                                học mới đáp ứng nhu cầu của các bạn</p>
                        </div>
                    </div>
                    <div class="grid-list-area">
                        <div class="grid-list-select">
                            <ul class="grid-list">
                                <li class="colloction-icn"><a href="#!"><i class="ti-layout-list-thumb"></i></a>
                                </li>
                                <li class="colloction-icn"><a href="#!"><i class="ti-layout-grid2"></i></a>
                                </li>
                                <li class="colloction-icn three-grid"><a href="#!" class="active"><i
                                            class="ti-layout-grid3"></i></a></li>
                                <li class="colloction-icn four-grid"><a href="#!"><i class="ti-layout-grid4"></i></a>
                                </li>
                            </ul>
                            <ul class="grid-list-selector">
                                <li>
                                    <label>Lọc Tìm Kiếm</label>
                                    <select>
                                        <option>Featured</option>
                                        <option>Best selling</option>
                                        <option>Alphabetically,A-Z</option>
                                        <option>Alphabetically,Z-A</option>
                                        <option>Price, low to high</option>
                                        <option>Price, high to low</option>
                                        <option>Date new to old</option>
                                        <option>Date old to new</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div class="grid-pro">
                            <ul class="grid-product">
                                @foreach ($listProduct as $item)
                                    <li class="grid-items">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="{{ route('products.detailProduct', $item->slug) }}">
                                                    <img class="img-fluid" src="{{ asset($item->image) }}" alt="pro-img1">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                                @if ($item->price_sale > 0)
                                                    <span class="p-discount">-{{ $item->discount_percent }}%</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a
                                                    href="{{ route('products.detailProduct', $item->slug) }}"><b>{{ $item->name }}</b></a>
                                            </h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                @if ($item->price_sale == 0)
                                                    <span
                                                        class="new-price">{{ number_format($item->price, 0, '.', ',') }}đ</span>
                                                    <span class="old-price">&nbsp<b>Đã Bán:
                                                            @formatNumber($item->buys)</b>&nbsp|&nbsp<i
                                                            class="fa-solid fa-eye"></i><b>Xem:
                                                            @formatNumber($item->view)</b></span>
                                                @elseif($item->price_sale > 0)
                                                    <span
                                                        class="new-price">{{ number_format($item->price_sale, 0, '.', ',') }}đ</span>
                                                    <span
                                                        class="old-price"><del>{{ number_format($item->price, 0, '.', ',') }}đ</del></span>
                                                    <span class="old-price">&nbsp<b>Đã Bán:
                                                            @formatNumber($item->buys)</b>&nbsp|&nbsp<i
                                                            class="fa-solid fa-eye"></i><b>Xem:
                                                            @formatNumber($item->view)</b></span>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="list-all-page">
                        <span class="page-title">{{ $listProduct->links('pagination::bootstrap-4') }}</span> 
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
<!-- quick veiw start -->
{{-- <section class="quick-view">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                        <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i
                                class="ion-close-round"></i></a>
                    </div>
                    <div class="quick-veiw-area">
                        <div class="quick-image">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="image-1">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="image/pro-page-image/pro-page-image.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-2">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="image/pro-page-image/prro-page-image01.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-3">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="image/pro-page-image/pro-page-image1-1.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-4">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="image/pro-page-image/pro-page-image1.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-5">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="image/pro-page-image/pro-page-image2.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-6">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="image/pro-page-image/pro-page-image2-2.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-7">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="image/pro-page-image/pro-page-image3.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                                <div class="tab-pane fade show" id="image-8">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="image/pro-page-image/pro-page-image03.jpg" class="img-fluid"
                                            alt="image">
                                    </a>
                                </div>
                            </div>
                            <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                                <li class="nav-item items">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img
                                            src="image/pro-page-image/image1.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img
                                            src="image/pro-page-image/image2.jpg" class="img-fluid" alt="iamge"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-3"><img
                                            src="image/pro-page-image/image3.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-4"><img
                                            src="image/pro-page-image/image4.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-5"><img
                                            src="image/pro-page-image/image5.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-6"><img
                                            src="image/pro-page-image/image6.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-7"><img
                                            src="image/pro-page-image/image8.jpg" class="img-fluid" alt="image"></a>
                                </li>
                                <li class="nav-item items">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image-8"><img
                                            src="image/pro-page-image/image7.jpg" class="img-fluid" alt="image"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="quick-caption">
                            <h4>Fresh organic reachter</h4>
                            <div class="quick-price">
                                <span class="new-price">$350.00 USD</span>
                                <span class="old-price"><del>$399.99 USD</del></span>
                            </div>
                            <div class="quick-rating">
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star c-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-description">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of type and</p>
                            </div>
                            <div class="pro-size">
                                <label>Size: </label>
                                <select>
                                    <option>1 ltr</option>
                                    <option>3 ltr</option>
                                    <option>5 ltr</option>
                                </select>
                            </div>
                            <div class="plus-minus">
                                <span>
                                    <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                    <input type="text" name="name" value="1">
                                    <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                </span>
                                <a href="cart.html" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="wishlist.html" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
<!-- quick veiw end -->
{{-- @endsection
@push('styles')
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/responsive.css') }}">
@endpush --}}
