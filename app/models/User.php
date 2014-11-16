<?php

class User {

  private $id;
  private $userName;
  private $password;
  private $finance;



  public function getId()
  {
    return $this->id;
}

public function setID($id)
{
    $this->id = $id;
    
}

public function getName()
{
    return $this->userName;
}

public function setName($userName)
{
    $this->userName = $userName;
    
}


public function getPassword()
{
    return $this->password;
}


public function setPassword($password)
{
    $this->password = $password;
    
}


public function getfinance()
{
    return $this->finance;
}

public function setfinance($finance)
{
    $this->finance = $finance;
}

	//record data of user into database
public function newUser(){
   $new=new userEloquent;
   $new->userName=$this->userName;
   $new->password=$this->password;
   $new->finance=$this->finance;
   $new->save();
}

public static function getById($id){
    $obj=new User;
    $data=userEloquent::find($id);
    if($data==NULL){           
      return NULL;
  }
  $obj->id=$data->id;
  $obj->userName=$data->userName;
  $obj->password=$data->password;
  $obj->finance=$data->finance;

  return $obj;

}

public static function getnamebyId($id){
    $data=userEloquent::find($id);
    if($data==NULL){
       return "username not found";
   }

   return $data->userName;

}

public static function getIdbyname($name){
    $data=userEloquent::where('userName','=',$name)->get();

    if(count($data)==0){
       return NULL;
   }

   return $data[0]->id;

} 

public function editUser(){
   $edit=userEloquent::find($this->id);
   $edit->password=$this->password;
   $edit->finance=$this->finance;
   $edit->save();
}




}




?>