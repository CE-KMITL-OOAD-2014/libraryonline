<?php

class accessBook {

  private $bookid;
  private $userid;

  public function getbookId()
  {
    return $this->bookid;
  } 
  public function setbookId($bookid)
  {
    $this->bookid = $bookid;
  }
  public function getuserId()
  {
    return $this->userid;
  } 
  public function setuserId($userid)
  {
    $this->userid = $userid;
  }

	  // save key into database
  public function addnewkey()
  {
    $new=new accessbookEloquent;
    $new->bookid=$this->bookid;
    $new->userid=$this->userid;
    $new->save();
    return $new;
  } 
  
		// return the value of isPublic
  public function getisPublic($id)
  {
    $book=Book::getById($id);
          // echo "string";
          //var_dump($book->getisPublic());
    return $book->getisPublic();
  }	
  
		//get data from accessBook database that there are the same bookid for comparing with the userid. If the values match, function returns true, otherwise false.
  public function checkkey($tbookid,$tuserid)
  {
   $key=accessbookEloquent::where('bookid','=',$tbookid)->get();
          //var_dump($key);
   if(count($key)>0){
            //echo "string";
    for($i=0;$i<count($key);$i++){
              if($key[$i]->userid==$tuserid)return 1; //have key  
            }
            return 0;  //don't have key
          }
          return 0; //

          
        }
        
	//If the book is public, the function returns true. Otherwise,  the function goes to checkkey, if checkkey return false, the function returns false, if not the function return true.
        public function checkaccess($tbookid,$tuserid)
        {
          $book=Book::getById($tbookid);
          $chk=new accessBook;
          if ($chk->getisPublic($tbookid) == 0) { //if book is public must return true
            if ($chk->checkkey($tbookid,$tuserid)== 0) { //check key if don't have key must return false
            
            return 0;
          }
        }
        return 1;
      }
      

      public function getwritername(){
        $user=new User;
        return $user->getnamebyId($this->userid);
      } 

      public function getbookname(){
        $book=new Book;
        return $book->getnamebyId($this->bookid);
      } 
    }
    ?>