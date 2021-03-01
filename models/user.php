<?php
require_once 'config/connection.php';
class user
{

    private $name;
    private $lastName;
    private $email;
    private $password;
    private $rol;
    private $image;
    private $db;

    public function __construct()
    {

        $this->db = db::connect();

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $this->db->real_escape_string($name);
    }

    public function getLastname()
    {
        return $this->lastName;
    }

    public function setLastname($lastName)
    {
        $this->lastName = $this->db->real_escape_string($lastName);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
    }

    public function getPassword()
    {
        return $this-> password_hash($this->db->real_escape_string($password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function setPassword($password)
    {
        $this->password =$password;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $this->db->real_escape_string($rol);
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $this->db->real_escape_string($image);
    }

    public function save()
    {
        $result = false;
        $email=$this->getEmail();
        $password=$this->getPassword();

        $sql = "INSERT INTO users VALUES(NULL,'{$this->getName()}','{$this->getLastname()}','{$this->getEmail()}','{$this->getPassword()}','user','{$this->getImage()}');";
        $save = $this->db->query($sql);

        if ($save) {

            $result = true;

        }
        return $result;

    }

    public function login()
    {
        $result=false;
        $email=$this->email;
        $password=$this->password;

        $sql = "SELECT * from users where email ='$email'";
  
       $login= $this->db->query($sql);

        if($login&&$login->num_rows==1){
            $user=$login->fetch_object();

            $verify=password_verify($password,$user->password);
            

            if($verify==true){

                $result=$user;
                
          

            }

        }
     
        return $result;
    }

}
