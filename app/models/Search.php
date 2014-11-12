<?php

	class Search {

		//private $id;

		public function searchname($name)
    	{
        $temp=bookEloquent::where('bookName','LIKE',$name)->get();
        
        $size=count($temp);
        if($size==0){ 
          //echo "string";
          return NULL; }

        $book=array( );

        for($i=0;$i<$size;$i++){
          $obj=new Book;
          $obj->setId($temp[$i]->id);
          $obj->setName($temp[$i]->bookName);
          $obj->setwriterID($temp[$i]->writerID);
          $obj->setisPublic($temp[$i]->isPublic);
          $obj->setbookDetail($temp[$i]->bookDetail);
          $obj->setbookPrice($temp[$i]->bookPrice);
          $obj->setbookType($temp[$i]->bookType);
          $obj->setavgbookRate($temp[$i]->avgbookRate);
          $book[$i]=$obj;
        }
          //var_dump($book);
      		return $book;
   		}	

    	public function searchwriter($id)
    	{
        $temp=bookEloquent::where('writerID','=',$id)->get();
        
        $size=count($temp);
        if($size==0){ 
          //echo "string";
          return NULL; }

        $book=array( );

        for($i=0;$i<$size;$i++){
          $obj=new Book;
          $obj->setId($temp[$i]->id);
          $obj->setName($temp[$i]->bookName);
          $obj->setwriterID($temp[$i]->writerID);
          $obj->setisPublic($temp[$i]->isPublic);
          $obj->setbookDetail($temp[$i]->bookDetail);
          $obj->setbookPrice($temp[$i]->bookPrice);
          $obj->setbookType($temp[$i]->bookType);
          $obj->setavgbookRate($temp[$i]->avgbookRate);
          $book[$i]=$obj;
        }
          //var_dump($book);
          return $book;
    	}


	
	}
 ?>