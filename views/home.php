<?php

session_start();

include_once "../config/database.php";
include_once "../views/header.php";
include_once "../views/menu.php";

//inicia a sessão e verifica se o usuario está autenticado

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){ 
    unset($_SESSION['login']); 
    unset($_SESSION['perfil']); 
    unset($_SESSION['senha']); 
    header('location:../index.php'); 
     exit;
    
}   
    $logado = $_SESSION['login']; 
?>


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
                
            
            </legend>

                <div class="span3">

                    <div class="btn-group pull-right">

                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-os-modal-lg" href="" >Adicionar OS <span class="caret"></span></button>
                        
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
                            <td>joao</td>
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

<?php
include_once "footer.php";
?>