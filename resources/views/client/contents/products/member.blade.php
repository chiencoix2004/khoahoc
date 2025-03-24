<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">


<!-- Mirrored from mannatthemes.com/approx/default/pages-pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2024 13:39:46 GMT -->

<head>


    <meta charset="utf-8" />
    <title>Pricing | Approx - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App css -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />




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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/style2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/responsive2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #button-contact-vr {
            position: fixed;
            bottom: 0;
            z-index: 99999;
        }

        /*phone*/
        #button-contact-vr .button-contact {
            position: relative;
        }

        #button-contact-vr .button-contact .phone-vr {
            position: relative;
            visibility: visible;
            background-color: transparent;
            width: 90px;
            height: 90px;
            cursor: pointer;
            z-index: 11;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            transition: visibility .5s;
            left: 0;
            bottom: 0;
            display: block;
        }

        .phone-vr-circle-fill {
            width: 65px;
            height: 65px;
            top: 12px;
            left: 12px;
            position: absolute;
            box-shadow: 0 0 0 0 #c31d1d;
            background-color: rgba(230, 8, 8, 0.7);
            border-radius: 50%;
            border: 2px solid transparent;
            -webkit-animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-animuiion: zoom 1.3s infinite;
            animation: zoom 1.3s infinite;
        }

        .phone-vr-img-circle {
            background-color: #e60808;
            width: 40px;
            height: 40px;
            line-height: 40px;
            top: 25px;
            left: 25px;
            position: absolute;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            animation: phone-vr-circle-fill 1s infinite ease-in-out;
        }

        .phone-vr-img-circle a {
            display: block;
            line-height: 37px;
        }

        .phone-vr-img-circle img {
            max-width: 40px;
        }

        @-webkit-keyframes phone-vr-circle-fill {
            0% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }

            10% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }

            20% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }

            30% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }

            40% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }

            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }

            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
        }

        @-webkit-keyframes zoom {
            0% {
                transform: scale(.9)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 15px transparent
            }

            100% {
                transform: scale(.9);
                box-shadow: 0 0 0 0 transparent
            }
        }

        @keyframes zoom {
            0% {
                transform: scale(.9)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 15px transparent
            }

            100% {
                transform: scale(.9);
                box-shadow: 0 0 0 0 transparent
            }
        }

        .phone-bar a {
            position: fixed;
            bottom: 25px;
            left: 30px;
            z-index: -1;
            background: rgb(232, 58, 58);
            color: #fff;
            font-size: 16px;
            padding: 8px 15px 7px 50px;
            border-radius: 100px;
            white-space: nowrap;
        }

        .phone-bar a:hover {
            opacity: 0.8;
            color: #fff;
        }

        @media(max-width: 736px) {
            .phone-bar {
                display: none;
            }
        }

        #zalo-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #2196F3;
            background-color: rgba(33, 150, 243, 0.7);
        }

        #zalo-vr .phone-vr-img-circle {
            background-color: #2196F3;
        }

        #viber-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #714497;
            background-color: rgba(113, 68, 151, 0.8);
        }

        #viber-vr .phone-vr-img-circle {
            background-color: #714497;
        }

        #contact-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #2196F3;
            background-color: rgba(33, 150, 243, 0.7);
        }

        #contact-vr .phone-vr-img-circle {
            background-color: #2196F3;
        }

        #button-contact-vr {
            position: fixed;
            bottom: 0;
            z-index: 99999;
        }

        #button-contact-vr .button-contact {
            position: relative;
        }

        #button-contact-vr .button-contact .phone-vr {
            position: relative;
            visibility: visible;
            background-color: transparent;
            width: 90px;
            height: 90px;
            cursor: pointer;
            z-index: 11;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            transition: visibility .5s;
            left: 0;
            bottom: 0;
            display: block;
        }

        #zalo-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #2196F3;
            background-color: rgba(33, 150, 243, 0.7);
        }

        .phone-vr-circle-fill {
            width: 65px;
            height: 65px;
            top: 12px;
            left: 12px;
            position: absolute;
            box-shadow: 0 0 0 0 #c31d1d;
            background-color: rgba(230, 8, 8, 0.7);
            border-radius: 50%;
            border: 2px solid transparent;
            -webkit-animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-animuiion: zoom 1.3s infinite;
            animation: zoom 1.3s infinite;
        }

        #zalo-vr .phone-vr-img-circle {
            background-color: #2196F3;
        }

        .phone-vr-img-circle a {
            display: block;
            line-height: 37px;
        }

        .phone-vr-img-circle img {
            max-width: 40px;
        }

        #phone-vr .phone-vr-circle-fill {
            opacity: 0.7;
            box-shadow: 0 0 0 0 #919191;
        }

        .phone-bar a,
        #phone-vr .phone-vr-circle-fill,
        #phone-vr .phone-vr-img-circle,
        #phone-vr .phone-bar a {
            background-color: #2a90d8;
        }

        .phone-vr-img-circle {
            background-color: #fe0000;
            width: 40px;
            height: 40px;
            line-height: 40px;
            top: 25px;
            left: 25px;
            position: absolute;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            animation: phone-vr-circle-fill 1s infinite ease-in-out;
        }

        #messenger-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #0084ff;
            background-color: #0084ff;
        }

        #messenger-vr .phone-vr-img-circle {
            background-color: white;
        }
    </style>
    <style>
        .faq-title {
            text-align: center;
            /* Căn giữa văn bản và các phần tử inline */
        }

        .faq-title h1 {
            display: inline-block;
            /* Đảm bảo h1 hoạt động như một khối nhưng vẫn nằm trên cùng một dòng với các hình ảnh */
        }
    </style>
</head>


<!-- Top Bar Start -->

<body>
    @include('client/layouts/header')
    <div class="faq-title">
        <h1>
            Gói Thành Viên
        </h1>
    </div>
    <br>
    <div class="container">
        <div class="page-content">
            <div class="container-fluid">
                {{-- <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Basic plan</h6>
                                    <p class="text-muted pt-2 mb-0">It is a long established fact that a reader will be
                                        distracted by the readable.</p>
                                    <div class="pt-3">
                                        <h1 class="d-inline-block fw-bold">$39.00</h1>
                                        <small class="font-12 text-muted">/month</small>
                                    </div>
                                    <hr class="hr-dashed">
                                    <ul class="list-unstyled pricing-content text-start pt-3 border-0 mb-0">
                                        <li>30GB Disk Space</li>
                                        <li>30 Email Accounts</li>
                                        <li>30GB Monthly Bandwidth</li>
                                        <li>06 Subdomains</li>
                                        <li>10 Domains</li>
                                    </ul>
                                    <a href="#" class="btn btn-dark py-2 px-5 mt-3 w-100"><span>Get
                                            Started</span></a>
                                </div><!--end pricing Table-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="badge bg-pink-subtle text-pink mt-0 py-1 px-2 mx-auto">Popular</span>
                                    <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Premium Plan</h6>
                                    <p class="text-muted pt-2 mb-0">It is a long established fact that a reader will be
                                        distracted by the readable.</p>
                                    <div class="pt-3">
                                        <h1 class="d-inline-block fw-bold">$49.00</h1>
                                        <small class="font-12 text-muted">/month</small>
                                    </div>
                                    <hr class="hr-dashed">
                                    <ul class="list-unstyled pricing-content text-start pt-3 border-0 mb-0">
                                        <li>30GB Disk Space</li>
                                        <li>30 Email Accounts</li>
                                        <li>30GB Monthly Bandwidth</li>
                                        <li>06 Subdomains</li>
                                        <li>10 Domains</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary py-2 px-5 mt-3 w-100"><span>Get
                                            Started</span></a>
                                </div><!--end pricing Table-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Plus Plan</h6>
                                    <p class="text-muted pt-2 mb-0">It is a long established fact that a reader will be
                                        distracted by the readable.</p>
                                    <div class="pt-3">
                                        <h1 class="d-inline-block fw-bold">$69.00</h1>
                                        <small class="font-12 text-muted">/month</small>
                                    </div>
                                    <hr class="hr-dashed">
                                    <ul class="list-unstyled pricing-content text-start pt-3 border-0 mb-0">
                                        <li>30GB Disk Space</li>
                                        <li>30 Email Accounts</li>
                                        <li>30GB Monthly Bandwidth</li>
                                        <li>06 Subdomains</li>
                                        <li>10 Domains</li>
                                    </ul>
                                    <a href="#" class="btn btn-dark py-2 px-5 mt-3 w-100"><span>Get
                                            Started</span></a>
                                </div><!--end pricing Table-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Master Plan</h6>
                                    <p class="text-muted pt-2 mb-0">It is a long established fact that a reader will be
                                        distracted by the readable.</p>
                                    <div class="pt-3">
                                        <h1 class="d-inline-block fw-bold">$199.00</h1>
                                        <small class="font-12 text-muted">/month</small>
                                    </div>
                                    <hr class="hr-dashed">
                                    <ul class="list-unstyled pricing-content text-start pt-3 border-0 mb-0">
                                        <li>30GB Disk Space</li>
                                        <li>30 Email Accounts</li>
                                        <li>30GB Monthly Bandwidth</li>
                                        <li>06 Subdomains</li>
                                        <li>10 Domains</li>
                                    </ul>
                                    <a href="#" class="btn btn-dark py-2 px-5 mt-3 w-100"><span>Get
                                            Started</span></a>
                                </div><!--end pricing Table-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div><!--end row--> --}}
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body bg-soft-blue text-center rounded-top">
                                <i class="icofont-bird-wings d-inline-block mt-2 mb-3 display-4 text-blue"></i>
                                {{-- <i class="icofont-brand-louis-vuitton d-inline-block mt-2 mb-3 display-4 text-blue"></i> --}}
                            </div><!--end card-body-->
                            <div class="card-body mt-n52">
                                <div class="text-center">
                                    <div class="py-2 px-3 shadow-sm d-inline-block rounded-pill card-bg">
                                        <h1 class="d-inline-block fw-bold mb-0">249.000đ</h1>
                                        <small class="font-12 text-muted">/Tuần</small>
                                    </div>
                                    <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Gói Cơ Bản</h6>
                                    <ul class="list-unstyled pricing-content text-center pt-2 border-0 mb-3">
                                        <li>Mỗi Ngày Được Miễn Phí 1 Combo</li>
                                        <li>Voucher Giảm 50% Khóa Sau </li>
                                        <li>Khóa Học Thực Hành</li>
                                        <li>Truy Cập Không Giới Hạn</li>
                                        <li>Support 24/7</li>
                                    </ul>
                                    <hr class="hr-dashed">
                                    <form action="{{ route('addToMemberCart') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf 
                                        <button type="submit" class="btn btn-dark py-2 px-3 mt-2"><span>Mua
                                                Ngay</span></button>

                                    </form>
                                </div><!--end pricing Table-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body bg-soft-pink text-center rounded-top">
                                <i class="icofont-woman-bird d-inline-block mt-2 mb-3 display-4 text-pink"></i>
                            </div><!--end card-body-->
                            <div class="card-body mt-n52">
                                <div class="text-center">
                                    <div class="py-2 px-3 shadow-sm d-inline-block rounded-pill card-bg">
                                        <h1 class="d-inline-block fw-bold mb-0">499.000đ</h1>
                                        <small class="font-12 text-muted">/Tháng</small>
                                    </div>
                                    <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Gói Nâng Cao</h6>
                                    <ul class="list-unstyled pricing-content text-center pt-2 border-0 mb-3">
                                        <ul class="list-unstyled pricing-content text-center pt-2 border-0 mb-3">
                                            <li>Mỗi Ngày Được Miễn Phí 2 Combo</li>
                                            <li>Voucher Giảm 80% Khóa Sau </li>
                                            <li>Khóa Học Thực Hành</li>
                                            <li>Truy Cập Không Giới Hạn</li>
                                            <li>Mở Khóa Tải Xuống</li>
                                            <li>Support 24/7</li>
                                        </ul>
                                    </ul>
                                    <hr class="hr-dashed">

                                    <form action="{{ route('addToMemberCart2') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf 
                                        <button type="submit" class="btn btn-dark py-2 px-3 mt-2"><span>Mua
                                                Ngay</span></button>

                                    </form>
                                </div><!--end pricing Table-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body bg-soft-success text-center rounded-top">
                                <i class="icofont-elk d-inline-block mt-2 mb-3 display-4 text-success"></i>
                            </div><!--end card-body-->
                            <div class="card-body mt-n52">
                                <div class="text-center">
                                    <div class="py-2 px-3 shadow-sm d-inline-block rounded-pill card-bg">
                                        <h1 class="d-inline-block fw-bold mb-0">799.000đ</h1>
                                        <small class="font-12 text-muted">/Tháng</small>
                                    </div>
                                    <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Gói Cao Cấp</h6>
                                    <ul class="list-unstyled pricing-content text-center pt-2 border-0 mb-3">
                                        <ul class="list-unstyled pricing-content text-center pt-2 border-0 mb-3">
                                            <li>Mỗi Ngày Được Miễn Phí 3 Combo</li>
                                            <li>Voucher Giảm 90% Khóa Sau </li>
                                            <li>Khóa Học Thực Hành</li>
                                            <li>Truy Cập Không Giới Hạn</li>
                                            <li>Mở Khóa Tải Xuống</li>
                                            <li>Support 24/7</li>
                                        </ul>
                                    </ul>
                                    <hr class="hr-dashed">

                                    <form action="{{ route('addToMemberCart3') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf 
                                        <button type="submit" class="btn btn-dark py-2 px-3 mt-2"><span>Mua
                                                Ngay</span></button>

                                    </form>
                                </div><!--end pricing Table-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body bg-soft-warning text-center rounded-top">
                                <i class="icofont-fire-burn d-inline-block mt-2 mb-3 display-4 text-warning"></i>
                            </div><!--end card-body-->
                            <div class="card-body mt-n52">
                                <div class="text-center">
                                    <div class="py-2 px-3 shadow-sm d-inline-block rounded-pill card-bg">
                                        <h1 class="d-inline-block fw-bold mb-0">2.499.999đ</h1>
                                        <small class="font-12 text-muted">/Vĩnh Viễn</small>
                                    </div>
                                    <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Gói Mở Shop</h6>
                                    <ul class="list-unstyled pricing-content text-center pt-2 border-0 mb-3">
                                        <li>Toàn Bộ Khóa Học</li>
                                        <li>Update Khóa Học Mới</li>
                                        <li>Hỗ Trợ Mở Shop</li>
                                        <li>Mở Khóa Tải Xuống</li>
                                        <li>Tất Cả Các Quyền Lợi Của Website</li>
                                        <li>Support 24/7 1-1</li>
                                        {{-- <li>10 Domains</li> --}}
                                    </ul>
                                    <hr class="hr-dashed">
                                    <form action="{{ route('addToMemberCart4') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <button type="submit" class="btn btn-dark py-2 px-3 mt-2"><span>Mua
                                                Ngay</span></button>

                                    </form>
                                </div><!--end pricing Table-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->

                </div><!--end row-->
            </div><!-- container -->
        </div>
        <!-- end page content -->
    </div>
    @include('client/layouts/footer')
    <!-- end page-wrapper -->

    {{-- <a href="javascript:void(0)" class="scroll" id="top">
        <span><i class="fa fa-angle-double-up"></i></span>
    </a> --}}
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
    <script src="{{ asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/simplebar/simplebar.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/app.js') }}"></script>


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
    <!-- custom -->
    <script src="{{ asset('assets/Client/js/custom.js') }}"></script>
</body>
<!--end body-->

<!-- Mirrored from mannatthemes.com/approx/default/pages-pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Nov 2024 13:39:46 GMT -->

</html>
