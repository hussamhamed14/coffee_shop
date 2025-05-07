<?php
declare(strict_types=1);
namespace App\Model;

class Users extends Persions {

    private int $UserId;
    private string $UserName;
    private string $UserPass;
    private string $UserEmail;
    private int $UserTemplate;
    private bool $UserStatus;
    private string $TimeStamp;

    public function __construct() {
    }

    public function SetUserId(int $UserId): Users {
        $this->UserId = $UserId;
        return $this;
    }

    public function GetUserId(): int {
        return $this->UserId;
    }

    public function SetUserName(string $UserName): Users {
        $this->UserName = $UserName;
        return $this;
    }

    public function GetUserName(): string {
        return $this->UserName;
    }

    public function SetUserPass(string $UserPass): Users {
        $this->UserPass = $UserPass;
        return $this;
    }

    public function GetUserPass(): string {
        return $this->UserPass;
    }

    public function SetUserEmail(string $UserEmail): Users {
        $this->UserEmail = $UserEmail;
        return $this;
    }

    public function GetUserEmail(): string {
        return $this->UserEmail;
    }

    public function SetUserTemplate(int $UserTemplate): Users {
        $this->UserTemplate = $UserTemplate;
        return $this;
    }

    public function GetUserTemplate(): int {
        return $this->UserTemplate;
    }

    public function SetUserStatus(bool $UserStatus): Users {
        $this->UserStatus = $UserStatus;
        return $this;
    }

    public function GetUserStatus(): bool {
        return $this->UserStatus;
    }

    public function SetTimeStamp(string $TimeStamp): Users {
        $this->TimeStamp = $TimeStamp;
        return $this;
    }

    public function GetTimeStamp(): string {
        return $this->TimeStamp;
    }
}
