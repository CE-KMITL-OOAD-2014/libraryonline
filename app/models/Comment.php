<?php
class Comment extends Eloquent{

		private $Comment;
		private $userID;
		private $bookID;

	public function getComment()
    {
        return $this->Comment;
    }
    
    public function setComment($Comment)
    {
        $this->Comment = $Comment;
    }
	
	public function getuserID()
    {
        return $this->userID;
    }
    
    public function setuserID($userID)
    {
        $this->userID = $userID;
    }

    public function getbookID()
    {
        return $this->bookID;
    }
    
    public function setbookID($bookID)
    {
        $this->bookID = $bookID;
    }

     public function newComment(){
    	$new=new commentEloquent;
    	$new->Comment=$this->Comment;
    	$new->userID=$this->userID;
    	$new->bookID=$this->bookID;
    	$new->save();
    }


}?>