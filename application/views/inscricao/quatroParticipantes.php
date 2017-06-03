

<!--- Contact ------>
<section class="content">

    <div id="inscricao" class="inscricao">
        <div class="container">
            <div class="row">            
                <h2 class="wow fadeInUp">INSCRIÇÃO SEJA UM INVENTOR</h2>

            </div> 

            <form role="form" action="<?php echo base_url(); ?>" method="post">
                <div class="box box-primary">
                    <div class="row"> 
                        <p class="wow fadeInUp" data-wow-delay="0.4">Formulário de 4º Integrantes</p>
                        <div class="col-lg-4 col-lg-6">
                            <label class="input-group wow fadeInUp" data-wow-delay="0.8s">Nome da Equipe:</label>
                            <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                <input type="text" name="nomeEquipe" class="form-control" aria-describedby="sizing-addon1" value="<?php echo $nomeEquipe; ?>" disabled="true"/>
                            </div>
                        </div>
                        <div class="col-lg-4 col-lg-6">
                            <label class="input-group wow fadeInUp" data-wow-delay="0.8s">Quantidade de integrantes:</label>
                            <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                                <input type="text" name="numberparti" class="form-control" aria-describedby="sizing-addon1" value="<?php echo $textoParticipantes; ?>" disabled="true"/>
                            </div>
                        </div>
                        <div class="col-lg-4 col-lg-6">
                            <label class="input-group wow fadeInUp" data-wow-delay="0.8s">Código Equipe:</label>
                            <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-address-card" aria-hidden="true"></i></span>
                                <input type="text" name="numberinscricao" class="form-control" aria-describedby="sizing-addon1" value="<?php echo uniqid(); ?>" disabled="true"/>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <!--Primeiro Integrantes-->
                        <div class="col-lg-6">
                            <fieldset>                            
                                <legend class="input-group wow fadeInUp" data-wow-delay="0.8s">Dados Primeiro Participantes</legend>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" name="participante1" class="form-control" aria-describedby="sizing-addon1" placeholder="Nome Completo" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                    <input type="text" name="rg1" class="form-control"  placeholder="RG" onkeypress='return SomenteNumero(event)' required="required"/>
                                </div>                                
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                    <input type="text" name="cpf1" class="form-control" aria-describedby="sizing-addon1" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" onkeydown="return SomenteNumero(event)" maxlength="14"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <input type="email" name="email1" class="form-control" aria-describedby="sizing-addon1" placeholder="Endereço de e-mail" required="required">
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-phone-square"></i></span>
                                    <input type="text" name="telefone1" class="form-control" aria-describedby="sizing-addon1" placeholder="Telefone" OnKeyPress="formatar('## #####-####', this)" maxlength="13" onkeydown="return SomenteNumero(event)" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="data1"  class="form-control calendario" aria-describedby="sizing-addon1" placeholder="Data de nascimento" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1" ><i class="fa fa-level-up" aria-hidden="true"></i> Nivel Médio</span>
                                    <select class="form-control" date-style="btn-info" name="nivel3" aria-describedby="sizing-addon1" style="width: 100%" required>
                                        <optgroup label="Nivel do Ensino Médio">
                                            <option value="">1º ANO DO ENSINO MÉDIO</option>
                                            <option value="">2º ANO DO ENSINO MÉDIO</option>
                                            <option value="">3º ANO DO ENSINO MÉDIO</option>
                                    </select>
                                </div>

                            </fieldset>
                        </div>
                        <!-- Fim Primeiro Integrantes-->
                        <!--Segundo Integrantes-->
                        <div class="col-lg-6">
                            <fieldset>                            
                                <legend class="input-group wow fadeInUp" data-wow-delay="0.8s">Dados Segundo Participantes</legend>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" name="participante1" class="form-control" aria-describedby="sizing-addon1" placeholder="Nome Completo" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                    <input type="text" name="rg1" class="form-control"  placeholder="RG" onkeypress='return SomenteNumero(event)' required="required"/>
                                </div>                                
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                    <input type="text" name="cpf1" class="form-control" aria-describedby="sizing-addon1" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" onkeydown="return SomenteNumero(event)" maxlength="14"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <input type="email" name="email1" class="form-control" aria-describedby="sizing-addon1" placeholder="Endereço de e-mail" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-phone-square"></i></span>
                                    <input type="text" name="telefone1" class="form-control" aria-describedby="sizing-addon1" placeholder="Telefone" OnKeyPress="formatar('## #####-####', this)" maxlength="13" onkeydown="return SomenteNumero(event)" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="data2"  class="form-control calendario" aria-describedby="sizing-addon1" placeholder="Data de nascimento" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1" ><i class="fa fa-level-up" aria-hidden="true"></i> Nivel Médio</span>
                                    <select class="form-control" date-style="btn-info" name="nivel3" aria-describedby="sizing-addon1" style="width: 100%" required>
                                        <optgroup label="Nivel do Ensino Médio">
                                            <option value="">1º ANO DO ENSINO MÉDIO</option>
                                            <option value="">2º ANO DO ENSINO MÉDIO</option>
                                            <option value="">3º ANO DO ENSINO MÉDIO</option>
                                    </select>
                                </div>

                            </fieldset>
                        </div>
                    </div>
                    <!--Fim Segundo Integrantes-->
                    <div class="row">
                        <!--Terceiro Integrantes-->
                        <div class="col-lg-6">
                            <fieldset>                            
                                <legend class="input-group wow fadeInUp" data-wow-delay="0.8s">Dados Terceiro Participantes</legend>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" name="participante1" class="form-control" aria-describedby="sizing-addon1" placeholder="Nome Completo" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                    <input type="text" name="rg1" class="form-control"  placeholder="RG" onkeypress='return SomenteNumero(event)' required="required"/>
                                </div>                                
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                    <input type="text" name="cpf1" class="form-control" aria-describedby="sizing-addon1" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" onkeydown="return SomenteNumero(event)" maxlength="14"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <input type="email" name="email1" class="form-control" aria-describedby="sizing-addon1" placeholder="Endereço de e-mail" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-phone-square"></i></span>
                                    <input type="text" name="telefone1" class="form-control" aria-describedby="sizing-addon1" placeholder="Telefone" OnKeyPress="formatar('## #####-####', this)" maxlength="13" onkeydown="return SomenteNumero(event)" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="data3"  class="form-control calendario" aria-describedby="sizing-addon1" placeholder="Data de nascimento" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1" ><i class="fa fa-level-up" aria-hidden="true"></i> Nivel Médio</span>
                                    <select class="form-control" date-style="btn-info" name="nivel3" aria-describedby="sizing-addon1" style="width: 100%" required>
                                        <optgroup label="Nivel do Ensino Médio">
                                            <option value="">1º ANO DO ENSINO MÉDIO</option>
                                            <option value="">2º ANO DO ENSINO MÉDIO</option>
                                            <option value="">3º ANO DO ENSINO MÉDIO</option>
                                    </select>
                                </div>
                            </fieldset>
                        </div>
                        <!--Fim Terceiro Integrantes-->

                        <!--Quarto Integrantes-->
                        <div class="col-lg-6">
                            <fieldset>                            
                                <legend class="input-group wow fadeInUp" data-wow-delay="0.8s">Dados Quarto Participantes</legend>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" name="participante1" class="form-control" aria-describedby="sizing-addon1" placeholder="Nome Completo" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                    <input type="text" name="rg1" class="form-control"  placeholder="RG" onkeypress='return SomenteNumero(event)' required="required"/>
                                </div>                                
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                    <input type="text" name="cpf1" class="form-control" aria-describedby="sizing-addon1" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" onkeydown="return SomenteNumero(event)" maxlength="14"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <input type="email" name="email1" class="form-control" aria-describedby="sizing-addon1" placeholder="Endereço de e-mail" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-phone-square"></i></span>
                                    <input type="text" name="telefone1" class="form-control" aria-describedby="sizing-addon1" placeholder="Telefone" OnKeyPress="formatar('## #####-####', this)" maxlength="13" onkeydown="return SomenteNumero(event)" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="simplified-queries"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="data3"  class="form-control calendario" aria-describedby="sizing-addon1" placeholder="Data de nascimento" required="required"/>
                                </div>
                                <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="input-group-addon" id="sizing-addon1" ><i class="fa fa-level-up" aria-hidden="true"></i> Nivel Médio</span>
                                    <select class="form-control" date-style="btn-info" name="nivel3" aria-describedby="sizing-addon1" style="width: 100%" required>
                                        <optgroup label="Nivel do Ensino Médio">
                                            <option value="">1º ANO DO ENSINO MÉDIO</option>
                                            <option value="">2º ANO DO ENSINO MÉDIO</option>
                                            <option value="">3º ANO DO ENSINO MÉDIO</option>
                                    </select>
                                </div>
                            </fieldset>
                        </div>
                        <!--Fim Quarto Integrantes-->
                    </div>

                </div>

                <div class="row">
                    <fieldset>

                        <div class="col-lg-4">
                            <legend class="input-group wow fadeInUp" data-wow-delay="0.8s">NOME COMPLETO DA ESCOLAR PARTICIPANTE:</legend>
                            <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-university" aria-hidden="true"></i></span>
                                <input type="text" name="participante1" class="form-control" aria-describedby="sizing-addon1" placeholder="Nome da Escola" required="required"/>
                            </div>
                            <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                <input type="checkbox" name="aceito" > Eu é minha equipe aceitamos o termo de uso do <a href="<?php echo base_url(); ?>regulamento">regulamento</a>.<br>
                            </div>

                        </div>
                    </fieldset>
                </div>

        </div>
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4 col-md-12">
                <button class="btn btn-sm btn-success wow fadeInUp" data-wow-delay="1.0s">Salvar</button>
            </div>
        </div>
        </form>
    </div>


</div>





</section>
<!---- End Contact ----->
