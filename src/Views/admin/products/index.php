
<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Product List</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Product List</a> </li>
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
                                    <h5>Danh sách loại hàng</h5>

                                    <a href="/admin/products/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>image</th>
                                                    <th>price</th>
                                                    <th>description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($products as $products) {
                                                    extract($products);
                                                    $imgpath="../upload/".$image;
                                    if (is_file($imgpath)) {
                                        $img="<img src='".$imgpath."' height='120'";
                                    }else{
                                        $img="không có ảnh";
                                    }
                                    ?>
                                                    <tr>
                                                        <td><?= $products['id'] ?></td>
                                                        <td><?= $products['name'] ?></td> 
                                                        <td><img src="<?= $products['img'] ?>" alt=""></td>
                                                        <td><?= $products['price'] ?></td>
                                                        <td><?= $products['description'] ?></td>    
                                                        <td>
                                                            <a href="/admin/products/update?id=<?= $products['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                            <form action="/admin/products/delete?id=<?= $products['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>

                                        </table>
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
</div>