<?php /*Template Name: Disclaimer */ get_header(); ?>
        <section class="sub-banner bg-property">

            <div class="container">
                <div class="flex-area  align-item-center">
                    <div class="hero-banner-heading">
                        <?php if ( $banner_title = get_field( 'banner_title' ) ) : ?>
                        <h1 class="itc400"><?php echo  $banner_title ?></h1>
						<?php endif; ?>

                    </div>

                </div>
            </div>

        </section>
        <section class="custom-content">
            <div class="container">
				
				<?php if ( have_rows( 'content_repeater' ) ) : ?>
				<?php while ( have_rows( 'content_repeater' ) ) :
				the_row(); ?>
				<?php if ( $contnt_heading = get_sub_field( 'contnt_heading' ) ) : ?>
                <h3 class="itc400"><?php echo $contnt_heading ?></h3>
				<?php endif; ?>
				
				<?php if ( have_rows( 'contnt_sub_para_repeater' ) ) : ?>
				<?php while ( have_rows( 'contnt_sub_para_repeater' ) ) :
				the_row(); ?>
				<?php if ( $contnt_sub_para = get_sub_field( 'contnt_sub_para' ) ) : ?>
                <p><?php echo $contnt_sub_para ?></p>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
            
				<?php endwhile; ?>
				<?php endif; ?>
                
            </div>
        </section>
       

        <?php get_footer(); ?>