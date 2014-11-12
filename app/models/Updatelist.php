<?php

class Updatelist{
	private $lastid;

	 public function getupdatelist()
    {
    	$this->lastid = DB::table('Book');
    	//$this->lastid =DB::connection('mysql')->pdo->lastInsertId();
    	$this->lastid = DB::connection()->getPdo()->lastInsertId();
    	var_dump($this->lastid);
        return $this->lastid;
    }

}



?>