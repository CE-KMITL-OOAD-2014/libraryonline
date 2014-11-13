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

      public function addnewkey()
      {
          $new=new accessbookEloquent;
          $new->bookid=$this->bookid;
          $new->userid=$this->userid;
          $new->save();
      } 
 


		  public function getisPublic($id)
    	{
      		$book=Book::getById($id);
          // echo "string";
          //var_dump($book->getisPublic());
          return $book->getisPublic();
   		}	

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
          return 1; //

          
    	}

      public function checkaccess($tbookid,$tuserid)
      {
          $book=Book::getById($tbookid);
          $chk=new accessBook;
          if ($chk->getisPublic($tbookid) == 0) { //if book is public must return true
            if ($chk->checkkey($tbookid,$tuserid== 0)) { //check key if don't have key must return false
              
              return 0;
            }
          }
          return 1;
      }
	}
 ?>