
<div class="container-fluid">


    <form id="info-os" class="form-horizontal" method="" action="" autocomplete="off" >
        <!-- linhas : idOs, dataEmissao, dataPrevEntrega  -->


        <fieldset>
            <div class="form-group"><legend> Dados </legend></div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="clienteOs">Cliente (CPF):</label> 
                <div class="col-md-7">
                    <input id="clienteOs" name="clientes_cpf" type="text" placeholder="Informe o CPF do cliente já cadastrado" class="form-control input-md" required="true" disabled="true" />

                </div>
            </div>                
            <hr/>
            <div class="form-group">
                <div class="col-md-5">
                    <!-- Campo Data Previsão de entrega da OS ()-->
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="dataEmissao">Data Emissão:</label> 
                        <div class="col-md-6">
                            <input  id="dataEmissao" name="dataEmissao" type="text" placeholder="Data Emissão" class="form-control input-md" required="true" disabled="true" />
                        </div>
                    </div>                
                </div>
                <div class="col-md-6">
                    <!-- Campo Data Previsäo de entrega da OS ()-->
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="dataPrevEntrega">Data Prevista:</label> 
                        <div class="col-md-6">
                            <input id="dataPrevEntrega" name="dataPrevEntrega" type="text" placeholder="Previsão de entrega" class="form-control input-md" required="true" disabled="true" />
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
                            <!-- Campo Grau longe Esférico olho direito da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="longEsfOd" name="longEsfOd" type="text" placeholder="Long Esf OD" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>          
                        </td>
                        <td>
                            <!-- Campo Grau longe Esférico olho direito da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="longCilOd" name="longCilOd" type="text" placeholder="Long Cil OD" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau longe Esf�rico olho direito da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="longEixoOd" name="longEixoOd" type="text" placeholder="Long Eixo OD" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau longe Esf�rico olho direito da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="longDnpOd" name="longDnpOd" type="text" placeholder="Long Dnp OD" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau longe Esf�rico olho direito da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="longAlturaOd" name="longAlturaOd" type="text" placeholder="Long Alt OD" class="form-control input-md" disabled="true"/>
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
                                    <input id="longEsfOd" name="longEsfOe" type="text" placeholder="Long Esf OE" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>          
                        </td>
                        <td>
                            <!-- Campo Grau longe Esf�rico olho Esquerdo da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="longCilOd" name="longCilOe" type="text" placeholder="Long Cil OE" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau longe Esf�rico olho Esquerdo da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="longEixoOd" name="longEixoOe" type="text" placeholder="Long Eixo OE" class="form-control input-md" disabled="true" />
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau longe Esf�rico olho Esquerdo da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="longDnpOd" name="longDnpOe" type="text" placeholder="Long Dnp OE" class="form-control input-md" disabled="true" />
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau longe Esf�rico olho Esquerdo da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="longAlturaOd" name="longAlturaOe" type="text" placeholder="Long Altura OE" class="form-control input-md" disabled="true"/>
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
                                    <input id="perEsfOd" name="perEsfOd" type="text" placeholder="Perto Esf OD" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>          
                        </td>
                        <td>
                            <!-- Campo Grau pertoCilOd olho direito da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="perCilOd" name="perCilOd" type="text" placeholder="Perto Esf OD" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau pertoEixoOd olho direito da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="perEixoOd" name="perEixoOd" type="text" placeholder="Perto Esf OD" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau pertoDnpOd olho direito da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="perDnpOd" name="perDnpOd" type="text" placeholder="Perto Dnp OD" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau pertoAlturaOd olho direito da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="perAlturaOd" name="perAlturaOd" type="text" placeholder="Perto Alt OD" class="form-control input-md" disabled="true"/>
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
                                    <input id="perEsfOe" name="perEsfOe" type="text" placeholder="Perto Esf OE" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>          
                        </td>
                        <td>
                            <!-- Campo Grau pertoCilOe olho Esquerdo da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="perCilOe" name="perCilOe" type="text" placeholder="Perto Cil OE" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau pertoEixoOe olho Esquerdo da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="perEixoOe" name="perEixoOe" type="text" placeholder="Perto Eixo OE" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau pertoDnpOe olho Esquerdo da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="perDnpOe" name="perDnpOe" type="text" placeholder="Perto Dnp OE" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>        
                        </td>
                        <td>
                            <!-- Campo Grau pertoAlturaOe olho Esquerdo da OS ()-->
                            <div class="form-group">
                                <div class="col-md-11">
                                    <input id="perAlturaOe" name="perAlturaOe" type="text" placeholder="Perto Altura OE" class="form-control input-md" disabled="true"/>
                                </div>
                            </div>        
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <br/>

        <!-- tab 'Parte 2' -->

        <!-- Inicio linhas : adicao, adicao, dataVencLentes  --> 
        <fieldset>
            <div class="form-group"><legend> Dados </legend></div>

            <div class="col-md-4">
                <!-- Campo Adi��o da OS ()-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="adicao">Adição:</label> 
                    <div class="col-md-8">
                        <input id="adicao" name="adicao" placeholder="Adição" class="form-control input-md" type="text" disabled="true">
                    </div>
                </div>                
            </div>
            <div class="col-md-4">
                <!-- Campo Arma��o da OS ()-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="armacao">Armação:</label> 
                    <div class="col-md-8">
                        <input id="armacao" name="armacao" placeholder="Armação" class="form-control input-md" type="text" disabled="true">
                    </div>
                </div>                
            </div>
            <div class="col-md-4">
                <!-- Campo Data Previsão de entrega da OS ()-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="dataVencLentes">Data Vencimento Lentes:</label> 
                    <div class="col-md-8">
                        <input  id="dataVencLentes" name="dataVencLentes" class="form-control input-md" placeholder="Data vencimento Lentes" type="text" required="true" disabled="true">
                    </div>
                </div>                
            </div> 

            <!-- Fim linhas : adicao, adicao, dataVencLentes  -->       

            <!-- Inicio linhas : lentes, medico,receita  --> 

            <div class="col-md-4">
                <!-- Campo Lentes da OS ()-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="lentes">Lentes.:</label> 
                    <div class="col-md-8">
                        <input id="lentes" name="lentes" placeholder="Lentes" class="form-control input-md" type="text" disabled="true">
                    </div>
                </div>                
            </div>
            <div class="col-md-4">
                <!-- Campo M�dico da OS ()-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="medico">Médico:</label> 
                    <div class="col-md-8">
                        <input id="medico" name="medico" placeholder="Médico" class="form-control input-md" type="text" disabled="true">
                    </div>
                </div>                
            </div>
            <div class="col-md-4">
                <!-- Campo Data Receita de entrega da OS ()-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="receita">Receita:</label> 
                    <div class="col-sm-8">
                         <!-- <input type="file" name="foto" /> -->
                        <input id="receita" name="receita" placeholder="Receita Oftmologica" class="form-control input-md" type="text" disabled="true">
                    </div>
                </div>                
            </div> 

        </fieldset>
        <br/>
        <!-- Fim linhas : lentes, medico,receita  -->


        <!-- Inicio linhas : formaPg,dataPg,nParcelas  -->
        <fieldset>
            <div class="form-group"><legend> Pagamento </legend></div>
            <div class="col-md-6">
                <!-- Campo Valor da OS ()-->
                <div class="form-group">
                    <label class="col-md-6 control-label" for="valorOs">Valor da O.S:</label> 
                    <div class="col-md-6">
                        <input id="valorOs" name="valor" placeholder="Valor da OS " class="form-control input-md" type="text" required="true" disabled="true">
                    </div>
                </div>               
            </div>                        
            <div class="col-md-6">
                <!-- Campo Forma de pagamento da OS ()-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="pagamento">Forma de Pagamento</label>
                    <div class="col-md-8">
                        <label class="radio-horizontal" for="pagamento-0">
                            <input name="pagamento" value="1" type="radio" disabled="true">
                            Dinheiro
                        </label>
                        <label class="radio-horizontal" for="pagamento-1">
                            <input name="pagamento"  value="2" type="radio" disabled="true">
                            Cartão
                        </label>

                    </div>
                </div>               
            </div>
            <div class="col-md-6">
                <!-- Campo Dta Pagamento da OS ()-->
                <div class="form-group">
                    <label class="col-md-6 control-label" for="dataPg">Data Pagamento:</label> 
                    <div class="col-md-6">
                        <input id="dataPg" name="dataPg" class="form-control input-md" placeholder="Data Pagamento:" type="text" disabled="true">
                    </div>
                </div>                
            </div>
            
        </fieldset>
        <!-- Fim linhas : formaPg,dataPg,nParcelas  --> 

        <!-- Inicio linhas : Observacao  --> 
        <br/>
        <fieldset>
            <div class="col-md-12">
                <!-- Campo Observacao da OS ()-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="observacao">Observações da O.S :</label>
                    <div class="col-md-8">
                        <textarea id="observacao" name="observacao" class="form-control" rows="3" placeholder="Observações da O.S " disabled="true"></textarea>
                    </div>
                </div>                
            </div>  
        </fieldset>  
        <br/>
        <!-- Fim linhas : Observacao  --> 

        <div class="modal-footer form-group">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button id="limpar" name="limpar" class="btn btn-danger" type="reset">Limpar formul&aacuterio</button>
            <button id="submit-user" type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
