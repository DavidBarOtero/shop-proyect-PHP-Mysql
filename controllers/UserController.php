<?php
require_once 'models/user.php';
require_once 'config/connection.php';

if (!isset($_SESSION)) {

    session_start();

}

class userController
{
    public function __construct()
    {

        $this->db = db::connect();

    }
    public function index()
    {

        echo "controlador de usuarios,accion index";

    }

    public function register()
    {

        require_once 'views/user/register.php';

    }

    public function login()
    {
        if (isset($_POST)) {

   

        }

    }

    public function save()
    {

        if (isset($_POST)) {
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $password = isset($_POST['password']) ? $_POST['password'] : null;
            $errors = array();

            $user = new User();
            if (!empty($name) && $name != null && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {

                $user->setName($name);

            } else {

                $errors['name'] = "Please submit a valid name";

            }

            if (!empty($lastName) && $lastName != null && !is_numeric($lastName) && !preg_match("/[0-9]/", $lastName)) {

                $user->setLastName($lastName)

                ;} else {

                $errors['lastName'] = "Please submit a valid Last Name";

            }

            if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $user->setEmail($email);

            } else {

                $errors['email'] = "Please submit a valid Email";

            }

            if (!empty($password)) {

                $user->setPassword($password);

            } else {

                $errors['password'] = "Please submit a valid Password";

            }

            if ($save && count($errors) === 0) {

                $save = $user->save();

            } else {
                $_SESSION['register'] = "failed";

                $_SESSION['errors'] = $errors;
                header('location:' . base_url . 'user/register');
            }

        } else {

            $_SESSION['register'] = "failed";
            header('location:' . base_url . 'user/register');

        }

    }

}
