<?php 
declare(strict_types=1);
namespace App\model;

class Sections{
private int $SectionId;
private string $SectionName;
private bool $SectionStatus;
private string $TimeStamp;
public function __construct(){

}

public function SetSectionId(int $SectionId): Sections
{

$this->SectionId= $SectionId;
return $this;

}
public function GetSectionId(): int
{

    return $this->SectionId;
}

public function SetSectionName(string $SectionName): Sections{


    $this->SectionName=$SectionName;
    return $this;
}
public function GetSectionName(): string
{
    return $this->SectionName;
}
public function SetSectionStatus(bool $SectionStatus): Sections
{

$this->SectionStatus=$SectionStatus;    
return $this;


}

public function GetSectionStatus(): bool
{
    return $this->SectionStatus;
}

public function GetTimeStamp(): string
{


    return $this->TimeStamp;
}



}