<?php
declare(strict_types=1);
namespace App\Model;

class Items_Categories {

    private int $Item_CatId;
    private int $CatId;
    private int $ItemId;
    private bool $CatStatus;
    private string $TimeStamp;

    public function __construct() {
    }

    public function SetItem_CatId(int $Item_CatId): Items_Categories {
        $this->Item_CatId = $Item_CatId;
        return $this;
    }

    public function GetItem_CatId(): int {
        return $this->Item_CatId;
    }

    public function SetCatId(int $CatId): Items_Categories {
        $this->CatId = $CatId;
        return $this;
    }

    public function GetCatId(): int {
        return $this->CatId;
    }

    public function SetItemId(int $ItemId): Items_Categories {
        $this->ItemId = $ItemId;
        return $this;
    }

    public function GetItemId(): int {
        return $this->ItemId;
    }

    public function SetCatStatus(bool $CatStatus): Items_Categories {
        $this->CatStatus = $CatStatus;
        return $this;
    }

    public function GetCatStatus(): bool {
        return $this->CatStatus;
    }

    public function SetTimeStamp(string $TimeStamp): Items_Categories {
        $this->TimeStamp = $TimeStamp;
        return $this;
    }

    public function GetTimeStamp(): string {
        return $this->TimeStamp;
    }
}
