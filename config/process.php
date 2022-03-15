<?php
    include_once("connect.php");


      // ---------UPDATE---------

      if(isset($_POST["name"]) && isset($_POST["id"]) && isset($_POST["phone"]) && isset($_POST["plaque"]) && isset($_POST["model"]) && isset($_POST["color"]) && isset($_POST["observation"])){ 
        
        $id = $_POST["id"];
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $plaque = $_POST["plaque"];
        $model = $_POST["model"];
        $color = $_POST["color"];
        $observation = $_POST["observation"];

        $stmt = $connect->prepare("UPDATE registers SET name =:name, phone =:phone, plaque =:plaque, model =:model, color=:color, observation  =:observation WHERE id =:id" );
       
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":plaque", $plaque);
        $stmt->bindParam(":model", $model);
        $stmt->bindParam(":color", $color);
        $stmt->bindParam(":observation", $observation);

        try {
            $stmt->execute();
            header("Location: ../index.php");

        } catch (PDOExeption $msg) {
            $error = $msg->getMessage();
            echo "Erro: $error";
        }

    
    // ---------CREATE---------
    }else if(isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["plaque"]) && isset($_POST["model"]) && isset($_POST["color"]) && isset($_POST["observation"])){
       
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $plaque = $_POST["plaque"];
        $model = $_POST["model"];
        $color = $_POST["color"];
        $observation = $_POST["observation"];

        $stmt = $connect->prepare("INSERT INTO registers (name, phone, plaque, model, color, observation) VALUES (:name, :phone, :plaque, :model, :color, :observation)" );
       
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":plaque", $plaque);
        $stmt->bindParam(":model", $model);
        $stmt->bindParam(":color", $color);
        $stmt->bindParam(":observation", $observation);

        try {
            $stmt->execute();
            header("Location: ../index.php");

        } catch (PDOExeption $msg) {
            $error = $msg->getMessage();
            print_r("Erro: $error");
        }


        // ---------DELETE---------
    }else if(isset($_POST["id"])){
        $id = $_POST["id"];

        $stmt = $connect->prepare("DELETE FROM registers WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        header("Location: ../index.php");


        // ---------READ---------

    }else if(isset($_GET["id"]) && is_numeric($_GET["id"])){
        $id = $_GET["id"];

        $stmt = $connect->prepare("SELECT * FROM registers WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();


        $reg = $stmt->fetch();
    
    
    // ---------LISTAR TODOS---------
    
    }else {
        $stmt = $connect->prepare("SELECT * FROM registers");
        $stmt->execute();

        $allRegister = $stmt->fetchAll();     

    }

   
    // FECHAR CONEXÃO
    $connect = null;
?>