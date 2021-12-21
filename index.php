<?php
    include_once("templates/header.php");
    include_once("config/process.php");

?>
    <h1 class="main-title">Estacionamento <span>BR</span></h1>
    <?php if(count($allRegister)): ?>
        <table class="table">
            <thead class="container-thead">
                <tr class="container-tr">
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Veículo</th>
                    <th>Placa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody class="container-tbody">
            <?php foreach($allRegister as $register): ?>   

                <tr class="tr-tbody">
                    <td><?= $register["id"] ?></td>
                    <td><?= $register["name"] ?></td>
                    <td><?= $register["model"] ?></td>
                    <td><?= $register["plaque"] ?></td>
                    
                    <td class="actions">
                        <a href=<?= "read.php?id=".$register["id"]?> id="view"><i class="fas fa-eye check-icon" title="View"></i></a>
                        <a href=<?= "update.php?id=".$register["id"] ?> id="edit"><i class="far fa-edit edit-icon" title="Edit"></i></a>
                        <form action="config/process.php" method="POST">                    
                            <button type="submit" id="delete" name="id" value="<?= $register["id"] ?>"><i class="fa fa-trash" title="Delete"></i></button>
                        </form>
                    </td>
                </tr>           

            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>

        <div class="container-paragrafo-index">
            <p id="paragrafo-index">Ainda não há cadastros, <a href="create.php">Clique aqui para cadastrar</a></p>
        </div>      

    <?php endif; ?>
                 


<?php
    include_once("templates/footer.php");
?>