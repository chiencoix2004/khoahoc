@extends('admin.layouts.main')
@section('title', 'Danh Sách Danh Mục | Admin')
@section('content')  
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Danh Mục</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Approx</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="#">Danh Mục</a>
                                </li><!--end nav-item--> 
                            </ol>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Danh sách danh mục</h4>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table  mb-0 table-centered">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-start">STT</th> 
                                            <th>Tên Danh Mục</th> 
                                            <th>Loại</th> 
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listCategory as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ asset('assets/admin/images/logos/lang-logo/chatgpt.png') }}"
                                                        alt="" class="rounded-circle thumb-md me-1 d-inline">
                                                    {{ $item->name }}
                                                </td> 
                                                <td>Danh Mục Lớn</td> 

                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11"
                                                            data-bs-toggle="dropdown" href="#" role="button"
                                                            aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dLabel11">
                                                            {{-- <a class="dropdown-item" href="#">Creat Project</a> --}}
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.categories.detailCategory', ['slug' => $item->slug]) }}">Chi
                                                                Tiết</a>
                                                            {{-- <a class="dropdown-item" href="#">Sửa Danh Mục</a> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach 
                                    </tbody>
                                </table><!--end /table-->
                            </div><!--end /tableresponsive-->
                        </div><!--end card-body-->

                    </div><!--end card-->

                    {{ $listCategory->links('pagination::bootstrap-4') }}
                </div> <!--end col-->
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Thêm Danh Mục</h4>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <form action="{{ route('admin.categories.addCategory') }}" method="POST">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="horizontalInput1" class="col-sm-2 col-form-label">Tên Danh Mục</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Nhập Tên Danh Mục">
                                    </div>
                                </div>
                                @if ($errors->any()) 
                                    <div class="alert alert-danger shadow-sm border-theme-white-2" role="alert">
                                        <div class="d-inline-flex justify-content-center align-items-center thumb-xs bg-danger rounded-circle mx-auto me-1">
                                            <i class="fas fa-xmark align-self-center mb-0 text-white "></i>
                                        </div>
                                        @foreach ($errors->all() as $error)
                                        <strong>Oh snap!</strong> <li>{{ $error }}</li> 
                                        @endforeach
                                    </div>
                                @endif
                                @if (session('message')) 
                                    <div class="alert alert-success shadow-sm border-theme-white-2" role="alert">
                                        <div class="d-inline-flex justify-content-center align-items-center thumb-xs bg-success rounded-circle mx-auto me-1">
                                            <i class="fas fa-check align-self-center mb-0 text-white "></i>
                                        </div>
                                        <strong>Well done!</strong>  {{ session('message') }}.
                                    </div> 
                                @endif
                                <div class="row">
                                    <div class="col-sm-10 ms-auto">
                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                    </div>
                                </div>

                            </form>

                        </div>

                        <!--end card-body-->
                    </div><!--end card-->
                </div>
            </div><!--end row--> 
            <!--end row-->  
    @endsection
