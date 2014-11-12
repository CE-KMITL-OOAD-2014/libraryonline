<?php
class Comment {

		private $Comment;
		private $userID;
		private $bookID;
        private $rate;

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

    public function getrate()
    {
        return $this->bookID;
    }
    
    public function setrate($rate)
    {
        $this->rate = $rate;
    }

     public function newComment(){
    	$new=new commentEloquent;
    	$new->Comment=$this->Comment;
    	$new->userID=$this->userID;
    	$new->bookID=$this->bookID;
        $new->rate=$this->rate;
    	$new->save();
    }
    

    public function getbookcomment($id)
    {
        $comment = commentEloquent::where('bookID', '=', $id)->get();
        return $comment;
    }
    


}?>