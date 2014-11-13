<?php

	class User {

		private $id;
		private $userName;
		private $password;
		private $keyBook;
		private $bookList;
        private $finance;



    public function getId()
    {
        return $this->id;
    }

    public function setID($id)
    {
        $this->id = $id;
        
    }
   
    public function getName()
    {
        return $this->userName;
    }
    
    public function setName($userName)
    {
        $this->userName = $userName;
        
    }

    
    public function getPassword()
    {
        return $this->password;
    }
    
    
    public function setPassword($password)
    {
        $this->password = $password;
      
    }

    
    public function getkeyBook()
    {
        return json_decode($this->keyBook);
    }
    
   
    public function setkeyBook($keyBook)
    {
        $this->keyBook = json_encode($keyBook);
    }

    
    public function getbookList()
    {
        return json_decode($this->image);
    }
    
   
    public function setbookList($bookList)
    {
        $this->bookList = json_encode($bookList);
    }

    public function getfinance()
    {
        return $this->finance;
    }

    public function setfinance($finance)
    {
        $this->finance = $finance;
    }

    public function newUser(){
    	$new=new userEloquent;
    	$new->userName=$this->userName;
    	$new->password=$this->password;
    	$new->finance=$this->finance;
    	$new->save();
    }

    public static function getById($id){
        $obj=new User;
    	$data=userEloquent::find($id);
    	if($data==NULL){
            echo "not found";
    		return NULL;
    	}
        echo "found";
    	$obj->id=$data->id;
    	$obj->userName=$data->userName;
    	$obj->password=$data->password;
        $obj->finance=$data->finance;

    	return $obj;

    }

    public function editUser(){
        $edit=new User;
    	$edit=userEloquent::find($this->id);
    	$edit->password=$this->password;
    	$edit->finance=$this->finance;
    	$edit->save();
    }


}




  ?>