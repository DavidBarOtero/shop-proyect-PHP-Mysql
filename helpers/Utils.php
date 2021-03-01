<?php
class Utils
{

    public static function deleteSession($name)
    {

        if (isset($_SESSION[$name])) {

            $_SESSION[$name] = null;

            unset($_SESSION[$name]);
        }

        return $name;

    }

    public static function showErrors($errors, $field)
    {
        $alert = "";
        if (isset($errors[$field]) && !empty($field)) {

            $alert = "<div id='alert-red'> $errors[$field]</div>";
        }
        return $alert;

    }

    public static function isAdmin(){

        if(isset($_SESSION['user'])&& $_SESSION['user']->role!="admin"){

            header('location:' . BASE_URL);

        }else{
                return true;

        }


    }

    public static function showCategories(){
       
        require_once'models/category.php';

        $category=new Category();

        $categories=$category->getCategories();
       
        return $categories;

    }

}
