<?php
/*
  Full-Width Row template
*/

  $row = get_row_index();
?>

<div class="row gc-row-<?php echo $row; ?> gc-theme-<?php the_sub_field( 'theme' ); echo gc_set_row_margins(); ?>">
  <div class="col-12 d-flex flex-column <?php echo gc_set_row_alignment(); ?>">
    <?php if ( get_sub_field( 'row_title' ) && get_sub_field( 'show_title' ) ) : ?><h3 class="mb-5"><?php the_sub_field( 'row_title' ); ?></h3><?php endif; ?>
    <div>
      <?php the_sub_field( 'row_content' ); ?>
    </div>
    <?php
      if ( have_rows( 'col_images' ) ) : while ( have_rows( 'col_images' ) ) : the_row();
        $image = get_sub_field( 'col_image' );
        $imgNo = get_row_index();
    ?>

      <img class="img-fluid gc-row-<?php echo $row . '-img-' . $imgNo; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <?php endwhile; endif; ?>

  </div>
</div>
