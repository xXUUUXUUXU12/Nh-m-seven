<?php
$img_path = $UPLOAD_URL . '/products/' . $image;
if (is_file($img_path)) {
    $img = "<img src='$img_path' height='80'>";
} else {
    $img = "no photo";
}
?>
<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Product Update</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Product Update</a> </li>
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
                                    <h5>Cập nhật </h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="form-group col-sm-4">
                            <label for="id" class="form-label">Loại hàng</label>
                            <select name="id" class="form-control" id="id">
                                <?php

                                foreach ($loai_hang as $loai_hang) {
                                    extract($loai_hang);
                                    if ($id == $hang_hoa_info['id']) {
                                        $s = "selected";
                                    } else {
                                        $s = "";
                                    }
                                    echo '<option ' . $s . ' value="' . $id . '">' . $name . '</option>';
                                }

                                ?>

                            </select>
                        </div>
                        </div>
                                        
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" value="<?= $product['name'] ?>">

                                        <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <label for="image" class="form-label">Ảnh sản phẩm</label>
                                    <input type="hidden" name="image" id="image" class="form-control"
                                        value="<?= $image ?>">
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <!-- Ảnh sản phẩm ban đầu -->
                                    <?= $img ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="price" class="form-label">Đơn giá (vnđ)</label>
                            <input type="text" name="price" id="price" class="form-control" value="<?= $price ?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="date_add" class="form-label">Ngày nhập</label>
                            <input type="date" name="date_add" id="date_add" class="form-control" required
                                value="<?= $date_add ?>">
                        </div>
                        <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="description" class="form-label">Mô tả sản phẩm</label>
                            <textarea id="txtarea" spellcheck="false" name="description"
                                class="form-control form-control-lg mb-3" id="textareaExample"
                                rows="3"><?= $description ?></textarea>
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