<?php

require_once('../config/security.php');

$email = $_POST['user_mail'];


$emailValidator = filter_var($email,FILTER_VALIDATE_EMAIL);

// Aqui ocorre a verificação do email !!
if($emailValidator = false){
    echo "This email: ".$email." STATUS : NOT VALID!";

};



// aqui eu gero uma hash criptografada, pego a hora que foi gerada essa hash e o ip do usuário
$hashMD5 = crypt(rand(0,20).time().$_SERVER['REMOTE_ADDR'],'$2a$07$'. SECURITY_HASH);


$takeIp =$_SERVER['REMOTE_ADDR'];
$takeDate = getdate();







?>