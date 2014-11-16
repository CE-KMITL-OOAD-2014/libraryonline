<?php  
class UserController extends BaseController{

	public function __construct()
{
    $this->beforeFilter('force.ssl');
}
	
	public function getsignup(){
		if (Auth::check()) {
			return Redirect::to('../../../home');
		}
		 return View::make("signup");  
	}

	public function postsignup(){ 
		$user=new User;
		$user->setName(Input::get('userName'));
		$user->setPassword(Hash::make(Input::get('password')));
		$user->setfinance(Input::get('finance'));
		$user->newUser();
		echo "user has created";
		return Redirect::to('/firstpage');
	}

	public function signout(){ //do end session
		//Session::flush();
		Auth::logout();
		echo "log out";
		return Redirect::to('/firstpage');
	}

	public function postsetting(){
		$user=new User;
		$user->setId(Auth::user()->id);
		$user->setPassword(Hash::make(Input::get('password')));
		$user->setfinance(Input::get('finance'));
		$user->editUser();
		echo "data has been change";
		return View::make("setting");
	}

	public function getsetting(){

		return View::make("setting");
	}

	public function firstpage(){
		if (Auth::check()) {
			return Redirect::to('../../../home');
		}
		return View::make("firstpage");
	}

	public function signin(){
		$credentials=Input::only('userName','password');
		if(Auth::attempt($credentials)){
			return Redirect::intended('/home');
		}
		return Redirect::to('/firstpage');
	}


	public function test(){
		$book=new User;
		var_dump($book->getnamebyId(1));
		var_dump($book->getIdbyname($book->getnamebyId(1)));
		$book=new Book;
		var_dump($book->getnamebyId(1));
		return '----- pp';
	}




}

?>