  <div class="modal fade  bs-os-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cadastrar OS</h4>
                    </div>
                    <div class="modal-body">
                        <h1> Cadastro da OS </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade  bs-user-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cadastro de Usuarios</h4>
                    </div>
                    <div class="modal-body">
                        <?php include_once 'cadastro-usuario.php' ?>
                    </div>
                    
                </div>
            </div>
        </div>


        <div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Editar Status</h4>
                    </div>
                    <div class="modal-body">
                        <h1>Editar Status</h1>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button id="limpar" name="limpar" class="btn btn-danger" type="reset">Limpar formul&aacuterio</button>

                        <button type="submit" class="btn btn-primary" >Salvar</button>

                    </div>
                </div>
            </div>
        </div>


    </div>
