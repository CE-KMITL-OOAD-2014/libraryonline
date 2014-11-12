<?php
	class CommentController extends BaseController {
		public function showcomment($id)
		{
			$comment=new Comment;
			$temp=$comment->getbookcomment($id);
			return $temp;
		}

		public function postcomment($id){
			$comments = new Comment;
			$comments->setComment(Input::get('Comment'));
			$comments->setrate(Input::get('rate'));
			$comments->setuserID(Auth::user()->id);
			$comments->setbookID($id);
			$comments->newComment();

			//var_dump(Input::get('rate'));
			return Redirect::to('/showbook/'.$id);
		}
	}