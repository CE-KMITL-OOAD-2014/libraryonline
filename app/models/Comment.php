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
        $temp = commentEloquent::where('bookID', '=', $id)->get();
         $size=count($temp);
        if($size==0){ 
          //echo "string";
          return NULL; }

        $comment=array( );

        for($i=0;$i<$size;$i++){
          $obj=new Comment;
          $obj->setComment($temp[$i]->Comment);
          $obj->setuserID($temp[$i]->userID);
          $obj->setbookID($temp[$i]->bookID);
          $obj->setrate($temp[$i]->rate);
          $comment[$i]=$obj;
        }
        return $comment;
    }
    
        public function getbookrate($id)
    {
        $comment = commentEloquent::where('bookID', '=', $id)->get();
        $allrate=0;
        for($i=0;$i<count($comment);$i++){
            $allrate+=$comment[$i]->rate;
        }
        $ans=$allrate/count($comment);
        return $ans;
    }
    public function getusername(){
            $user=new User;
            return $user->getnamebyId($this->userID);
        } 

}?>