<?php
$registro = listarTodosRegistros('tbpqnos', 'icone, titulo, descricao' , 'A' );
if ($registro > 0) {
  foreach ($registro as $listaregistro) {
    
    $icone = $listaregistro->icone;
    $titulo = $listaregistro->titulo;
    $descricao = $listaregistro->descricao;




  }
} else {
  echo 'nenhum registro encontrado';
}
?>


<section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3><?php echo $titulo ?></h3>
              <p><?php echo $descricao?>
              A equipe simpática e atenciosa da Tory's Pizzaria está sempre pronta para atender a todas as suas necessidades, proporcionando um serviço excepcional e garantindo que você se sinta valorizado e bem cuidado durante toda a sua visita
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">inicio <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>sobre nos</h4>
                  <p>Nossa equipe apaixonada de chefs talentosos traz uma fusão de criatividade para cada prato que é servido. </p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>riqueza do restaurante</h4>
                  <p>não se limita apenas ao seu valor monetário, mas sim à sua capacidade de oferecer uma experiência gastronômica excepcional. </p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>dificuldades e desafios</h4>
                  <p>Custos operacionais elevados, Turnover de funcionários, Expectativas dos clientes, Avaliações e críticas.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section>