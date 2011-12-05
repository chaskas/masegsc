<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="container">
      <!-- Header -->
      <div id="header">
        <div id="logo">
          <a href="<?php echo url_for('@homepage'); ?>">
            <img src="./images/logo.png" alt="" />
            
          </a>
        </div>
        <div id="personal_data">
          <p>Fono <span>+56 41 242 70 72</span></p>
          <p>email: <span><a href="">contacto@masegsc.cl</a></span></p>
        </div>
      </div>
      <div id="menu" class="png_bg">
        <ul>
          <li><a href="<?php echo url_for('@homepage'); ?>">Home</a></li>
          <li><a href="<?php echo url_for('static/servicios'); ?>">Servicios</a></li>
          <li><a href="<?php echo url_for('static/corretaje'); ?>">Corretaje de Propiedades</a></li>
          <li><a href="<?php echo url_for('static/quienessomos'); ?>">Quienes Somos</a></li>
          <li><a href="<?php echo url_for('static/dondeestamos'); ?>">Donde Estamos</a></li>
          <li><a href="<?php echo url_for('static/contacto'); ?>">Contacto</a></li>
        </ul>
      </div>
      <!-- /Header -->

      <!-- Main content alpha -->
      <div class="main png_bg">
        <div class="inner_main">
          <!-- True containers (keep the content inside containers!) -->
          <?php echo $sf_content ?>
        </div>
        <!-- /True containers (keep the content inside containers!) -->
      </div>
      <div class="endmain png_bg"></div>
      <!-- /Main content alpha -->

      <!-- Footer styling transition (the stripe). You can remove it if you don't like it -->
      <div class="stripe png_bg"></div>
      <!-- /Footer styling transition -->

      <!-- Footer -->
      <div id="footer_top" class="png_bg"></div>
      <div id="footer" class="png_bg">

        <div class="gs_2 widget">
          <h4 class="widgettitle">P&aacute;ginas</h4>
          <ul>
            <li><a class="footer-link" href="<?php echo url_for('@homepage'); ?>">Home</a></li>
            <li><a class="footer-link" href="<?php echo url_for('static/servicios'); ?>">Servicios</a></li>
            <li><a class="footer-link" href="<?php echo url_for('static/corretaje'); ?>">Corretaje</a></li>
            <li><a class="footer-link" href="<?php echo url_for('static/quienessomos'); ?>">Quienes somos</a></li>
            <li><a class="footer-link" href="<?php echo url_for('static/dondeestamos'); ?>">Donde estamos</a></li>
            <li><a class="footer-link" href="<?php echo url_for('static/contacto'); ?>">Contacto</a></li>
          </ul>
        </div>
        <div class="gs_4 widget">
          <?php //echo image_tag('assets/ds.jpg','class=border_magic alignleft no_bottom_margin'); ?>
          <h4 class="widgettitle">Cont&aacute;ctenos</h4>
          <p>¿Tiene alguna pregunta?</p>
          <p><strong>Fono:</strong> +56 41 242 70 72 <br />
            <strong>email:</strong> <a href="mailto:contacto@masegsc.cl">contacto@masegsc.cl</a><br />
            <strong>Formulario de:</strong> <a href="<?php echo url_for('static/contacto'); ?>">Contacto</a></p>
        </div>
<!--        <div class="gs_4 widget">
          <h4 class="widgettitle">Newsletter</h4>
          <p>Subscribe to our newsletter to always be up to date! See more, learn more.</p>
          <form action="./mail.php.html" id="subscribe-form" method="post" >
          <input type="text" name="email" id="email" value="Type in your email" title="Type in your email" />
          <input name="submitted" id="submit" value="Submit" class="superbutton" type="submit" />
          </form>
          <ul class="icons">
            <li><a href="http://www.facebook.com/pages/designsentry/110639872348300"><?php echo image_tag('icons/icons/facebook_16.png'); ?></a></li>
            <li><a href="http://twitter.com/designsentry"><?php echo image_tag('icons/icons/twitter_16.png'); ?></a></li>
            <li><a href="#"><?php echo image_tag('icons/icons/myspace_16.png'); ?></a></li>
            <li><a href="#"><?php echo image_tag('icons/icons/picasa_16.png'); ?></a></li>
            <li><a href="#"><?php echo image_tag('icons/icons/youtube_16.png'); ?></a></li>
            <li><a href="#"><?php echo image_tag('icons/icons/vimeo_16.png'); ?></a></li>
          </ul>
        </div>-->
<!--        <div class="gs_2 omega widget">
          <h4 class="widgettitle">Our Affiliates</h4>
          <p>Lorem Ipsum is simply dummy text. </p>
          <ul>
            <li><a href="http://www.designsentry.com/">DesignSentry</a></li>
            <li><a href="http://www.themeforest.net/user/EvGreen/portfolio?ref=evgreen">Themeforest</a></li>
            <li><a href="#">FreshBananas</a></li>
          </ul>

        </div>-->
      </div>
      <div id="footer_bottom" class="png_bg"><p>Copyrights &copy; <a href="http://www.webdevel.cl/" target="_blank">WebDevel.cl</a> 2011. All rights reserved.</p></div>


    </div>
  </body>
</html>
