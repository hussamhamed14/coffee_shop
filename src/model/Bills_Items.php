<?php
declare(strict_types=1);
namespace App\Model;

class Bills_Items {

    private int $Bill_ItemId;
    private int $BillId;
    private int $ItemId;
    private float $ItemPric;
    private int $ItemCount;
    private int $ItemTotal;
    private bool $BillStatus;
    private string $TimeStamp;

    public function __construct() {
    }

    public function SetBill_ItemId(int $Bill_ItemId): Bills_Items {
        $this->Bill_ItemId = $Bill_ItemId;
        return $this;
    }

    public function GetBill_ItemId(): int {
        return $this->Bill_ItemId;
    }

    public function SetBillId(int $BillId): Bills_Items {
        $this->BillId = $BillId;
        return $this;
    }

    public function GetBillId(): int {
        return $this->BillId;
    }

    public function SetItemId(int $ItemId): Bills_Items {
        $this->ItemId = $ItemId;
        return $this;
    }

    public function GetItemId(): int {
        return $this->ItemId;
    }

    public function SetItemPric(float $ItemPric): Bills_Items {
        $this->ItemPric = $ItemPric;
        return $this;
    }

    public function GetItemPric(): float {
        return $this->ItemPric;
    }

    public function SetItemCount(int $ItemCount): Bills_Items {
        $this->ItemCount = $ItemCount;
        return $this;
    }

    public function GetItemCount(): int {
        return $this->ItemCount;
    }

    public function SetItemTotal(int $ItemTotal): Bills_Items {
        $this->ItemTotal = $ItemTotal;
        return $this;
    }

    public function GetItemTotal(): int {
        return $this->ItemTotal;
    }

    public function SetBillStatus(bool $BillStatus): Bills_Items {
        $this->BillStatus = $BillStatus;
        return $this;
    }

    public function GetBillStatus(): bool {
        return $this->BillStatus;
    }

    public function SetTimeStamp(string $TimeStamp): Bills_Items {
        $this->TimeStamp = $TimeStamp;
        return $this;
    }

    public function GetTimeStamp(): string {
        return $this->TimeStamp;
    }
}
