<?php 
/*
* Template Name: Инструкции
*/
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container instruction-single">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
			?>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title section-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
				<?php $arr_instr = carbon_get_the_post_meta('complex_instruction');
				if($arr_instr):
				?>
					<div class="instruction-wrapper">
						<?php foreach($arr_instr as $instr):?>
							<div class="instruction-item">
								<div class="instruction-item__title"><span>+</span><?php echo $instr['instruction_title']?></div>
								<div class="instruction-item__text" style="display: none;"><?php echo $instr['instruction_text']?></div>
							</div>
						<?php endforeach;?>
					</div>
				<?php endif;?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();