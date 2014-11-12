<?php
class searchController extends BaseController{

	public function search(){
		$searchType=Input::get('searchType');
		//var_dump($searchType);
		$search=new Search;
		if($searchType==0){  //search by name
			//echo "xy";
			$temp=$search->searchname(Input::get('temp'));
		}else{  //search by id
			//echo "xz";
			$temp=$search->searchwriter(Input::get('temp'));
		}
		//echo "pyy";
		return View::make("search")->with(array('booklist' => $temp ));
	}

		public function searchtypebook($type){

		$search=new Search;
	
		$temp=$search->searchbytype($type);

		switch ($type) {
			case '0':
				$typename="Generalities";
				break;

			case '1':
				$typename="Philosophy";
				break;

			case '2':
				$typename="Religion";
				break;
			
			case '3':
				$typename="Social sciences";
				break;

			case '4':
				$typename="Language";
				break;
			
			case '5':
				$typename="Science";
				break;
			
			case '6':
				$typename="Technology";
				break;
			
			case '7':
				$typename="Arts and recreation";
				break;
			
			case '8':
				$typename="Literature";
				break;
			
			case '9':
				$typename="History and geography";
				break;
		}
		
		
		
		return View::make("catagory")->with(array('booklist' => $temp ,'typename' => $typename));
	}
}
?>