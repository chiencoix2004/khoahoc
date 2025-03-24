@extends('admin.layouts.main')
@section('title', 'Danh Sách Đơn Hàng | Admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Đơn Hàng</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Approx</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item"><a href="#">Đơn Hàng</a>
                            </li><!--end nav-item-->
                            {{-- <li class="breadcrumb-item active">Basic</li> --}}
                        </ol>
                    </div>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <form action="{{ route('admin.orders.searchOrder') }}" method="get">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Danh Sách Đơn Hàng</h4>
                            </div><!--end col-->
                            
                            <div class="col-auto">
                                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                                    
                                        <li class="hide-phone app-search">
                                            <input type="search" name="search" class="form-control top-search mb-0"
                                                placeholder="Nhập Mã Đơn Hàng...">
                                        </li>
                                        &nbsp &nbsp <button type="submit" class="btn bg-success text-white"><i
                                                class="iconoir-search"></i></button>
                                    </form>
                                </ul> 
                            </div><!--end col-->

                        </div><!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="table-responsive"> 
                            <table class="table mb-0" id="datatable_1">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-start">STT</th> 
                                        <th>Mã Đơn Hàng</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Khách Hàng</th>
                                        <th>Tổng Tiền</th> 
                                        {{-- <th class="text-end">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ListOrder as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td> 
                                            <td>{{ $item->order_id }}</td> 
                                            <td>{{ $item->name }}</td>  
                                            <td>{{ $item->email ?? 'Trống' }}</td>  
                                            <td>{{ number_format($item->total, 0, '.', ',') }}đ</td>
                                                
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                {{ $ListOrder->links('pagination::bootstrap-4') }}
            </div> <!-- end col -->
            {{-- {{ $listUser->links('pagination::bootstrap-4') }} --}}
        </div> <!-- end row -->

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @endsection
