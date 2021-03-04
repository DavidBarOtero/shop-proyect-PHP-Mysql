<?php
require_once 'helpers/Utils.php';
require_once 'models/item.php';

if (!isset($_SESSION)) {

    session_start();

}
class itemController
{

    public function index()
    {

        require_once "views/items/index.php";

    }

    public function manageItems()
    {

        Utils::isAdmin();
        $item = new Item();
        $items = $item->getAll();

        require_once "views/items/manage.php";

    }

    public function save()
    {

        if (isset($_POST)) {

            $item = new Item();
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $category = isset($_POST['category']) ? $_POST['category'] : null;
            $description = isset($_POST['description']) ? $_POST['description'] : null;
            $prize = isset($_POST['prize']) ? $_POST['prize'] : null;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : null;
            $file=$_FILES['image'];
            $fileName=$file['name'];
            $mimeType=$file['type'];
            $errors = array();

            if($mimeType=="image/jpg"||$mimeType=='image/jpeg'||$mimeType=='image/png'||$mimeType=="image/gif"){

                if(!is_dir('uploads/images')){

                    mkdir('uploads/images',0777,true);

                }

                move_uploaded_file($file['tmp_name'],'uploads/images'.$fileName);
            
            $item->setImage($fileName);
            
            }

            if (isset($name) && $name != null && !is_numeric($name)) {

                $item->setName($name);

            } else {

                $errors['name'] = "You have a error in your item name";

            }if (is_numeric($category) && $category != null) {

                $item->setCategoryid($category);

            } else {

                $errors['category'] = "You have a error in your item category";

            }if ($description != null) {

                $item->setDescription($description);

            } else {

                $errors['description'] = "You have a error in your item description";

            }

            if (is_numeric($prize) && $prize != null) {

                $item->setPrize($prize);

            } else {

                $errors['prize'] = "You have a error in your item prize";

            }
            if (is_numeric($stock) && $stock != null) {

                $item->setStock($stock);

            } else {

                $errors['stock'] = "You have a error in your item stock";

            }
            if (count($errors) == 0) {

                $item->save();

                header('location:' . BASE_URL . "item/index");

            } else {
                
               
                

                header('location:' . BASE_URL . "item/create");
            }

        }

    }

    public function create()
    {

        Utils::isAdmin();
        $category = new Category();
        $categories = $category->getCategories();

        require_once 'views/items/create.php';
    }

}
