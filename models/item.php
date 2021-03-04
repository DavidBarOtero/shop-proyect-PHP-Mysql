<?php

require_once 'config/connection.php';
if (!isset($_SESSION)) {

    session_start();

}
class item
{

    private $category_id;
    private $name;
    private $description;
    private $prize;
    private $stock;
    private $offer;
    private $date;
    private $image;
    private $db;
    public function __construct()
    {

        $this->db = db::connect();

    }
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    public function setCategoryid($categoryid)
    {
        $this->categoryid = $this->db->real_escape_string($categoryid);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $this->db->real_escape_string($name);
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $this->db->real_escape_string($description);
    }

    public function getPrize()
    {
        return $this->prize;
    }

    public function setPrize($prize)
    {
        $this->prize = $this->db->real_escape_string($prize);
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $this->db->real_escape_string($stock);
    }

    public function getOffer()
    {
        return $this->offer;
    }

    public function setOffer($offer)
    {
        $this->offer = $this->db->real_escape_string($offer);
    }
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getAll()
    {

        $sql = "SELECT * FROM items ORDER BY id DESC;";
        $items = $this->db->query($sql);

        return $items;

    }

    public function save()
    {
        $result = false;
        $sql = "INSERT INTO items VALUES(NULL,'{$this->getCategoryid()}','{$this->getName()}','{$this->getDescription()}','{$this->getPrize()}','{$this->getStock()}','false',CURDATE(),'{$this->getImage()}');";
        $save=$this->db->query($sql);

       

        if($save){

            $result=true;

        }

        return $result; 

    }

}
