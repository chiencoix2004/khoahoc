  @extends('admin.layouts.main')
  @section('title', 'Danh Sách Sản Phẩm | Admin')
  @section('content')
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12">
                  <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                      <h4 class="page-title">Sản Phẩm</h4>
                      <div class="">
                          <ol class="breadcrumb mb-0">
                              <li class="breadcrumb-item"><a href="#">Approx</a>
                              </li><!--end nav-item-->
                              <li class="breadcrumb-item"><a href="#">Sản Phẩm</a>
                              </li><!--end nav-item-->
                              {{-- <li class="breadcrumb-item active">Basic</li> --}}
                          </ol>
                      </div>
                  </div><!--end page-title-box-->
              </div><!--end col-->
          </div><!--end row-->
          <form action="{{ route('admin.products.searchProducts') }}" method="get">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="row align-items-center">
                              <div class="col">
                                  <h4 class="card-title">Danh Sách Sản Phẩm</h4>
                              </div><!--end col-->
                              
                              <div class="col-auto">
                                  <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                                      
                                          <li class="hide-phone app-search">
                                              <input type="search" name="search" class="form-control top-search mb-0"
                                                  placeholder="Nhập từ khóa...">
                                          </li>
                                          &nbsp &nbsp <button type="submit" class="btn bg-success text-white"><i
                                                  class="iconoir-search"></i></button>
                                      </form>
                                  </ul>
                                  &nbsp
                                  <a class="btn bg-primary text-white" href="{{ route('admin.products.addProduct') }}"><i
                                          class="fas fa-plus me-1"></i>Thêm Sản Phẩm</a>
                              </div><!--end col-->

                          </div><!--end row-->
                      </div><!--end card-header-->
                      <div class="card-body pt-0">
                          <div class="table-responsive">
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
                              @if (session('success'))
                                  <div class="alert alert-success shadow-sm border-theme-white-2" role="alert">
                                      <div
                                          class="d-inline-flex justify-content-center align-items-center thumb-xs bg-success rounded-circle mx-auto me-1">
                                          <i class="fas fa-check align-self-center mb-0 text-white "></i>
                                      </div>
                                      <strong>Well done!</strong> {{ session('success') }}.
                                  </div>
                              @endif


                              <table class="table mb-0" id="datatable_1">
                                  <thead class="table-light">
                                      <tr>
                                          <th class="text-start">STT</th>
                                          <th>Ảnh</th>
                                          <th>Tên Sản Phẩm</th>
                                          <th>Giá Gốc</th>
                                          <th>Giá Đã Giảm</th>
                                          <th>Danh Mục</th>
                                          <th>View | Lượt Bán</th>
                                          <th class="text-end">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($listProduct as $item)
                                          <tr>
                                              <td>{{ $loop->iteration }}</td>
                                              <td>
                                                  @if ($item->image == null)
                                                      <img src="{{ asset('assets/admin/images/users/avatar-1.jpg') }}"
                                                          class="me-2 thumb-md align-self-center rounded" alt="...">
                                                  @else
                                                      <img src="{{ asset($item->image) }}" alt="" width="50px"
                                                          height="50px" class="me-2 thumb-md align-self-center rounded">
                                                  @endif
                                              </td>
                                              <td>{{ $item->name }}</td>

                                              @if ($item->price_sale == 0)
                                                  <td>{{ number_format($item->price, 0, '.', ',') }}đ</td>
                                                  <td>{{ number_format($item->price_sale, 0, '.', ',') ?? '0' }}đ</td>
                                              @else
                                                  <td><del>{{ number_format($item->price, 0, '.', ',') }}đ</del></td>
                                                  <td>{{ number_format($item->price_sale, 0, '.', ',') ?? '0đ' }}đ</td>
                                              @endif
                                              <td>{{ $item->category->name ?? 'Đã Xóa' }}</td>
                                              <td>{{ $item->view }} | {{ $item->buys }}</td>
                                              <td class="text-end">
                                                  <a href="{{ route('admin.products.detailProduct', $item->slug) }}"><i
                                                          class="las la-info-circle text-secondary fs-18"></i></a>
                                                  <a href="{{ route('admin.products.editProduct', $item->slug) }}"><i
                                                          class="las la-pen text-secondary fs-18"></i></a>
                                                  <a href="{{ route('admin.products.deleteProduct', $item->slug) }}"
                                                      onclick="event.preventDefault(); 
                                                                 Swal.fire({
                                                                     title: 'Bạn có chắc chắn?',
                                                                     text: 'Bạn sẽ không thể khôi phục lại sản phẩm này!',
                                                                     icon: 'warning',
                                                                     showCancelButton: true,
                                                                     confirmButtonText: 'Xóa',
                                                                     cancelButtonText: 'Hủy'
                                                                 }).then((result) => {
                                                                     if (result.isConfirmed) {
                                                                         window.location.href = '{{ route('admin.products.deleteProduct', $item->slug) }}';
                                                                     }
                                                                 })">
                                                      <i class="las la-trash-alt text-secondary fs-18"></i>
                                                  </a>


                                              </td>
                                          </tr>
                                      @endforeach

                                  </tbody>
                              </table>
                          </div>

                      </div>

                  </div>
                  {{ $listProduct->links('pagination::bootstrap-4') }}
              </div> <!-- end col -->
              {{-- {{ $listUser->links('pagination::bootstrap-4') }} --}}
          </div> <!-- end row -->

          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      @endsection
