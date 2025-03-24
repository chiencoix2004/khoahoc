@extends('admin.layouts.main')
@section('title', 'Danh Sách Sản Phẩm | Admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Thêm Sản Phẩm</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item"><a href="#">Thêm Sản Phẩm</a>
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
                                <h4 class="card-title">Thêm Sản Phẩm</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <form action="{{ route('admin.products.addProduct') }}" method="POST" id="uploadForm"
                            onsubmit="return submitForm();" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên Sản Phẩm</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                    value="{{ old('name') }}" placeholder="Tên Sản Phẩm">
                                {{-- <small style="color: red" id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small> --}}
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="message">Mô Tả Sản Phẩm</label>
                                        <div id="editor" class="form-control" style="height: auto;"></div>
                                        <input type="hidden" name="description" id="description">
                                        <div id="error-message" style="display: none; color: red;">Nội dung
                                            bài viết không được để trống.</div>
                                    </div>
                                </div>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <label for="image" class="custom-file-label">Chọn Hình Ảnh</label>
                                <input type="file" name="image" class="form-control custom-file-input" id="image"
                                    accept="image/*">
                                @error('croppedImage')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div id="error-image" style="display: none; color: red;"></div>

                            </div>
                            <br>
                            <div class="mb-3">
                                <label>Ảnh Sản Phẩm</label>
                                <div style="width: 100%; text-align: center">
                                    <img id="previewImage" src="#" alt="Ảnh xem trước"
                                        style="max-width: 100%; height: auto; display: none; border: 1px solid #ff0707; border-radius: 6px;">
                                </div>
                            </div>
                            <!-- Ảnh xem trước -->
                            <hr>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Thêm Sản Phẩm</h4>
                            </div><!--end col-->
                        </div> <!--end row-->
                    </div><!--end card-header-->  
                    <div class="card-body pt-0">
                        <div class="mb-3">
                            <label for="" class="form-label">Giá Gốc (VNĐ)</label>
                            <input type="number" class="form-control" value="{{ old('price') }}" name="price"
                                placeholder="Giá Sản Phẩm">
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 
                        <div class="mb-3">
                            <label for="" class="form-label">Giá Đã Giảm (VNĐ)</label>
                            <input type="number" class="form-control" value="{{ old('price_sale') }}" name="price_sale"
                                placeholder="Giá Giảm Sản Phẩm"> 
                                <small  id="emailHelp" class="form-text text-muted"><span style="color: red">Có thể để trống.</span></small>
                        </div> 
                        <div class="mb-3">
                            <label for="" class="form-label">Chương Khóa Học</label>
                            <input type="number" class="form-control" id="" name="total_course"
                                value="{{ old('total_course') }}" placeholder="Chương Khóa Học"> 
                                <small  id="emailHelp" class="form-text text-muted"><span style="color: red">Có thể để trống.</span></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">URL Thư Mục</label>
                            <input type="text" class="form-control" id="" name="folder_url"
                                value="{{ old('folder_url') }}" placeholder="URL Thư Mục"> 
                                <small  id="emailHelp" class="form-text text-muted"><span style="color: red">Có thể để trống.</span></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Lượt Xem Sản Phẩm</label>
                            <input type="number" class="form-control" id="" name="view"
                                value="{{ old('view') }}" placeholder="Lượt Xem Sản Phẩm"> 
                                <small  id="emailHelp" class="form-text text-muted"><span style="color: red">Có thể để trống.</span></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Lượt Bán Sản Phẩm</label>
                            <input type="number" class="form-control" id="" name="buys"
                                value="{{ old('buys') }}" placeholder="Lượt Bán Sản Phẩm"> 
                                <small  id="emailHelp" class="form-text text-muted"><span style="color: red">Có thể để trống.</span></small>
                        </div>
                        <div class="col-xxl-12 col-md-6 mb-4">
                            <label for="category">Danh Mục</label>
                            <select class="form-select" id="category" name="parent_category"
                                onchange="loadSubCategories(this.value)">
                                <option value="{{ old('parent_category') == '' ? 'selected' : '' }}">
                                    Lựa Chọn</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-xxl-12 col-md-6 mb-4">
                            <label for="subCategory">Danh Mục Con</label>
                            <select name="category" class="form-select" id="subCategory" onchange="loadSubSubCategories(this.value)">
                                <option  value="" selected>Lựa Chọn</option>
                                <!-- Các danh mục con sẽ được nạp tự động -->
                            </select> 
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-sm-10 ms-auto">
                                {{-- <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-danger">Cancel</button> --}}
                                <button type="submit" class="btn btn-success">Thêm Gian Hàng</button>
                                <input type="hidden" name="croppedImage" id="croppedImage">
                            </div>
                        </div>
                        </form>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->


        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
        <script src="https://unpkg.com/quill-image-resize-module@3.0.0/image-resize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
        <script>
            // Quill Editor
            document.addEventListener('DOMContentLoaded', function() {
                let cropper; // Cropper instance
                let quill; // Quill Editor instance

                // Khởi tạo Quill Editor
                quill = new Quill('#editor', {
                    theme: 'snow',
                    placeholder: 'Nhập nội dung bài viết...',
                    modules: {
                        toolbar: [
                            [{
                                'header': [1, 2, false]
                            }],
                            [{
                                'size': ['small', false, 'large', 'huge']
                            }],
                            ['bold', 'italic', 'underline'],
                            [{
                                'list': 'ordered'
                            }, {
                                'list': 'bullet'
                            }],
                            [{
                                'color': []
                            }, {
                                'background': []
                            }],
                            ['blockquote', 'link', 'image', 'clean']
                        ]
                    }
                });
                // Lấy giá trị cũ từ server (old('description')) và gán vào Quill Editor
                const oldDescription = `{!! old('description', '') !!}`; // Gán giá trị mặc định nếu không có old()
                if (oldDescription) {
                    quill.root.innerHTML = oldDescription;
                }

                // Xử lý thay đổi file ảnh
                document.getElementById('image').addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const previewImage = document.getElementById('previewImage');
                            previewImage.src = e.target.result;
                            previewImage.style.display = 'block';

                            // Khởi tạo hoặc làm mới Cropper.js
                            if (cropper) cropper.destroy(); // Hủy instance cũ nếu có
                            cropper = new Cropper(previewImage, {
                                aspectRatio: 1, // Tỷ lệ cố định 1:1 (vuông)
                                viewMode: 1, // Che chế độ hiển thị
                                autoCropArea: 0.8, // Khu vực crop mặc định (80% khung hình)
                                movable: true, // Cho phép di chuyển ảnh
                                zoomable: true, // Cho phép phóng to/thu nhỏ 
                                scalable: false // Không cho phép thay đổi tỷ lệ vùng cắt
                            });

                        };

                        reader.readAsDataURL(file);
                    }
                });

                // Submit form
                document.getElementById('uploadForm').addEventListener('submit', function(event) {
                    event.preventDefault(); // Ngăn chặn form submit mặc định

                    // Lấy nội dung từ Quill Editor
                    const contentInput = document.getElementById('description');
                    const editorContent = quill.getText().trim();
                    if (!editorContent) {
                        document.getElementById('error-message').style.display = 'block';
                        return false;
                    }
                    contentInput.value = quill.root.innerHTML;

                    // Xử lý ảnh cắt với Cropper.js
                    if (cropper) {
                        const croppedCanvas = cropper.getCroppedCanvas();
                        const croppedImage = croppedCanvas.toDataURL('image/jpeg');
                        document.getElementById('croppedImage').value = croppedImage;
                    } else {
                        // Hiển thị lỗi khi không có ảnh được cắt
                        const errorMessage = document.getElementById('error-image');
                        errorMessage.style.display = 'block';
                        errorMessage.innerText = 'Vui lòng chọn và cắt ảnh trước khi gửi!';
                        return false;
                    }

                    // Gửi form
                    this.submit();
                });
            });

            // Load danh mục cha
            function loadSubCategories(parentId) {
                $('#subCategory').empty().append('<option value="" selected>Lựa Chọn</option>');
                $('#subSubCategory').empty().append('<option value="" selected>Lựa Chọn</option>');

                if (parentId) {
                    $.ajax({
                        url: `/get-subcategories/${parentId}`,
                        method: 'GET',
                        success: function(data) {
                            const subCategorySelect = $('#subCategory');
                            data.forEach(subCategory => {
                                subCategorySelect.append(
                                    `<option value="${subCategory.id}">${subCategory.name}</option>`);
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error loading subcategories:', error);
                        }
                    });
                }
            }

            // Load danh mục con 
            function loadSubSubCategories(parentId) {
                $('#subSubCategory').empty().append('<option value="" selected>Lựa Chọn</option>');

                if (parentId) {
                    $.ajax({
                        url: `/get-subsubcategories/${parentId}`,
                        method: 'GET',
                        success: function(data) {
                            const subSubCategorySelect = $('#subSubCategory');
                            data.forEach(subSubCategory => {
                                subSubCategorySelect.append(
                                    `<option value="${subSubCategory.id}">${subSubCategory.name}</option>`
                                );
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error loading sub-subcategories:', error);
                        }
                    });
                }
            }

            // Reset danh mục
            function resetAllCategories() {
                $('#subCategory').empty().append('<option value="" selected>Lựa Chọn</option>');
                $('#subSubCategory').empty().append('<option value="" selected>Lựa Chọn</option>');
            }
        </script>
    @endsection
