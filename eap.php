<?php include("includes/header.php"); ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-sm-12">
          <h1>Exposição Anual de Projetos - Distrito 4.540</h1>
        </div>
      </div>

      <hr>
<!--
      <div class="row">
        <div class="col-sm-12">
          <h2>Mostre o trabalho de seu Rotaract Club</h2>
          <p>A Exposição Anual de Projetos 2015 inova para ampliar a troca de informação e conhecimento, fundamentais para a melhora contínua de nossos serviços e ampliação de nosso impacto na comunidade.</p>
          <p>Teremos <b>mais projetos expostos</b>, mostrando assim a amplitude dos <b>trabalhos de excelência</b> realizados pelos Rotaract Clubs do Distrito 4.540 na gestão 2014/2015.</p>
          <p><b>Cadastre os projetos do seu clube</b> e contribua para o crescimento do Rotaract no Distrito que Arrebenta!</p>
          <p><b>Contato:</b> <a href="malito: projetos@rotaract4540.org" target="_blank">projetos@rotaract4540.org</a></p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Content Row -->
      <!--
      <div class="row">
        <div class="col-md-4">
          <h2>Passo 1 - Cadastrar no ANP</h2>
          <p>Para participar da EAP, é necessário cadastrar o projeto no Arquivo Nacional de Projetos da OMIR Brasil.</p>
          <a class="btn btn-default" href="http://projetos.omirbrasil.org.br" target="_blank">Cadastrar no CNP</a>
        </div>
        <!-- /.col-md-4 -->
<!--
        <div class="col-md-4">
          <h2>Passo 2 - Cadastrar na EAP</h2>
          <p>Por fim, cadastre o projeto na Exposição Anual de Projetos dos Rotaract Clubs do Distrito 4.540.</p>
          <a class="btn btn-default" href="http://goo.gl/forms/MspNqZ6WVy" target="_blank">Cadastrar na EAP</a>
        </div>
        <!-- /.col-md-4 -->
<!--
        <div class="col-md-4">
          <h2>Documentos</h2>
          <p>Baixe o Regulamento e a Portaria para conferir os quesitos de avaliação, layout do painel, cronograma e todos os detalhes do EAP 2015.</p>
          <a class="btn btn-default" href="http://rotaract4540.org/rotaract/downloads/documentos-eap-2015.zip">Baixar documentos</a>
        </div>
        <!-- /.col-md-4 -->
      <!--</div>

      <hr>
-->
      <div class="row">
        <div class="col-sm-12">
        </div>
        <div class="col-sm-12">
          <div class="table-responsive">
            <table class="table table-bordered table-condensed">
              <h4>Projetos Cadastrados na EAP 2015</h4>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Título</th>
                  <th>Categoria principal</th>
                  <th>Categoria secundária</th>
                  <th>Clube</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>
                <?php include("includes/eap-db.php"); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>


<?php include("includes/footer.php"); ?>
