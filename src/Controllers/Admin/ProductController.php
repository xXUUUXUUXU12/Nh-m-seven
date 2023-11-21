<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;

class ProductController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $products = (new Product())->all();
       
        $this->renderAdmin("products/index", ["products" => $products]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name' => $_POST['name'],
                'image' => $_FILES['image'],
                'price' => $_POST['price'],
                'date_add' => $_POST['date_add'],
                'description' => $_POST['description'],
            ];

            (new Product())->insert($data);

            header('Location: /admin/products');
        }

        $this->renderAdmin("products/create");
    }

    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'date add' => $_POST['date add'],
                'description' => $_POST['description'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Product())->update($data, $conditions);
            header('Location: /admin/products');
        }

        $product = (new Product())->findOne($_GET["id"]);

        $this->renderAdmin("products/update", ["product" => $product]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Product())->delete($conditions);

        header('Location: /admin/products');
    }
}