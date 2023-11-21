<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Tạo mới Product</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Tạo mới Product</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Thêm mới </h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label for="id" class="form-label">Loại hàng</label>
                                                <select name="id" class="form-control" id="id">
                                                    <?php
                                                    foreach ($listcategories as $categories) {
                                                        extract($categories);
                                                        echo '<option value="' . $id . '">' . $name_categories . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <label for="name">Tên hàng hóa</label>
                                        <input type="text" name="name" class="form-control"><br>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="hinh" class="form-label">Ảnh sản phẩm</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="don_gia" class="form-label">Đơn giá (vnđ)</label>
                                                <input type="number" name="price" id="price" class="form-control">
                                            </div>
                                        <!-- <div class="form-group col-sm-4">
                                            <label for="giam_gia" class="form-label">Giảm giá (vnđ)</label>
                                            <input type="number" name="giam_gia" id="giam_gia" class="form-control">
                                        </div> -->
                                    </div>
                                      
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <?php $today = date_format(date_create(), 'Y-m-d'); ?>
                                            <label for="ngay_nhap" class="form-label">Ngày nhập</label>
                                            <input type="date" name="ngay_nhap" id="ngay_nhap" class="form-control"
                                                value="<?= $today ?>">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <label for="description" class="form-label">Mô tả sản phẩm</label>
                                            <textarea id="txtarea" spellcheck="false" name="description"
                                            class="form-control form-control-lg mb-3" id="textareaExample" rows="3"></textarea>
                                        </div>
                                    </div>

                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/products" class="btn btn-primary mt-3">Quay lại d/s</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>