<?php
class showController extends BaseController{

	public function ownbooklist(){
		$search=new Search;
		$temp=$search->searchwriter(Auth::user()->id);
		//var_dump($temp[1]->getId());
		return View::make("manage")->with(array('booklist' => $temp ));
	}

	public function bookcontext($id){
		$book=Book::getconByID($id);
		//$allComments = CommentController::showcomment($id);
		$comment=new Comment;
		$temp=$comment->getbookcomment($id);
		//var_dump($book);
		return View::make("showbook")->with(array('book' => $book , 'comment' => $comment ));
	}

}
?>