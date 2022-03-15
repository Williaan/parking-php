<?php
    require_once "config/connect.php";
    require_once "User.php";    
    
    // Verificação dos campos
    if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["pass"]) && !empty($_POST["pass"])){      

        //Campos vindo do form
        $email =  $_POST["email"];
        $pass = $_POST["pass"];

        
        $usuario = new User();

        if($usuario->login($email, $pass) == true ){
            if(isset($_SESSION["email"])){

                header("Location: index.php"); 

            }else{

                header("Location: login.php"); 
            }

        }else{
            
            header("Location: login.php");  

        }

    }else{

        header("Location: login.php");        
    }
    



?>