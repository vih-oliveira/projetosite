<?php
$registro = listarTodosRegistros('tbsobrenos', 'idtbsobrenos, titulo, descricao, imagem, contato, video, cadastro, alteracao, ativo, foto2' , 'A' );
if ($registro > 0) {
  foreach ($registro as $listaregistro) {
    $idtbsobrenos = $listaregistro->idtbsobrenos;
    $titulo = $listaregistro->titulo;
    $descricao = $listaregistro->descricao;
    $imagem = $listaregistro->imagem;
    $contato= $listaregistro->contato;
    $video= $listaregistro->video;
    $cadastro = $listaregistro->cadastro;
    $alteracao = $listaregistro->alteracao;
    $ativo = $listaregistro->ativo;   
    $foto2 = $listaregistro->foto2;

  }
} else {
  echo 'nenhum registro encontrado';
}
?>
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p><?php echo $titulo ?></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/<?php echo $imagem?>) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Faça uma Reserva</h4>
              <p><?php echo $contato?></p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              <?php echo $descricao?>
              </p>
      

              <div class="position-relative mt-4">
                <img src="assets/img/<?php echo $foto2?>" class="img-fluid" alt="">
                <a href="<?php echo $video?>" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>