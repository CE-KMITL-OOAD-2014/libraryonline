<?php

	class Book {

		private $bookID;
		private $bookName;
		private $writerID;
		private $isPublic;
		private $bookDetail;
        private $bookContext;
        private $bookPrice;
        private $bookType;
        private $bookRate;
        private $avgbookRate;



    public function getId()
    {
        return $this->bookID;
    }

   
    public function getName()
    {
        return $this->bookName;
    }
    
    public function setName($bookName)
    {
        $this->bookName = $bookName;
        
    }

    
    public function getwriterID()
    {
        return $this->writerID;
    }
    
    public function setwriterID($writerID)
    {
        $this->writerID = $writerID;
      
    }

    public function getisPublic()
    {
        return $this->isPublic;
    }
    
    
    public function setisPublic($isPublic)
    {
        $this->isPublic = $isPublic;
      
    }

    
    public function getbookDetail()
    {
        return $this->bookDetail;
    }
    
   
    public function setbookDetail($bookDetail)
    {
        $this->bookDetail = $bookDetail;
    }

    
    public function getbookContext()
    {
        return $this->bookContext;
    }
    
   
    public function setbookContext($bookContext)
    {
        $this->bookContext = $bookContext;
    }

    public function getbookPrice()
    {
        return $this->bookPrice;
    }

    public function setbookPrice($bookPrice)
    {
        $this->bookPrice = $bookPrice;
    }

    public function getbookType()
    {
        return $this->bookType;
    }

    public function setbookType($bookType)
    {
        $this->bookType = $bookType;
    }

    public function getbookRate()
    {
        return $this->bookRate;
    }

    public function setbookRate($bookRate)
    {
        $this->bookRate = $bookRate;
    }

    public function getavgbookRate()
    {
        return $this->avgbookRate;
    }

    public function setavgbookRate($avgbookRate)
    {
        $this->avgbookRate = $avgbookRate;
    }

    public function newBook(){
    	$new=new bookEloquent;
    	$new->bookName=$this->bookName;
    	$new->writerID=$this->writerID;
    	$new->isPublic=$this->isPublic;
        $new->bookDetail=$this->bookDetail;
        $new->bookContext=$this->bookContext;
        $new->bookPrice=$this->bookPrice;
        $new->bookType=$this->bookType;
    	$new->save();
    }

    public static function getById($bookID){
    	$data=userEloquent::find($bookID);
    	if($data==NULL){
    		return NULL;
    	}

    	$obj=new Book;
    	$obj->bookID=$data->bookID;
    	$obj->bookName=$data->bookName;
    	$obj->writerID=$data->writerID;
    	$obj->isPublic=$data->isPublic;
        $obj->bookDetail=$data->bookDetail;
        $obj->bookPrice=$data->bookPrice;
        $obj->bookType=$data->bookType;
        $obj->avgbookRate=$data->avgbookRate;

    	return $obj;

    }

    public function editBook(){
    	$edit=userEloquent::find($this->bookID);
    	$edit->bookName=$this->bookName;
    	$edit->isPublic=$this->isPublic;
    	$edit->bookDetail=$this->bookDetail;
        $edit->bookContext=$this->bookContext;
        $edit->bookPrice=$this->bookPrice;
        $edit->bookType=$this->bookType;
    
    	$edit->save();
    }

    public function addrate($bookRate){
        $add=userEloquent::find($this->bookID);
        $add->bookRate=$bookRate+$this->bookRate;
        $add->save();
    }


}




  ?>