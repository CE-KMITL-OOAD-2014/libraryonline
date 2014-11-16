<?php

class Book {

  private $id;
  private $bookName;
  private $writerID;
  private $isPublic;
  private $bookDetail;
  private $bookContext;
  private $bookPrice;
  private $bookType;
  private $avgbookRate;



  public function getId()
  {
    return $this->id;
}
public function setId($id)
{
    $this->id = $id;
    
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


public function getavgbookRate()
{
    return $this->avgbookRate;
}

public function setavgbookRate($avgbookRate)
{
    $this->avgbookRate = $avgbookRate;
}

	// save the book into the database and create key of the book (access book) for writer by automatically.
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
   $new->get();
   if ($new->isPublic== 0) {
        	# code...
     $key=new accessBook;
     $key->setbookId($new->id);
     $key->setuserId($new->writerID);
     $key->addnewkey();
 }
 
}

public static function getById($id){
    $obj=new Book;
    $data=bookEloquent::find($id);
    if($data==NULL){
        echo "not found";
        return NULL;
    }

    $obj->id=$data->id;
    $obj->bookName=$data->bookName;
    $obj->writerID=$data->writerID;
    $obj->isPublic=$data->isPublic;
    $obj->bookDetail=$data->bookDetail;
    $obj->bookPrice=$data->bookPrice;
    $obj->bookType=$data->bookType;
    $obj->avgbookRate=$data->avgbookRate;

    return $obj;

}

	//to show the book for reading
public static function getconById($id){
    $obj=new Book;
    $data=bookEloquent::find($id);
    if($data==NULL){
        echo "not found";
        return NULL;
    }

    $obj->id=$data->id;
    $obj->bookName=$data->bookName;
    $obj->writerID=$data->writerID;
    $obj->bookContext=$data->bookContext;
    $obj->avgbookRate=$data->avgbookRate;  
    return $obj;

}



public static function getnamebyId($id){
    $obj=new Book;
    $data=bookEloquent::find($id);
    if($data==NULL){
        return "username not found";
    }
    return $data->bookName;

}


public function editBook(){
    $edit=new Book;
    $edit=bookEloquent::find($this->id);
    	//$edit->bookName=$this->bookName;
    $edit->writerID=$this->writerID;
    $edit->bookDetail=$this->bookDetail;
    $edit->bookContext=$this->bookContext;
    $edit->bookPrice=$this->bookPrice;
    $edit->bookType=$this->bookType;
    
    $edit->save();
}

	//this function will be called when having new rate.
public function editavgrate(){
    $edit=new Book;
    $edit=bookEloquent::find($this->id);
    $edit->avgbookRate=$this->avgbookRate;
    echo "edit";
    $edit->save();
}

	//get every book from the database
public static function getallBook(){
    $data=bookEloquent::all();
    $size=count($data);
    $book= array();
    for($i=0;$i<$size;$i++){           
        $obj=new Book;
        $obj->id=$data[$i]->id;
        $obj->bookName=$data[$i]->bookName;
        $obj->writerID=$data[$i]->writerID;
        $obj->isPublic=$data[$i]->isPublic;
        $obj->bookDetail=$data[$i]->bookDetail;
        $obj->bookPrice=$data[$i]->bookPrice;
        $obj->bookType=$data[$i]->bookType;
        $obj->avgbookRate=$data[$i]->avgbookRate;
        $book[$i]=$obj;
    }
    
    return $book;  
}

public function getwritername(){
    $user=new User;
    return $user->getnamebyId($this->writerID);
} 


}




?>