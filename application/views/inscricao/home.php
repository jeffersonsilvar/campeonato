<!--- Contact ------>
<section class="content">

    <div id="inscricao" class="inscricao">
        <div class="container">
            <div class="row">            
                <h2 class="wow fadeInUp">INSCRIÇÃO SEJA UM INVENTOR</h2>

            </div> 

            <form role="form" action="<?php echo base_url(); ?>inscricao/escolhaParticipantes" method="post">
                <div class="box box-primary">
                    <div class="row"> 
                        <p class="wow fadeInUp" data-wow-delay="0.4">Formulário de inscrição</p>
                        <div class="col-lg-3">

                        </div>
                        <div class="col-lg-6">                
                            <div class="input-group wow fadeInUp" data-wow-delay="0.8s">
                                <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-group" aria-hidden="true"></i></span>
                                <input type="text" name="nomeEquipe" class="form-control" aria-describedby="sizing-addon1" placeholder="NOME DA EQUIPE" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="input-group wow fadeInUp" data-wow-delay="1.2s">

                                <span class="input-group-addon" id="sizing-addon1" ><i class="fa fa-user" aria-hidden="true"></i> NUMERO DE PARTICIPANTES</span>

                                <select class="form-control" data-live-search="true" date-style="btn-info" name="participantes" aria-describedby="sizing-addon1" style="width: 100%" required>
                                    <option value="">Selecione</option>                                    
                                    <option value="3">3 Participantes</option>
                                    <option value="4">4 Participantes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                        </div>
                        <!--<div style="margin-bottom: 15px; max-width:20%; " class="g-recaptcha col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.1s" data-sitekey="6LdkIiMUAAAAABZPlHdhjIict5kzZ5XHEvDwyDaP">

                        </div>-->
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4 col-md-12">

                            <button type="submit" class="btn btn-sm btn-success wow fadeInUp" data-wow-delay="1.3s">PRÓXIMO</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>
<!---- End Contact ----->