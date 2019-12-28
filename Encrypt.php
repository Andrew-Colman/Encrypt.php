<?php

namespace App;

$error = array();

Class Encrypt{

public function encrypt($password){
    
    $pass = password_hash($password, PASSWORD_BCRYPT);
    return $pass;
}

public function decrypt($passwordInput,$passCorrect ){
    if(password_verify($passwordInput,$this->encrypt($passCorrect))){
        return true;
     } else {
        return false; 
    }
}

public function validate($str,$mode){
     //modes:  FILTER_VALIDATE_BOOLEAN / FILTER_VALIDATE_DOMAIN / FILTER_VALIDATE_IP / FILTER_VALIDATE_URL
     //modes:  FILTER_VALIDATE_INT / FILTER_VALIDATE_FLOAT / FILTER_VALIDATE_EMAIL 
    if(filter_var($str,$mode)){  
        return $str;
    } else {
        return false;
    }

}

public function sanitize($str,$mode){
    //modes: FILTER_SANITIZE_EMAIL / FILTER_SANITIZE_STRING / FILTER_SANITIZE_URL 
    //modes: FILTER_SANITIZE_MAGIC_QUOTES / FILTER_SANITIZE_NUMBER_INT / FILTER_SANITIZE_NUMBER_FLOAT
   $str = filter_var($str,$mode );
   return $str;
}

} 
//class encrypt
/*  LOGIN:
$encrypt = new App\Encrypt();
    if($encrypt->decrypt($_POST["thePasswordInput"],$userpassInDB) == true){
        //allow login
    }
    else{
        //deny login
    }
*/

/*  Register:
$encrypt = new App\Encrypt();
$encrypt->encrypt($_POST["thePassword"]);
*/
?>
