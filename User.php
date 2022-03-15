<?php
    class User{

        public function login($email, $pass){
            global $connect;

            $sql = "SELECT * FROM users WHERE email = :email AND pass = :pass";
            $sql = $connect->prepare($sql);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":pass", md5($pass));
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();

                $_SESSION["email"] = $dado["email"];

                return true;

            }else{
                return false;
            }

        }
    }



?>