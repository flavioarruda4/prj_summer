<?php
include_once "../config/database.php";
include_once "../views/header.php";
?>

<nav role="navigation" class="menu">
    <div class="wrapper container">
        <nav role="menu" class="menu__links">
            <a class="" href="">Gerenciamento de OS</a>
            <a class=" " href="">Cadastro de Clientes</a>

            <ul class="menu-funcoes pull-right">
                <li class="dropdown" style="list-style: none;">
                    <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="">
                        Bem Vindo, José
                        <i class="icon-user icon-white"></i>
                        <span class=" glyphicon glyphicon-menu-down"></span>
                    </a>
                    <ul aria-labelledby="drop3" role="menu" class="dropdown-menu pull-right">
                        <li role="presentation"><a tabindex="-1" data-toggle="modal" data-target="#myModalUser" href="#myModalUser"> <i aria-hidden="true" class="glyphicon glyphicon-plus-sign"></i> Cadastrar Usuário  </a></li>
                        <li role="presentation"><a tabindex="-1" href=""> <i aria-hidden="true" class="glyphicon glyphicon-log-out"></i> Sair  </a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>
</nav>
<div class="flex container">
    <div class="flex2 slidebar-left">
        <ul class="nav menu-left  filters">

            <li class="">
                <a href="">Pendentes <span class=""></span></a>
            </li>

            <li class="">
                <a href="">Em andamento <span class=""></span></a>
            </li>


            <li class="">
                <a href="">Finalizadas <span class=""></span></a>
            </li>

            <li class="">
                <a href="">
                    Todas
                    <span class=""></span></a>
            </li>

        </ul>
    </div>


    <div class="panel-right">


        <div class="box-field-container" id="request-list-container">


            <legend class="navigation-search">
                <div class="span6">
                    <h2 class="page-title"> Lista de Ordens de Serviço </h2>
                </div>
                <div class="span3">

                    <div class="btn-group pull-right">

                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nova OS <span class="caret"></span></button>


                        <ul class="dropdown-menu">

                            <li>

                                <a data-toggle="modal" data-target="#myModal" href="#myModal">Adicionar OS <i aria-hidden="true" class="fa fa-plus"></i> </a>
                            </li>


                        </ul>
                    </div>
                </div>

                <table class="os-table table display table-hover"" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="span2">Numero os? id?</th>
                            <th class="span2">Cliente</th>
                            <th class="span2">Data Previsão</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a data-toggle="modal" data-target="#myModalEdit" href="#myModalEdit">23423423</a></td>
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


            </legend>

        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cadastrar OS</h4>
                    </div>
                    <div class="modal-body">
                        <h1> Cadastro da OS </h1>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModalUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cadastro de Usuarios</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
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
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>

<?php
include_once "footer.php";
?>