<?php get_header(); ?> 

<?php if(have_posts()): ?>
    
        <?php the_post(); ?>
        <!-- Page Header -->
        <header class="masthead" style="background-image: url('<?php if(has_post_thumbnail()){
            echo get_the_post_thumbnail_url($post->ID, 'full');
        } ?>')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="page-heading">
                            <h1><?php the_title(); ?></h1>
                            <?php if(function_exists('the_subtitle')): ?>
                            <h2 class="subheading"><?php the_subtitle(); ?></h2>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>

            <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </article>

            <hr>

    
<?php endif; ?> 
<?php get_footer(); ?>