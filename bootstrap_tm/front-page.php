<?php get_header(); ?>
  <main id="content-wrapper" class="front-page">
    <div id="carousel-example-generic" class="front-page-slider carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li 
              data-target="#carousel-example-generic" 
              data-slide-to="0" 
              class="active">
            </li>
            <li 
              data-target="#carousel-example-generic" 
              data-slide-to="1" >
            </li>
            <li 
              data-target="#carousel-example-generic" 
              data-slide-to="2" >
            </li>
          
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        
            <div class="item active" >
              <div style="background: url('<?php bloginfo('template_directory');?>/images/slider-images/stock-photo-new-york-city-september-view-from-federal-hall-of-pedestrians-walking-along-broad-and-221607850.jpg') 0% 0% no-repeat; 
                        background-size: cover;
                        position: absolute; top: 0; left: 0; width: 100%; height: 100%"></div>
              <div class="carousel-caption">
                <span>Superior Management Consulting</span>
              </div>
            </div>
            <div class="item">
              <div style="background: url('<?php bloginfo('template_directory');?>/images/slider-images/stock-photo-midsection-of-business-people-shaking-hands-in-conference-room-143069182.jpg') 0% 0% no-repeat; 
                        background-size: cover;
                        position: absolute; top: 0; left: 0; width: 100%; height: 100%"></div>
              <div class="carousel-caption"><span>Complex Macro Economic Studies</span></div>
            </div>
            <div class="item">
              <div style="background: url('<?php bloginfo('template_directory');?>/images/slider-images/stock-photo-drilling-rig-operating-in-north-american-wilderness-121360270.jpg') 0% 0% no-repeat; 
                        background-size: cover;
                        position: absolute; top: 0; left: 0; width: 100%; height: 100%"></div>
              <div class="carousel-caption"><span>400+ Global Projects</span></div>
            </div>
           
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  

    <div class="container fp-content-area">
      <!-- Example row of columns -->
        <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
           <?php endwhile; endif; ?>
          </div>
        </div>

        <!--<div class="row">
          <div class="col-sm-4">
           <?php if ( dynamic_sidebar('front-left') ); ?>
          </div>
          <div class="col-sm-4">
           <?php if ( dynamic_sidebar('front-center') ); ?>
          </div>
          <div class="col-sm-4">
           <?php if ( dynamic_sidebar('front-right') ); ?>
          </div>
        </div>-->
    </div>

<!-- </main> is closed in footer.php -->
<?php get_footer(); ?>
    