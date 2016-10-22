<?php
include_once "config/database.php";
include_once "views/header.php";
?>


<div class="container">
    
    <div id="msgerro"  style="display: none;" class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Usuário ou senha inválidos!
    </div>
    
    <legend class="col-sm-offset-5">Acesso</legend>
    <form id="form-login" class="form-horizontal" method="POST" action="" autocomplete="off">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Login:</label>
            <div class="col-sm-3">
                <input id="login" name="login" class="form-control" placeholder="Digite seu login" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">Senha</label>
            <div class="col-sm-3">
                <input class="form-control" id="senha" name="senha" placeholder="Digite sua senha" type="password">
            </div>
        </div>
        <div class="form-group">
            <div class="control-label col-sm-6">
                <button id="entrar" type="submit" name="entrar" class="btn btn-success">Entrar</button>
                <button id="limpar" type="reset" name="limpar" class="btn btn-primary">Limpar</button>
            </div>
        </div>
    </form>
</div>
<?php
include_once "views/footer.php";
?>