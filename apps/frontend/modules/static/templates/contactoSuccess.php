<?php use_javascript('sendmail.js'); ?>
<div class="container_gamma breadcrumbs">
  <p><span>&raquo;</span><a href="<?php echo url_for('@homepage'); ?>">Home</a><span>&raquo;</span><a href="<?php echo url_for('static/contacto'); ?>">Contacto</a></p>
</div>
<div class="container_alpha slogan">
  <h1><strong>Contacto</strong></h1>
</div>
<div class="container_omega">
  
  <div class="gs_3"><h3>P&oacute;ngase en Contacto</h3><p><strong>Fono:</strong> +56 41 242 70 72</p>
    <p>
      <strong>email:</strong> <a href="">contacto@masegsc.cl</a>
      <br />
      <strong>gerencia:</strong> <a href="">gerencia@masegsc.cl</a>
      <br />
      <strong>finanzas:</strong> <a href="">finanzas@masegsc.cl</a>
    </p>
    <p>
      <strong>Direcci&oacute;n:</strong>
      <br />
      Bulnes 136 Of. 309
      <br />
      Tercer Piso, edif. Camara de Comercio
      <br/>
      Talcahuano
    </p>
  </div>
  <div class="gs_9 omega">
    
    <h3>Formulario de Contacto</h3>
    <!-- Contact form starts -->
    <form method="post" action="<?php echo url_for('static/sendmail') ?>" id="form-send">
    <div id="sendmail"></div>
    <div id="form_container">
      <div id="form_main">
<!--        <input type="text" name="name" id="name" value="Nombre" title="Nombre" />-->
        <?php echo $form['name']->render(array('value'=>'Nombre','title'=>'Nombre')); ?>
        
<!--        <input type="text" name="email" id="email" value="Email" title="Email" />-->
        <?php echo $form['email']->render(array('value'=>'Email','title'=>'Email')); ?>
        
<!--        <textarea name="comments" id="comments" rows="4" cols="4" value="Texto" placeholder="Texto"></textarea>-->
        <?php echo $form['message']->render(array('value'=>'Texto','title'=>'Texto','placeholder'=>'Texto','rows'=>4,'cols'=>4)); ?>
        
        <p><input type="submit" name="submit" id="form-submit" value="Enviar!" class="superbutton" /></p>
        <ul id="form_response"><li></li></ul>
      </div>
    </div>
    </form>
    <!-- Contact form Ends -->
  </div>
  <div class="clearfix"></div>
  <div class="hr"></div>
</div>