<?php 

declare(strict_types= 1);   
namespace   App\model;

class Persions{

private string $Name;
private bool $Type;
private int $Age;



public function __construct(){



}


public function SetName(string $name): Persions{

$this->Name= $name;
return $this;
}


public function SetAge(int $age): Persions{
    $this->Age=$age;
    return $this;
}

public function SetType(bool $type): Persions{
    $this->Type=$type;
    return $this;
}




public function GetName(): String{

    return $this->Name;
    }
    
    
    public function GetAge(): int{
       return $this->Age;
      
    }
    
    public function GetType(): bool{
        return  $this->Type;
       
    }





}