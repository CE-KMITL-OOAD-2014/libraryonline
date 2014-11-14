<?php

	class buyBook {

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

      public function newreqkey()
      {
          $new=new buybookEloquent;
          $new->bookid=$this->bookid;
          $new->userid=$this->userid;
          $new->save();
      } 
      public function deletereg($tuserid,$tbookid)
      {
        $regg=buybookEloquent::where('userid','=',$tuserid);
        $regg=$regg->where('bookid','=',$tbookid);
        $regg=$regg->delete();
          //return $this->bookid;
      } 

      public function checkreq($tuserid,$tbookid){
        $reqq=buybookEloquent::where('userid','=',$tuserid)->get();
          for($i=0;$i<count($reqq);$i++){
              if($reqq[$i]->bookid==$tbookid)return 1; //have req  
            }
            return 0; 
      }

      public function getbybookid($tbookid){
        $reqq=buybookEloquent::where('bookid','=',$tbookid)->get();

        if (count($reqq)==0) {
          return NULL;
        }

        $tempreq=array();
        for ($i=0; $i < count($reqq); $i++) { 
           $obj=new buyBook;
           $obj->setuserId($reqq[$i]->userid);
           $obj->setbookId($reqq[$i]->bookid);
           $tempreq[$i]=$obj;
        }

        return $tempreq;
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