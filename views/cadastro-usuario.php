
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#cadastro">Cadastro</a></li>
    <li><a data-toggle="tab" href="#tabUsuario">Usu&aacuterios</a></li>
</ul>
<!-- Tab Order com tela de cadastro e listagem de usuario cadastrados--> 
<div class="tab-content">
    <div id="cadastro-" class="tab-pane fade in active">
        <h3>Cadastro</h3>
        <div id="load" class="form-group"></div>
        <!-- Inicio do formul�rio -->
        <form id="cadastro-usuario" class="form-horizontal" method="POST" action="">

            <fieldset>
                <div class="form-group"><legend> Dados Pessoais </legend></div>


                <div class="form-group">
                    <label class="col-md-3 control-label" for="nome">Nome:</label>  
                    <div class="col-md-7">
                        <input id="nome" name="nome" type="text" placeholder="Digite o Nome Completo" class="form-control input-md" required="true" maxlength="45">

                    </div>
                </div>

                <!-- O que seria o Stauts Inicial? O status não seria da OS? -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="statusAtividade">Status Atividade.:</label> 
                    <div class="col-md-7">
                        <input class="form-control input-md" id="statusAtividade" name="statusAtividade" type="text" placeholder="Status da Atividade" class="form-control input-md" value="1" disabled />
                    </div>
                </div>     


            </fieldset>
            <hr/>
            <fieldset>
                <div class="form-group"><legend> Informações de Login </legend></div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="login">Login:</label>  
                    <div class="col-md-7">
                        <input id="usuario" name="login" type="text" placeholder="Digite o Login"  class="form-control input-md" required="true" maxlength="50">

                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-3 control-label" for="senha">Senha:</label>
                    <div class="col-md-7">
                        <input id="senha" name="senha" type="password" placeholder="Digite a sua Senha" class="form-control input-md" required="true" maxlength="64">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="senha2"> Reiterar Senha:</label>
                    <div class="col-md-7">

                        <div id="msgerrosenha"  style="display: none;" class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Senhas não conferem!
                        </div>
                        <input id="senha2" name="senha2" type="password" placeholder="Reitere a Senha" class="form-control input-md" required="true" maxlength="64">

                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-3 control-label" for="perfil">Perfil:</label>
                    <div class="col-md-7">
                        <select id="perfil" name="perfil" class="form-control">
                            <option value="1">Opera&ccedil&atildeo(Atendimento ao Cliente)</option>
                            <option value="2">Gerencial</option>
                            <option value="3">Estrat&eacutegico</option>
                        </select>
                    </div>
                </div>

            </fieldset>
            <hr/>
            <div class="modal-footer form-group">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button id="limpar" name="limpar" class="btn btn-danger" type="reset">Limpar formul&aacuterio</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>

    <div id="tabUsuario" class="tab-pane fade">
        <h3>Usu&aacuterios Cadastrados</h3>
        <table id="cadastro-user-table" class="os-user-table table display table-hover" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class=".select-filter span2">Numero os? id?</th>
                    <th class=".select-filter span2">Cliente</th>
                    <th class=".select-filter span2">Data Previsão</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a data-toggle="modal" data-target="#myModalEdit" href="#myModalEdit">23423423</a></td>
                    <td>asdf</td>
                    <td>10/12</td>


                </tr>
                <tr>
                    <td>23423423</td>
                    <td>Alberto Roberto</td>
                    <td>10/12</td>


                </tr>
                <tr>
                    <td>23423423</td>
                    <td>Alberto Roberto</td>
                    <td>10/12</td>


                </tr>
                <tr>
                    <td>23423423</td>
                    <td>Alberto Roberto</td>
                    <td>10/12</td>


                </tr>


            </tbody>
        </table>

    </div>             
</div>