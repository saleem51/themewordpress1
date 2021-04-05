<?php require 'header.php' ?>

<!--<div class="container">
    <div class="jumbotron bg-info">
        <h1 class="firstTitle">Bonjour Salim</h1>
    </div>
</div>-->

<section>  
    <?php if(have_posts()): ?>
        <div class="container">
            <?php  while (have_posts()): ?>
            <?php the_post( ) ;?>
                <div class="row m-dw-30">
                    <div class="col-xs-2">
                        <?php the_post_thumbnail('thumbnail') ; ?>
                    </div>
                    <div class="col-xs-10">
                        <h1><?php the_title() ;?></h1>
                        <p><?php the_excerpt() ; ?></p>
                    </div>
                </div>
            <?php  endwhile ; ?>
        </div>
    <?php  else : echo "Il n'y aucun articles" ;?>
    <?php endif; ?>
</section>

<?php  require 'footer.php' ;?>
<?php wp_footer(); ?>
