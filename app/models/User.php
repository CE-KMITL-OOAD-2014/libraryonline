<?php

	class User {

		private $userID;
		private $userName;
		private $password;
		private $keyBook;
		private $bookList;
        private $finance;



    public function getId()
    {
        return $this->userID;
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
        return this->finance;
    }

    public function setfinance($finance)
    {
        $this->finance=finance;
    }

    public function newUser(){
    	$new=new userEloquent;
    	$new->userName=$this->userName;
    	$new->password=$this->password;
    	$new->finance=$this->finance;
    	$new->save();
    }

    public static function getById($userID){
    	$data=userEloquent::find($userID);
    	if($data==NULL){
    		return NULL;
    	}

    	$obj=new User;
    	$obj->userID=$data->userID;
    	$obj->userName=$data->userName;
    	$obj->password=$data->password;
    	$obj->email=$data->email;
        $obj->finance=$data->finance;

    	return $obj;

    }

    public function editUser(){
    	$edit=userEloquent::find($this->id);
    	$edit->userName=$this->userName;
    	$edit->password=$this->password;
    	$edit->finance=$this->finance;
    	$edit->save();
    }

}




  ?>