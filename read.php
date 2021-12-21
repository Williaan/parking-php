<?php
    include_once("templates/header.php");
    include_once("config/process.php");

?>
    <h1 class="main-title">Cliente</h1>
    <div class="container-description">
        <p>Nome: <?=$reg["name"]?></p>
        <p>Telefone: <?= $reg["phone"] ?></p>
        <p>Placa: <?= $reg["plaque"] ?></p>
        <p>Modelo: <?= $reg["model"] ?></p>
        <p>Cor: <?= $reg["color"] ?></p>
        <p id="obs">Observações: <?= $reg["observation"] ?></p>
    </div>
    

    

<?php
    include_once("templates/footer.php");
?>