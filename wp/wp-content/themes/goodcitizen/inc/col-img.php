<?php

  $row = get_row_index();

  if ( get_sub_field( 'row_layout' ) == 'full_width' ) :

      // Start image loop for column.
    if ( have_rows('col_images') ) : while ( have_rows('col_images') ) : the_row();

      $imgNo = get_row_index();
      $imgM = get_sub_field( 'img_m' );

      echo '
        .gc-row-' . $row . '-img-' . $imgNo . ' {';

        if ( get_sub_field( 'img_mt' ) ) {
          echo '
            margin-top: ' . get_sub_field( 'img_mt' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-top: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_mr' ) ) {
          echo '
            margin-right: ' . get_sub_field( 'img_mr' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-right: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_mb' ) ) {
          echo '
            margin-bottom: ' . get_sub_field( 'img_mb' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-bottom: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_ml' ) ) {
          echo '
            margin-left: ' . get_sub_field( 'img_ml' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-left: ' . $imgM . ';';
        }

      echo '
        }';

    endwhile; endif;

  endif;

  if ( get_sub_field( 'row_layout' ) == 'halves' || get_sub_field( 'row_layout' ) == '3_6_3' || get_sub_field( 'row_layout' ) == '4_col') :

    if ( have_rows( 'col_1_images' ) ) : while ( have_rows( 'col_1_images' ) ) : the_row();

      $imgNo = get_row_index();
      $imgM = get_sub_field( 'img_m' );

      echo '
        .gc-row-' . $row . '-col-1-img-' . $imgNo . ' {';

        if ( get_sub_field( 'img_mt' ) ) {
          echo '
            margin-top: ' . get_sub_field( 'img_mt' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-top: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_mr' ) ) {
          echo '
            margin-right: ' . get_sub_field( 'img_mr' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-right: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_mb' ) ) {
          echo '
            margin-bottom: ' . get_sub_field( 'img_mb' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-bottom: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_ml' ) ) {
          echo '
            margin-left: ' . get_sub_field( 'img_ml' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-left: ' . $imgM . ';';
        }

      echo '
        }';

    endwhile; endif;

  endif;

  if ( get_sub_field( 'row_layout' ) == 'halves' || get_sub_field( 'row_layout' ) == '3_6_3' || get_sub_field( 'row_layout' ) == '4_col') :

    if ( have_rows( 'col_2_images' ) ) : while ( have_rows( 'col_2_images' ) ) : the_row();

      $imgNo = get_row_index();
      $imgM = get_sub_field( 'img_m' );

      echo '
        .gc-row-' . $row . '-col-2-img-' . $imgNo . ' {';

        if ( get_sub_field( 'img_mt' ) ) {
          echo '
            margin-top: ' . get_sub_field( 'img_mt' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-top: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_mr' ) ) {
          echo '
            margin-right: ' . get_sub_field( 'img_mr' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-right: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_mb' ) ) {
          echo '
            margin-bottom: ' . get_sub_field( 'img_mb' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-bottom: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_ml' ) ) {
          echo '
            margin-left: ' . get_sub_field( 'img_ml' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-left: ' . $imgM . ';';
        }

      echo '
        }';

    endwhile; endif;

  endif;

  if ( get_sub_field( 'row_layout' ) == '3_6_3' || get_sub_field( 'row_layout' ) == '4_col') :

    if ( have_rows( 'col_3_images' ) ) : while ( have_rows( 'col_3_images' ) ) : the_row();

      $imgNo = get_row_index();
      $imgM = get_sub_field( 'img_m' );

      echo '
        .gc-row-' . $row . '-col-3-img-' . $imgNo . ' {';

        if ( get_sub_field( 'img_mt' ) ) {
          echo '
            margin-top: ' . get_sub_field( 'img_mt' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-top: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_mr' ) ) {
          echo '
            margin-right: ' . get_sub_field( 'img_mr' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-right: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_mb' ) ) {
          echo '
            margin-bottom: ' . get_sub_field( 'img_mb' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-bottom: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_ml' ) ) {
          echo '
            margin-left: ' . get_sub_field( 'img_ml' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-left: ' . $imgM . ';';
        }

      echo '
        }';

    endwhile; endif;

  endif;

  if ( get_sub_field( 'row_layout' ) == '4_col') :

    if ( have_rows( 'col_4_images' ) ) : while ( have_rows( 'col_4_images' ) ) : the_row();

      $imgNo = get_row_index();
      $imgM = get_sub_field( 'img_m' );

      echo '
        .gc-row-' . $row . '-col-4-img-' . $imgNo . ' {';

        if ( get_sub_field( 'img_mt' ) ) {
          echo '
            margin-top: ' . get_sub_field( 'img_mt' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-top: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_mr' ) ) {
          echo '
            margin-right: ' . get_sub_field( 'img_mr' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-right: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_mb' ) ) {
          echo '
            margin-bottom: ' . get_sub_field( 'img_mb' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-bottom: ' . $imgM . ';';
        }

        if ( get_sub_field( 'img_ml' ) ) {
          echo '
            margin-left: ' . get_sub_field( 'img_ml' ) . ';';
        } else if ( $imgM ) {
          echo '
            margin-left: ' . $imgM . ';';
        }

      echo '
        }';

    endwhile; endif;

  endif;

 ?>
