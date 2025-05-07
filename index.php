<?php  
declare(strict_types= 1);
require_once __DIR__ . '/vendor/autoload.php';

use App\model\Customers;
use App\model\Templates;
use App\model\Users;

$c= new Customers();
$Temp= new Templates();
$user= new Users();
echo $user->SetName("sss")-> GetName();

/*

$Temp->SetTempStatus(false)->SetTempId(11)->SetTempName("SSSSSS");
    ECHO (int)$Temp->GetTempStatus();
    echo"<br/>";
    ECHO $Temp->GetTempName();
    echo"<br/>";
    ECHO (STRING)$Temp->GetTempId();

*/
//var_dump(class_exists('App\model\Users'));





