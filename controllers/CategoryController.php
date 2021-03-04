<?php
require_once 'models/category.php';
require_once 'helpers/Utils.php';

if (!isset($_SESSION)) {

    session_start();

}
class categoryController
{private $categoryId;

    public function __construct()
    {

        $this->db = db::connect();
       

    }

    public function index()
    {
        Utils::isAdmin();
        $category = new Category();
        $categories = $category->getCategories();
        require_once 'views/categories/index.php';

    }

    public function create()
    {
        Utils::isAdmin();
        require_once 'views/categories/create.php';

    }
    public function save()
    {
        Utils::isAdmin();
        if (isset($_POST)) {
            $errors = array();
            $name = isset($_POST['name']) ? $_POST['name'] : null;

            $category = new Category();
            if (isset($name) && $name != null && !is_numeric($name)) {

                $category->setName($_POST['name']);

            } else {
                $errors['save-category'] = "Error on create new category";
                $_SESSION['errors'] = $errors;

            }
            if (!empty($name) && count($errors) == 0) {

                $category->save();

                header('location:' . BASE_URL . "category/index");
            } else {

                header('location:' . BASE_URL . "category/create");

            }

        }

    }

    public function edit()
    {

        Utils::isAdmin();

        require_once 'views/categories/edit.php';

    }

    public function update()
    {
        Utils::isAdmin();
    }

}
