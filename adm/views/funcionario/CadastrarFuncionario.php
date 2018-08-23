
<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            <div class="col-sm-4"><i class="fa fa-users" aria-hidden="true"></i> Cadastrar Funcionários/ <a href="<?php echo URL; ?>controle-funcionario/index">Listar</a></div>
            <div class="col-sm-6" id="msg" style="display: none"><h5 style="color: green"><strong id="strong-msg">Cadastrado com sucesso!</strong></h5></div>
        </div>
    </div>
    
    <?php
    if (isset($_SESSION['msg'])):
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    endif;
    ?>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" id="form_funcionario">
            <fieldset>
                <legend><i class="glyphicon glyphicon-user"></i> Dados Funcionários:</legend>
                <div class="form-group">  
                    <div class="col-sm-8">
                        <label for="funnome" class="control-label"><span style="color: red">* </span>Nome:</label>
                        <input type="text"  required="required" class="form-control" id="funnome" placeholder="Digite nome">
                    </div>
                      <div class="col-sm-4">
                        <label for="fundtadmissao" class="control-label"><span style="color: red">* </span>Data Admissão:</label>
                        <input type="date" required="required"  class="form-control" id="fundtadmissao">
                    </div>
                </div>
                <div class="form-group">  
                    <div class="col-sm-4">
                        <label for="funrg" class="control-label"><span style="color: red">* </span>RG:</label>
                        <input type="text"  required="required" class="form-control" id="funrg" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <label for="funcpf" class="control-label"><span style="color: red">* </span>CPF:</label>
                        <input type="text" required="required"  class="form-control" id="funcpf" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <label for="funsexo" class="control-label"><span style="color: red">* </span>Sexo:</label>
                        <select id="funsexo" class="form-control">
                            <option>Selecione</option>
                            <option>Masculino</option>
                            <option>Feminino</option>    
                        </select>
                    </div>
                </div>
                <div class="form-group">  
                    <div class="col-sm-4">
                        <label for="funestadocivil" class="control-label"><span style="color: red">* </span>Estado Civil:</label>
                        <select id="funestadocivil" class="form-control">
                            <option>Selecione</option>
                            <option>Solteiro</option>
                            <option>Casado</option>    
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="fundtnasc" class="control-label"><span style="color: red">* </span>Data Nasc.:</label>
                        <input type="date" required="required"  class="form-control" id="fundtnasc">
                    </div>
                    <div class="col-sm-4">
                        <label for="funcarcod" class="control-label"><span style="color: red">* </span>Cargo:</label>
                        <select id="funcarcod" class="form-control">
                            <option>Selecione</option>
                            <?php
                            foreach ($this->Dados as $cargo) {
                                ?>
                                <option value="<?= $cargo['carcod'] ?>"><?= $cargo['cardescricao'] ?></option>
                                <?php
                            }
                            ?>

                        </select>
                    </div>
                </div>
            </fieldset>
            <br>
            <fieldset>
                <legend><i class="glyphicon glyphicon-phone-alt"></i> Contato:</legend>

                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="confuntelefone" class=" control-label"><span style="color: red">* </span>Telefone:</label>
                        <input type="text" class="form-control" id="confuntelefone" placeholder="">
                    </div>
                    <div class="col-sm-4">
                        <label for="confunemail" class="control-label">Email:</label>
                        <input type="email" class="form-control" id="confunemail" placeholder="exemplo@dominio.com">
                    </div>
                </div>

            </fieldset>
            
            <div class="form-group">
                <div class=" col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> Salvar</button>
                </div>
            </div>

        </form>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>assets/js/Funcionario1.js"></script>