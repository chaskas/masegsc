<?php use_javascript('http://maps.google.com/maps/api/js?sensor=true') ?>

<div class="container_gamma breadcrumbs">
  <p><span>&raquo;</span><a href="<?php echo url_for('@homepage'); ?>">Home</a><span>&raquo;</span><a href="<?php echo url_for('static/dondeestamos'); ?>">Donde Estamos</a></p>
</div>

<div class="container_alpha slogan">
  <h1><strong>Donde Estamos</strong></h1>
</div>



<div class="container_omega">
  

  <div class="gs_6">
    <h3>Como llegar</h3>
    <p>
      Bulnes 136, Of. 309
      <br/>
      Tercer Piso
      <br/>
      Edificio C&aacute;mara de Comercio
    </p>
    <p>
      Estamos ubicados en el centro de Talcahuano, entre avenida Colon y Bulnes.
      <br/>
      A pasos de la locomoci&oacute;n colectiva y de muy f&aacute;cil acceso.
    </p>
  </div>
  
  <div class="gs_6 omega">
    <h3>Mapa</h3>
    <div class="add_border" style="width: 428px;">
      <div id="map_canvas" style="height:350px;">
        
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
</div>
