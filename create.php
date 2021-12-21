<?php
    include_once("templates/header.php");
    include_once("config/process.php");

?>
    <h1 class="main-title">Cadastrar</h1>
    <div class="container-form">
        <form id="form" action="config/process.php" method="POST">
            <div class="content-inputs">
                <label for="name">Nome:</label>
                <input type="text" name="name" placeholder="nome" required id="name" maxlength="200">
            </div>
            <div class="content-inputs">
                <label for="phone">Telefone:</label>
                <input type="text" name="phone" placeholder="telefone" required id="phone" maxlength="15">
            </div>
            <div class="content-inputs">
                <label for="placa">Placa:</label>
                <input type="text" name="plaque" placeholder="placa" required id="placa"  maxlength="10">
            </div>
            <div class="content-inputs">
                <label for="model">Veículo:</label>
                <input type="text" name="model" placeholder="veiculo" required id="model" maxlength="15">
            </div>
            <div class="content-inputs">
                <label for="color">Cor:</label>
                <input type="text" name="color" placeholder="cor" required id="color"  maxlength="10">
            </div>
            <textarea name="observation" id="observation" cols="30" rows="10" placeholder="Coloque uma observação"></textarea>
            <div class="container-btn">
                <button type="submit">Cadastrar</button>
            </div>            
        </form>
    </div>
 
<?php
    include_once("templates/footer.php");
?>