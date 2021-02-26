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

}
