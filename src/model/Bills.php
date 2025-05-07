<?php
declare(strict_types=1);
namespace App\Model;

class Bills {

    private int $BillId;
    private float $BillTotal;
    private int $BillUser;
    private int $BillCustomer;
    private bool $BillStatus;
    private string $TimeStamp;

    public function __construct() {
    }

    public function SetBillId(int $BillId): Bills {
        $this->BillId = $BillId;
        return $this;
    }

    public function GetBillId(): int {
        return $this->BillId;
    }

    public function SetBillTotal(float $BillTotal): Bills {
        $this->BillTotal = $BillTotal;
        return $this;
    }

    public function GetBillTotal(): float {
        return $this->BillTotal;
    }

    public function SetBillUser(int $BillUser): Bills {
        $this->BillUser = $BillUser;
        return $this;
    }

    public function GetBillUser(): int {
        return $this->BillUser;
    }

    public function SetBillCustomer(int $BillCustomer): Bills {
        $this->BillCustomer = $BillCustomer;
        return $this;
    }

    public function GetBillCustomer(): int {
        return $this->BillCustomer;
    }

    public function SetBillStatus(bool $BillStatus): Bills {
        $this->BillStatus = $BillStatus;
        return $this;
    }

    public function GetBillStatus(): bool {
        return $this->BillStatus;
    }

    public function SetTimeStamp(string $TimeStamp): Bills {
        $this->TimeStamp = $TimeStamp;
        return $this;
    }

    public function GetTimeStamp(): string {
        return $this->TimeStamp;
    }
}
