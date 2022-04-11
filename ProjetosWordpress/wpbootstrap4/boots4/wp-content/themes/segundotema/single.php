<?php get_header(); ?> 

<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>
        <!-- Page Header -->
        <header class="masthead" style="background-image: url('<?php if(has_post_thumbnail()){
            echo get_the_post_thumbnail_url($post->ID, 'full');
        } ?>')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1><?php the_title(); ?></h1>
                            <?php if(function_exists('the_subtitle')): ?>
                            <h2 class="subheading"><?php the_subtitle(); ?></h2>
                            <?php endif; ?>
                            <span class="meta">Postado por <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>"><?php the_author(); ?>. Start Bootstrap </a>
                                em <?php echo get_the_date(); ?></span>
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

    <?php endwhile; ?>    
<?php endif; ?> 
<?php get_footer(); ?>