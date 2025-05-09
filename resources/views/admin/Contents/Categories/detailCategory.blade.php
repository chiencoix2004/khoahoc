@extends('admin.layouts.main')
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
                            <li class="breadcrumb-item active">Chi Tiết Danh Mục</li>
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
                                <h4 class="card-title">Danh Mục Cha</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table  mb-0 table-centered">
                                <thead class="table-light">
                                    <tr>
                                        <th>Tên Danh Mục</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{ asset('assets/admin/images/logos/lang-logo/chatgpt.png') }}"
                                                alt="" class="rounded-circle thumb-md me-1 d-inline">
                                            {{ $detailCategory->name }}
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown d-inline-block">
                                                <a class="dropdown-toggle arrow-none" id="dLabel11"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                    {{-- <a class="dropdown-item" href="#">Creat Project</a> --}}

                                                    <a href="javascript:void(0);" class="edit-btn"
                                                        data-id="{{ $detailCategory->id }}"
                                                        data-name="{{ $detailCategory->name }}"
                                                        data-slug="{{ $detailCategory->slug }}">

                                                        <div class="dropdown-item"> Sửa </div>
                                                    </a>
                                                </div>


                                            </div>
                                        </td>
                                    </tr>
                                    {{-- Modal của danh mục cha --}}
                                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Sửa Danh Mục
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST"
                                                    action="{{ route('admin.categories.updateCategory') }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <input type="hidden" id="id" name="id">
                                                            <input type="hidden" id="slug" name="slug">
                                                            <label for="name" class="form-label">Tên
                                                                Danh
                                                                Mục</label>
                                                            <input type="text" class="form-control" id="name"
                                                                name="name" required>
                                                            <br>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Hủy</button>
                                                        <button type="submit" class="btn btn-primary">Lưu
                                                            thay
                                                            đổi</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>


                                    <!-- Hiển thị danh mục com -->
                                    @foreach ($detailCategory->children as $child)
                                        <tr>
                                            <!-- Thêm khoảng trắng để tạo sự thụt lề cho các cấp con -->
                                            <td>
                                                {!! str_repeat('&nbsp;', $child->level * 2) !!}
                                                Danh Mục Con
                                                <img src="{{ asset('assets/admin/images/logos/lang-logo/gdrive.png') }}"
                                                    alt="" class="rounded-circle thumb-md me-1 d-inline">
                                                <!-- Thụt lề dựa trên cấp -->
                                                {{ $child->name }}
                                            </td>
                                            <td class="text-end">
                                                <div class="dropdown d-inline-block">
                                                    <a class="dropdown-toggle arrow-none" id="dLabel11"
                                                        data-bs-toggle="dropdown" href="#" role="button"
                                                        aria-haspopup="false" aria-expanded="false">
                                                        <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                        {{-- Nếu bạn có thêm các mục khác như tạo dự án thì có thể bỏ chú thích --}}
                                                        <!-- <a class="dropdown-item" href="#">Creat Project</a> -->

                                                        <a href="javascript:void(0);" class="edit-btnSub"
                                                            data-id="{{ $child->id }}" data-name="{{ $child->name }}"
                                                            data-slug="{{ $child->slug }}">
                                                            <div class="dropdown-item"> Sửa </div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <div class="modal fade" id="editSubModal2" tabindex="-1"
                                        aria-labelledby="editSubModal2Label" aria-hidden="true">
                                        <!-- Nội dung modal -->
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editSubModal2Label">Sửa Danh
                                                        Mục</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST" {{-- action="{{ route('admin.categories.updateSubCategory') }}" --}}>
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <!-- Hidden fields to store the ID and slug -->
                                                            <input type="hidden" id="idSub2" name="id">
                                                            <input type="hidden" id="slugSub2" name="slug">

                                                            <!-- Name input -->
                                                            <label for="nameSub2" class="form-label">Tên Danh
                                                                Mục</label>
                                                            <input type="text" class="form-control" id="nameSub2"
                                                                name="name" required>

                                                            <br>

                                                            <!-- Discount input -->
                                                            <label for="discountSub2" class="form-label">Chiết
                                                                Khấu Sàn (%)</label>
                                                            <input type="number" class="form-control" id="discountSub2"
                                                                name="discount" required min="0" max="100">

                                                            <br>

                                                            <!-- Status input -->
                                                            <label for="statusSub2" class="form-label">Trạng
                                                                Thái</label>
                                                            <select name="status" id="statusSub2" class="form-control">
                                                                <option value="1">Hoạt Động</option>
                                                                <option value="2">Không HĐ</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Hủy</button>
                                                        <button type="submit" class="btn btn-primary">Lưu
                                                            thay đổi</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="editSubModal" tabindex="-1"
                                        aria-labelledby="editSubModalLabel" aria-hidden="true">
                                        <!-- Nội dung modal -->
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editSubModalLabel">Sửa Danh
                                                        Mục</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form method="POST"
                                                    action="{{ route('admin.categories.updateSubCategory') }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <!-- Hidden fields to store the ID and slug -->
                                                            <input type="hidden" id="idSub" name="id">
                                                            <input type="hidden" id="slugSub" name="slug">

                                                            <!-- Name input -->
                                                            <label for="nameSub" class="form-label">Tên Danh
                                                                Mục</label>
                                                            <input type="text" class="form-control" id="nameSub"
                                                                name="name" required>
                                                            <br>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Hủy</button>
                                                        <button type="submit" class="btn btn-primary">Lưu
                                                            thay đổi</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table><!--end /table-->
                        </div><!--end /tableresponsive-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <!--end col-->
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Thêm Danh Mục Con</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <form action="{{ route('admin.categories.addSubCategory') }}" method="POST">
                            @csrf

                            <input type="hidden" name="parent_id" value="{{ $detailCategory->id }}">
                            <input type="hidden" name="slug" value="{{ $detailCategory->slug }}">
                            <div class="mb-3 row">
                                <label for="horizontalInput1" class="col-sm-2 col-form-label">Danh Mục Con</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nhập tên danh mục con">
                                </div>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger shadow-sm border-theme-white-2" role="alert">
                                    <div
                                        class="d-inline-flex justify-content-center align-items-center thumb-xs bg-danger rounded-circle mx-auto me-1">
                                        <i class="fas fa-xmark align-self-center mb-0 text-white "></i>
                                    </div>
                                    @foreach ($errors->all() as $error)
                                        <strong>Oh snap!</strong>
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif
                            @if (session('message'))
                                <div class="alert alert-success shadow-sm border-theme-white-2" role="alert">
                                    <div
                                        class="d-inline-flex justify-content-center align-items-center thumb-xs bg-success rounded-circle mx-auto me-1">
                                        <i class="fas fa-check align-self-center mb-0 text-white "></i>
                                    </div>
                                    <strong>Well done!</strong> {{ session('message') }}.
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
            </div> <!--end col-->
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const editBtns = document.querySelectorAll('.edit-btn');

                editBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        // Lấy dữ liệu từ thuộc tính data-*
                        const id = btn.getAttribute('data-id');
                        const name = btn.getAttribute('data-name');
                        const slug = btn.getAttribute('data-slug');

                        // Cập nhật giá trị vào modal
                        document.getElementById('id').value = id; // ID
                        document.getElementById('name').value = name; // Name 
                        document.getElementById('slug').value = slug; // Discount

                        // Mở modal
                        var myModal = new bootstrap.Modal(document.getElementById('editModal'));
                        myModal.show();
                    });
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                const editBtnsSub = document.querySelectorAll('.edit-btnSub');

                editBtnsSub.forEach(btn => {
                    btn.addEventListener('click', function() {
                        // Lấy dữ liệu từ thuộc tính data-*
                        const idSub = btn.getAttribute('data-id');
                        const nameSub = btn.getAttribute('data-name');
                        const slugSub = btn.getAttribute('data-slug');

                        // Cập nhật giá trị vào các trường trong modal
                        document.getElementById('idSub').value = idSub;
                        document.getElementById('nameSub').value = nameSub;
                        document.getElementById('slugSub').value = slugSub;

                        // Mở modal
                        var myModal = new bootstrap.Modal(document.getElementById('editSubModal'));
                        myModal.show();
                    });
                });
            });
        </script>

        <style>
            .text-danger {
                color: red;
                font-size: 12px;
                margin-top: 5px;
            }
        </style>
    @endsection
