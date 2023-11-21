<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;

class CategoryController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $categories = (new Category())->all();

        $this->renderAdmin("categories/index", ["categories" => $categories]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name_categories' => $_POST['name_categories'],
            ];

            (new Category())->insert($data);

            header('Location: /admin/categories');
        }

        $this->renderAdmin("categories/create");
    }

    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name_categories' => $_POST['name_categories'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Category())->update($data, $conditions);
            header('Location: /admin/categories');
        }

        $category = (new Category())->findOne($_GET["id"]);

        $this->renderAdmin("categories/update", ["category" => $category]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Category())->delete($conditions);

        header('Location: /admin/categories');
    }
}