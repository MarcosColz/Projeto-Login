<?php

class login{


    private $db_connection = null;
    // coleção de mensagens de erros //
    public $errors = array();
    // coleção de mensagens de sucesso/ neutras // 
    public $messages = array();

    public function __construct(){

        session_start();
     
    }

};




?>