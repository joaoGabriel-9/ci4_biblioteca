<div class="container p-5">
    <?=form_open('Editora/salvar')?>
    <input value='<?=$editora['id']?>'class='form-control' type="hidden" id='id' name='id'>
    <input value='<?=$editora['id_livro']?>'type="hidden" name='id_livro_antigo'>
    <div class="row p-2">
        <div class="col-2">
            <label for="nome">Nome</label>
        </div>
        <div class="col-10">
            <input value='<?=$editora['nome']?>'class='form-control' type="text" id='nome' name='nome'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="nome">Email</label>
        </div>
        <div class="col-10">
            <input value='<?=$editora['email']?>'class='form-control' type="email" id='email' name='email'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="telefone">Telefone</label>
        </div>
        <div class="col-10">
            <input value='<?=$editora['telefone']?>'class='form-control' type="text" id='telefone' name='telefone'>
        </div>
    </div>
    <div class="row p-4">
        <div class="col">
            <div class="btn-group w-100" role="group">
                <a href='http://localhost:8080/index.php/Editora/index'class="btn btn-outline-secondary">Cancelar</a>
                <button type="submit" class="btn btn-outline-success">Salvar</button>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Excluir
                </button>
            </div>
        </div>
    </div>
    <?=form_close()?>
</div>

    <!-- Modal -->
    <?=form_open('Editora/excluir')?>
    <input value='<?=$editora['id']?>'class='form-control' type="hidden" id='id' name='id'>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Você tem certeza que deseja excluir: <br>ID: <?=$editora['id']?><br>Nome: <?=$editora['nome']?><br>Email: <?=$editora['email']?><br>Telefone: <?=$editora['telefone']?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
        </div>
    </div>
    </div>