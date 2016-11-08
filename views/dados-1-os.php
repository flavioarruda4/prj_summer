<!-- Conteudo que envolve as tab e suas respectivas informacoes-->

<!-- linhas : idOs, dataEmissao, dataPrevEntrega  -->
<fieldset>
    <div class="form-group"><legend> Dados </legend></div>

    <div class="form-group">
        <label class="col-md-2 control-label" for="dataEmissao">Cliente (CPF):</label> 
        <div class="col-md-7">
            <input id="clienteOs" name="clienteOs" type="text" placeholder="Informe o CPF do cliente já cadastrado" class="form-control input-md" />

        </div>
        <div class="col-md-2">
            <a class="btn btn-primary col-md12 control-label" href="cadastro-cliente.php" target="_blank" title="Caso o cliente nao tenha sido cadastrado!"> Cadastrar Cliente</a>
        </div>
    </div>                
    <hr/>
    <div class="form-group">
        <div class="col-md-5">
            <!-- Campo Data Previs�o de entrega da OS ()-->
            <div class="form-group">
                <label class="col-md-6 control-label" for="dataEmissao">Data Emiss&atildeo:</label> 
                <div class="col-md-6">
                    <input class="dateTxt" id="dataEmissao" name="dataEmissao" type="text" placeholder="Data Emissão" class="form-control input-md" />
                </div>
            </div>                
        </div>
        <div class="col-md-6">
            <!-- Campo Data Previs�o de entrega da OS ()-->
            <div class="form-group">
                <label class="col-md-6 control-label" for="dataPrevEntrega">Data Prevista:</label> 
                <div class="col-md-6">
                    <input class="dateTxt" id="dataPrevEntrega" name="dataPrevEntrega" type="text" placeholder="Previsão de entrega" class="form-control input-md" />
                </div>
            </div>                
        </div>                          
    </div>
    <hr/>
    <!-- Fim linhas : idOs, dataEmissao, dataPrevEntrega  -->       
    <!-- Inicio table longe ***************************-->

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Longe</th>
                <th>ESF</th>
                <th>CIL</th>
                <th>EIXO</th>
                <th>DNP</th>
                <th>ALTURA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>OD</td>
                <td>
                    <!-- Campo Grau longe Esf�rico olho direito da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="longEsfOd" name="longEsfOd" type="text" placeholder="Long Esf OD" class="form-control input-md" />
                        </div>
                    </div>          
                </td>
                <td>
                    <!-- Campo Grau longe Esf�rico olho direito da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="longCilOd" name="longCilOd" type="text" placeholder="Long Esf OD" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau longe Esf�rico olho direito da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="longEixoOd" name="longEixoOd" type="text" placeholder="Long Esf OD" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau longe Esf�rico olho direito da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="longDnpOd" name="longDnpOd" type="text" placeholder="Long Dnp OD" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau longe Esf�rico olho direito da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="longAlturaOd" name="longAlturaOd" type="text" placeholder="Long Alt OD" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
            </tr>
            <tr>
                <td>OE</td>
                <td>
                    <!-- Campo Grau longe Esf�rico olho Esquerdo da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="longEsfOd" name="longEsfOe" type="text" placeholder="Long Esf OE" class="form-control input-md" />
                        </div>
                    </div>          
                </td>
                <td>
                    <!-- Campo Grau longe Esf�rico olho Esquerdo da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="longCilOd" name="longCilOe" type="text" placeholder="Long Cil OE" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau longe Esf�rico olho Esquerdo da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="longEixoOd" name="longEixoOe" type="text" placeholder="Long Eixo OE" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau longe Esf�rico olho Esquerdo da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="longDnpOd" name="longDnpOe" type="text" placeholder="Long Dnp OE" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau longe Esf�rico olho Esquerdo da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="longAlturaOd" name="longAlturaOe" type="text" placeholder="Long Altura OE" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Perto</th>
                <th>ESF</th>
                <th>CIL</th>
                <th>EIXO</th>
                <th>DNP</th>
                <th>ALTURA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>OD</td>
                <td>
                    <!-- Campo Grau pertoEsfOd olho direito da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="pertoEsfOd" name="pertoEsfOd" type="text" placeholder="Perto Esf OD" class="form-control input-md" />
                        </div>
                    </div>          
                </td>
                <td>
                    <!-- Campo Grau pertoCilOd olho direito da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="pertoCilOd" name="pertoCilOd" type="text" placeholder="Perto Esf OD" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau pertoEixoOd olho direito da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="pertoEixoOd" name="pertoEixoOd" type="text" placeholder="Perto Esf OD" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau pertoDnpOd olho direito da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="pertoDnpOd" name="pertoDnpOd" type="text" placeholder="Perto Dnp OD" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau pertoAlturaOd olho direito da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="pertoAlturaOd" name="pertoAlturaOd" type="text" placeholder="Perto Alt OD" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
            </tr>
            <tr>
                <td>OE</td>
                <td>
                    <!-- Campo Grau pertoEsfOe olho Esquerdo da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="pertoEsfOe" name="pertoEsfOe" type="text" placeholder="Perto Esf OE" class="form-control input-md" />
                        </div>
                    </div>          
                </td>
                <td>
                    <!-- Campo Grau pertoCilOe olho Esquerdo da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="pertoCilOe" name="pertoCilOe" type="text" placeholder="Perto Cil OE" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau pertoEixoOe olho Esquerdo da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="pertoEixoOe" name="pertoEixoOe" type="text" placeholder="Perto Eixo OE" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau pertoDnpOe olho Esquerdo da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="pertoDnpOe" name="pertoDnpOe" type="text" placeholder="Perto Dnp OE" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
                <td>
                    <!-- Campo Grau pertoAlturaOe olho Esquerdo da OS ()-->
                    <div class="form-group">
                        <div class="col-md-11">
                            <input id="pertoAlturaOe" name="pertoAlturaOe" type="text" placeholder="Perto Altura OE" class="form-control input-md" />
                        </div>
                    </div>        
                </td>
            </tr>
        </tbody>
    </table>
</fieldset>
<br/>
