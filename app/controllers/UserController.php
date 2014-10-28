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
		return Response::make('user have created');
	}

	public function signout(){ //do end session

		return Redirect::to('/firstpage');;
	}

	public function setting(){
		return View::make("setting");
	}

	public function firstpage(){
		return View::make("firstpage");
	}

	public function signin(){
		$credentials=Input::only('userName','password');
		if(Auth::attempt($credentials)){
			Session::put( 'User', 'value');
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