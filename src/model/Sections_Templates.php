<?php 
declare(strict_types= 1);
namespace App\model;

class Sections_Templates{


private int  $STId;
private int $Template;
private int $Section;
private bool $AddPermission;
private bool $UpdatePermission;
private bool $DeletPermission;
private bool $Searchpermission;
private string  $TimeStamp;
public function __construct(){



}


public function SetSTId(int $STId): Sections_Templates{
    $this ->STId = $STId;
    return $this;
}

public function GetSTId(): int{
    return $this ->STId;
}





public function SetTemplate(int $Template): Sections_Templates{
    $this ->Template = $Template;
    return $this;
}

public function GetTemplate(): int{
    return $this ->Template;
}


public function SetSection(int $Section): Sections_Templates{
    $this ->Section = $Section;
    return $this;
}

public function GetSection(): int{
    return $this ->Section;
}


public function SetAddPermission(bool $Permission): Sections_Templates{

    $this->AddPermission = $Permission;
    return $this;

}

public function GetAddPermission(): bool{
    return $this->AddPermission;

}


public function SetUpdatePermission(bool $Permission): Sections_Templates{

    $this->UpdatePermission = $Permission;
    return $this;

}

public function GetUpdatePermission(): bool{
    return $this->UpdatePermission;

}


public function SetDeletePermission(bool $Permission): Sections_Templates{

    $this->DeletPermission = $Permission;
    return $this;

}

public function GrtDeletePermission(): bool{
    return $this->DeletPermission;

}


public function SetSearchPermission(bool $permission): Sections_Templates{
    $this->Searchpermission=$permission;
    return $this;
}


public function GetSearchPermission(): bool{
    return $this->Searchpermission;
}


    
























}