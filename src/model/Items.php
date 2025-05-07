<?php 
declare(strict_types=1);
namespace App\Model;

class Items {

    private int $ItemId;
    private string $ItemName;
    private int $Category;
    private float $ItemPric;
    private string $ItemDescription;
    private string $ItemImg;
    private bool $ItemStatus;
    private string $TimeStamp;

    public function __construct() {
    }

    public function SetItemId(int $ItemId): Items {
        $this->ItemId = $ItemId;
        return $this;
    }

    public function GetItemId(): int {
        return $this->ItemId;
    }

    public function SetItemName(string $ItemName): Items {
        $this->ItemName = $ItemName;
        return $this;
    }

    public function GetItemName(): string {
        return $this->ItemName;
    }

    public function SetCategory(int $Category): Items {
        $this->Category = $Category;
        return $this;
    }

    public function GetCategory(): int {
        return $this->Category;
    }

    public function SetItemPric(float $ItemPric): Items {
        $this->ItemPric = $ItemPric;
        return $this;
    }

    public function GetItemPric(): float {
        return $this->ItemPric;
    }

    public function SetItemDescription(string $ItemDescription): Items {
        $this->ItemDescription = $ItemDescription;
        return $this;
    }

    public function GetItemDescription(): string {
        return $this->ItemDescription;
    }

    public function SetItemImg(string $ItemImg): Items {
        $this->ItemImg = $ItemImg;
        return $this;
    }

    public function GetItemImg(): string {
        return $this->ItemImg;
    }

    public function SetItemStatus(bool $ItemStatus): Items {
        $this->ItemStatus = $ItemStatus;
        return $this;
    }

    public function GetItemStatus(): bool {
        return $this->ItemStatus;
    }

    public function SetTimeStamp(string $TimeStamp): Items {
        $this->TimeStamp = $TimeStamp;
        return $this;
    }

    public function GetTimeStamp(): string {
        return $this->TimeStamp;
    }
}
