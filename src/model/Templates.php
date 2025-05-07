<?php

declare(strict_types= 1);


namespace App\model;

class Templates{

private int $TempId;
private string $TempName;
private bool $TempStatus;
private string $TimeStamp;

public function __construct() { //echo "custom";
}





public function SetTempId(int $TempId):Templates{

    $this->TempId =$TempId;
    return $this;



}

public function GetTempId(): int{
return $this->TempId;

}

public function SetTempName(string $TempName): Templates{ 
    
$this->TempName=$TempName;
return $this;

}


public function GetTempName(): string{ 
    
return $this->TempName;

}

public function SetTempStatus(bool $tesmStatus): Templates{

$this->TempStatus=$tesmStatus;
    return $this;
}

public function GetTempStatus(): bool{

    return $this->TempStatus;
}






}

