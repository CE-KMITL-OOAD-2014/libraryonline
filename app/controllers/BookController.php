<?php
class BookController extends BaseController{
	public function getcreate(){
		return View::make("create");
	}

	public function postcreate(){
		$book=new Book;
		$book->setName(Input::get('bookName'));
		$book->setwriterID('userName');
		//$book->setwriterIDInput::get('userName'));
		$book->setisPublic(Input::get('isPublic'));
		$book->setbookDetail(Input::get('bookDetail'));
		$book->setbookContext(Input::get('bookContext'));
		$book->setbookPrice(Input::get('bookPrice'));
		$book->setbookType(Input::get('bookType'));
		$book->newBook();
		echo "book has created";
		return Redirect::to('/home');
	}

	public function postedit(){
		$book=Book::getByID(5);
		//$book->setId(5);
		//$book->setName(Input::get('bookName'));
		//$book->setwriterID('userName');
		//$book->setwriterIDInput::get('userName'));
		$book->setisPublic(Input::get('isPublic'));
		$book->setbookDetail(Input::get('bookDetail'));
		$book->setbookContext(Input::get('bookContext'));
		$book->setbookPrice(Input::get('bookPrice'));
		//$book->setbookType(Input::get('bookType'));
		$book->editBook();
		echo "book has edit"; 
		return View::make("manage");
	}

	public function deletee(){
		$book=Book::getByID(5);
		//$book->setId(5);
		$book->setbookDetail("deleted book");
		$book->setbookContext("deleted");
		$book->setbookPrice(0);
		$book->setbookType(10);
		$book->editBook();
		echo "book has deletedd"; 
		return View::make("manage");

	} //unfinish

	public function test(){
		//$book=Book::getById(5);
		$book=new Updatelist;
		var_dump($book->getupdatelist());
		return '----- pop';
	}

}

?>