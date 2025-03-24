@extends('admin.layouts.main')
@section('title', 'Danh Sách Sản Phẩm | Admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Thông Tin Sản Phẩm</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item"><a href="#">Sản Phẩm</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item active">Thông Tin Sản Phẩm</li>
                        </ol>
                    </div>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-4  rounded text-center img-bg">

                    </div><!--end card-body-->
                    <div class="position-relative">
                        <div class="shape overflow-hidden text-card-bg">
                            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body mt-n6">
                        <div class="row align-items-center">
                            <div class="col ">
                                <div class="d-flex align-items-center">
                                    <div class="position-relative">
                                        <img src="{{ asset($detailProduct->image) }}" alt="" class="img-fluid"
                                            width="200px" height="200px" style="object-fit: cover;boder-radius:1px;">
                                        <div class="position-absolute top-50 start-100 translate-middle">
                                            <img src="{{ asset('assets/admin/images/flags/vietnam.jpg') }}" alt=""
                                                class="rounded-circle thumb-sm border border-3 border-white">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-3 align-self-end">
                                        {{-- <h5 class="m-0 fs-3 fw-bold">{{ $detailShop->user->username }}</h5>
                                            <p class="text-muted mb-0">{{ $detailShop->user->username }}</p> --}}
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end col-->
                        </div><!--end row-->
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="mt-3">
                                    <div class="text-body mb-2  d-flex align-items-center"><i
                                            class="iconoir-shop fs-20 me-1 text-muted"></i><span
                                            class="text-body fw-semibold">Tên Sản Phẩm : &nbsp</span> <span
                                            style="color:rgb(38, 158, 206)">{{ $detailProduct->name }}</span>
                                    </div>
                                    @if ($detailProduct->price_sale == 0)
                                        <div class="text-muted mb-2 d-flex align-items-center"><i
                                                class="iconoir-user fs-20 me-1"></i><span class="text-body fw-semibold">Giá
                                                Gốc : &nbsp</span>
                                            {{ number_format($detailProduct->price, 0, '.', ',') }}đ</div>
                                        <div class="text-muted mb-2 d-flex align-items-center"><i
                                                class="iconoir-user fs-20 me-1"></i><span class="text-body fw-semibold">Giá
                                                Đã Giảm : &nbsp</span>
                                            {{ number_format($detailProduct->price_sale, 0, '.', ',') ?? "0"}}đ</div>
                                    @else
                                        <div class="text-muted mb-2 d-flex align-items-center"><i
                                                class="iconoir-user fs-20 me-1"></i><span class="text-body fw-semibold">Giá
                                                Gốc : &nbsp</span>
                                            <del>{{ number_format($detailProduct->price, 0, '.', ',') }}đ</del></div>
                                        <div class="text-muted mb-2 d-flex align-items-center"><i
                                                class="iconoir-user fs-20 me-1"></i><span class="text-body fw-semibold">Giá
                                                Đã Giảm : &nbsp</span>
                                            {{ number_format($detailProduct->price_sale, 0, '.', ',') }}đ</div>
                                    @endif
                                    <div class="text-muted mb-2 d-flex align-items-center"><i
                                            class="iconoir-flower fs-20 me-1"></i>
                                        <span class="text-body fw-semibold">Danh Mục : &nbsp</span>
                                        <span style="color:rgb(8, 221, 8)">
                                            {{ $detailProduct->category->name ?? 'Đã Xóa' }}</span>
                                    </div>
                                    <div class="text-muted mb-2 d-flex align-items-center"><i
                                        class="iconoir-flower fs-20 me-1"></i>
                                    <span class="text-body fw-semibold">Chương học : &nbsp</span>
                                    <span style="color:rgb(8, 221, 8)">
                                        {{ $detailProduct->total_course ?? 0}}</span>
                                </div>

                                    <div class="text-muted mb-2 d-flex align-items-center"><i
                                            class="iconoir-calendar fs-20 me-1"></i><span class="text-body fw-semibold">Ngày
                                            Tạo : &nbsp</span>
                                        {{ $detailProduct->created_at->format('Y-m-d') }}</div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">URL Folder</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                    <a href="#!"
                                        class="float-end text-muted d-inline-flex text-decoration-underline">{{ $detailProduct->folder_url ?? 'Trống' }}</a>
                                </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="row justify-content-center mt-4">
                            <div class="col-auto text-end border-end">
                                <span
                                    class="thumb-md justify-content-center d-flex align-items-center bg-blue text-white rounded-circle ms-auto mb-1">
                                    <i class="fab fa-facebook-f"></i>
                                </span>
                                <p class="mb-0 fw-semibold">Facebook</p>
                                <h4 class="m-0 fw-bold">25k <span class="text-muted fs-12 fw-normal">Followers</span>
                                </h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <span
                                    class="thumb-md justify-content-center d-flex align-items-center bg-black text-white rounded-circle mb-1">
                                    <i class="fab fa-x-twitter"></i>
                                </span>
                                <p class="mb-0 fw-semibold">Twitter</p>
                                <h4 class="m-0 fw-bold">58k <span class="text-muted fs-12 fw-normal">Followers</span>
                                </h4>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-md-8">
                <ul class="nav nav-tabs mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link fw-medium active" data-bs-toggle="tab" href="#post" role="tab"
                            aria-selected="true">Thông Tin Chung</a>
                    </li>
                    {{-- <li class="nav-item">
                            <a class="nav-link fw-medium" data-bs-toggle="tab" href="#gallery" role="tab"
                                aria-selected="false">Gallery</a>
                        </li> --}}
                    {{-- <li class="nav-item">
                            <a class="nav-link fw-medium" data-bs-toggle="tab" href="#settings" role="tab"
                                aria-selected="false">Trạng Thái Gian Hàng</a>
                        </li> --}}
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="post" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <p class="text-dark mb-1 fw-semibold">Lượt Xem Sản Phẩm</p>
                                                <h3 class="my-2 fs-24 fw-bold">{{ $detailProduct->view }}</h3>
                                                <p class="mb-0 text-truncate text-muted"><i
                                                        class="iconoir-bell text-warning fs-18"></i>
                                                    <span class="text-dark fw-semibold">Lượt xem</span>
                                                </p>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <div
                                                    class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                                                    <i class="iconoir-eye fs-30 align-self-center text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <p class="text-dark mb-1 fw-semibold">Tổng Lượt Mua</p>
                                                <h3 class="my-2 fs-24 fw-bold">{{ $detailProduct->buys }}</h3>
                                                <p class="mb-0 text-truncate text-muted">
                                                    <i class="ti ti-thumb-up text-success fs-18"></i>
                                                    <span class="text-dark fw-semibold"></span>
                                                    Lượt mua
                                                </p>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <div
                                                    class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                                                    <i class="iconoir-chat-lines fs-30 align-self-center text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- <img src="{{asset('assets/images/extra/card/post-1.jpg')}}" alt=""
                                                class="img-fluid"> --}}
                                        <h3 class="fs-20 fw-bold d-block my-3"><i>Mô Tả Sản Phẩm</i></h3>
                                        <div class="post-title mt-3">
                                            <h5 href="#" class="fs-20 fw-bold d-block my-3">
                                                {{-- <span class="fs-15 bg-light py-2 px-3 rounded">Taking pictures is savouring
                                                    life intensely.</span> --}}
                                                <p class="fs-15 mt-3">{!! $detailProduct->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div>
        </div> <!--end col-->
    @endsection
