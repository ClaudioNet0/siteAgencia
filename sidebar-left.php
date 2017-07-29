<!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <img src="images/logo.png" style="margin-bottom: 5px;" alt="bestbsbtour">
                <div class="list-group">
                    <a href="https://www.facebook.com/Bestbsbtourcom-494293940724099/" class="list-group-item">
                        <img src="images/icon-facebook.png" alt="facebook"> <span class="caption-title" >Siga-nos</span>
                    </a>
                    <a href="" class="list-group-item" data-toggle="modal" data-target="#myModal">
                        
                        <img src="images/icon-contact.png" alt="fale-conosco"> <span class="caption-title" >Fale-Conosco</span>
                    </a>
                    <!--Início Modal-->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title parceiro" id="myModalLabel">Fale Conosco!</h4>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal ajax-form" method="POST" role="form" action="formail.php">
                                <input type="hidden" />
                                <p>Entre em contato e negocie com a BestBSTour, tenha melhor experiência de viagem conosco.</p>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Nome:</label>
                                    <div class="col-md-9">
                                        <input type="text" name="nome" class="form-control" placeholder="Seu nome" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Email:</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control" placeholder="Seu email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Mensagem:</label>
                                    <div class="col-md-9">
                                        <textarea type="text" name="mensagem" style="resize: none" class="form-control" placeholder="Mensagem" /></textarea>
                                    </div>
                                </div>
                                <div class="alert" style="display: none"></div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success pull-right" data-loading-text="Enviando"><i class="icon-envelope"></i> Enviar</button>
                            </form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Fim Modal-->
                </div>
            </div>
