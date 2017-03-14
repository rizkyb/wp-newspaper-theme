
<link rel="stylesheet" id="theme-styles-css" href="http://thewedding.id/wp-content/themes/Newspaper-child/theme-styles.css" media="all" />

<div class="td-main-content-wrap">
    <div class="td-container">

        <!-- content -->
        <div class="td-pb-row">   
  
                        <div class="td-pb-span12 td-main-content">
						
                            <div class="td-ss-main-content">        
							
							<br/>
							<section id="wrapper">
								<section class="menu col-lg-12 noPad">
									<div class="wrapContainer col-lg-offset-1 col-lg-8 noPad">
										<ul class="menuInside">
											<li><a href="#"><img src="http://thewedding.id/img/gal_home.png" class="gal_homeicon">WEDDING NEEDS HOME</a></li>
											<li id="menuDropdown" class="menuDD" tabindex="1"><?php single_cat_title(); ?><img src="http://thewedding.id/img/dropdown_icon.png" class="dropdown_icon">
												<ul class="dropdown">
												<?php wp_list_categories( 'title_li=&child_of=116&hierarchical=1&order=ASC&orderby=name' ); ?>

												</ul>
											</li>		
										</ul>
										<div class="clearfix"></div>
									</div>
								</section>
							</section>
							 <script>
							function DropDown(el){
							  this.dd = el;
							  this.initEvents();
							}
							DropDown.prototype = {
							  initEvents: function(){
								var obj = this;
								obj.dd.on('click',function(e){
								  jQuery(this).toggleClass('active');
								  e.stopPropagation();
								});
							  }
							}
							jQuery(function(){
							  var dd = new DropDown(jQuery('#menuDropdown'));
							  jQuery(document).click(function(){
								jQuery('.menuDD').removeClass('active');
							  });
							});
							 </script>
							 
								<br/><br/>
								<?php
								if ( is_category('wedding-needs') ){
								   echo do_shortcode ('[ess_grid alias="wedding-needs"]');
								}
								elseif( is_category('decoration') ){
								 echo do_shortcode ('[ess_grid alias="decor-lighting"]');							
								}
								elseif( is_category('dessert-catering') ){
								 echo do_shortcode ('[ess_grid alias="dessert-catering"]');							
								}
								elseif( is_category('hiburan') ){
								 echo do_shortcode ('[ess_grid alias="entertaintment"]');							
								}
								elseif( is_category('wedding-bouquets') ){
								 echo do_shortcode ('[ess_grid alias="flower-bouquets"]');							
								}
								elseif( is_category('photography-video') ){
								 echo do_shortcode ('[ess_grid alias="photo-video"]');							
								}
								elseif( is_category('asesoris-hadiah') ){
								 echo do_shortcode ('[ess_grid alias="stationery-souvenir"]');							
								}
								elseif( is_category('venues') ){
								 echo do_shortcode ('[ess_grid alias="venues"]');							
								}
								elseif( is_category('wedding-cake') ){
								 echo do_shortcode ('[ess_grid alias="wedding-cakes"]');							
								}
								?>
                            </div>
                        </div>

        </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->