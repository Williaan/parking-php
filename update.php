<?php
    include_once("templates/header.php");
    include_once("config/process.php");

   

?>
    <h1 class="main-title">Atualizar</h1>
    <div class="container-form">
        <form id="form" action="config/process.php" method="POST">
            <div class="content-inputs">
                <label for="name">Nome:</label>
                <input type="text" placeholder="nome" required id="name" name="name" value="<?= $reg["name"]?>">
                <input type="hidden" id="id" name="id" value="<?= $reg["id"]?>">
            </div>
             <div class="content-inputs">
                <label for="phone">Telefone:</label>
                <input type="text" placeholder="telefone" required id="phone"  maxlength="15" name="phone" value="<?= $reg["phone"]?>">
            </div>
            <div class="content-inputs">
                <label for="placa">Placa:</label>
                <input type="text" placeholder="placa" required id="placa"  maxlength="10" name="plaque" value="<?= $reg["plaque"]?>">
            </div>
            <div class="content-inputs">
                <label for="model">Veículo:</label>
                <input type="text" placeholder="veiculo" required id="model" name="model" value="<?= $reg["model"]?>">
            </div>
            <div class="content-inputs">
                <label for="color">Cor:</label>
                <input type="text" placeholder="cor" required id="color"  maxlength="10" name="color" value="<?= $reg["color"]?>">
            </div>
            <textarea name="observation" id="observation" cols="30" rows="10" placeholder="Coloque uma observação"><?= $reg["observation"]?></textarea>
            <div class="container-btn">
                <button type="submit">Atualizar</button>
            </div>             
        </form>
    </div>
 
<?php
    include_once("templates/footer.php");
?>