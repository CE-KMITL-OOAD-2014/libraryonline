<?php  
class UserController extends BaseController{
	public function getsignup(){
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
		Session::flush();
		echo "log out";
		return Redirect::to('/firstpage');
	}

	public function setting(){
		return View::make("setting");
	}

	public function firstpage(){
		var_dump(Session::get('User'));
		return View::make("firstpage");
	}

	public function signin(){
		$credentials=Input::only('userName','password');
		if(Auth::attempt($credentials)){
			Session::put( 'User',$credentials);
			return Redirect::intended('/home');
		}
		return Redirect::to('/firstpage');
	}


	public function test(){
		$book=User::getById(1);
		var_dump($book->getName());
		return '----- pp';
	}




}

?>