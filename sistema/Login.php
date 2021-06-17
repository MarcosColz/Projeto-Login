<?php

require_once('../config/security.php');

$email = $_POST['user_mail'];

// Aqui ocorre a verificação do email !!
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "This email: ".$email." STATUS : VALID";
}

// aqui eu gero uma hash criptografada, pego a hora que foi gerada essa hash e o ip do usuário
$hashMD5 = crypt(rand(0,20).time().$_SERVER['REMOTE_ADDR'],'$2a$07$'. SECURITY_HASH);


$takeIp =$_SERVER['REMOTE_ADDR'];
$takeDate = getdate();
echo $takeDate;






?>