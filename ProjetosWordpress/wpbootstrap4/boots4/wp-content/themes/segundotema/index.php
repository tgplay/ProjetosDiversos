<?php get_header(); ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri().'/img/home-bg.jpg' ?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1><?php bloginfo('name'); ?></h1>
              <span class="subheading"><?php bloginfo('description'); ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
              <?php the_post(); ?>
              <?php get_template_part('template_parts/post'); ?>
            <?php endwhile; ?>
          <?php endif; ?>       
         
          <!-- Pager -->
          <div class="clearfix">            
            <div class="btn btn-primary float-right">
              <?php previous_posts_link('Página Anterior'); ?>
              <?php next_posts_link('Próxima pagina'); ?>            
            </div>            
          </div>
        </div>
      </div>
    </div>
    <hr>
    <?php get_footer(); ?>
