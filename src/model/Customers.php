<?php
declare(strict_types=1);
namespace App\Model;

class Customers {

    private int $CusomerId;
    private string $CusomerName;
    private string $CusomerMobile;
    private string $CusomerEmaill;
    private string $CustomerAddress;
    private bool $UserStatus;

    public function __construct() {
    }

    public function SetCusomerId(int $CusomerId): Customers {
        $this->CusomerId = $CusomerId;
        return $this;
    }

    public function GetCusomerId(): int {
        return $this->CusomerId;
    }

    public function SetCusomerName(string $CusomerName): Customers {
        $this->CusomerName = $CusomerName;
        return $this;
    }

    public function GetCusomerName(): string {
        return $this->CusomerName;
    }

    public function SetCusomerMobile(string $CusomerMobile): Customers {
        $this->CusomerMobile = $CusomerMobile;
        return $this;
    }

    public function GetCusomerMobile(): string {
        return $this->CusomerMobile;
    }

    public function SetCusomerEmaill(string $CusomerEmaill): Customers {
        $this->CusomerEmaill = $CusomerEmaill;
        return $this;
    }

    public function GetCusomerEmaill(): string {
        return $this->CusomerEmaill;
    }

    public function SetCustomerAddress(string $CustomerAddress): Customers {
        $this->CustomerAddress = $CustomerAddress;
        return $this;
    }

    public function GetCustomerAddress(): string {
        return $this->CustomerAddress;
    }

    public function SetUserStatus(bool $UserStatus): Customers {
        $this->UserStatus = $UserStatus;
        return $this;
    }

    public function GetUserStatus(): bool {
        return $this->UserStatus;
    }
}
