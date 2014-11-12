<?php
class BookController extends BaseController{
	public function getcreate(){
		return View::make("create");
	}

	public function postcreate(){
		$book=new Book;
		$book->setName(Input::get('bookName'));
		$book->setwriterID('userName');
		$book->setwriterID(Auth::user()->id);
		$book->setisPublic(Input::get('isPublic'));
		$book->setbookDetail(Input::get('bookDetail'));
		$book->setbookContext(Input::get('bookContext'));
		$book->setbookPrice(Input::get('bookPrice'));
		$book->setbookType(Input::get('bookType'));
		$book->newBook();
		echo "book has created";
		return Redirect::to('/home');
	}

	public function postedit($id){
		$book=Book::getByID($id);
		
		$book->setisPublic(Input::get('isPublic'));
		$book->setbookDetail(Input::get('bookDetail'));
		$book->setbookContext(Input::get('bookContext'));
		$book->setbookPrice(Input::get('bookPrice'));
		$book->editBook();
		echo "book has edit"; 
		return Redirect::to('/home');
	}

	public function deletee($id){
		$book=Book::getByID($id);
		$book->setwriterID(0);
		$book->setbookDetail("deleted book");
		$book->setbookContext("deleted");
		$book->setbookPrice(0);
		$book->setbookType(10);
		$book->editBook();
		echo "book has deletedd"; 
		return Redirect::to('/home');

	} //unfinish

	public function test(){
		//$book=Book::getById(5);
		$book=new Updatelist;
		var_dump($book->getupdatelist());
		return '----- pop';
	}

}

?>