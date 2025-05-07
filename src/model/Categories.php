<?php 
declare(strict_types= 1);
 namespace App\Model;


 class Categories{

   private int  $CatId;
   private string $CatName;
   private string $CatDescription;
   private string $CatImg;
   private bool $CatStatus;
   private string $TimeStamp;
    
    

    public function __construct( ){


    }


    public function SetCatId(int $CatId ):Categories{
        $this->CatId = $CatId;
        return $this;
    }

    public function GetCatId( ):int{
        return $this->CatId;
    }


    public function SetCatName(string $CatName ):Categories{
        $this->CatName = $CatName;
        return $this;
    }

    public function GetCatName( ):string{
        return $this->CatName;
    }



    public function SetCatDescription(string $CatDescription ):Categories{
        $this->CatDescription = $CatDescription;
        return $this;
    }

    public function GetCatDescription( ):string{
        return $this->CatDescription;
    }

    public function SetCatImg(string $CatImg ):Categories{
        $this->CatImg = $CatImg;
        return $this;
    }

    public function GetCatImg( ):string{
        return $this->CatImg;
    }




    public function SetCatStatus(bool $CatStatus ):Categories{
        $this->CatStatus=$CatStatus;
        return $this;

    }

    public function GetCatStatus():bool{
        return $this->CatStatus;

    }


 }