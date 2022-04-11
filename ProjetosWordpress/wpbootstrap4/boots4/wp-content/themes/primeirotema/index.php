<?php get_header(); ?>        

<section>

    <div class="container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): ?> 
                <?php the_post(); ?>
                <article>
                    <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>" class="post_thumbnail">
                            <?php the_post_thumbnail('thumbnail', array(
                                'class' => 'post_miniatura'
                            )); ?>
                        </a>
                    <?php endif; ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <p>
                        <?php echo  get_the_date(); ?> |
                        <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?></wphp>"><?php the_author(); ?></a> |
                        <?php the_category(', '); ?>
                    </p>

                    <p>
                        <?php the_excerpt(); ?>
                    </p>

                    <p>
                        <?php comments_number('0 comentários', '1 comentário', '% comentários'); ?> |
                        <a href="<?php the_permalink(); ?>">Leia Mais</a>
                    </p>
                </article>
            <?php endwhile; ?>             
        <?php endif; ?>
        <div class="paginacao">
            <div class="pagina_anterior"><?php previous_posts_link('Posts Anteriores'); ?></div>
            <div class="proxima_pagina"><?php next_posts_link('Próxima pagina'); ?></div>
        </div>
    </div>
    
    <?php get_sidebar(); ?>
    
    <div class="clear:both"></div>
</section>

<?php get_footer(); ?>