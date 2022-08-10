<div class="row">
    <div class="col-md-9">
        <h2>Fale conosco</h2>
        <hr />
        <form action="envio_email.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Seu nome</label>
                <input type="text" class="form-control" required name="nome" id="nome" placeholder="Nome completo">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Seu e-mail</label>
                <input type="email" class="form-control" required name="email" id="email" placeholder="seunome@exemplo.com">
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Escreva-nos</label>
                <textarea class="form-control"  required name="mensagem" id="mensagem" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Indisponível no momento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
        
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>

</div> -->

<?php
if ($_GET['email'] == 'enviado') {
    echo '<br>
        <div class="col-md-9">
            <div class="alert alert-success" role="alert">
                Sua mensagem foi enviada!
            </div>
        </div>
    ';
} elseif ($_GET['email'] == 'naoenviado') {
    echo '<br>
        <div class="col-md-9">
             <div class="alert alert-danger" role="alert">
             Sua mensagem não foi enviada, por favor no contate pelo e-mail: suporte@demolayceara.org.br
              </div>
        </div>
    ';
}
?>