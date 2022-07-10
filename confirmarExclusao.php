<div class="modal" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php if ($nomePagina == "Adoções criadas") { ?>Excluir adoção<?php } else { ?> Contato do protetor <?php } ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><?php if ($nomePagina == "Adoções criadas") { ?>
                        Tem certeza que deseja excluir essa adoção?
                    <?php } else {
                        $sqlUsuario = "SELECT email FROM usuario";
                        $emailUsuario = mysqli_fetch_array(mysqli_query($connect, $sqlUsuario));
                        echo $emailUsuario['email'];
                    } ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <?php if ($nomePagina == "Adoções criadas") { ?>
                    <form action="deletar.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                        <button name="btn-delete" class="btn btn-danger">Excluir</button><?php } ?>
                    </form>
            </div>
        </div>
    </div>
</div>