<?PHP
declare(strict_types= 1);


$arrtype=["string"=>["Uname"],"int"=>["salary","Age"]];
    if(! empty($_POST['Uname'])&& ! empty($_POST['Age'])&& ! empty($_POST['salary'])){


$Data=ConvertType( $arrtype);

PrintData($Data["Uname"],$Data["Age"],$Data["salary"]);
}


function ConvertType($arr, $parentKey=''):array{
    $result = [];
    foreach($arr as $k => $v){
        if(is_array($v)){ 
            $result +=ConvertType($v, $k); 
        } 
        else {
          $result[$v]= match($parentKey){
           "string"=> trim((string)$_POST[$v]),   
           "int"=> (int)$_POST[$v]
           };
            
        }

    }
return $result;

    
}
function PrintData(string $name,int $uage,int $usalary): void {


    

  /*  echo "Name=>" .htmlspecialchars($name)." <br>";
    echo "Age=>  $uage <br>";
    echo "Salary=>  $usalary";
*/

$arr=$name.",".$uage.",".$usalary."";

$str=explode(",",$arr);

if(file_put_contents("info.json",data: json_encode($str,JSON_PRETTY_PRINT)))

echo "done! saved";


}


echo  "<form action='#' method='post'>
    <label >الاسم:</label><br>
    <input type='text' id='Uname' name='Uname' >
    <br>
    <label >العمر:</label><br>
    <input type='number' id='Age' name='Age'>
    <br>
<label >الراتب:</label><br>
    <input type='number' id='salary' name='salary' >
    <br>

    <input type='submit' value='ارسال البيانات '>
  </form>";

if(file_exists("info.json")){
  if(! filesize("info.json")==0)
{

echo "<pre>";


echo json_encode(file_get_contents("info.json"));



}
}



