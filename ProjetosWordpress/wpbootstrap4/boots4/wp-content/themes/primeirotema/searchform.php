<form role="search" method="GET" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" name="s" value="<?php the_search_query(); ?>">

    <input type="submit" value="Buscar">
</form>