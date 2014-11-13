<?php
class showController extends BaseController{

	public function ownbooklist(){
		$search=new Search;
		$temp=$search->searchwriter(Auth::user()->id);
		//var_dump($temp[1]->getId());
		return View::make("manage")->with(array('booklist' => $temp ));
	}


	public function bookcontext($id){

		$chk=new accessBook;
		if ($chk->checkaccess($id,Auth::user()->id) == 0) {  //not access
			return Redirect::to('buybook/'.$id); 
		}else{
			//else if access ผ่าน
			$book=Book::getconByID($id);
			$comment=new Comment;
			$temp=$comment->getbookcomment($id);
			//endif
			return View::make("showbook")->with(array('book' => $book , 'comment' => $temp ));
		}
		
	}

	public function addkeytouser($id){
		$new=new accessBook;
		$new->setuserId(Auth::user()->id);
		$new->setbookId($id);
		$new->newreqkey();
		//return 
	}

}
?>