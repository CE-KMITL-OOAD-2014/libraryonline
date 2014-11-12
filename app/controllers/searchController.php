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
}
?>