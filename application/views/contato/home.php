<!--- Contact ------>

<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp">CONTATO</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4">SUGESTÕES, ELOGIOS, RECLAMAÇÕES, DUVIDAS</p>
            <form role="form" action="<?php echo base_url(); ?>contato/processaCadastrar" method="post">
                <div class="col-lg-6 col-md-6">
                    <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
                        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" name="nome" class="form-control" aria-describedby="sizing-addon1" placeholder="NOME COMPLETO">
                    </div>
                    <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
                        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <input type="email" name="email" class="form-control" aria-describedby="sizing-addon1" placeholder="ENDEREÇO DE E-MAIL" required="required">
                    </div>
                    <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
                        <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <input type="text" name="telefone" class="form-control" aria-describedby="sizing-addon1" placeholder="DDD+TELEFONE" OnKeyPress="formatar('## #####-####', this)" maxlength="13" onkeydown="return SomenteNumero(event)" required="required">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="input-group wow fadeInUp" data-wow-delay="2s">
                        <textarea name="mensagem" id="" cols="80" rows="6" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg wow fadeInUp" data-wow-delay="2.4s">ENVIAR MENSAGEM</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!---- End Contact ----->