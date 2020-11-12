<?php get_header() ?>

<div id="ajaxArea" class="page-videos">
    <div class="pageContentArea">
      <!--=================================
      bread crums
      =================================-->
        <section class="breadcrumb">
              
             <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <h1>Videos</h1>
                      </div>
                      
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <ul>
                              <li><a href="<?php echo site_url() ?>"><?php _e('Inicio', 'ariel') ?></a></li>
                              <li><a href="#">videos</a></li>
                          </ul>
                      </div>
                  </div>
             </div>
        </section>
      <div class="clearfix"></div>
      
      
      <!--=================================
      videos
      =================================-->
      
      <section id="videos">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="latest-videos">
                        <div class="video-feed">
                            <iframe src="https://www.youtube.com/embed/SJKrNomuNfc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div><!--\\video-feed-->
                        
                        <div class="video-feed">
                            <iframe src="https://www.youtube.com/embed/cmmOjsHA6ls" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div><!--\\video-feed-->
                    </div>
                  </div><!--latest videos-->
                  
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="latest-videos">
                            <div class="video-feed">
                                <iframe src="https://www.youtube.com/embed/-USuItoM8K4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div><!--\\video-feed-->
                            
                            <div class="video-feed">
                                <iframe src="https://www.youtube.com/embed/5XxGop2hAHs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div><!--\\video-feed-->
                        </div>
                    </div><!--latest videos-->
              </div>
          </div>    
      </section>
	</div><!--pageContent-->
</div><!--ajaxwrap--> 

<?php get_footer() ?>