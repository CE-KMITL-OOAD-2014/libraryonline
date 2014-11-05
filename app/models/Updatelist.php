<?php

class Updatelist{
	private $lastid;

	 public function getupdatelist()
    {
    	$this->lastid = DB::table('Book');
    	$this->lastid = DB::getPdo()->lastInsertId();
        return $this->lastid;
    }

}



?>