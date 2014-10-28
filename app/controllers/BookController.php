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
		return Response::make('book have created');
	}

	public function postedit(){

	}

	public function deletee(){
		$book=Book::getByID(5);
		//$book->setId(5);
		$book->setbookDetail("deleted book");
		$book->setbookContext("m");
		$book->setbookPrice(0);
		$book->setbookType(10);
		$book->editBook();
		return Response::make('book have delete');
	} //unfinish

	public function test(){
		$book=Book::getById(5);
		var_dump($book->getName());
		return '----- pop';
	}

}

?>