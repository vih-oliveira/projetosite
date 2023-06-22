<?php
$registro = listarTodosRegistros('tbmainheader', 'idtbmainheader, titulo, imagem, video, descricao, cadastro, alteracao, ativo', 'A');
if ($registro > 0) {
  foreach ($registro as $listaregistro) {
    $idtbmainheader = $listaregistro->idtbmainheader;
    $titulo = $listaregistro->titulo;
    $imagem = $listaregistro->imagem;
    $video = $listaregistro->video;
    $descricao = $listaregistro->descricao;
    $cadastro = $listaregistro->cadastro;
    $alteracao = $listaregistro->alteracao;
    $ativo = $listaregistro->ativo;
  }
} else {
  echo 'nenhum registro encontrado';
}
?>
<section id="hero" class="hero d-flex align-items-center section-bg">
  <div class="container">
    <div class="row justify-content-between gy-5">
      <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
        <h2 data-aos="fade-up"><?php echo $titulo ?></h2>
        <p data-aos="fade-up" data-aos-delay="100"><?php echo $descricao?></p>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <a href="#book-a-table" class="btn-book-a-table">Reserva</a>
          <a href=<?php echo $video ?> class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Assista!</span></a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
        <img src='assets/img/<?php echo $imagem?>'  class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
      </div>
    </div>
  </div>
</section>