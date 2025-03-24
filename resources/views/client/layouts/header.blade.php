{{-- <section class="top-2" style="background-image: url(image/top-2.jpg);">
    <div class="container">
        <div class="row ">
            <div class="col">
                <ul class="top-home">
                    <li class="top-home-li t-content">
                        <!-- offer text start -->
                        <div class="top-content">
                            <p class="top-slogn"><span class="top-c">Free shipping</span> orders from all item</p>
                        </div>
                        <!-- offer text end -->
                    </li>
                    <li class="top-home-li">
                        <!-- login start -->
                        <div class="currency">
                            <div class="currency-drop">
                                <ul class="cry">
                                    <li class="eur-head">
                                        <span class="eur">account <i class="fa fa-angle-down"></i></span>
                                        <ul class="all-currency account-details">
                                            <li><a href="register.html">register / log in</a></li>
                                            <li><a href="checkout-2.html">checkout</a></li>
                                            <li><a href="wishlist.html">my wishlist</a></li>
                                            <li><a href="tracking.html">order history</a></li>
                                            <li><a href="cart-2.html">my cart</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- login end -->
                        <!-- currency start -->
                        <div class="currency">
                            <div class="currency-drop">
                                <ul class="cry">
                                    <li class="eur-head">
                                        <span class="eur"><img src="image/c-icon1.png" alt="currency icon"> EUR <i class="fa fa-angle-down"></i></span>
                                        <ul class="all-currency all-drop-currency">
                                            <li><a href="javascript:void(0)"><img src="image/c-icon4.png" alt="currency icon"> AFN</a></li>
                                            <li><a href="javascript:void(0)"><img src="image/c-icon2.png" alt="currency icon"> BDT</a></li>
                                            <li><a href="javascript:void(0)"><img src="image/c-icon3.png" alt="currency icon"> CAD</a></li>
                                            <li><a href="javascript:void(0)"><img src="image/c-icon5.png" alt="currency icon"> GBP</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- currency start -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> --}}
<!-- top notificationbar start -->
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
                                <img width="200px" height="54px"
                                    src="{{ asset('assets/client/image/logogiarehocngay.png') }}" alt="logo-image"
                                    {{-- src="https://i.postimg.cc/d1MxB2dh/logogiarehocngay.png" alt="logo-image" --}}
                                    class="img-fluid">
                            </a>
                            {{-- <a href='https://postimages.org/' target='_blank'><img src='https://i.postimg.cc/d1MxB2dh/logogiarehocngay.png' border='0' alt='logogiarehocngay'/></a> --}}
                        </div>
                        <!-- logo end -->
                        <!-- main menu start -->
                        <div class="header-element megamenu-content">
                            <div class="mainwrap">
                                <ul class="main-menu">
                                    <li class="menu-link parent">
                                        <a href="{{ route('home') }}" class="link-title">
                                            <span class="sp-link-title">
                                                <img loading="lazy" src="https://img.icons8.com/?size=100&id=42814&format=png&color=000000"
                                                    width="40px" height="40px" alt="">
                                                Trang Chủ</span>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('products.listProduct') }}" class="link-title">
                                            <span loading="lazy" class="sp-link-title">
                                                <img src="https://img.icons8.com/?size=100&id=119436&format=png&color=000000"
                                                    width="40px" height="40px" alt="">
                                                Khóa Học</span>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{route('products.category','combo-tiet-kiem-4208')}}" class="link-title">
                                            <span loading="lazy" class="sp-link-title">
                                                <img src="https://img.icons8.com/?size=100&id=3YhoNsfPvctU&format=png&color=000000"
                                                    width="40px" height="40px" alt="">
                                                Combo Giá Rẻ</span>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('huongdanmuahang') }}" class="link-title">
                                            <span loading="lazy" class="sp-link-title">
                                                <img src="https://img.icons8.com/?size=100&id=43131&format=png&color=000000"
                                                    width="40px" height="40px" alt="">
                                                Cách Mua Hàng</span>
                                        </a>
                                    </li>
                                    <li class="menu-link parent">
                                        <a href="{{ route('feedback') }}" class="link-title">
                                            <span loading="lazy" class="sp-link-title">
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
                        <!-- main menu end -->
                        <!-- header icon start -->
                        {{-- <div class="header-element right-block-box">
                            <ul class="shop-element">
                                <li class="side-wrap nav-toggler">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarContent">
                                        <span class="line"></span>
                                    </button>
                                </li>
                                <li class="side-wrap search-wrap">
                                    <!-- mobile search start -->
                                    <div class="search-rap">
                                        <a href="#search-modal" class="search-popuup" data-bs-toggle="modal"><i
                                                class="ion-ios-search-strong"></i></a>
                                    </div>
                                    <!-- mobile search start -->
                                </li>  
                            </ul>
                        </div> --}}
                        
                        <div class="header-element right-block-box">
                            <ul class="shop-element">
                                <li class="side-wrap nav-toggler">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                    <span class="line"></span>
                                    </button>
                                </li>
                                <li class="side-wrap search-wrap">
                                    <div class="search-rap">
                                        <a href="#search-modal" class="search-popuup" data-bs-toggle="modal"><i class="ion-ios-search-strong"></i></a>
                                    </div>
                                </li>
                                <li class="side-wrap wishlist-wrap">
                                    <a href="https://zalo.me/0568327300" class="header-wishlist">
                                        <span class="wishlist-icon">
                                            <img loading="lazy" src="{{asset('assets/Client/image/icon_contact.png')}}" class="img-fluid" alt="image-icon"> 
                                        </span> 
                                    </a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu start -->
    <div class="header-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-menu-area">
                        <div class="main-navigation navbar-expand-xl">
                            <div class="box-header menu-close">
                                <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                            </div> 
                            <div class="navbar-collapse" id="navbarContent">
                                <div class="megamenu-content">
                                    <div class="mainwrap">
                                        <ul class="main-menu">
                                            <br> 
                                            <br>
                                            <li class="menu-link parent">
                                                <a href="{{ route('home') }}" class="link-title link-title-lg">
                                                    <span class="sp-link-title">
                                                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=42814&format=png&color=000000"
                                                            width="40px" height="40px" alt="">
                                                        Trang Chủ</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="{{ route('products.listProduct') }}"
                                                    class="link-title link-title-lg">
                                                    <span class="sp-link-title">
                                                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=119436&format=png&color=000000"
                                                            width="40px" height="40px" alt="">
                                                        Khóa Học</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="{{route('products.category','combo-tiet-kiem-4208')}}" class="link-title link-title-lg"> 
                                                    <span class="sp-link-title">
                                                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=3YhoNsfPvctU&format=png&color=000000"
                                                            width="40px" height="40px" alt="">
                                                        Combo Giá Rẻ</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="{{ route('huongdanmuahang') }}"
                                                    class="link-title link-title-lg">
                                                    <span class="sp-link-title">
                                                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=43131&format=png&color=000000"
                                                            width="40px" height="40px" alt="">
                                                        Cách Mua Hàng</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="{{ route('feedback') }}" class="link-title link-title-lg">
                                                    <span class="sp-link-title">
                                                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=42782&format=png&color=000000"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu end -->

    <div class="modal fade" id="search-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                {{-- <div class="search-content">
                                    <div class="search-engine">
                                        <input type="text" name="search" placeholder="Nhập tên khóa học">
                                        <a href="search.html" class="search-btn"><i class="ion-ios-search-strong"></i></a>
                                    </div>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></button>
                                </div> --}}
                                <div class="search-content">
                                    <form action="{{ route('products.search') }}" method="GET" class="search-engine">
                                        <input type="text" name="search" placeholder="Nhập tên khóa học" value="{{ request('search') }}">
                                        <button type="submit" class="search-btn"><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
