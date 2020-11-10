<?php get_header() ?>

<div id="ajaxArea">
    <div class="pageContentArea">
      <!--=================================
      bread crums
      =================================-->
        <section class="breadcrumb">
              
             <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <h1>Galería</h1>
                      </div>
                      
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <ul>
                              <li><a href="<?php echo site_url() ?>">Inicio</a></li>
                              <li><a href="#">Galería</a></li>
                          </ul>
                      </div>
                  </div>
             </div>
        </section>
      <div class="clearfix"></div>
      
      
      <!--=================================
      videos
      =================================-->
      
      <section id="gallery">
          <div class="container">
              <div class="row">
                <div class="container">
                    <div class=" photo-gallery">
                        <?php echo do_shortcode('[everest_gallery alias="Ariel"]')  ?>
                    </div>
                </div><!--//photo gallery-->
              </div><!--row-->
          </div><!--//container-->  
      </section>
	</div><!--pageContent-->
</div><!--ajaxwrap-->

<?php get_footer() ?>