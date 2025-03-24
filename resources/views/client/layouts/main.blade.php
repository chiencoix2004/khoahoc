<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from spacingtech.com/html/vegist-final/vegist/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:23:22 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>Trang Chủ</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/style2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Client/css/responsive2.css') }}">
    @stack('styles')
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
        .home2-cate-image img {
            width: 150px;
            height: 150px;
        }
    </style>
</head>

<body class="home-1">
    <!-- top notificationbar start -->
    @include('client/layouts/header')
    <!-- header end -->
    <!--home page slider start-->
    @yield('content')
    <!-- quick veiw end -->
    <!-- footer start -->
    @include('client/layouts/footer')
    <!-- copyright end -->
    <!-- back to top start -->
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

<!-- Mirrored from spacingtech.com/html/vegist-final/vegist/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:23:52 GMT -->

</html>
