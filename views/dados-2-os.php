<!-- tab 'Parte 2' -->

<!-- Inicio linhas : adicao, adicao, dataVencLentes  --> 
<fieldset>
    <div class="form-group"><legend> Dados Extras </legend></div>
<div class="col-md-4">
    <!-- Campo Adi��o da OS ()-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="adicao">Adição.:</label> 
        <div class="col-md-8">
            <input id="adicao" name="adicao" placeholder="Adição" class="form-control input-md" type="text">
        </div>
    </div>                
</div>
<div class="col-md-4">
    <!-- Campo Arma��o da OS ()-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="armacao">Armação.:</label> 
        <div class="col-md-8">
            <input id="armacao" name="armacao" placeholder="Armação" class="form-control input-md" type="text">
        </div>
    </div>                
</div>
<div class="col-md-4">
    <!-- Campo Data Previs�o de entrega da OS ()-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="dataVencLentes">Data Vencimento Lentes:</label> 
        <div class="col-md-8">
            <input class="dateTxt" id="dataVencLentes" name="dataVencLentes" placeholder="Data vencimento Lentes" type="text">
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
            <input id="lentes" name="lentes" placeholder="Lentes" class="form-control input-md" type="text">
        </div>
    </div>                
</div>
<div class="col-md-4">
    <!-- Campo M�dico da OS ()-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="medico">Médico:</label> 
        <div class="col-md-8">
            <input id="medico" name="medico" placeholder="Médico" class="form-control input-md" type="text">
        </div>
    </div>                
</div>
<div class="col-md-4">
    <!-- Campo Data Receita de entrega da OS ()-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="receita">Receita:</label> 
        <div class="col-sm-8">
             <!-- <input type="file" name="foto" /> -->
            <input id="receita" name="receita" placeholder="Receita Oftmologica" class="form-control input-md" type="text">
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
                <input id="valorOs" name="valor" placeholder="Valor da OS " class="form-control input-md" type="text">
            </div>
        </div>               
    </div>                        
    <div class="col-md-6">
        <!-- Campo Forma de pagamento da OS ()-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="pagamento">Forma de Pagamento</label>
            <div class="col-md-8">
                <label class="radio-horizontal" for="pagamento-0">
                    <input name="pagamento" id="pagamento-0" value="1" type="radio">
                    Dinheiro
                </label>
                <label class="radio-horizontal" for="pagamento-1">
                    <input name="pagamento" id="pagamento-1" value="2" type="radio">
                    Cheque
                </label>
                <label class="radio-horizontal" for="pagamento-2">
                    <input name="pagamento" id="pagamento-2" value="3" type="radio">
                    Visa
                </label>
                <label class="radio-horizontal" for="pagamento-3">
                    <input name="pagamento" id="pagamento-3" value="4" type="radio">
                    Master
                </label>
            </div>
        </div>               
    </div>
    <div class="col-md-6">
        <!-- Campo Dta Pagamento da OS ()-->
        <div class="form-group">
            <label class="col-md-6 control-label" for="dataPg">Data Pagamento:</label> 
            <div class="col-md-6">
                <input class="dateTxt" id="dataPg" name="dataPg" placeholder="Data Pagamento.:" type="text">
            </div>
        </div>                
    </div>
    <div class="col-md-6">
        <!-- Campo Numero de parcelas a pagar da OS ()-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nParcelas">Número de Parcelas:</label> 
            <div class="col-md-8">
                <select class="form-control" id="nParcelas" name="nParcelas">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>                 
    </div> 
</fieldset>
<!-- Fim linhas : formaPg,dataPg,nParcelas  --> 

<!-- Inicio linhas : Observacao  --> 
<br/>
<fieldset>
    <div class="col-md-12">
        <!-- Campo Observa��o da OS ()-->
        <div class="form-group">
            <label class="col-md-3 control-label" for="observacao">Observações da O.S :</label>
            <div class="col-md-8">
                <textarea id="observacao" name="observacao" class="form-control" rows="3" placeholder="Observações da O.S "></textarea>
            </div>
        </div>                
    </div>  
</fieldset>  
<br/>
<!-- Fim linhas : Observacao  --> 