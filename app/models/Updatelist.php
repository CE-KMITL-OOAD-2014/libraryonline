<?php

class Updatelist{
	
	//pop the last 10 books from the book database
   public function getupdatelist()
    {
      $temp=bookEloquent::all();
      $size=count($temp);
      if($size<10){
        $num=$size;
      }else{
        $num=10;
      }
      $list=array(); 

      for($j=0;$j<$num;$j++){
        $i=$size-($j+1);
          $obj=new Book;
          $obj->setId($temp[$i]->id);
          $obj->setName($temp[$i]->bookName);
          $obj->setwriterID($temp[$i]->writerID);
          $obj->setisPublic($temp[$i]->isPublic);
          $obj->setbookDetail($temp[$i]->bookDetail);
          $obj->setbookPrice($temp[$i]->bookPrice);
          $obj->setbookType($temp[$i]->bookType);
          $obj->setavgbookRate($temp[$i]->avgbookRate);
          $list[$j]=$obj;
        }

      //var_dump($list);
        return $list;
    }

	//pop 10 books that have rate 5, if there are not fully in 10 books, the function will pop the books that have rate 4
    public function gettoplist()
    {
      $temp=bookEloquent::where('avgbookRate','=', 5 )->get();
      
      $size=count($temp);
      if($size<10){
        $num=$size;
        $chk=0;
      }else{
        $num=10;
        $chk=1;
      }
      $list=array();

      for($i=0;$i<$num;$i++){
          $obj=new Book;
          $obj->setId($temp[$i]->id);
          $obj->setName($temp[$i]->bookName);
          $obj->setwriterID($temp[$i]->writerID);
          $obj->setisPublic($temp[$i]->isPublic);
          $obj->setbookDetail($temp[$i]->bookDetail);
          $obj->setbookPrice($temp[$i]->bookPrice);
          $obj->setbookType($temp[$i]->bookType);
          $obj->setavgbookRate($temp[$i]->avgbookRate);
          $list[$i]=$obj;
        }
        if ($chk==0) {
          $temp2=bookEloquent::where('avgbookRate','=', 4 )->get();
          $size2=count($temp2);
          if ($size+$size2<10) {
            $num=($size+$size2);
          }else{
            $num=10;
          }
          for($j=$size;$j<$num;$j++){
            $i=$j-$size;
             $obj=new Book;
             $obj->setId($temp2[$i]->id);
             $obj->setName($temp2[$i]->bookName);
             $obj->setwriterID($temp2[$i]->writerID);
             $obj->setisPublic($temp2[$i]->isPublic);
             $obj->setbookDetail($temp2[$i]->bookDetail);
             $obj->setbookPrice($temp2[$i]->bookPrice);
             $obj->setbookType($temp2[$i]->bookType);
             $obj->setavgbookRate($temp2[$i]->avgbookRate);
             $list[$j]=$obj;
          }

        }

      
        return $list;
    }

}




?>