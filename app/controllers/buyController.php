<?php
class buyController extends BaseController{

  public function buybook($id)
  {
    $chk=new buyBook;
    if ($chk->checkreq(Auth::user()->id,$id)==1) {
     echo "Please wait until the writer accepts your request.";
    			//return Redirect::to('home');
   }else{
     return View::make("buy")->with(array('id' => $id));
   }
   
 }	

 public function showfinance($id)
 {
   $book=Book::getById($id);
   $user=User::getById($book->getwriterID());
   $new=new buyBook;
   $new->setuserId(Auth::user()->id);
   $new->setbookId($id);
   $new->newreqkey();

   return View::make("finance")->with(array('name'=> $book->getName() ,'finance' => $user->getfinance())); 
 }

 public function showrequest(){
   $obj=new Search;
   $getreq=new buyBook;
   $allrequest=array();
   $k=0;
   $book=$obj->searchwriter(Auth::user()->id);

   for ($i=0; $i < count($book) ; $i++) { 
    $temp=$getreq->getbybookid($book[$i]->getId());
    for ($j=0; $j < count($temp); $j++) { 
     $allrequest[$k]=$temp[$j];
     $k++;
   }
 }
   		//var_dump($allrequest);
 return View::make("request")->with(array('request' => $allrequest));
}

public function addkey($userid,$bookid)
{
 $key=new accessBook;
 $key->setuserId($userid);
 $key->setbookId($bookid);
 $key->addnewkey();
 $reqq=new buyBook;
 $reqq->deletereg($userid,$bookid);
 return Redirect::to('request'); 
}

public function canclereq($userid,$bookid)
{
  $new=new buyBook;
  $new->deletereg($userid,$bookid);
  return Redirect::to('/request'); 
}
}
?>