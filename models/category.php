<?php

require_once 'config/connection.php';
class category
{
    
    private $name;
    private $db;
 

    public function __construct()
    {

        $this->db = db::connect();

    }

	function getName() { 
 		return $this->name; 
	} 

	function setName($name) {  
		$this->name = $this->db->real_escape_string($name); 
	} 

    public function getCategories(){

       $categories= $this->db->query("SELECT * from categories;");   

        return $categories;

    }

    public function save(){
     
        $result=false;
        $sql="INSERT INTO categories VALUES(NULL,'{$this->getName()}');";
        $save=$this->db->query($sql);
        if($save){

            $result=true;

        }  

        return $result;

    }


}